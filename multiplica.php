<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Realiza un programa que pida dos números y muestre el 
    resultado de su multiplicación.*/
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

     $resultado = $num1 * $num2;
    echo "El resultado de la multiplicacion es: " . $resultado;
    
    ?>
</body>
</html>