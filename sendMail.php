<?php 
	$mensaje="Mensaje del formulario de contacto de cliente";
	$mensaje.= "\nNombre: ". $_POST['nombre'];
	$mensaje.= "\nproyecto: ".$_POST['proyecto'];
	$mensaje.= "\ncorreo ". $_POST['correo'];
	$mensaje.= "\ndescripcion ". $_POST['descripcion'];
	$destino= "ventas@itmotions.net";
	$remitente = $_POST['correo'];
	$asunto = "Mensaje enviado por: ".$_POST['nombre'];
	mail($destino,$asunto,$mensaje,"FROM: $remitente");
	header("Location:proyectos.php?var=1");
?>