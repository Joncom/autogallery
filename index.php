<html>

	<head>

		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.smooth-scroll.min.js"></script>
		<script type="text/javascript" src="js/lightbox.js"></script>

	</head>

	<body>

		<div id="photos">

			<?php for( $i = 1; $i <= 3; $i++ ) { ?>

				<a href="images/<?php echo $i; ?>.jpg" rel="lightbox" title="my caption">image #<?php echo $i; ?></a>

			<?php } ?>

		</div>

	</body>

</html>