<?php

    echo "<h2>Estructura de Control (IF - Condicional)</h2>";
    
    if (2 == 3 and 3 == 4) {
        echo "Si Son Iguales";
    }else{
        echo "No son Iguales";
    }

    //IF TERNARIO
    $resultado = (2 == 3) ? "Es Verdad" : "Es Falso";

    echo $resultado;

    echo "<h2>Estructura de Control (FOR - Bucle-Ciclo)</h2>";

    for ($i=0; $i < 10; $i++) { 
        echo "Valor: $i  <br>";
    }
    echo "Fin de Bucle";
    




?>