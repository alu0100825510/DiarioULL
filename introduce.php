<?php

include "Conexion.php";

session_start();

if($_SESSION["USUARIO_NOMBRE"] != ""){

$Conexion = CrearConexion();

$Tipo = $_REQUEST["tipo"];
$Mensaje = $_REQUEST["mensaje"];

echo "hola" . $_SESSION["USUARIO_NOMBRE"];

$fecha=date("y-m-d");

$SQL = "INSERT INTO Foro(Usuario, Tipo, Mensaje, Fecha) VALUES ('".$_SESSION['USUARIO_NOMBRE']."', '$Tipo', '$Mensaje', '$fecha')";
$Resultado = mysqli_query($Conexion, $SQL);

}

else{
header('Location: index.html');
}

?>
