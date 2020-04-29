<?php

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fechanac'];

echo "<h2>Nombre: $nombres </h2>";
echo "<h2>Apellidos:" . $apellidos ."</h2>";
echo "<h2>Fecha de Nacimiento: $fecha </h2>";

if($nombres == "Cristian"){
    echo "Bienvenido a la Página";
}else{
    echo "Usted no esta autorizado para acceder a la pagina";
    //header
}

?>