<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="estilos/index.css">
	<title>TuSalud</title>
</head>

<body>
	
	<!--Esta es la seccion de cabecera-->
	<?php include "templates/cabecera.php"; ?>

	<!--Esta es la imagen de portada-->
	<?php include "templates/portada.php"; ?>

	<div class = "textoProd-container">
		<div class = "textoProd">
			<h2>Productos</h2>
			<p class = "parrafoProd">Ordena los productos que desees con tan solo clic</p>
		</div>
	</div>

	<!--primera seccion productos-->
	<section class="contenido-productos">

		<div class = "articulos-container">
			<article class="articulos">
				<img class=" img imgHo">
				<p>Homeopatia</p>
			</article>

			<article class="articulos">
				<img class="img imgFlo">
				<p>Flores de Bach</p>
			</article>

			<article class="articulos">
				<img class = "img imgIma">
				<p>Imanes terapeuticos</p>
			</article>
		</div>
	</section>

	<div class = "btnProductos-container">
		<a class = "menu-centro-link" href="productos.php"><button class = "btnProductos">Ver Productos</button></a>
	</div>

	<!--Segunda seccion, descripcion homeopatia -->
	<section class = "sectionDescripcion">

		<div class="div-izquierda">
			<div class = "div-contenido-texto">
				<h1>Homeopatia</h1> <br>
				<p>La homeopatia es una medicina alternativa que ayuda a estimular el sistema de defensa natural y su principal objetivo es ayudar al cuerpo a tratar los sintomas de enfermedades</p>
			</div>
		</div>
		
		<div class="div-derecha imgHomeopatia"></div>

	</section>

	<!--Tercera seccion, descripcion flores de bach-->
	<section class = "sectionDescripcion">
		<div class="div-izquierda">
				<div class = "div-contenido-texto">
					<h1>Flores de Bach</h1>
					<br>
					<p>Las flores de bach es una terapia alternativa que sirve para ajustar el sistema emocional</p>
				</div>
		</div>
			
			<div class="div-derecha imgFlores"></div>
	</section>
	
	<!--Cuarta seccion, descripcion de Imanes terapeuticos-->
	<section class = "sectionDescripcion">
		<div class="div-izquierda">
				<div class = "div-contenido-texto">
					<h1>Imanes Terapeuticos</h1><br>
					<p>Ayuda al sistema nervioso, hormonal, endocrinos y ayuda a desinflamar áreas especificas</p>
				</div>
			</div>
			
			<div class="div-derecha imgImanes"></div>
	</section>

	<!--Seccion del footer-->
	<?php include "templates/footer.php" ?>

</body>
</head>