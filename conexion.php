<?php
$conexion = new mysqli("mysql-agudelo.alwaysdata.net", "agudelo", "juancho32", "agudelo_envios");

if($conexion->connect_error){
    die("Error de conexión: " . $conexion->connect_error);
}
?>
