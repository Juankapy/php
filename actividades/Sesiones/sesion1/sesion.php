<h1>Contador de Visitas</h1>
<?php
session_start();
 if (!isset($_SESSION['counter'])) {
 $_SESSION['counter'] = 1;
 } else {
 $_SESSION['counter']++;
 }
 echo ("Visitas: ".$_SESSION['counter']);
 
?>
<br>
<a href='cerrarsesion.php'>Cerrar Sesión</a>

