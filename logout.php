<?php
    session_start();
    $_SESSION['message'] = "You are now logged out";
    session_destroy();
    header("location:loginDb.php");//so that message can be displayed t redirects to the login page 

 ?>
