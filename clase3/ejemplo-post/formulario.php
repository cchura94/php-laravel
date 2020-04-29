<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Persona (POST)</title>
</head>
<body>

    <h1>Registro de Persona (POST)</h1>

    <form action="./proceso/datos.php" method="post">
        <label for="">Nombres</label>
        <input type="text" name="nombres" placeholder="Ingrese su nombre" required>
        <br>
        <label for="">Apellidos:</label>
        <input type="text" name="apellidos">
        <br>
        <label for="">Fecha Nacimiento:</label>
        <input type="date" name="fechanac">
        <br>
        <input type="submit" value="registrar Persona">

    </form>
    
</body>
</html>