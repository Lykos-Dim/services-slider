/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import $ from 'jquery';
import 'slick-carousel';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
// Import FontAwesome styles




console.log('Front-end JavaScript is working!');


// Initialize Slick carousel
$(document).ready(function() {
  $('.js-servises-slider').slick({
    arrows: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    prevArrow: $('.js-servises-slider__arrows .js-arrow-prev'),
    nextArrow: $('.js-servises-slider__arrows .js-arrow-next')
  });
});

