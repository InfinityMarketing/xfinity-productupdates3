<?php

// if (!$_COOKIE['myzip']) { 	header("Location: index.php"); }

$lang = $_GET['lang'];
if ($lang == "esp") { $esp = 1; } else { $esp = 0; }
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo (!$esp ? "Discontinued Packages || Xfinity Product Updates 2" : ""); ?></title>
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
        
        
			<!-- <?php if (!$esp) { ?>
	  	<div class="language">Language: English | <a href="?lang=esp">Espa&ntilde;ol</a></div>
			<?php } else { ?>
	  	<div class="language">Language: <a href="?lang=eng">English</a> | Espa&ntilde;ol</div>
			<?php } ?> -->
	  	<div class="container">
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <!--Replace text with your app name or logo image-->
			    <a class="navbar-brand" href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><img class="nav_logo" src="img/White_XFINITY_Logo.png"></a>			    
			  </div>

			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav">
			      <li><a href="index.php"><?php echo (!$esp ? "Introduction" : "Introducci&oacute;n"); ?></a></li>
			      <li><a href="new_packages.php"><?php echo (!$esp ? "New Packages" : "Nuevos Paquetes"); ?></a></li>
						<li><a href="discontinued.php"><?php echo (!$esp ? "Discontinued Packages" : "Nuevos Paquetes"); ?></a></li>
			      <!-- <li><a onclick="$('#service').animatescroll({padding:71});"><?php echo (!$esp ? "New Services" : "Nuevos Servicios"); ?></a></li> -->
			    </ul>
			  </div>
		  </div>
	  </nav>
	  
	   <!-- HEADER
	   ================================================== -->	  
		<div class="visibled">
			<header style="background:url('img/Hero_Package_Page.png'); background-size: 100%; background-color: #000000; min-height:0;">
   			<img src="img/spacer.png" style="width:100%;" class="spacer">
			</header>
		</div>	 
    
		<div style="width:100%; background-color:#f0f0f2;">
			<div class="container" style="width:75%; max-width:1410px;">
				<div class="row">
					<div class="col-md-12 packages">
						<h3 class="dis_packages_title">Discontinued Packages</h3>
					</div>
				</div>
			</div>
		</div>

  	<section id="discontinued_products" style="padding: 5% 0 0 0;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                        <div class="dis_box">
							<h2 class="">XFINITY Internet Services</h2>
							<p class="d_bb">Extreme 300</p>
                            <p class="">Extreme 150</p>
						</div>

					</div>
				</div>
			</div>
		</section>

		<?php include_once('footer.php'); ?>

	</body>  	
</html> 