<?php

$con = new mysqli('host','user','pass','db');
if (mysqli_connect_errno()) {
  exit('Conectare nereusita: '. mysqli_connect_error());
}

$cr="CREATE TABLE `mesaje`(
`id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`nume` VARCHAR(40),
`facebook` VARCHAR(40),
`mesaj` TEXT(250) NOT NULL
) ";

if ($con->query($cr) === TRUE) {
  echo 'Scriptul a fost instalat cu succes';
}
else {
 echo 'Eroare: '. $con2->error;
 echo '<br>';
}

$cr="CREATE TABLE `mesajenotcheck`(
`id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`nume` VARCHAR(40),
`facebook` VARCHAR(40),
`mesaj` TEXT(250) NOT NULL
) ";

if ($con->query($cr) === TRUE) {
  echo 'Scriptul a fost instalat cu succes';
}
else {
 echo 'Eroare: '. $con2->error;
 echo '<br>';
}

$ver="CREATE TABLE `vizitatori` (
`id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`ip` CHAR(100),
`send` CHAR(1),
`lastget` CHAR(100),
`getm` CHAR(100)
) ";

if ($con->query($ver) === TRUE) {
  ECHO 'Table "vzitatori" succesfully created<br>';
}
else {
  echo 'Error: '.$con->error;
  echo '<br>';
}

$con->close();

?>