jQuery(document).ready(function() {
    jQuery(document).on('facetwp-refresh', function() {
      jQuery('.faq li .question').click(function () {
          jQuery(this).find('.plus-minus-toggle').toggleClass('collapsed');
          jQuery(this).parent().toggleClass('active');
      });
    });
});