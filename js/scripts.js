( function( $ ) {

  $('.c-carousel').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    dots: false,
    arrows: false
  });

  // Adding icon spinner, hidden by default
  // $('span.ajax-loader').after('<div>loader</div>');
  $( ".wpcf7-submit" ).after( '<svg class="icon icon-spinner animate-spin" style="visibility: hidden;"><use xlink:href="#icon-spinner"></use></svg>' );


  // Show new spinner on Send button click
  $('.wpcf7-submit').on('click', function () {
      $('.icon-spinner').css({ visibility: 'visible' });
  });

  // Hide new spinner on result
  $('.wpcf7').on('wpcf7:invalid wpcf7:spam wpcf7:mailsent wpcf7:mailfailed', function () {
      $('.icon-spinner').css({ visibility: 'hidden' });
  });

} )( jQuery );
