<?php 

require_once "conexion.php";

function altaPersona()
{
	//$fcha = date("Y-m-d/H:i ");
	$fcha = date("Y-m-d");
	$formula ="<form id='alta-persona' class='formulario' data-insertar>";
		$formula .="<fieldset>";
			$formula .="<legend><h2>Ingrese los datos de la Persona :</h2></legend>";
			$formula .="<div>";
				$formula .="<label for='nombre'>Nombre </label>";
				$formula .="<input type='text' id='nombres' name='nombre_txt' required />";
			$formula .="</div>";
			$formula .="<div>";
				$formula .="<label for='apellido'>Apellido </label>";
				$formula .="<input type='text' id='apellidos' name='apellido_txt' required />";
			$formula .="</div>";
			$formula .="<div>";
				$formula .="<label for='telefono'>Telefono </label>";
				$formula .="<input type='text' id='telefono' name='telefono_txt' required />";
			$formula .="</div>";
			$formula .="<div>";
				$formula .="<label for='frecha_de_registro'>Fecha de registro </label>";
				$formula .="<input type='date' id='fechaRegistro' name='fechaRegistro_txt' required />";				
			$formula .="</div>";
			$formula .="<div>";
				$formula .="<label for='frecha_de_actualizacion'>Fecha actual </label>";
				$formula .="<input type='datetime' id='fechaActualiza' name='fechaActual_txt'  value='$fcha'readonly />";
			$formula .="</div>";
			$formula .="<div>";
				$formula .="<input type='submit' id='insertar-btn' name='insertar_btn' value='Insertar' />";
				$formula .="<input type='hidden' id='transaccion' name='transaccion' value='Insertar' />";
			$formula .="</div>";
		$formula .="</fieldset>";
		$formula .="</form>";
	
 return printf($formula);

}

function mostrarPersonas()
{
	$mysql = conexionMySQL();
	$sql= "SELECT * FROM usuarios ORDER BY ID DESC";

	if($resultado = $mysql-> query($sql))
	{
		//echo "se conecto a la base de Datos";
		//si no hay registros
		if(mysqli_num_rows($resultado)==0){

			$respuesta = "<div class='error'>Error: La base de datos esta vacìa, o no hay registros </div>";
		}
		else
		{
			$tabla ="<table id= 'tabla-usuarios' class='tabla'>";
			$tabla .="<thead>";
				$tabla .="<tr>";
					$tabla .="<th>ID</th>";
					$tabla .="<th>Nombre</th>";
					$tabla .="<th>Apellido</th>";
					$tabla .="<th>Telefono</th>";
					$tabla .="<th>Fecha de registro</th>";
					$tabla .="<th>Fecha de actualizacion</th>";
				$tabla .="</tr>";
			$tabla .="</thead>";
			$tabla .="<tbody>";
				while($fila= $resultado->fetch_assoc())   //fetch_row busca por posicion de columnas
				{
					$tabla .="<tr>";
						$tabla .="<td>".$fila["ID"]."</td>";
						$tabla .="<td>".$fila["Nombres"]."</td>";
						$tabla .="<td>".$fila["Apellidos"]."</td>";
						$tabla .="<td>".$fila["Telefono"]."</td>";
						$tabla .="<td>".$fila["Fecha de registro"]."</td>";
						$tabla .="<td>".$fila["Fecha de actualizacion"]."</td>";
						//var_dump($fila);
					$tabla .="</tr>";
				}
			$resultado -> free();	
			$tabla .="</tbody>";
		$tabla .="</table>";
		$respuesta = $tabla;
		}

	}
	else
	{
		//echo "En caso de no conexiòn";
		$respuesta = "<div class='error'>Error: No se ejecuto la consulta a la base de datos</div>";
	}
	$mysql->close();//cierra la conexiòn 	
	return printf($respuesta);
}

?>
