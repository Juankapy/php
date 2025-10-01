<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
    if (isset($_POST["numero"])) {
        $numero = intval($_POST["numero"]);
        echo "<h2>Tabla de multiplicar del $numero</h2>";
        echo "<table border='1' cellpadding='5'>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>