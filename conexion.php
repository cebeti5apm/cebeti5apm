
<?php
//estos datos se modifican para la 4ta firma
$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "cebeti5apm";

$conexion = new mysqli(
    $servidor,
    $usuario,
    $password,
    $basedatos
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>
