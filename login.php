<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$bbdd=[
     "user" => "fabian",
      "pass" => "1234",
];
if ($bbdd ['user']==$user AND $bbdd['pass']==$pass) {
  print('ACEPTADO.');  // code...
} else {
  print('ERROR.');
}
 ?>
