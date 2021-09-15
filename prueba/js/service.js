//Constantes
var READY_STATE_COMPLETE = 4;
var OK = 200;
const formulario =document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

// const expresiones = {
//  	Vnombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
//  	vtelefono: /^\d{7,14}$/,
//  	Vpasword:/^.{4,12}$/,
//  	Vcorreo: /^[a-zA-Z0-9\_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
//  	Vusuario: /^[a-zA-Z0-9\_\-]{4,16}$/
// }
//variables
var ajax = null;
var btnInsertar = document.querySelector("#insertar");
//var btnEditar = document.querySelector("#editar");
//var btnBorrar = document.querySelector("#borrar");
var precarga = document.querySelector("#precarga");
var respuesta = document.querySelector("#respuesta");

//Funciones


// function validaFormulario(evento)
// {
// 	switch(evento.target.name){
// 		case "nombre_txt":
// 			if(expresiones.Vnombre.test(evento.target.value)){
// 				var nombre= nombre_txt
// 				printf(nombre);

// 			}
// 			else
// 			{
// 				alert("Valor ingresado nombre no es valido");

// 			}
// 	}
// }


function objetoAJAX()
{
	if(window.XMLHttpRequest)
	{
		return new XMLHttpRequest();
	}
	else if (window.ActiveXObject) 
	{
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}

function enviarDatos()
{
	precarga.style.display ="block";
	precarga.innerHTML = "<img src='img/loader.gif'/>";

	if(ajax.readyState == READY_STATE_COMPLETE)
	{
		if(ajax.status == OK)
		{
			//alert("ok");
			precarga.innerHTML = null;
			precarga.style.display= "none";
			respuesta.style.display= "block";
			respuesta.innerHTML = ajax.responseText;
			if(ajax.responseText.indexOf("data-insertar")>-1)
			{
				document.querySelector("#alta-persona").addEventListener("submit",insertarPersona);

			}
			if(ajax.responseText.indexOf("data-recarga")>-1)
			{
				setTimeout(window.location.reload(),30000);

			}

		}
		else
		{
			alert("El servidor no contesto\nError "+ajax.status+": "+ajax.statusText);
		}	
		//console.log(ajax);

	}
}

function ejecutarAJAX(datos)
{
	ajax = objetoAJAX();
	ajax.onreadystatechange=enviarDatos; 
	ajax.open("POST","controlador.php");
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(datos);
}

function insertarPersona(evento)
{
	//alert("procesa formulario");

	evento.preventDefault();
	// console.log(evento);
	// console.log(evento.target);
	// console.log(evento.target[0]);
	// console.log(evento.target.length);

	var nombre = new Array();
	var valor = new Array();
	var hijosForm = evento.target;
	var datos = "";

	// //var datos="transaccion=insertar&nombre_txt=Nombre$apellido_txt=Apellido&telefono_txt=Telefono&fechaRegistro_txt=Fecha registro";
	
	 for (var i=1; i<hijosForm.length; i++){
		nombre[i]=hijosForm[i].name;
		valor[i]=hijosForm[i].value;
	 	datos += nombre[i]+"="+valor[i]+"&";
	 	//console.log(datos);
	 }	
	ejecutarAJAX(datos);
	
}

function altaPersona(evento)
{
	//alert("funciona");
	evento.preventDefault();
	var datos="transaccion=alta";
	ejecutarAJAX(datos);


}
function alCargarDocumento()
{
	btnInsertar.addEventListener("click",altaPersona);
}

//Eventos
window.addEventListener("load",alCargarDocumento);
