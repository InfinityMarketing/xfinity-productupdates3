<?php

// if (!$_COOKIE['myzip']) { 	header("Location: index.php"); }

$lang = $_GET['lang'];
if ($lang == "esp") { $esp = 1; } else { $esp = 0; }
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo (!$esp ? "Discontinued Products and Services || Xfinity Product Updates" : "Paquetes y servicios ya no disponibles || Xfinity Producto Update"); ?></title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSS 
        ================================================== -->
    <!-- Bootstrap 3-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <!-- Template Styles -->
    <link href="css/style.css" rel="stylesheet" media="screen">
	</head>
  
  <body>
	  <!-- NAVBAR
	    ==================================================== -->
	  <nav class="navbar navbar-default navbar-fixed-top"> <!--role="navigation"-->
			<?php if (!$esp) { ?>
				<div class="language">Language: English | <a href="?lang=esp">Espa&ntilde;ol</a></div>
			<?php } else { ?>
				<div class="language">Language: <a href="?lang=eng">English</a> | Espa&ntilde;ol</div>
			<?php } ?>
			<div class="container">
				<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    
			    <!--Replace text with your app name or logo image-->
			    <a class="navbar-brand" href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><img src"http://grfx.cstv.com/schools/mifl/graphics/mifl-11-logo-xfinity2.gif"></a>
			    
			  </div>
			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			  	<a href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><img src"../img/logo.png"></a>
			    <ul class="nav navbar-nav">
			      <li><a href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><?php echo (!$esp ? "Back Home" : "Regresar a la página principal"); ?></a></li>
			    </ul>
			  </div>
		  </div>
	  </nav>
	  
		<!-- HEADER
			================================================== -->	  
		<div class="visibled">
			<header style="background:transparent;height:0; min-height:0"></header>
		</div>
	  
		<section id="voice" style="background-color:#eeeeee; padding:12px 0 1px 0;" class="bb">
			<h1><?php echo (!$esp ? "Discontinued Products and Services" : "Paquetes y Servicios Retirados"); ?></h1>
		</section>
		
		<section id="double">
			<div class="container" style="padding:40px 0">
				<div class="wrapper">
					<!-- Remove <h3 class="xf" style="margin-top:0;"><?php echo (!$esp ? "Double Plays" : "Paquetes Dobles"); ?></h3>
					<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  					<tr>
    					<td class="channel-name2 bb"><?php echo (!$esp ? "Blast!® Plus Double Play" : "Blast!® Plus Paquete Doble"); ?></td>
						</tr>
					</table>-->
				</div>
			</div>
	  </section>

		<!-- Remove <section id="internet" style="background-color:#eeeeee;">
			<div class="container" style="padding:40px 0; background-color: #eeeeee;">
				<div class="wrapper">
					<h3 class="xf" style="margin-top:0;">XFINITY<sup>&reg;</sup> Internet</h3>
					<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
	  				<tr>
	    				<td class="channel-name2 bb">Internet 5</td>
	  				</tr>
						<tr>
    					<td class="channel-name2 bb">Blast!®</td>
  					</tr>
						<tr>
							<td class="channel-name2 bb">Extreme 250</td>
  					</tr>
					</table>
				</div>
			</div>
	  </section> -->

		<div class="notes" style="text-align:center;">
			<div class="container">
				<?php echo (!$esp ? "If you currently subscribe to one of these services, you will continue to receive the service until you make a change to your service or you receive further notice." : "Si te suscribes a uno de estos servicios, continuaras recibiendo el servicio hasta que hagas un cambio en tus servicios o recibas un nuevo aviso."); ?>
			</div>
		</div>

		<?php include_once('footer.php'); ?>
  	
</body>
</html>