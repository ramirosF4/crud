<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "conexion.php";
$conexion = conexion();

$nombre  = $_POST['nombrej'] ?? null;
$anio    = $_POST['anioj'] ?? null;
$empresa = $_POST['empresaj'] ?? null;

if (!$nombre || !$anio || !$empresa) {
    die("0"); 
}

$sql = "CALL sp_insertar_datos('$nombre', '$anio', '$empresa')";
$result = mysqli_query($conexion, $sql);

if (!$result) {
    die("Error SQL: " . mysqli_error($conexion));
}

mysqli_next_result($conexion);

echo 1;
?>
