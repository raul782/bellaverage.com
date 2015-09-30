$(document).foundation();
$(document).ready(function(){

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

	//Sound off
	$('#sound').click(function(){
		audio.muted = true;
		audio.volume = 0;
	});

	$( "#sound" ).on( "click", function() {
		console.log( "Volume off" );
	});

	//Loop bell ding every 60 seconds
	window.setInterval(function(){ swingBell(); }, 20 * 1000);



});
