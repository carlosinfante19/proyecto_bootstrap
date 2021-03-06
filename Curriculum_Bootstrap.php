<!DOCTYPE html>
<html>
<head>
	<title>Curriculum Bootstrap</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-witdh, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo_CV_Bootstrap.css"><!--Siempre se carga primero el css bootstrap y luego mi regla CSS-->
 </head>
  <body>
   	<div class="container">
   		<!--Bloque Nombre y Foto-->
   		<div class="row" style="background-color: #347bb5;">
   			<div class="col-lg-8 text-center" style="background-color: #347bb5; color: white;">
   				<h1 id="titulonombre">Carlos Eduardo Infante Sabaté</h1>
   			</div>
   			<div class="col-lg-4 text-center" style="background-color: #347bb5;">
   				<img src="images/fotocurriculum2.png" alt="Mi fotografía" class="img-circle" width="100">
   			</div>
   		</div>
   		<!--Bloque Datos Personales-->

   			<div class="row">
   				<div class="col-lg-12 text-center" style="background-color: white;">
   					<h3>
   						Datos Personales
   					</h3>
   				</div>
   			</div>
   			<div class="row" style="background-color: #347bb5; padding-top: 2.5%">
   				<div class="col-lg-2" style="background-color: #347bb5;">
   				</div>
   					<div class="col-lg-8 text-center" style="background-color: #347bb5;">
   						<table class="table">
   							<tr>
   								<td>C&eacute;dula</td><td>18.587.581</td>
   							</tr>
   							<tr>
   								<td>Direcci&oacute;n</td><td>Av.Roma</td>
   							</tr>
   							<tr>
   								<td>Tel&eacute;fono</td><td>+58-414-210.00.21</td>
   							</tr>
   							<tr>
   								<td>Ocupaci&oacute;n</td><td>Dise&ntilde;ador Gr&aacute;fico</td>
   							</tr>
   						</table>
   					</div>
   				<div class="col-lg-2">
   				</div>
   			</div>

   		<!--Bloque Educación y Experiencia-->

   			<div class="row">
   				<div class="col-lg-12 text-center" style="background-color: white; vertical-align: middle;">
						<h3>
							Educación y Experiencia
						</h3>
				</div>
   			</div>
			<div class="row" style="background-color: #347bb5; padding-top:1%;">
				<div class="col-lg-4">
					<h3 style="color: white;">Educación</h3>
				</div>
				<div class="col-lg-8" style="color: white; vertical-align: middle; padding:0px;">
					<ul>
						<li>U.E. Santo Tomás de Aquino</li>
						<li>Universidad Nueva Esparta</li>
						<li>Curso Programación Web FullStack 4GeeksAcademy</li>
					</ul>
				</div>
			</div>
			<div class="row" style="background-color:#347bb5;">
				<div class="col-lg-4">
					<h3 style="color:white; vertical-align: middle;">Experiencia</h3>
				</div>
				<div class="col-lg-8" style="vertical-align:middle; padding:0px">
					<ul>
						<li>4 años vendedor</li>
						<li>2 años diseñador en Agencia de Viajes Itrip Vzla</li>
						<li>4 años como diseñador gráfico independiente</li>
					</ul>
				</div>
			</div>

		<!--Bloque Proyectos-->
		<div class="row" style="background-color:white;">
			<div class="col-lg-12" style="padding:0px">
				<h3>Proyectos</h3>
			</div>
		</div>
		<div class="row" style="background-color:#347bb5;">
			<div class="col-lg-6" style="padding:0px;">
				<h3 style="color:white;">Proyectos</h3>
			</div>
			<div class="col-lg-6" style="padding:0px;">
				<h3 style="color:white;">Descripción</h3>
			</div>
		</div>
		<div class="row" style="background-color:#347bb5;">
			<div class="col-lg-6" style="padding:0px;">
				<ul>
					<li>Hola mundo</li>
					<li>Proyectos Curriculum</li>
					<li>Curriculum Cajas</li>
					<li>Proyecto Bootstrap</li>
				</ul>
			</div>
			<div class="col-lg-6" style="padding:0px;">
				<ul>
					<li>Primer proyecto HTML</li>
					<li>Primer HTML con inicios de CSS</li>
					<li>Primer proyecto utilizando cajas (div) y sus propiedades</li>
					<li>Primer proyecto utilizando Bootstrap</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" style="background-color: white;">
				<h6>
					<?php
					 	$hora=12;
						if ($hora>=16) {
							echo "<p class='cerrado'>Cerrado para contacto</p>";
						} else {
							echo "Abierto para contato";
						}

					?>
				</h6>
			</div>
		</div>
   	</div>
















    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
