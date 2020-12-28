<?php

session_start();
//session_destroy();
setcookie('username',$secret_user, time() - 3600);
//unset($_SESSION["username"]);
header("Location: login.php");
exit();
?>
