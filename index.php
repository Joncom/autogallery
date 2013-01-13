<html>

	<head>

		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.smooth-scroll.min.js"></script>
		<script type="text/javascript" src="js/lightbox.js"></script>

		<link href="css/reset.css" rel="stylesheet" />
		<link href="css/lightbox.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />

	</head>

	<body>

		<div id="photos">

			<?php for( $i = 1; $i <= 3; $i++ ) { ?>

				<a href="images/<?php echo $i; ?>.jpg" rel="lightbox[myset]" aTitle="this is caption <?php echo $i; ?>">image #<?php echo $i; ?></a>

			<?php } ?>

		</div>

	</body>

</html>