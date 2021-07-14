<?php
$name = $_GET['name'];
$age = $_GET['age'];

if ( $age < 20 ) {
  echo "denined!";
  exit;
}
?>

<meta charset="UTF-8">
HI I'm <?=$name?>, <?=$age?> years old.