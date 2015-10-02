$(document).foundation();
$(document).ready(function(){

	var bell = $("#bell");
	var audio = new Audio('audio/ding.mp3');


	//Swing Bell and Play Sound
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

	//Sound Toggle on / off
	$('#play').click(function(){
			$(this).toggleClass("pause");
			if( audio.volume === 0 ){
				audio.volume = 1;
			}else{
				audio.volume = 0;
			}
	});

});
