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
					<form>
						<label>Nombre</label>
						<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" required="required"/>
						<label>Apellidos</label>
						<input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese sus apellidos" required="required"/>
						<label>Correo</label>
						<input type="text" name="correo" id="correo" class="form-control" placeholder="Ingrese su correo" required="required"/>
						<label>Mensaje</label>
						<textarea name="mensaje" id="mensaje" class="form-control" required="required" placeholder="mensaje"></textarea>
						<br>
						<button type="button" class="btn btn-primary">enviar</button>
					</form>
				</div>

			</div>
		</div>
		<?php include("footer.html") ?>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>