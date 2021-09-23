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
