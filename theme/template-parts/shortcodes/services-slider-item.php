<?php


if ($args && isset($args['rid'])) {
    $rid = $args['rid']; // Review ID
}
?>
<div class="services-slider-item">
    <div class="services-slider-item__content">
        <div class="services-slider-item__thumbnail">
            <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="services-slider-item__body">
            <?php the_title('<h4 class="services-slider-item__title">', '</h4>'); ?>
            <div class="services-slider-item__info pb-30">
                <?php get_template_part('template-parts/shortcodes/services-slider-info'); ?>
            </div>
        </div>
        <div class="services-slider-item__overlay">
            <div class="services-slider-item__overlay-content">
                <div class="services-slider-item__overlay-content-title pb-20">
                    <?php the_title('<h4 class="services-slider-item__title">', '</h4>'); ?>
                </div>
                <div class="services-slider-item__overlay-content-info pb-20">
                    <?php get_template_part('template-parts/shortcodes/services-slider-info'); ?>
                </div>
                <div class="services-slider-item__overlay-content-text pb-30">
                    <?php the_excerpt(); ?>
                </div>
                <div class="services-slider-item__overlay-content-button">
                    <a href="<?php the_permalink(); ?>" class="btn btn--white">
                        Book now
                        <button class="arrow arrow--small arrow--white"><i class="fa fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


