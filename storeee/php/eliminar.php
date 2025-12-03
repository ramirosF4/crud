<?php
require_once "conexion.php";
$conexion = conexion();

$id_juego = $_POST['idjuego'] ?? null;

if (!$id_juego) {
    echo 0;
    exit;
}

$sql = "CALL sp_eliminar_datos('$id_juego')";
$result = mysqli_query($conexion, $sql);

if (!$result) {
    echo 0;
    exit;
}

mysqli_next_result($conexion);

echo 1;
?>
