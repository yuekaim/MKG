$( document ).ready(function() {
    var width = $("body").width();

    if (width > 1024) {
      $('.question_page').first().css('top', '5em');
    }
});
