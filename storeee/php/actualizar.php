<?php
require_once "conexion.php";
$conexion = conexion();

$id_juego   = $_POST['id_juego'] ?? null;
$nombreU    = $_POST['nombrejU'] ?? null;
$anioU      = $_POST['aniojU'] ?? null;
$empresaU   = $_POST['empresajU'] ?? null;

if (!$id_juego || !$nombreU || !$anioU || !$empresaU) {
    echo 0;
    exit;
}

$sql = "CALL sp_actualizar_datos('$nombreU','$anioU','$empresaU','$id_juego')";
$result = mysqli_query($conexion, $sql);

if (!$result) {
    echo 0;
    exit;
}

mysqli_next_result($conexion);

echo 1;
?>
