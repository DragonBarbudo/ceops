<? include('config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<? include('php/head.php'); ?>
</head>
<body>
<!--Header-->		
<header>
<? include('php/header.php'); ?>
</header>




<!--BANNER-->
<section id="banner" class="visibla">
	<div class="innercontainer">
		<div class="banner">
			<div id="clientes_text"></div>
			<div id="clientes_briefcase"></div>
			<div class="clear"></div>
		</div>
	</div>
</section>
<div class="hr"></div>
<!--SECTIONS-->
<section id="clientes">

	<article class="blackbackground">
		<a href="http://www.senado.gob.mx/" target="_blank"><img src="imgs/cliente_camara.jpg" alt="Cámara de Senadores" /></a>
		<div>Cámara de Senadores</div>
	</article>
	<article class="blackbackground">
		<a href="http://www.hospitaljuarez.salud.gob.mx/" target="_blank"><img src="imgs/cliente_hospital.jpg" alt="Hospital Juárez de México" /></a>
		<div>Hospital Juárez de México</div>
	</article>
	<div class="clear"></div>
	<article class="blackbackground">
		<a href="http://www.sedesol.gob.mx/" target="_blank"><img src="imgs/cliente_sedesol.jpg" alt="Secretaría de Desarrollo Social" /></a>
		<div>Secretaría de Desarrollo Social</div>
	</article>
	<article class="blackbackground">
		<a href="http://www.inr.gob.mx/" target="_blank"><img src="imgs/cliente_inr.jpg" alt="Instituto Nacional de Rehabilitación" /></a>
		<div>Instituto Nacional de Rehabilitación</div>
	</article>
	<div class="clear"></div>
	
	
	
</section>
<div class="hr"></div>





<!--Footer-->
<footer>
<? include('php/footer.php'); ?>
</footer>
</body>
</html>