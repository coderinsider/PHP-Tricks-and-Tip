<?php
session_start();
if(!isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit;
}
// if(!isset($_SESSION['username'])) {
//    header("Location: login.php");
// }
$admin = $_COOKIE['username'];
echo "Welcome to " . ucfirst($admin);
?>
<html>
<head>
   <title></title>
   <style>
   .logout {
      position: relative;
   }
   .logout a {
      position: absolute;
      right: 0;

   }
   </style>
</head>
<body>
   <section id="main">
      <div class="logout">
         <a href="logout.php">LogOut</a>
      </div>
   </section>
    <section>
      <h1>welcome to dashboard panel. Check your php info</h1>
      <?php phpinfo(); ?>
    </section>
</body>
</html>
<?php

// function session_logout() {
//    session_start();
//    unset($_SESSION["username"]);
//    header("Location: login.php");
// }
?>
