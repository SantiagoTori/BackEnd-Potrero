<?php
$usuario= $_POST ["username"];
$contrasenia= $_POST ["password"];

$checkuser= "admin";
$checkpass= "1234";
 ?>

<?php
if ($usuario==$checkuser && $contrasenia==$checkpass) {
  header ("location:https://www.youtube.com/");
}
else {
  header ("location:error.html");
}
 ?>
