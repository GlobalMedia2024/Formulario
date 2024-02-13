<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
    $negocio = $_POST['negocio'];
    $telefono = $_POST['telefono'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Negocio: ".$negocio."<br> Teléfono: ".$telefono."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('tuEmail', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>