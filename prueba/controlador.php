<?php 
require "vista.php";
require "modelo.php";

$transaccion=$_POST["transaccion"];
function ejecutarTransaccion($transaccion)
{
	if ($transaccion=="alta") {
		// formulario de alta
		altaPersona();
	}
	else if($transaccion=="Insertar")
	{

		insertarPersona($_POST['nombre_txt'],$_POST['apellido_txt'],$_POST['telefono_txt'],$_POST['fechaRegistro_txt'],$_POST['fechaActual_txt']);
		//Procesa los datos he insertatar en MySQL
		//echo "aqui entran los datos del formulario";//////////////////////
	}
	else if ($transaccion=="eliminar")
	{
			// Elimina de MySQL del registro solicitado
	}
	elseif ($transaccion=="actualizar") 
	{
			// trae el dato  del registro a modificar de MySQL 
	}
	elseif ($transaccion=="editar")
	 {
			// Actualiza el registro de MySQL 
	}

}

ejecutarTransaccion($transaccion);
?>