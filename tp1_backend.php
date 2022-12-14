<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicios</title>
  </head>
  <body>

    <h1>Ejercicios </h1>

<h3>Ejercicio 1</h3>
<?php
echo "Hola mundo";
?>

<br>
<hr>

<h3>Ejercicio 2</h3>
<?php
$variable = "Hola mundo";
echo $variable;
?>

<br>
<hr>

<h3>Ejercicio 3</h3>

<?php
$factor1 = 5;
$factor2 = 2;
?>

<?php
echo "Factor 1= $factor1";
 ?>
<br>
<?php
echo "Factor 2= $factor2";
 ?>


<h4>Suma</h4>

<?php
echo $factor1 + $factor2;
 ?>

 <br>

<h4>Resta</h4>
 <?php
echo $factor1 - $factor2;
  ?>

<br>

<h4>División</h4>
<?php
echo $factor1 / $factor2;
 ?>

<br>

<h4>Multiplicación</h4>

<?php
echo $factor1 * $factor2;
 ?>

<br>

<h4>Resto</h4>

<?php
echo $factor1 % $factor2;
 ?>

<br>
<hr>

<h3>Ejercicio 4</h3>

<?php
$celsius= 20;
$fahrenheit= ($celsius*1.8)+32;
 ?>

 <?php
echo $fahrenheit;
  ?>

<br>
<hr>

<h3>Ejercicio 5</h3>

<?php
$base= 18;
$altura= 12;
$radio= 30;
$pi= 3.14;
$perimetro_rectangulo= ($base*2)+($altura*2);
$area_rectangulo= ($base*$altura);
$perimetro_circulo= (2*$pi*$radio);
$area_circulo= $pi*($radio**2)
 ?>

<?php
echo "Perimetro rectangulo: $perimetro_rectangulo";
 ?>
<br>

<?php
echo "Area rectangulo: $area_rectangulo";
 ?>
 <br>

 <?php
echo "Perimetro circulo: $perimetro_circulo";
  ?>
<br>

<?php
echo "Area circulo: $area_circulo";
 ?>

  </body>
</html>
