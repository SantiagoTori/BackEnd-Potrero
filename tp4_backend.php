<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h3>Ejercicio 1</h3>
<?php
for ($i=1; $i<=100 ; $i++) {
  print "<p>$i</p>\n";
}
 ?>
<hr>

<h3>Ejercicio 2</h3>
<?php
for ($i=100; $i>=1 ; $i--) {
  print "<p>$i</p>\n";
}
 ?>

<hr>
<h3>Ejercicio 3</h3>
<?php
for ($i=0; $i<=100 ; $i=$i+2) {
  print "<p>$i</p>\n";
}
 ?>

<hr>
<h3>Ejercicio 4</h3>
<?php
for ($i=1; $i<=100 ; $i=$i+2) {
  print "<p>$i</p>\n";
}
 ?>

<hr>
<h3>Ejercicio 5</h3>
<?php
$i=1;
$suma=1;
do {
  $total= $i+$suma;
  print "<p>$i+$suma=$total</p>\n";
  $i++;
} while ($i < 20);
 ?>

<hr>
<h3>Ejercicio 6</h3>
<?php
$i=0;
$suma=2;
do {
  $total= $i+$suma;
  print "<p>$i+$suma=$total</p>\n";
  $i=$i+2;
} while ($i <= 20);
 ?>

 <hr>
  </body>
</html>
