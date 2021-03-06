/**
 * Rift v1.0.0
 * An itsy bitsy image-splitting jQuery plugin
 * 
 * Licensed under the MIT license.
 * Copyright 2013 Kyle Foster @hkfoster
 */
;(function ( $, window, document, undefined ) {

  $.fn.rift = function () {

    return this.each(function () {
      
      // Vurribles
      var element = $(this),
          elemImg = element.find('img'),
          imgSrc  = elemImg.attr('src');
  
      // We be chainin'  
      element
        .prepend('<span class="top-span"></span>')
        .append('<span class="btm-span"></span>')
        .find('span.top-span')
        .css('background', 'url(' + imgSrc + ') no-repeat center top')
        .css('background-size', '100%')
        .parent()
        .find('span.btm-span')
        .css('background', 'url(' + imgSrc + ') no-repeat center bottom')
        .css('background-size', '100%');
    });
  };
})( jQuery, window, document );

$('.rift').rift();