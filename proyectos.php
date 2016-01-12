<html>
<head>
	<title>Proyectos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
	<link type="text/css" rel="stylesheet" href="css/proyectos.css"/>
	<link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width= device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div class="container">
	<?php include("menu.html") ?>
		<div class="row">
			<div class="col-md-12" id="contenido1">
				<div class="jumbotron">
					<h1>Comienza un proyecto con nosotros</h1>
					<p>Nuestro equipo de desarrolladores y diseñadores están capacitados en los lenguajes más modernos para ofrecerle lo mejor en el mercado.
						También contamos con un equipo de análisis para asegurarse de que la aplicación sea la que realmente necesita su empresa.</p>
					<p>Solo hace falta tener iniciativa para tener un futuro brillante... </p>	
					<a href="#ventana" class="btn btn-primary" data-toggle="modal">Cotización de Proyectos »</a>
					<div class="modal fade" id="ventana" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form class="form-horizontal">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
									<h4 class="modal-title" id="myModalLabel">¡Compártenos tu idea!</h4>
								</div>
								<div class="modal-body">
									<div class="form-group" id="nombre">
										<label for="nombre" class="col-lg-2 control-lable">Nombre</label>
										<div class="col-lg-10">
											<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre completo" required="required"/>
										</div>
									</div>

									<div class="form-group" id="proyecto">
										<label for="proyecto" class="col-lg-2 control-lable">Proyecto</label>
										<div class="col-lg-10">
											<input type="text" name="proyecto" id="proyecto" class="form-control" placeholder="Ingrese el nombre de su proyecto" required="required"/>
										</div>
									</div>

									<div class="form-group" id="correo">
										<label for="correo" class="col-lg-2 control-lable">Correo</label>
										<div class="col-lg-10">
											<input type="email" name="correo" id="correo" class="form-control" placeholder="ejemplo@ejemplo.com" required="required"/>
										</div>
									</div>

									<div class="form-group" id="opciones">
										<label for="descripcion" class="col-lg-2 control-lable">Descripción</label>
										<div class="col-lg-10">
											<textarea type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Breve descripción del proyecto" required="required"></textarea>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<a class="btn btn-default" data-dismiss="modal">Cerrar</a>
									<button class="btn btn-primary" type="submit">Enviar</button>
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12" id="contenido2">
				<h2>Un poco de nuestros proyectos</h2>
					<p>Algunos ejemplos de proyectos que hemos llevado a cabo con clientes con una gran iniciativa para evolucionar en su sector de negocios.</p>
			</div>
		</div>

		<br>

		<div class="row">
				<div class="col-md-4" id="thumb1">
					<div class="thumbnail">
						<img src="imagenes/pia.png"/>
						<div class="caption">
							<h3>Aplicaciones administrativas</h3>
						</div>
					</div>
				</div>
				<div class="col-md-4" id="thumb2">
					<div class="thumbnail">
						<img src="imagenes/pizza.png"/>
						<div class="caption">
							<h3>Sitios Web Publicitarios</h3>
						</div>
					</div>
				</div>
				<div class="col-md-4" id="thumb3">
					<div class="thumbnail">
						<img src="imagenes/publi.jpg" />
						<div class="caption">
							<h3>Agenda inteligente</h3>
						</div>
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