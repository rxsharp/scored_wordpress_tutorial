/* Toggle search icon */
// (function () {
//   $('.search-toggle').click(function() {
//     $('#search-container').slideToggle('show');
//   });
// })();
jQuery(document).ready(function($){
  $('.search-toggle').click(function() {
    $('#search-container').slideToggle('show', function(){
      $('.search-toggle').toggleClass('active');
    });
  });
});