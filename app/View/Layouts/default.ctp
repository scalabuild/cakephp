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
		<div class="header"></div>
		<div class="content">
			
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>

			<div class="push"></div>
		</div>
		<div class="footer"></div>
	</div>
</body>
</html>
