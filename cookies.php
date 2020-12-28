<?php
$name = 'admin';
$value = 'rabbit';
$expire = time() + (60*160);
setcookie($name, $value, $expire);
?>
<html>
<head>
   <title></title>
</head>
<body>
<?php
   echo "<pre>";
   print_r($_COOKIE);
   echo "</pre>";
   $username = $_COOKIE['admin'];
   echo $username;
   if(isset($username)) {
      echo "Cookie exists";
   } else {
      echo "Cookie not found";
   }
?>
</body>
</html>
