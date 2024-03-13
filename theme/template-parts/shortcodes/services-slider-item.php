<?php


if ( $args && isset( $args['rid'] ) ) {
	$rid = $args['rid']; // Review ID
}
?>

<div class="services-slider-item">
    <div class="services-slider-item__content">
        <div class="services-slider-item__thumbnail">
            <?php the_post_thumbnail( 'full' ); ?>
        </div>
        <div class="services-slider-item__body">
            <?php the_title( '<h2 class="services-slider-item__title">', '</h2>' ); ?>
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>