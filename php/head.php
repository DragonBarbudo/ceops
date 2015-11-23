<!-- TITLE -->
<title><? echo $titulo; ?></title>

<!-- METAs -->
<meta charset="utf-8" />
<meta name="description" content="<? echo $descripcion; ?>" />
<meta name="keywords" content="<? echo $keywords; ?>" />

<? if($mobile){ ?>
<!-- MOBILE -->
<meta name="viewport" content="width=device-width,initial-scale=1">
<? } ?>

<!-- FAVICON -->
<link rel="shortcut icon" href="favicon.ico<? d($b); ?>" />
<link rel="icon" type="image/ico" href="favicon.ico<? d($b); ?>" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png<? d($b); ?>"/>

<!-- HUMANS -->
<link rel="author" href="humans.txt" />

<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<!-- CSS -->
<? foreach($css as $c){ ?>
<link style="text/css" href="css/<? echo $c.d($b); ?>" rel="stylesheet" />
<? } ?>

<!-- ie HACK -->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- JAVASCRIPT -->
<? foreach($js as $j){ ?>
<script type="text/javascript" src="js/<? echo $j.d($b); ?>"></script>
<? } ?>

<? if($tester==true){	?>
<script type="text/javascript">
	$(document).ready(function(){
		$('body').append('<div class="tester"><? for($i=0; $i<$cols; $i++){ ?><div></div><? } ?></div>');
	});
</script>

<meta name="google-site-verification" content="dHEKPvDfiXJexIprWaguwmImSf-UVSY9gLYurqngrQc" />
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22567130-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?	}	?>