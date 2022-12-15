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
$suma=0;
for ($i=1; $i <= 20 ; $i++) {
  $suma += $i;
}
print "<p>La suma de los números del 1 al 20 es $suma.</p>\n";
 ?>

<hr>
<h3>Ejercicio 6</h3>
<?php
$suma=0;
for ($i=1; $i <= 20; $i++) {
  while ($i%2==0) {
    $suma += $i;
    $i++;
  }
}
print "<p>La suma de los números pares del 1 al 20 es $suma.</p>\n";
 ?>

 <hr>
  </body>
</html>
