<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre1 = $_GET['nombre'];
    echo'Hola '.$nombre1;
    ?>

    <form action="Saluda2.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>