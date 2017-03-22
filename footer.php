<!-- GET IT 
	================================================== -->
<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-centered">
				<img class="footer_logo" src="img/footer_logo.png">
			</div>
			<div class="col-md-12 col-centered">
				<ul>
					<li><?php echo (!$esp ? "<a href=\"http://www.xfinity.com/corporate/legal/privacyStatement.html\">Privacy Statement</a>" : "<a href=\"http://es.xfinity.com/corporate/legal/privacyStatement.html\">Declaraci&oacute;n de Privacidad</a>"); ?></li>
					<li><?php echo (!$esp ? "<a href=\"http://www.xfinity.com/corporate/legal/visitorAgreement.html\">Visitor Agreement</a>" : "<a href=\"http://es.xfinity.com/corporate/legal/visitorAgreement.html\">Acuerdo del Usuario</a>"); ?></li>
				</ul>
			</div>
			<div class="col-md-12">
				<p class="disclaimer"><?php echo (!$esp ? "Restrictions apply. Only available in Central Division – FL, SC, GA, AL, MS, TN, KY, MI, IN, AR, IL, VA. Taxes and applicable fees additional." : "No disponible en todas las áreas. Se aplican restricciones. Solo disponible en División Central - FL, SC, GA, AL, MS, TN, KY, MI, IN, AR, IL, VA. Impuestos y tarifas son adicionales."); ?>
					 &copy; 2017 Comcast. <?php echo (!$esp ? "All rights reserved." : "Derechos reservados."); ?><p>
			</div>
		</div>
	</div>
</section>  
	 
<!-- JAVASCRIPT
	================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animatescroll.js"></script>
<!--<script src="js/scripts.js"></script>-->    
<script src="js/retina.min.js"></script>
<script>
	$(document).ready(function () {
	  $(".navbar-nav li a").click(function(event) {
			if ($(window).width() < 768) {
				$(".navbar-ex1-collapse").collapse('hide');
			}
	  });
	});
</script>

 <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-67821525-1', 'auto'); ga('send', 'pageview');
</script>