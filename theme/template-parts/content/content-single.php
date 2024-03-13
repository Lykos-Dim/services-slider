<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Services_Slider
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php if ( ! is_page() ) : ?>
			<div class="entry-meta">
				<?php services_slider_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php services_slider_post_thumbnail(); ?>

	<div <?php services_slider_content_class( 'entry-content' ); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'services-slider' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'services-slider' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php services_slider_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->
