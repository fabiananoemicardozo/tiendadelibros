<?php
$host="localhost";
$bd="sitio";
$usuario="root";
$contrasenia="omg456";

try {
	$conexion=new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasenia);
	if($conexion){
		echo "Conectado a sistema";
	}
} catch (Exception $ex) {
	echo $ex->getMessage();
}
?>