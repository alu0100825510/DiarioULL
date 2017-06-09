<?php

include "Conexion.php";

session_start();

if($_SESSION["USUARIO_NOMBRE"] != ""){

$Conexion = CrearConexion();

$Tipo = $_REQUEST["tipo"];

echo "<h3> Bienvenido a ".$Tipo."</h3>";


$SQL = "SELECT * FROM Foro WHERE Tipo = '$Tipo'";
$Resultado = mysqli_query($Conexion, $SQL);
echo "<div class='contenidos'>";
while ($Tupla = mysqli_fetch_array($Resultado ,MYSQLI_ASSOC))

		{
      echo "<div class='mensajes'>";
      echo "<p class='usuariocss'>".$Tupla["Usuario"]." - ".$Tupla["Fecha"]."   dijo:</h4>";
      echo "<p class='mensajecss'>".$Tupla["Mensaje"]."</h5>";
      echo "</div>";
    }
echo "</div>";



echo "<input id='mensaje' type='text' name='mensaje'> </input>";
echo "<button name='".$Tipo."' onClick='enviar(this)'> Enviar Mensaje </button>";
}

else{
echo "es necesario loguearse";
echo "<a href='index.html'> Ir </a>";
}

?>
