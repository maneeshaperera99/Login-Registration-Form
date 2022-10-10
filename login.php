<?php

include_once 'header.php';

?>

<section class="d-flex justify-content-center">
    <div class="sinup-form-form">
    <h2 class="d-flex justify-content-center mb-4">Log In</h2>
    <form action="includes/login.inc.php" method="POST">
        <div>
          <input type="text" id="form5Example1" class="form-control" name="uid" placeholder="Username or Email">
          <label class="form-label" for="form6Example1"></label>
        </div>
        <div>
          <input type="password" id="form5Example2" class="form-control" name="pwd" placeholder="Password">
          <label class="form-label" for="form6Example2"></label>
        </div>
        <div><button type="submit" class ="btn btn-primary btn-block " name="submit">Log In</button>
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