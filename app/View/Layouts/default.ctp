<?php
/*
 *  Scalabuild - Splash Page Layout
 *  Layout - Slash Page 
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout;?></title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('layout.splash');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div class="top">
			<div class='nav'>
				<ul>
					<li>Join Us!</li>
					<li>Sign In</li>
				</ul>
			</div>
		</div>


		<div class="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>	
		<div class="footer"></div>
	</div>
	<div id="footer">

	</div>



	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-35350278-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>


</body>
</html>
