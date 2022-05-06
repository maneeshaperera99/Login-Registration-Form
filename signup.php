<?php

include_once 'header.php';

?>

<section class="d-flex justify-content-center">
    <div class="sinup-form-form">
    <h2 class="d-flex justify-content-center">Sign Up</h2>
    <form action="signup.inc.php" method="POST">
        <div><input type="text" name="name" placeholder="Full name..."></div>
        <div><input type="text" name="email" placeholder="Email..."></div>
        <div><input type="text" name="uid" placeholder="Username..."></div>
        <div><input type="password" name="pwd" placeholder="Password..."></div>
        <div><input type="password" name="pwdrepeat" placeholder="Repeat Password..."></div>
        <div><button type="submit" name="submit">Sign Up</button>
        </div>
    </form>
    </div>
</section>