
<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");

    if ($nombre === "" || mb_strlen($nombre) > 150) {
        die("Ingresa un nombre válido.");
    }

    $sql = "INSERT INTO integrantes (nombre) VALUES (?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $nombre);

    if ($stmt->execute()) {
        echo "<h2>¡Registro guardado correctamente!</h2>";
        echo '<a href="index.php">Registrar otro integrante</a>';
    } else {
        echo "Error al guardar el registro.";
    }

    $stmt->close();
}

$conexion->close();
?>
