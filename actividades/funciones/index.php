<?php
require_once "funcionesB.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?=sumar(5,2)?></h1>
<h1><?=saludar("Juan Carlos")?></h1>
<h1><?=swap($x,$y)?></h1>
<h1><?=sumaTotal(10,1,2,4)?></h1>
<h1><?=factorial(4)?></h1>
<h1><?= "la media es " . avg([4,2,4,5])?></h1>
<h1><?= contarPalabras("una palabras que dedicaria a cualquiera") ?></h1>




</body>
</html>