<?php
$conexion = new mysqli("mysql-agudelo.alwaysdata.net", "agudelo", "agudelo_envios");

if($conexion->connect_error){
    die("Error de conexión: " . $conexion->connect_error);
}
?>
