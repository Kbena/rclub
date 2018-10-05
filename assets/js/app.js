/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../scss/app.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
//var $ = require('jquery');


$(function(){
    $("ul#ticker01").liScroll();
});

// $(document).ready(function(){
//     $('#carousel').carousel();
// });

// $(document).ready(function(){

//     $('.nav-p').css('padding-top', '2rem');
//     $('.nav-list-a').css('padding', '1rem');
//     $('.nav-list-a').css('display', 'block');

//     $('.nav-list-a').on('mouseover', function(){
//         $(this).css('background-color', '#4285f4');
//         $(this).css('color', 'white');
//     });
    
//     $('.nav-list-a').on('mouseout', function(){
//         $(this).css('background-color', '#00bc8c');
//     });
    
// });
