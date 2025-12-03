<?php 

require_once "conexion.php";
$conexion = conexion();

$id = $_POST['idjuego'];
$sql = "CALL sp_obtener_regJuego($id)";

$result = mysqli_query($conexion, $sql);

if (!$result) {
    die("Error SQL: " . mysqli_error($conexion));
}

$ver = mysqli_fetch_row($result);


mysqli_next_result($conexion);

$datos = array(
    'id_juego'   => $ver[0],
    'nombrejU'   => $ver[1],
    'aniojU'     => $ver[2],
    'empresajU'  => $ver[3]
);

echo json_encode($datos);
?>
