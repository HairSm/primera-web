<?php require "vista.php";
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="aplicacion CRUD(Create-Read-Update-Delete) con filosofia MVC desarrollada en PHP MySQL  y AJAX /">
		<link rel="stylesheet" href="css/personas.css">
		<title>Usuarios</title>
	</head>
	<body>
		<header id="cabecera">
			<h1> Personas registradas</h1>
			<div> <img src="img/Leonardo da Vinci.jpg" alt="Prueba"></div>
			<a href="#" id="insertar">Insertar</a>
			<p><a href="#editar" id="editar">Editar</a></p>	
			<p><a href="#borrar" id="borrar">Borrar</a></p>	
						
		</header>
		<section id="contenido">
			
			<!-- <p> Este es el contenido</p> -->
			<div id="respuesta"></div>
			<dev id="precarga"></dev>
			<?php mostrarPersonas(); ?>	

		</section>
		<script src="js/service.js"></script>
	</body>
	</html>	