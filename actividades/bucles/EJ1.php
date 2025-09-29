<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Bucles</title>
</head>
<body>
    <?php
        echo"Bucle de multiplos de 5 hasta el 100";
        for ($i = 0; $i <= 100; $i++) {
            if ($i % 5 == 0) {
                echo $i . "<br>";
            }
        }
        echo "<br>";
        echo"Mostrar múltiplos de 5 (0–100) con un bucle while.";
        while ($i <= 100) {
            if ($i % 5 == 0) {
                echo $i . "<br>";
            }
            $i++;
        }
        echo "<br>";
        echo "Mostrar múltiplos de 5 (0–100) con un bucle do-while.";
        
        
    ?>
</body>
</html>