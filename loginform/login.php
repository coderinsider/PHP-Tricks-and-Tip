<?php
require_once("../rock/function.php");
session_start();
?>

<html>
<head>
   <title></title>
</head>
<body>
<div id="form" style="text-align:center;">
   <form action="" method="POST">
      <h1>Admin Login</h1>
      <label for="username">Username</label>
      <input type="text" name="username"><br/>
      <label for="password">Password</label>
      <input type="password" name="password"><br/>
      <input type="submit" value="submit" name="submit">
   </form>
</div>
<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === "POST") {
   $username = isset($_POST['username']) ? $_POST['username'] : "";
   $password = isset($_POST['password']) ? $_POST['password'] : "";
   $sql = "SELECT * FROM `admin` WHERE `username` = '$username'";
   $sqlquery = mysqli_query($conn, $sql);

   $row = mysqli_fetch_assoc($sqlquery) ;

   $secret_user = $row['username'];
   $secret_pass = $row['password'];

   if($username === $secret_user && $password === $secret_pass) {
      echo $secret_user . " and " . $secret_pass;
      //session_start();
      setcookie('username',$secret_user, time() + 60 * 1);
      //$_SESSION['username']  = $secret_user;
   header("Location: index.php");
   } else {
      
      //header("Location: login.php");
      echo "Sorry, Try again.";
   }
}
if(isset($_COOKIE['username'])) {
   header("Location: index.php");
   exit;
}
// if(isset($_SESSION['username'])) {
//    header("Location: index.php");
// }
?>

</body>
</html>
