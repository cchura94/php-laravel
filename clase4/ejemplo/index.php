<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi página</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <h1>Lista de Productos</h1>

    <?php
        for ($i=0; $i < 1000; $i++) { 
    ?>

    <div class="caja">
        <h2>Producto <?php echo $i; ?></h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>

    <?php 
    }
    ?>

    
</body>
</html>