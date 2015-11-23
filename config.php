<?php

/*	*	*	 SETUP	*	*	 */

	// TITULO
	$titulo = "CEOPS Comercializadora S.A. de C.V.";
	// META's
	$descripcion = "En CEOPS nos mueve el deseo de crear oportunidades de negocios entre nuestros proveedores y clientes,  donde la transparencia y la equidad, nos permita construir una mejor sociedad, económicamente activa y que aumente las posibilidades para un mercado más amplio e igualitario.";
	$keywords = "papelería, oficina, logística, servicios" ;
	
	// CSS
	$css = array("style.css", "mobile.css");
	// JS
	$js = array("selectivizr.js","jquery.js", "script.js");
	
	// NAV
	$nav = array('INICIO', 'NOSOTROS', 'SERVICIOS', 'CLIENTES', 'CONTACTO');
	$navigation="";

	// MOBILE
	$mobile = false;
	





/*	*	*	 DEBUG	*	*	 */
	
	/* TESTER */
	$tester = 0;
	$cols = 16;
	
	/* FORCE REALOAD */
	$b = 1;
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*	*	*	*	*	*	*	*	*	*	*	FUNCTIONS YOU SHOULD NOT TOUCH *	*	*	*	*	*	*	*	*	*	*	*	*/
	
	// FORCE RELOAD: ANTI-CACHE…  returns a random number  [  ?v=1  ] 
	function d($dbug){
		if($dbug){
			$b = "?v=".rand(1, 50);
			return $b;
		}
	};
	
	// GENERATE NAVIGATION...
	#ul [navigation ul becomes $navigation]
	if(count($nav) > 0){
		$navigation.='<ul>';	
		foreach($nav as $n){ 
			$navigation.= '<li'.active($n).'>';
			$special = array('á', 'é','í','ó','ú','Á', 'É','Í','Ó','Ú', ' ', '?', '¿');
			$vowels = array('a', 'e','i','o','u','A', 'E','I','O','U', '-', '', '');
			$final = str_replace($special, $vowels, $n);
			$navigation.= '<a href="'.strtolower($final).'">'.$n.'</a></li>';
		}
		$navigation.='</ul>';
	}
	# set active section
	function active($u){
		if(strtolower($u) == "inicio"){ $u = "index"; }
		$currentFile = $_SERVER["PHP_SELF"];
		$parts = explode('/', $currentFile);
		$parts2= explode('.', $parts[count($parts) - 1]);
		$equals = $parts2[count($parts2)-2];
		if(strtolower($u) == $equals){
			return ' class="active"';
		}
	}		
	
	/*	*	*	*	*	*	*	*	*	*	*	FUNCTIONS YOU SHOULD NOT TOUCH *	*	*	*	*	*	*	*	*	*	*	*	*/
	
?>