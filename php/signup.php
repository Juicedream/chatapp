<?php

session_start();
include_once  "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
  //let's check user email is valid or not
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // if email is valid
    //let's check that email already exist in the database or not
    $sql = mysqli_query($conn, "SELECT email FROM users WHERE email ='{$email}'");
    if (mysqli_num_rows($sql) > 0) { //if  email already exist
      echo "$email - already exist!";
    } else {
      //lets check user upload file or not
      if (isset($_FILES['image'])) {
        //if file is uploaded
        $img_name = $_FILES['image']['name']; //getting user's uploaded img name
        $tmp_name = $_FILES['image']['tmp_name']; //this is a temp name to save the file in our folder

        //lets explode image and get the last ext like jpg or png
        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode); //here we get the extension of a users' uploaded image file

        $extensions = ['png', 'jpeg', 'jpg'];
        //these are some valid img ext and we've stored them up in an array
        if (in_array($img_ext, $extensions) === true) { //if user uploaded img ext is matched with the array extensions
          $time = time(); //returning the current time will help when uploading the user's file into our folder. it can be renamed with the current time


          //moving the uploaded file to our particular folder
          $new_img_name = $time . $img_name;
          $target_folder = "images/";

          if (move_uploaded_file($tmp_name, $target_folder . $new_img_name)) { //when user uploads an image it would bw moved to our folder(images)
            $status =  "Active now"; //once user signed up then his status will be active.
            $random_id = rand(time(), 1000000); //creating random id for user


            //inserting the users data to our table
            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                      VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

            if ($sql2) { //if these data are inserted
              $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
              if (mysqli_num_rows($sql3) > 0) {
                $row = mysqli_fetch_assoc($sql3);
                $_SESSION['unique_id'] = $row['unique_id']; //using this session we used user unique_id in other php file
                echo "success";
              }
            } else {
              echo "Something went wrong!";
            }
          }
        } else {
          echo "Please select an Image file with an extension (.png, .jpeg or .jpg) !";
        }
      } else {
        echo "Please select an Image file!";
      }
    }
  } else {
    echo "$email - This is not a valid email address!";
  }
} else {
  echo "All input field are required!";
}
