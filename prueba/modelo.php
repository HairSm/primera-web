<?php 
require_once "conexion.php";


function insertarPersona($nombre,$apellido,$telefono,$fechaRegistro,$fechaActualizacion)
{
	$Telefono=(int)$telefono;
	$FechaRegistro= date("Y-m-d", strtotime($fechaRegistro));
	
	$sql= "INSERT INTO usuarios(ID,Nombres,Apellidos,Telefono,Fecha de registro,Fecha de actualizacion) VALUES (0,'$nombre','$apellido','$Telefono','$FechaRegistro','$fechaActualizacion')";

	printf($sql);

	$mysql = conexionMySQL();
	if ($resultado = $mysql->query($sql)) 
	{
		$respuesta = "<div class='exito' data-recarga> Se inserto con exito el registro de persona <b>$nombre</b></div>";
	}
	else
	{
		$respuesta = "<div class='error'> ocurrio un error, no se inserto el nombre: <b>$nombre</b></div>";
	}

	$mysql->close();

	

	return printf($respuesta);

} 
 ?>