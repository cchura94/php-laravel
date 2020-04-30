<?php
$nombre = "Cristian";
echo $nombre;
echo "<br>";
$nombres = ["Juan", "Pedro", "Maria", "Simon"];
print_r($nombres) ;
echo $nombres[2];
echo "<br>";

$persona = ["nombre" => "Juan", "apellido" => "Cruz", "fechaN" => "12-12-12"];
print_r($persona);
echo "<br>";

$backend = array("PHP", "JAVA", "PYTHON", "RUBY", "GO", "NODE");
print_r($backend);
echo "<br>";

$frontend = array('nombre' => 'CSS', 'framework' => 'bootstrap', 'preprocesador' => 'sass');
print_r($frontend);

//While
$i = 0;
while ($i <= count($nombres)-1) {
    echo $nombres[$i];
    echo "<br>";    
    $i++;
}

echo "<br>";

foreach ($backend as $item) {
    echo $item;
    echo "<br>";
}
