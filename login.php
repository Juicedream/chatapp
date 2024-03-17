<?php include_once "header.php"; ?>

<body>

  <!-- login form -->
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" autocomplete="off">
        <div class="error-txt"></div>
        <div class="name-details">

          <!-- Email -->
          <div class="field input">
            <label for="email">Email Address</label>
            <input type="text" name="email" id="email" placeholder="Enter your email address">
          </div>
          <!-- password -->
          <div class="field input">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <i class="fas fa-eye"></i>
          </div>

          <!-- signup button -->
          <div class="field button">
            <input type="submit" value="Continue to Chat">
          </div>
          <!-- link -->
          <div class="link">Not signed up yet? <a href="index.php">Sign up now</a></div>
        </div>
      </form>
    </section>
  </div>





 



  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
  <script src="https://kit.fontawesome.com/f3b1b95936.js" crossorigin="anonymous"></script>
</body>

</html>