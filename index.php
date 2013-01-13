<?php

$gallery_dir = './images/gal/';

?>

<div id="photos">

	<?php for( $i = 0; $i < count($photos); $i++ ) { ?><div

		class="thumb-box"><a

			href="<?php echo $gallery_dir . $photos[$i]['img']; ?>"

			rel="lightbox[<?php echo $photos[$i]['type']; ?>]"

			aTitle="<?php echo htmlspecialchars($photos[$i]['title']); ?>"><div

				id="thumb-text-<?php echo $i; ?>"

				class="thumb-text"><?php echo nl2br($photos[$i]['info']); ?></div><div

					class="hitbox"

					onmouseover="$('#thumb-text-<?php echo $i; ?>').show(0);"

					onmouseout="$('#thumb-text-<?php echo $i; ?>').hide(0);"></div><img

						<?php if( ($i+1) % 5 === 0 ) { ?>class="last-in-row"<?php } ?>

						src="<?php if($photos[$i]['status']==1) { echo './sold-stamp.php?'; } echo $gallery_dir . $photos[$i]['img_thumb']; ?>"

						alt="<?php echo ucfirst($photos[$i]['type']); ?>: image <?php echo ($i + 1); ?> of <?php count($photos); ?> thumb" /></a></div><?php } ?>

</div>

<!-- Scripts -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>