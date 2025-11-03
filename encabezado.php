<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2386237347587679"
     crossorigin="anonymous"></script>

<meta name="google-adsense-account" content="ca-pub-2386237347587679">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GR5YQEJPJZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GR5YQEJPJZ');
</script>

<?php 

	$idioma = $_GET['idioma'];

	if ($idioma == 'esp') {
		$texto = 'RESERVACIONES';
		$texto_cerrar = 'Cerrar';
	}elseif ($idioma == 'eng') {
		$texto = 'BOOKING';
		$texto_cerrar = 'Close';
	}elseif ($idioma == 'deu') {
		$texto = 'BUCHUNG';
		$texto_cerrar = 'Schliessen';
	}

	include '../google-analytics.php';

	?>

	<title><?php echo $titulo_1; ?></title>
	<meta name=description content="<?php echo $titulo_2; ?>">
	<meta name=keywords content="<?php echo $titulo_3; ?>">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="shortcut icon" href="../images/favicon.png" />

	<?php 

	include 'detecta_so.php';

	$logo = "logo_swl2_w.png";
	$logo2 = "logo2.png";
	$logo_ancho = 180;

?>

<div align='center'>

    	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

	    	<div class="container">

	      		<a class="navbar-brand" href="../"><img src='../images/<?php echo $logo2; ?>' width='<?php echo $logo_ancho; ?>'></a>

	      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><img src='../images/icono_menu_close.png' width='15'> <font color='white'>Menu</font></button>

	      		<div class="collapse navbar-collapse" id="ftco-nav">

	        		<ul class="navbar-nav ml-auto">

	          			<li class="nav-item"><a href="index.php?idioma=<?php echo $idioma; ?>" class="nav-link"><b><font color='white'><?php echo $menu_1; ?></font></b></a></li>

	        	  		<li class="nav-item"><a href="rooms.php" class="nav-link"><b><font color='white'><?php echo $menu_2; ?></font></b></a></li>

	        		  	<li class="nav-item"><a href="yaque.php" class="nav-link"><b><font color='white'><?php echo $menu_3; ?></font></b></a></li>

		          		<li class="nav-item"><a href="food.php" class="nav-link"><b><font color='white'><?php echo $menu_4; ?></font></b></a></li>

		          		<li class="nav-item"><a href="tours.php" class="nav-link"><b><font color='white'><?php echo $menu_5; ?></font></b></a></li>

         				<li class="nav-item"><a href="events.php" class="nav-link"><b><font color='white'><?php echo $menu_6; ?></font></b></a></li>

         				<li class="nav-item"><a href="contact.php" class="nav-link"><b><font color='white'><?php echo $menu_7; ?></font></b></a></li>

	        		</ul>

	      		</div>

	    	</div>

	  </nav>

</div>