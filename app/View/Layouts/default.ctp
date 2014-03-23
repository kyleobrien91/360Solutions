<?php
/**
 * Default layout file for
 */
$app_name = __('PenguinApp');
$client = __('360 Solutions');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout . " | " . $client . " on " . $app_name; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		echo $this->Html->css(array(
			'bootstrap.min',
			'londinium-theme',
			'styles',
			'icons',
			'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext'
		));
		echo $this->fetch('css');
	?>
</head>
<body class="sidebar-wide">

	<?php echo $this->element('navbar'); ?>

	<?php echo $this->Session->flash(); ?>

	<div class="page-container">

		<?php echo $this->element('sidebar'); ?>

		<div class="page-content">
			<?php echo $this->fetch('content'); ?>

			<!-- Footer -->
			<div id="footer" class="footer clearfix">
				<div class="pull-left">&copy; 2014. <?php echo $client; ?> on <?php echo $app_name ?> by <a href="http://www.kyleobrien.co.za" target="_blank" >Kyle O'Brien</a></div>
			</div>
			<!-- /footer -->
		</div>



	</div>

	<?php
		echo $this->Html->script(array(
			'//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js',
			'//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js',
			'plugins/charts/sparkline.min',
			'plugins/forms/uniform.min',
			'plugins/forms/select2.min',
			'plugins/forms/inputmask.js',
			'plugins/forms/autosize.js',
			'plugins/forms/inputlimit.min',
			'plugins/forms/listbox',
			'plugins/forms/multiselect',
			'plugins/forms/validate.min',
			'plugins/forms/tags.min',
			'plugins/forms/switch.min',
			'plugins/forms/uploader/plupload.full.min',
			'plugins/forms/uploader/plupload.queue.min',
			'plugins/forms/wysihtml5/wysihtml5.min',
			'plugins/forms/wysihtml5/toolbar',
			'plugins/interface/daterangepicker',
			'plugins/interface/fancybox.min',
			'plugins/interface/moment',
			'plugins/interface/jgrowl.min',
			'plugins/interface/datatables.min',
			'plugins/interface/colorpicker',
			'plugins/interface/fullcalendar.min',
			'plugins/interface/timepicker.min',
			'plugins/interface/collapsible.min',
			'bootstrap.min',
			'application'
		));
		echo $this->fetch('script');
	?>
</body>
</html>
