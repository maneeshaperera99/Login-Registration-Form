<?php

include_once 'header.php';

?>

<section class="d-flex justify-content-center">
    <div class="sinup-form-form">
    <h2 class="d-flex justify-content-center">Log In</h2>
    <form action="includes/login.inc.php" method="POST">
        <div><input type="text" name="uid" placeholder="Username/Email..."></div>
        <div><input type="password" name="pwd" placeholder="Password..."></div>
        <div><button type="submit" name="submit">Log In</button>
        </div>
    </form>
    </div>
    <?php
  if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information!</p>";
      }
    }
?>
</section>