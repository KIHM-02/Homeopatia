<?php
	session_start();
?>

<section class="cabecera-principal">
		
	<nav class="menu-centro">
		<a class="logo" href="">Tu Salud</a>
				<ul class="menu-centro-lista">
				<li class = "menu-centro-lista-item"> <a class = "menu-centro-link" href="#">Descubre<a> </li>
				<li class = "menu-centro-lista-item"> <a class = "menu-centro-link" href="#">Sobre nosotros</a> </li>
				<li class = "menu-centro-lista-item"> <a class = "menu-centro-link" href="#">Contáctanos</a> </li>
				<li class = "menu-centro-lista-item" id = "nombreUsr"> <?php 
																			if(isset($_SESSION["nombre"]))
																				echo $_SESSION["nombre"]; 
																		?>
				</li>
				<li class = "menu-centro-lista-item"> <a class = "menu-centro-link2" href="login.html"> <img src="" alt="login"></a> </li>
				<li class = "menu-centro-lista-item"> <a class = "menu-centro-link2" href="#"> <img src="" alt="Carrito"></a></li>
				<li class = "menu-centro-lista-item"> <a class = "menu-centro-link" href="./templates/cerrar_sesion.php">Cerrar sesion</a> </li>
			</ul>
	</nav>
</section>