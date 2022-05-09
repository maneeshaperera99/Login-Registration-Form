<?php

include_once 'header.php';

?>

<section class="d-flex justify-content-center">
    <div class="signup-form-form">
      
    <h2 class="d-flex justify-content-center mb-4">Sign Up</h2>
    
    <form action="includes/signup.inc.php" method="POST">
    
        <div>
          <input type="text" id="form5Example1" class="form-control" name="name" placeholder="Full name...">
          <label class="form-label" for="form6Example1"></label>
        </div>
        <div>
          <input type="text"id="form5Example2" class="form-control" name="email" placeholder="Email...">
          <label class="form-label" for="form6Example2"></label>
        </div>
        <div>
          <input type="text" id="form5Example3" class="form-control" name="uid" placeholder="Username...">
          <label class="form-label" for="form6Example3"></label>
        </div>
        <div>
          <input type="password" id="form5Example4" class="form-control" name="pwd" placeholder="Password...">
          <label class="form-label" for="form6Example4"></label>
        </div>
        <div>
          <input type="password" id="form5Example5" class="form-control" name="pwdrepeat" placeholder="Repeat Password...">
          <label class="form-label" for="form6Example5"></label>
        </div>
        <div><button type="submit" class ="btn btn-primary btn-block " name="submit">Sign Up</button>
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

