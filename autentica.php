<?php

	include "Conexion.php";
	$Conexion = CrearConexion();

	$email = $_REQUEST["email"];
	$Clave = $_REQUEST["password"];
	$SQL = " select ID, Nombre from Usuario where Email = '$email' and Contrasenia = '$Clave'";
	//mysqli_query($Conexion, $SQL);
	$Resultado = mysqli_query($Conexion, $SQL);
	$Tupla = mysqli_fetch_array($Resultado ,MYSQLI_ASSOC);
	if ($Tupla["ID"] != "")
	{
		session_start();
		$_SESSION["USUARIO_ID"] = $Tupla["ID"];
		$_SESSION["USUARIO_NOMBRE"] = $Tupla["Nombre"];
		echo "Autentificacion correcta ". $_SESSION["USUARIO_NOMBRE"];
		header('Location: contenido.php');
	}
	else
	{
		header('Location: index.html'); // Si no hay resultado volvemos al login
	}
?>
