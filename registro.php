<?php

	include "Conexion.php";

	session_start();

	$Conexion = CrearConexion();

	$usuario = $_REQUEST["usuario"];
	$email = $_REQUEST["email"];
	$password = $_REQUEST["password"];

	echo "hola" . $usuario;

	$SQL = "INSERT INTO Usuario(Nombre, Contrasenia, Email) VALUES ('$usuario', '$password', '$email')";
	//$SQL = "SELECT * FROM Usuario";
	$Resultado = Ejecutar($Conexion, $SQL);

?>
