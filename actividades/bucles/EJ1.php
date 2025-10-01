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
        $i = 0;
        while ($i <= 100) {
            if ($i % 5 == 0) {
                echo $i . "<br>";
            }
            $i++;
        }
        echo "<br>";
        echo "Mostrar múltiplos de 5 (0–100) con un bucle do-while.";
        $i = 0;
        do {
            if ($i % 5 == 0) {
                echo $i . "<br>";
            }
            $i++;
        } while ($i <= 100);
        echo "<br>";
        echo "Números del 320 al 160 (de 20 en 20) con for.";
        for ($i = 0; $i <= 320; $i++) {
            if ($i % 20 == 0) {
                echo $i . "<br>";
            }
        }
        echo "<br>";
        echo "Números del 320 al 160 (de 20 en 20) con while.";
        $i = 0;
        while ($i <= 320) {
            if ($i % 20 == 0) {
                echo $i . "<br>";
            }
            $i++;
        }
        echo "<br>";
        echo "Números del 320 al 160 (de 20 en 20) con do-while.";
        $i = 0;
        do {    
            if ($i % 20 == 0) {
                echo $i . "<br>";
            }
            $i++;
        } while ($i <= 320);

        echo "<br>";
        echo "Control de acceso a caja fuerte con 4 intentos.";

        // ver esto porque me lo ha hecho la ia

        $clave = 1234;
        $intentos = 0;
        $maxIntentos = 4;
        do {
            $ingreso = rand(1000, 9999); // Simula un ingreso aleatorio de 4 dígitos
            $intentos++;
            if ($ingreso == $clave) {
                echo "Acceso concedido. Clave correcta: $ingreso<br>";
                break;
            } else {
                echo "Clave incorrecta: $ingreso. Intento $intentos de $maxIntentos.<br>";
            }
        } while ($intentos < $maxIntentos);

        echo "<br>";
        echo "Tabla de multiplicar en formato HTML";
        echo "<table border='1'>";
        echo "<tr><th>Número</th><th>Tabla de Multiplicar</th></tr>";
        echo "<br>";
        echo "Decir cuántos dígitos tiene un número.";
        $numero = 123456;
        echo strlen(string:($numero));
        

    ?>


</body>
</html>