<?php
$lang = $_GET['lang'];
if ($lang == "esp") { $esp = 1; } else { $esp = 0; }
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo (!$esp ? "Service and Installation Changes || Xfinity Product Updates" : "Cambios de servicios e instalaci&oacute;n || Xfinity Producto Update"); ?></title>
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
    <link href="css/style.css?v=1" rel="stylesheet" media="screen">
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
			      <li><a href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><?php echo (!$esp ? "Back Home" : "Regresar a la página principal "); ?></a></li>
			    </ul>
			  </div>
		  </div>
	  </nav>
	  
		<!-- HEADER
			================================================== -->	  
		<div class="visibled">
			<header style="background: url('img/Hero_Internet.png'); background-size: 100%; background-color: #000000; min-height:0;">
   			<img src="img/spacer.gif" style="width:100%;">
			</header>
		</div>	  
		<div style="width:100%;background-color:#eeeeee;">
			<div class="container" style="width:55%; max-width:1410px;">
				<div class="row">
					<div class="col-md-12 packages rightline">
						<div class="gray" style="padding-top:13px;" onclick="$('#internet').animatescroll({padding:71});">
							<h1>XFINITY Internet</h1>
						</div>
						<a class="button" href="http://<?php echo (!$esp ? "www." : "es."); ?>xfinity.com/internet-service.html" target="_blank"><?php echo (!$esp ? "Start Shopping" : "Cómpralo aquí"); ?></a>
					</div>
				</div>
			</div>
		</div>

		<section id="internet">
			<div class="container" style="padding-top:30px; padding-bottom:50px">
				<h3 class="xf" style="margin-top:0;">XFINITY Internet</h3>
				<table border="0" cellpadding="0" cellspacing="0">
						<tr class="bb">
  					<td></td>
  					<td class="price-heading"><p><?php echo (!$esp ? "Price" : "Precio"); ?></p></td>
					</tr>
  				<tr>
    				<td class="channel-name1"><?php echo (!$esp ? "Extreme 300<sup>1</sup>" : "Extreme 300<sup>1</sup>"); ?></td>
    				<td class="price1" rowspan="2">$99.95</td>
  				</tr>
  				<tr class="hov">
    				<td colspan="2" class="desc"><p><?php echo (!$esp ? "Download speeds up to 300 Mbps. Upload speeds up to 25 Mbps." : "Velocidades de descarga de hasta 300 Mbps. Velocidades de subir de hasta 25 Mbps."); ?></p></td>
  				</tr>
					<tr>
  					<td class="channel-name1"><?php echo (!$esp ? "1 Gig<sup>1</sup>" : "1 Gig<sup>1</sup>"); ?></td>
  					<td class="price1" rowspan="2">$139.95</td>
					</tr>
					<tr class="hov">
  					<td colspan="2" class="desc"><p><?php echo (!$esp ? "Download speeds up to 1 Gbps. Upload speeds up to 35 Mbps." : "Velocidades de descarga de hasta 1 Gbps. Velocidades de subir de hasta 35 Mbps."); ?></p></td>
					</tr>
				</table>
			</div>
		</section>

		<div class="container">
			<div class="notes">
				<ol>
					<?php if (!$esp) { ?>
					<li>Not available in all areas. May require installation and non-refundable installation charge.</li>
	    			&nbsp;<br>
	    			Requires a Data Modem.
					<?php } else { ?>
					<li>No disponible en todas las áreas. Puede requerir instalación y cargos por la instalación sin reembolso.</li>
	    			&nbsp;<br>
	    			Requiere un módem de data.
					<?php } ?>
				</ol>
			</div>
		</div>

		<?php include_once('footer.php'); ?>

	</body>  	
</html>