<?php  
	$mensaje="Mensaje del formulario de contacto de cliente";
	$mensaje.= "\nNombre: ". $_POST['nombre'];
	$mensaje.= "\napellidos: ".$_POST['apellidos'];
	$mensaje.= "\ncorreo: ". $_POST['correo'];
	$mensaje.= "\nmensaje: ". $_POST['mensaje'];
	$destino= "ventas@itmotions.net";
	$remitente = $_POST['correo'];
	$asunto = "Mensaje enviado por: ".$_POST['nombre'];
	mail($destino, $asunto, $mensaje,"FROM: $remitente");
	header("Location: contacto.php?var=1");
?>