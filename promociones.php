<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
    $provincia = $_POST['provincia'];

	if (!empty($nombre)) {
		
		$nombre = trim($nombre); //para quitar espacios al inicio y al final.
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	}else{

			 $errores .= 'Digite su nombre por favor </br>';
	}
	if (!empty($correo)) {
	$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

	if (!filter_var($correo,FILTER_VALIDATE_EMAIL)) {
		$errores .= 'Por favor ingrese un correo valido <br />';
	}

}else{

	$errores .= 'Digite su correo por favor <br />';
}


if (!empty($provincia)) {
	$provincia = trim($provincia);
	$provincia = filter_var($provincia, FILTER_SANITIZE_STRING);
}else{
	$errores .= 'Ingrese el nombre de su provincia.';
}


if (!$errores) {
	$enviar_a = 'eriduar@gmail.com';
	$asunto = 'Correo enviado desde MICROBLADING DAYANNA VALVERDE';
	$mensaje_preparado = "De: $nombre \n ";
	$mensaje_preparado = "Correo: $correo \n";
    $mensaje_preparado = "Provincia $provincia ";
	$enviado = true;

	//mail($enviar_a,$asunto,$mensaje_preparado);
}


} 
	

 require 'promociones.view.php';
 ?>