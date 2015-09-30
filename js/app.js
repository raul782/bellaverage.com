$(document).foundation();

var bell = $("#bell");
var audio = new Audio('audio/ding.mp3');



function swingBell(){
 	//Animate bell
	bell.addClass("animated swing");

	//Play Ding
  audio.play();

  //Remove animation class after 1.2 seconds
  setTimeout(function() {
  	bell.removeClass('animated swing');
  }, 1200);
}

// Play bell first
swingBell();

//Loop bell ding every 60 seconds
window.setInterval(function(){ swingBell(); }, 20 * 1000);

$('#sound-off').on('click', function(){
	audio.muted = true;
});
