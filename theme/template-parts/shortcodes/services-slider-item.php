<?php


if ( $args && isset( $args['rid'] ) ) {
	$rid = $args['rid']; // Review ID
}
?>

<div class="ss-item">
	<div class="ss-item__content">
		<?php the_title( '<h2 class="ss-item__title">', '</h2>' ); ?>
		<?php the_excerpt(); ?>
	</div>
</div>