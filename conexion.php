<?php 
include ("configuracion.php");
$conexion=new mysqli($server,$user,$pass,$bd);
if (mysqli_connect_errno()) {
	echo "No Conectado",mysqli_connect_errno;
	exit();
}
 ?>