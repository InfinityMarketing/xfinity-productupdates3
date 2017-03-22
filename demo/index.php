<?php

// if (!$_COOKIE['myzip']) { 	header("Location: index.php"); }

$lang = $_GET['lang'];
if (!$lang) { header("Location: index.php?lang=eng"); }
if ($lang == "esp") { $esp = 1; } else { $esp = 0; }

?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo (!$esp ? "XFINITY Product Updates" : "XFINITY Producto Update"); ?></title>
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
    <link href="css/style.css?v=5" rel="stylesheet" media="screen">
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
			    <a class="navbar-brand" href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><img src="img/logo2.png"></a>			    
			  </div>

			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav">
			      <li><a onclick="$('header').animatescroll({padding:71});"><?php echo (!$esp ? "Introduction" : "Introducci&oacute;n"); ?></a></li>
			      <li><a onclick="$('#new_packages').animatescroll({padding:71});"><?php echo (!$esp ? "New Packages" : "Nuevos Paquetes"); ?></a></li>
			      <li><a onclick="$('#service').animatescroll({padding:71});"><?php echo (!$esp ? "New Services" : "Nuevos Servicios"); ?></a></li>
			    </ul>
			  </div>
		  </div>
	  </nav>
	  
	  <!-- HEADER
	  ================================================== -->	  
	  <div class="visibled">
	  	<header>
		 		<div class="container">
			 		<div class="row">
				 		<div class="col-md-12">
							<div style="max-width:650px;">
					  		<h1><?php echo (!$esp ? "New packages and services are now available." : "Nuevos paquetes y servicios disponibles ahora."); ?></h1>
								<p style="border-top: 2px solid #52adee; margin-bottom:20px; width:40%"></p>
					  		<p class="lead2"><?php echo (!$esp ? "Effective: November 1, 2016" : "Disponible: 1 de noviembre del 2016"); ?></p>
							</div>
						</div>
					</div>
				</div>
	 		</header>
		</div>
		<div style="clear:both"></div>

		<section id="new_packages">
			<div class="container">
				<div class="row" style="padding-top:30px">
					<div class="col-md-12">
						<h1 style="margin-bottom:0"><b><?php echo (!$esp ? "New Packages" : "Nuevos paquetes dise&ntilde;ados justo para t&iacute;."); ?></b></h1>
						<h4 class="paddb" style="margin-bottom:20px"><?php echo (!$esp ? "Click below to learn more" : "Haz click abajo para aprender más"); ?></h4>
					</div>
				</div>

				<div class="bigblue"><?php echo (!$esp ? "Bundled Packages" : "Paquetes combinados"); ?></div>
			
				<div class="row">
					<div class="col-md-6 padd lright">
						<h5><?php echo (!$esp ? "Triple Plays with XFINITY&nbsp;Voice" : "Paquete Triple con XFINITY&nbsp;Voice"); ?></h5>
						<?php echo (!$esp ? "X1 Starter Extreme Triple Play" : "X1 Starter Extreme Paquete Triple"); ?><br>
						<?php echo (!$esp ? "X1 Preferred Extreme Triple Play" : "X1 Preferred Extreme Paquete Triple"); ?><br>
						<?php echo (!$esp ? "X1 Premier Extreme Triple Play" : "X1 Premier Extreme Paquete Triple"); ?><br>
						&nbsp;
					</div>
					<div class="col-md-6 padd">
						<h5><?php echo (!$esp ? "Double Plays" : "Paquetes Dobles"); ?></h5>
						<?php echo (!$esp ? "Extreme Plus" : "Extreme Plus"); ?><br>
						<?php echo (!$esp ? "X1 Starter Extreme Double Play" : "X1 Starter Extreme Paquete Doble"); ?><br>
						<?php echo (!$esp ? "X1 Preferred Extreme Double Play" : "X1 Preferred Extreme Paquete Doble"); ?><br>
						<?php echo (!$esp ? "X1 Premier Extreme Double Play" : "X1 Premier Extreme Paquete Doble"); ?>
					</div>
				</div>
				<div class="row" style="text-align:center;">
					<div class="col-md-12" style="padding:20px 0 50px">
						<a class="button_new" href="new_packages.php<?php echo (!$esp) ? "?lang=eng" : "?lang=esp"; ?>"><?php echo (!$esp ? "View Here" : "Ver Aqu&iacute;"); ?>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="service" style="background-color:#eeeeee;">
			<div class="container">
				<div class="row">
					<h1 style="padding-top:30px; margin-top:0;"><b><?php echo (!$esp ? "New XFINITY Internet Services" : "Nuevos Servicios de XFINITY Internet"); ?></b></h1>
					<div class="row" style="margin:0 auto;">
						<div class="col-md-12 padd">
							<h5>XFINITY Internet</h5>
							Extreme 300<br>
							1 Gig<br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="padding:20px 0 50px">
							<a class="button_new" href="service_installation.php<?php echo (!$esp) ? "?lang=eng" : "?lang=esp"; ?>"><?php echo (!$esp ? "View Here" : "Ver Aqu&iacute;"); ?></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Remove <section id="available">
			<div class="container">
				<div class="row" style="padding-top:30px">
					<div class="col-md-12">
						<h1><b><?php echo (!$esp ? "Retired Packages and Services" : "Paquetes y Servicios ya no Disponibles"); ?></b></h1>
						<a class="button_new" href="discontinued.php<?php echo (!$esp) ? "?lang=eng" : "?lang=esp"; ?>"><?php echo (!$esp ? "View Here" : "Ver Aqu&iacute;"); ?></a>
					</div>
				</div>
			</div>
		</section> -->

		<?php include_once('footer.php'); ?>
		
	</body>
</html>