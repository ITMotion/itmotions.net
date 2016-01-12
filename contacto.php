<html>
<head>
	<title>Contacto</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
	<link href="css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/contacto.css"/>
	<meta name="viewport" content="width= device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div class="container">
	<?php include("menu.html") ?>
		<div class="row">
			<div class="col-md-6" id="logoContacto">
				<img src="imagenes/logo2.png"/>
			</div>
			<div class="col-md-6" id="formularioContacto">
				<div class="form-group">
					<form id="ContactForm">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" required="required"/>
						</div>
						
						<div class="form-group">
							<label for="apellidos">Apellidos</label>
							<input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese sus apellidos" required="required"/>
						</div>
						
						<div class="form-group">
							<label for="correo">Correo</label>
							<input type="text" name="correo" id="correo" class="form-control" placeholder="Ingrese su correo" required="required"/>
						</div>
						
						<div class="form-group">
							<label for="mensaje">Mensaje</label>
							<textarea name="mensaje" id="mensaje" class="form-control" required="required" placeholder="¡Nos interesan tus opiniones e ideas!"></textarea>
						</div>
						<br>
						<button type="button" class="btn btn-primary">Enviar</button>
					</form>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron" id="iconos">
					<h2>Contacto</h2>
					<div class="num"> <img src="imagenes/telefono.png"/>(998)2574858 / 8842345</div>
					<div class="email"> <img src="imagenes/correo.png"/>ventas@itmotions.com</div>
					<div class="direccion"> <img src="imagenes/direccion.png"/>Paseo de la reforma #45 CP77543</div>
				</div>
			</div>
			<div class="col-md-6" id="imagenicon">
				<img src="imagenes/negocios.jpg"/>
			</div>
		</div>
		<?php include("footer.html") ?>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/additional-methods.js"></script>
<script src="js/validator.js"></script>
</body>
</html>