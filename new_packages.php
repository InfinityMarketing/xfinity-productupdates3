<?php

// if (!$_COOKIE['myzip']) { 	header("Location: index.php"); }

$lang = $_GET['lang'];
if ($lang == "esp") { $esp = 1; } else { $esp = 0; }
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo (!$esp ? "New Packages || Xfinity Product Updates 2" : "Nuevos paquetes || Xfinity Producto Update"); ?></title>
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
						<h3 class="packages_title">Click here to subscribe to one of these new packages.</h3>
						<br>
						<a class="button_new" href="http://www.xfinity.com" target="_blank"><?php echo (!$esp ? "Subscribe" : "Cómpralo aquí"); ?></a>
					</div>
				</div>
			</div>
		</div>
    
    
    
        <section id="">
			<div class="container" style="padding-top:30px; padding-bottom:50px">
				<h3 class="xf" style="margin-top:0;"><?php echo (!$esp ? "XFINITY Triple Play Packages<sup>1,2</sup>" : ""); ?></h3>
              
				<table border="0" cellpadding="0" cellspacing="0">
	 		      <tr class="bb">
	    			<td></td>
	    			<td class="price-heading"><p><?php echo (!$esp ? "Price" : "Precio"); ?></p></td>
	  			  </tr>
                  
                   <!-- PRODUCT BLOCK -->
                  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "X1 Starter Extreme Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$190.00</td>
	  			  </tr>
	  			  <tr class="hov bb">
				    <td colspan="2" class="desc bb">
                      <p><?php echo (!$esp ? "Includes Digital Starter, Streampix® and AnyRoom® DVR Service for primary outlet, Extreme 300 Internet and XFINITY® Voice Unlimited" : ""); ?></p>
                    </td>
	  			  </tr>
                  
                   <!-- PRODUCT BLOCK -->
                  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "X1 Preferred Extreme Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$210.00</td>
	  			  </tr>
	  			  <tr class="hov bb">
				    <td colspan="2" class="desc bb">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ®, Streampix® and AnyRoom® DVR Service for primary outlet, HD Technology Fee, Extreme 300 Internet and XFINITY® Voice Unlimited" : ""); ?></p>
                    </td>
	  			  </tr>
                  
                   <!-- PRODUCT BLOCK -->
                  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "X1 Premier Extreme Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$240.00</td>
	  			  </tr>
	  			  <tr class="hov bb">
				    <td colspan="2" class="desc bb">
                      <p><?php echo (!$esp ? "Includes Digital Premier, Streampix® and AnyRoom® DVR Service for primary outlet, HD Technology Fee, Extreme 300 Internet, and XFINITY® Voice Unlimited" : ""); ?></p>
                    </td>
	  			  </tr>
                  
                  
				</table>
			</div>
		</section>
    
        <section id="">
			<div class="container" style="padding-top:30px; padding-bottom:50px">
				<h3 class="xf" style="margin-top:0;"><?php echo (!$esp ? "XFINITY Double Play Packages<sup>1,2</sup>" : ""); ?></h3>
              
				<table border="0" cellpadding="0" cellspacing="0">
	 		      <tr class="bb">
	    			<td></td>
	    			<td class="price-heading"><p><?php echo (!$esp ? "Price" : "Precio"); ?></p></td>
	  			  </tr>
                  
                  <!-- PRODUCT BLOCK -->
                  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "Extreme Plus" : ""); ?></td>
	    			<td class="price1" rowspan="2">$109.95</td>
	  			  </tr>
	  			  <tr class="hov bb">
				    <td colspan="2" class="desc bb">
                      <p><?php echo (!$esp ? "Includes Limited Basic, choice of HBO® or SHOWTIME® for primary outlet and Extreme 300 Internet" : ""); ?></p>
                    </td>
	  			  </tr>
                  
                  <!-- PRODUCT BLOCK -->
                  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "X1 Starter Extreme Double Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$170.00</td>
	  			  </tr>
	  			  <tr class="hov bb">
				    <td colspan="2" class="desc bb">
                      <p><?php echo (!$esp ? "Includes Digital Starter, Streampix® and AnyRoom® DVR Service for primary outlet, HD Technology Fee and Extreme 300 Internet" : ""); ?></p>
                    </td>
	  			  </tr>
                  
                    <!-- PRODUCT BLOCK -->
                  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "X1 Preferred Extreme Double Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$190.00</td>
	  			  </tr>
	  			  <tr class="hov bb">
				    <td colspan="2" class="desc bb">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ®, Streampix® and AnyRoom® DVR Service for primary outlet, HD Technology Fee and Extreme 300 Internet" : ""); ?></p>
                    </td>
	  			  </tr>
                  
                   <!-- PRODUCT BLOCK -->
                  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "X1 Premier Extreme Double Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$220.00</td>
	  			  </tr>
	  			  <tr class="hov bb">
				    <td colspan="2" class="desc bb">
                      <p><?php echo (!$esp ? "Includes Digital Premier, Streampix®, and AnyRoom® DVR Service for primary outlet, HD Technology Fee, and Extreme 300 Internet" : ""); ?></p>
                    </td>
	  			  </tr>
                  
				</table>
			</div>
		</section>
      
      <section id="">
			<div class="container" style="padding-top:30px; padding-bottom:50px">
				<h3 class="xf" style="margin-top:0;"><?php echo (!$esp ? "XFINITY Internet<sup>1,3</sup>" : ""); ?></h3>
              
				<table border="0" cellpadding="0" cellspacing="0">
	 		      <tr class="bb">
	    			<td></td>
	    			<td class="price-heading"><p><?php echo (!$esp ? "Price" : "Precio"); ?></p></td>
	  			  </tr>
                  
                  <!-- PRODUCT BLOCK -->
                  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "Extreme 300<sup>4</sup>" : ""); ?></td>
	    			<td class="price1" rowspan="2">$99.95</td>
	  			  </tr>
	  			  <tr class="hov bb">
				    
	  			  </tr>
                  
				</table>
			</div>
		</section>



		

		<div class="container">
			<div class="notes">
		      <ol>
                <li>Certain services available separately or as a part of other levels of service. Comcast service is subject to Comcast’s standard terms and conditions of service. Unless otherwise specified, prices shown are the monthly charge for the corresponding service, equipment or package. Prices shown do not include applicable taxes, franchise fees, FCC fees, Regulatory Recovery Fee, Public Access fees, other state or local fees or other applicable charges (e.g., per-call toll or international charges). Prices, services and features are subject to change. If you are a video service customer and you own a compatible digital converter or CableCARD device, please call 1-800-XFINITY for pricing information or visit xfinity.com/equipmentpolicy. ©2017 Comcast. All rights reserved.</li>
                <li>Requires a Voice/Data Modem.</li>
                <li>Voice/Data modem required. For more information regarding XFINITY Internet go to xfinity.com/internet-service.html.</li>
                <li>Not available in all areas. May require installation and non-refundable installation charge.</li>
              </ol>
			</div>
		</div>

		<?php include_once('footer.php'); ?>

	</body>  	
</html>