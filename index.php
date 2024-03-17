<?php include_once "header.php"; ?>

<body>

  <!-- login form -->
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" enctype="multipart/form-data">
        <div class="success-txt"></i></div>
        <div class="error-txt"></i></div>
        <div class="name-details">
          <!-- firstname -->
          <div class="field input">
            <label for="fname">First Name</label>
            <input type="text" id="fname" placeholder="Enter your First name" name="fname" required>
          </div>
          <!-- lastname -->
          <div class="field input">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" placeholder="Enter your last name" name="lname" required>
          </div>
          <!-- Email -->
          <div class="field input">
            <label for="email">Email Address</label>
            <input type="text" id="email" placeholder="Enter your email address" name="email" required>
          </div>
          <!-- password -->
          <div class="field input">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter new password" name="password" required>
            <i class="fas fa-eye"></i>
          </div>
          <!-- image -->
          <div class="field image">
            <label for="img">Select Image</label>
            <input type="file" id="img" name="image" required>
          </div>
          <!-- signup button -->
          <div class="field button">
            <input type="submit" value="Continue to Chat">
          </div>
          <!-- link -->
          <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </div>
      </form>
    </section>
  </div>









  <script src="./javascript/pass-show-hide.js"></script>
  <script src="./javascript/signup.js"></script>
  <script src="https://kit.fontawesome.com/f3b1b95936.js" crossorigin="anonymous"></script>
</body>

</html>