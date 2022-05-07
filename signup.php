<?php

include_once 'header.php';

?>

<section class="d-flex justify-content-center">
    <div class="signup-form-form">
    <h2 class="d-flex justify-content-center">Sign Up</h2>
    <form action="includes/signup.inc.php" method="POST">
        <div><input type="text" name="name" placeholder="Full name..."></div>
        <div><input type="text" name="email" placeholder="Email..."></div>
        <div><input type="text" name="uid" placeholder="Username..."></div>
        <div><input type="password" name="pwd" placeholder="Password..."></div>
        <div><input type="password" name="pwdrepeat" placeholder="Repeat Password..."></div>
        <div><button type="submit" name="submit">Sign Up</button>
        </div>
    </form>
    </div>
    <?php
  if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong, try again!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>you have signed up!</p>";
      }
    }
?>
</section>

