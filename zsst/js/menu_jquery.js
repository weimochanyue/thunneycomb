$( document ).ready(function() {
  // main nav
$("ul.mainnav li").click(function(e) {
 
  $(".ripple").remove();
 
  var posX = $(this).offset().left,
      posY = $(this).offset().top,
      buttonWidth = $(this).width(),
      buttonHeight = $(this).height();
 
  $(this).prepend("<span class='ripple'></span>");
 
  if (buttonWidth >= buttonHeight) {
    buttonHeight = buttonWidth;
  } else {
    buttonWidth = buttonHeight;
  }
 
  var x = e.pageX - posX - buttonWidth / 2;
  var y = e.pageY - posY - buttonHeight / 2;
 
  $(".ripple").css({
    width: buttonWidth,
    height: buttonHeight,
    top: y + 'px',
    left: x + 'px'
  }).addClass("rippleEffect");
   
}); 

$("span.navmobile").click(function(e) {
  var curnav = $("ul.mainnav");
  var show = curnav[0].style.display == "block" ? false:true;
  if(show)
    curnav.show();
  else
    curnav.hide();
});

});