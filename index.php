<!DOCTYPE html>
<html>
<head>
	<title>Snakes And Ladders</title>
	<link href="assets/style.css" rel="stylesheet">
</head>
<body>

<div class="container">

	<div id="box21" class="box">21</div>
	<div id="box22" class="box">22</div>
	<div id="box23" class="box">23</div>
	<div id="box24" class="box">24</div>
	<div id="box25" class="box">25</div>

	<div id="box20" class="box">20</div>
	<div id="box19" class="box">19</div>
	<div id="box18" class="box">18</div>
	<div id="box17" class="box">17</div>
	<div id="box16" class="box">16</div>

	<div id="box11" class="box">11</div>
	<div id="box12" class="box">12</div>
	<div id="box13" class="box">13</div>
	<div id="box14" class="box">14</div>
	<div id="box15" class="box">15</div>
	
	<div id="box10" class="box">10</div>
	<div id="box9" class="box">9</div>
	<div id="box8" class="box">8</div>
	<div id="box7" class="box">7</div>
	<div id="box6" class="box">6</div>

	<div id="box1" class="box">1</div>
	<div id="box2" class="box">2</div>
	<div id="box3" class="box">3</div>
	<div id="box4" class="box">4</div>
	<div id="box5" class="box">5</div>


</div>
<button onclick="javascript:roll_dice()">Roll Dice</button>

<p>
<br><br>
Current Player=> <i id="player">1</i>
<br>
Dice Value => <i id="dice_val"></i>
<br>
</p>


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script>

var player1=0,
	player2=0,
	current_player=1,
	dice=0; 

	$(document).ready(function(){
		$("#box4").addClass("player1");
		$("#box11").addClass("player2");


// initializing players
	//console.log(roll_dice());




});// ready ends


function roll_dice() {
	 dice = Math.floor((Math.random() * 6) + 1);
	 $("#dice_val").html(dice);
	 swap_player();	
}
function swap_player () {
	//current_player=2;
	if(current_player==1)
		current_player=2;
	else
		current_player=1;

	$("#player").html(current_player);	
}

</script>

</body>
</html>