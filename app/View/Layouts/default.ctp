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
		<div class="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>	
		<div class="footer"></div>
	</div>
	<div id="footer"></div>
</body>
</html>
