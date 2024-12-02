<?php
$servername = "fdb1028.awardspace.net";
$username = "4558517_marketingdigitalas";
$password = "0748Aidi";
$dbname = "4558517_marketingdigitalas";

// Crear la conexión usando $conexion
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>