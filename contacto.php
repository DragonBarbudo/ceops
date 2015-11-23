<? include('config.php'); 
include('php/Inputs.php');
?>
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
<section id="contacto">
	<?
if(isset($_POST['enviar'])){
foreach($_POST as $nombre_campo => $valor){ 
   $asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; 
   eval($asignacion); 
}

$message = 'Nombre: '.$nombre."\n\r";
$message.= 'Empresa: '.$empresa."\n\r";
$message.= 'Correo: '.$correo_electronico."\n\r";
$message.= 'Teléfono: '.$telefono."\n\r";
$message.= 'Mensaje: '.$mensaje;

$to = 'ventas@ceops.com.mx';

$subject = "Mensaje del sitio CEOPS";

$headers = "From: ".$correo_electronico."\r\n"."Reply-To: ".$correo_electronico."\r\n"."X-Mailer: PHP/".phpversion();
function mail_utf8($to, $subject = "(No subject)", $message = "", $header = "") { 
	$header_ = "MIME-Version: 1.0"."\r\n"."Content-type: text/plain; charset=UTF-8"."\r\n";
	if(mail($to, "=?UTF-8?B?".base64_encode($subject)."?=", $message, $header_.$header)){ 
		echo '<div id="sended"> Gracias por llenar el formulario. Nos pondremos en contacto lo antes posible.</div>';
	} else { 
		echo '<div id="sended">Error en el mensaje, intente de nuevo más tarde o contáctenos en .</div>'.$to; 
	}
} 

mail_utf8($to, $subject, $message, $headers);
}
?>
	
	<div class="clear"></div>

	<form method="post" action="">
		<?
			new Inputs('Nombre', 'text', '', true);
			new Inputs('Empresa', 'text', '', false);
			new Inputs('Correo electrónico', 'email', '', true);
			new Inputs('Teléfono', 'text', '', false);
			new Inputs('Mensaje', 'textarea', '', true);
			new Inputs('', 'buttonsubmit', 'Enviar');
		?>
	</form>
	
	<div id="map">
	<div>
		<iframe width="380" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=PROLONGACI%C3%93N+VASCO+DE+QUIROGA+N%C2%BA.+1329.++COL.+SANTA+F%C3%89.+C.P.+01210.++CIUDAD+DE+M%C3%89XICO.&amp;aq=&amp;sll=22.836946,-102.524414&amp;sspn=24.389778,36.430664&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Vasco+de+Quiroga+1329,+%C3%81lvaro+Obreg%C3%B3n,+Distrito+Federal&amp;ll=19.385,-99.227829&amp;spn=0.051818,0.068836&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
	</div>
	<address>
		PROLONGACIÓN VASCO DE QUIROGA Nº. 1329. COL. SANTA FÉ.
		<br/>C.P. 01210. CIUDAD DE MÉXICO.
	</address>
	</div>
	
	<div class="clear"></div>
	
	
	
</section>
<div class="hr"></div>





<!--Footer-->
<footer>
<? include('php/footer.php'); ?>
</footer>
</body>
</html>