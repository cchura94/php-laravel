<?php

function saludo(){
    echo "Hola! ";
}

saludo();

//funcion con retorno

function saludo2(){
    return "Hola desde saludo 2";
}

echo saludo2();

//funcion con parametros

function saludo3($nombre, $edad){
    echo " Hola! $nombre, mi edad es: $edad";
}

saludo3("Cristian", 20);

function suma($n1, $n2)
{
    echo $n1 + $n2;
}

suma(4, 7);
echo "<br>";

suma(124, 457);

function datos($nombre = "Pedro", $edad = 12)
{
    echo $nombre;
}
echo "<br>";
datos("Juan");
datos();