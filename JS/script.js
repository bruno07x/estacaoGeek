// NOTE: Code menu hamburguer
$(document).ready(function() {
    $(".container").click(function() {
      $('.menuDisable').is(function(){
        $(this).slideToggle('slow');
      });
      $(".stick").toggleClass(function () {
        return $(this).is('.open, .close') ? 'open close' : 'open';
      });
    });

  });