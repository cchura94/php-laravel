<?php
$x = 5;

echo $x;
echo "<br>";

$x += 7;

echo $x; // 12
echo "<br>";

$x -= 7;

echo $x; // 5
echo "<br>";

$x *= 7;

echo $x; // 35
echo "<br>";

$x /= 7;

echo $x; // 5
echo "<br>";


echo "<h2>Operadores de Comparación</h2>";

echo 3 == 3; // 1
echo 3 === 3; // 1
echo 3 === "3"; // 
echo "<br>";

echo 4 > 2; // 1
echo "<br>";
echo 4 < 2; // 
echo "<br>";
echo 4 >= 4; // 1
echo "<br>";
echo 4 >= 3; // 1
echo "<br>";

echo "Operadores de Incremento - Decremento";

$i = 4;
echo $i;
echo "<br>";
$i++;
echo $i; // 5
echo "<br>";

$i++;
$i++;
echo $i; // 7
echo "<br>";

$i--;
echo $i; // 6
echo "<br>";

$i += 2;

echo "Operadores Logicos";

$uno = 1;
$dos = 2;

echo ($uno == 1 && $dos == 2); // 1
echo "<br>";
echo ($uno == 1 && $dos == 3); // 
echo "<br>";

echo ($uno == 1 || $dos == 2); // 1
echo "<br>";
echo ($uno == 1 || $dos == 3); // 1 
echo "<br>";
echo ($uno == 2 || $dos == 2); // 1
echo "<br>";
echo ($uno == 2 || $dos == 1); // 
echo "<br>";

echo $uno != 2; // 1
echo "<br>";
echo $uno != 1; // 



?>
