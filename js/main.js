$('#answer').click(function(){
  $('#commentform').show();
});

$('#commentform_bg').click(function(){
  $('#commentform').hide();
});


var currentMousePos = { x: -1, y: -1 };
var window_w = $( window ).width();
var window_h = $( window ).height();

$('body').mousemove(function(){
  currentMousePos.x = event.clientX;
  currentMousePos.y = event.clientY;
  $('#circle').css({"left": window_w - currentMousePos.x, "top": window_h - currentMousePos.y});
  $('#circle2').css({"left": currentMousePos.x, "top": currentMousePos.y});

});

// touch event on circle
document.addEventListener('touchmove', function(e) {
    e.preventDefault();
    var touch = e.touches[0];
    currentMousePos.x = touch.clientX;
    currentMousePos.y = touch.clientY;
    $('#circle').css({"left": window_w - currentMousePos.x, "top": window_h - currentMousePos.y});
    $('#circle2').css({"left": currentMousePos.x, "top": currentMousePos.y});
}, false);


$(".about").click(function(){
  $('.info').first().css({opacity: 0, display: 'flex'}).animate({
                opacity: 1
            }, 300);
  // $(".info").first().fadeIn(300);
  $(".questions").first().fadeOut(300);
});

$("#info_button").click(function(){
  $('.info').first().css({opacity: 0, display: 'flex'}).animate({
                opacity: 1
            }, 300);
  // $(".info").first().fadeIn(300);
  $(".questions").first().fadeOut(300);
});

$(".info").click(function(){
  $(".info").first().fadeOut(300);
  $(".questions").first().fadeIn(300);
});
