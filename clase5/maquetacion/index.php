<?php
include_once "./inc/cabecera.php";
require "./inc/menu.php";
include "./clases/Persona.php"
?>
<div class="fila">
    <div class="cuerpo">
        <h1>INICIO</h1>
        <?php
        
        
        $p1 = new Persona("Juan", "Quisbet", "12-11-2000", "9234234");
        print_r($p1);
        $p1->setNombre("Oscar");

        echo "<br>";
        print_r($p1);
        echo "<br>";
        echo $p1->getNombre();

        

        
        ?>

    </div>
    <div class="menu2">
        <ol>
            <li>PHP</li>
            <li>JAVA</li>
            <li>PYTHON</li>
            <li>GO</li>
            <li>JAVASCRIPT</li>
        </ol>
            
    </div>
</div>

<?php 
require "./inc/pie.php";
?>
