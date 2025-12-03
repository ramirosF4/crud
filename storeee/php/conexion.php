<?php 
	
    function conexion(){

		return mysqli_connect("localhost", "admin", "roldanroot", "231190070");
	
	
		if (mysqli_connect_errno()) {
			echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
			exit();
		}
		
		$conexion->set_charset("utf8");
	}
?>