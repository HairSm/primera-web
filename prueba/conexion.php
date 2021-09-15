<?php 
require_once"config.php";
function conexionMySQL()
{

	 $conexion=new mysqli(SERVER,USER,PASS,DB);
		
	 if($conexion->connect_error)
	 {

	 	$error .="<div class='error'> Error de conexion Nº<b>%d</b> Mensaje del error: <mark>%s</mark></div>";
	 	printf($error,$conexion->connect_errno,$conexion->connect_error);
		
	 }
	else
	{
		 $formato ="<div class='mensaje'>Conexion exitosa: <b>%s</b></div>";
	  //	printf($formato,$conexion->host_info);

	}
	$conexion->query("SET CHARACTER SET UTF8");
	return $conexion;
}
//conexionMySQL();
?>