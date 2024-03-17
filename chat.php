<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}

?>

<?php include_once "header.php"; ?>

<body>

  <!-- login form -->
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
        include_once "php/config.php";
        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
        if (mysqli_num_rows($sql) > 0) {
          $row = mysqli_fetch_assoc($sql);
        }
        ?>

        <div class="content">
          <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>

      </header>

      <div class="chat-box">

        <div class="chat outgoing">
          <div class="details">
            <p>
              aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            </p>
            <small>8:32pm✔️</small>
          </div>
        </div>

        <div class="chat incoming">
          <img src="passport - Copy.jpg" alt="">
          <div class="details">
            <p>ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooIIoooIoIo</p>
            <small>8:33pm✔️</small>
          </div>
        </div>

        <div class="chat outgoing">
          <div class="details">
            <p>GuyYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY</p>
            <small>8:33pm✔️</small>
          </div>
        </div>
        <div class="chat incoming">
          <img src="passport - Copy.jpg" alt="">
          <div class="details">
            <p>looommmmmaaaakooook</p>
            <small>8:35pm✔️</small>
          </div>
        </div>

        <div class="chat outgoing">
          <div class="details">
            <p>whyyyyyyssoooo mmmmuuuccchhh pppaaiiiinnn</p>
            <small>8:35pm✔️</small>
          </div>
        </div>
        <div class="chat incoming">
          <img src="passport - Copy.jpg" alt="">
          <div class="details">
            <p>meeeeeoooooooWWWWWWWWWWWWWWWWWWWWWW!!!!!!!!</p>
            <small>8:35pm✔️</small>
          </div>
        </div>

        <div class="chat outgoing">
          <div class="details">
            <p>My throat dey pain me guyyyyy 🥵🥵😰😰</p>
            <small>8:36pm✔️</small>
          </div>
        </div>
        <div class="chat incoming">
          <img src="passport - Copy.jpg" alt="">
          <div class="details">
            <p>Its okay stop bro 🤣🤣🤣</p>
            <small>8:36pm✔️</small>
          </div>
        </div>
        <div class="chat incoming">
          <img src="passport - Copy.jpg" alt="">
          <div class="details">
            <p>I am dead serious guy😡😡</p>
            <small>8:37pm✔️</small>
          </div>
        </div>

        <div class="chat outgoing">
          <div class="details">
            <p>😲😲</p>
            <small>8:38pm✔️</small>
          </div>
        </div>


        <div class="chat outgoing">
          <div class="details">
            <p>Coool off bro.....</p>
            <small>8:38pm✔️</small>
          </div>
        </div>


        <div class="chat outgoing">
          <div class="details">
            <p>Chill!! why you all mad? I didn't say anything again</p>
            <small>8:38pm✔️</small>
          </div>
        </div>
        <div class="chat incoming">
          <img src="passport - Copy.jpg" alt="">
          <div class="details">
            <p>😒 i know you bro....</p>
            <small>8:52pm✔️</small>
          </div>
        </div>
        <h1>Today</h1>
        <div class="chat incoming">
          <img src="passport - Copy.jpg" alt="">
          <div class="details">
            <p>....</p>
            <small>9:11am✔️</small>
          </div>
        </div>
        <div class="chat incoming">
          <img src="passport - Copy.jpg" alt="">
          <div class="details">
            <p>😒 hello?? are you there?</p>
            <small>9:11am✔️</small>
          </div>
        </div>


      </div>

      <form action="#" class="typing-area" autocomplete="off">
        <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?> "hidden>
        <input type="text" name="incoming_id" value="<?php echo  $user_id; ?> " hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here...">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>


    </section>
  </div>









  <script src="javascript/chat.js"></script>
  <script src="https://kit.fontawesome.com/f3b1b95936.js" crossorigin="anonymous"></script>
</body>

</html>