import $ from 'jquery';

import 'slick-carousel';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';

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


console.log('Front-end JavaScript is working!');


// Initialize Slick carousel
    $('.ss-wrapper').slick({
      dots: true, // Show navigation dots
      arrows: true, // Show navigation arrows
      slidesToShow: 2, // Number of slides to show at a time
      slidesToScroll: 2, // Number of slides to scroll at a time
    });