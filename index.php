<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kitten Clicker: ALPHA</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<style>
  body { 
    background: #228844; 
    text-align: center; 
    color: white;
    font-size: 20px;
    font-weight: bold; 
  }
  .box { 
    background: #221144; 
    border: 1px solid #aaaaaa; 
    display: block; 
    padding: 10px; 
    margin: 10px auto 5px; 
    max-width: 320px;
  }

  #kitten-main {
    margin: 3px auto;
    background-image: url('kitten_sprite_by_isibee-d69r5rj.gif');
    background-repeat: no-repeat;
    background-size: 800px;
    width: 150px;
    height: 225px;
  }
  #kitten-main.idle {
    background-position: 28% 75%;
  }
  #kitten-main.pet {
    background-position: 48% 75%;
  }
  #kitten-main.sleep {
    background-position: 92% 75%;
  }

  .upgradeBox {
    background: #221144; 
    border: 1px dotted #aaaaaa; 
    display: block; 
    padding: 4px; 
    margin: 3px auto; 
    max-width: 280px;
    font-size: 14px;
    opacity: 0.4;
    min-height: 110px;
  }
  .upgradeBox .upgradeImage { width: 100px; height: 100px; border: 4px solid black; float: left;}

  .upgradeBox.ready { border: 2px solid white; opacity: 1.0; }
  .upgradeBox.ready .upgradeImage { border: 4px solid white; } 

</style>
<body>
  <div class="box"><p>Kittens: <span id="output">0</span></p></div>
  <div class="box">
    <p>Click to Adopt!</p>
    <div id="kitten-main" class="idle"></div>
  </div>
  <div class="box">
    <p>Upgrades!</p>
    <div id="upgrade1" class="upgradeBox">
      <img class="upgradeImage" src="kitten-mom.png">
      <p>Kitten mother will give birth to a new kitten every 10 seconds</p>
      <p>Cost: <span class="cost">10</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade2" class="upgradeBox">
      <img class="upgradeImage" src="kitten-faucet.jpg">
      <p>Kitten Faucet will attract a kitten every 3 seconds</p>
      <p>Cost: <span class="cost">50</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade3" class="upgradeBox">
      <img class="upgradeImage" src="kitten-checkpoint.gif">
      <p>Kitten Checkpoint will respawn 1 kitten every second</p>
      <p>Cost: <span class="cost">100</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade4" class="upgradeBox">
      <img class="upgradeImage" src="kitten-portal.gif">
      <p>Kitten Portal will pull an interdimensional 5 kittens every second</p>
      <p>Cost: <span class="cost">500</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade5" class="upgradeBox">
      <img class="upgradeImage" src="kitten-astronaut.jpeg">
      <p>Kitten Astronauts fly in kittens from kitten planet. 40 kittens every second</p>
      <p>Cost: <span class="cost">2000</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
  </div>
  <script>
  $("#kitten-main").click(function(){
    updateScore(1);
    last_adopted = timer;
  });

  var score = 0;
  var timer = 0;
  var last_adopted = 0;

  var upgrade1_amount = 0;
  var upgrade1_cost = 10;
  var upgrade1_payout = 1;
  var upgrade1_timeout = 10;
  var upgrade1_last_hit = 0;

  var upgrade2_amount = 0;
  var upgrade2_cost = 50;
  var upgrade2_payout = 1;
  var upgrade2_timeout = 3;
  var upgrade2_last_hit = 0;

  var upgrade3_amount = 0;
  var upgrade3_cost = 100;
  var upgrade3_payout = 1;
  var upgrade3_timeout = 1;
  var upgrade3_last_hit = 0;

  var upgrade4_amount = 0;
  var upgrade4_cost = 500;
  var upgrade4_payout = 5;
  var upgrade4_timeout = 1;
  var upgrade4_last_hit = 0;

  var upgrade5_amount = 0;
  var upgrade5_cost = 2000;
  var upgrade5_payout = 10;
  var upgrade5_timeout = 0.25;
  var upgrade5_last_hit = 0;

  function updateScore(amount){
    score = Math.floor(amount + score);
    $("#output").html(score);
    if(score >= upgrade1_cost){
      $("#upgrade1").addClass('ready');
    }else{
      $("#upgrade1").removeClass('ready');
    }
    if(score >= upgrade2_cost){
      $("#upgrade2").addClass('ready');
    }else{
      $("#upgrade2").removeClass('ready');
    }
    if(score >= upgrade3_cost){
      $("#upgrade3").addClass('ready');
    }else{
      $("#upgrade3").removeClass('ready');
    }
    if(score >= upgrade4_cost){
      $("#upgrade4").addClass('ready');
    }else{
      $("#upgrade4").removeClass('ready');
    }
    if(score >= upgrade5_cost){
      $("#upgrade5").addClass('ready');
    }else{
      $("#upgrade5").removeClass('ready');
    }
  }

  $("#upgrade1").click(function(){
    if(score >= upgrade1_cost){
      upgrade1_amount += 1;
      updateScore(-upgrade1_cost);
      upgrade1_cost = Math.floor(1.2 * upgrade1_cost);
      $("#upgrade1 span.cost").html(upgrade1_cost);
      $("#upgrade1 span.amount").html(upgrade1_amount);
    }
  });

  $("#upgrade2").click(function(){
    if(score >= upgrade2_cost){
      upgrade2_amount += 1;
      updateScore(-upgrade2_cost);
      upgrade2_cost = Math.floor(1.2 * upgrade2_cost);
      $("#upgrade2 span.cost").html(upgrade2_cost);
      $("#upgrade2 span.amount").html(upgrade2_amount);
    }
  });

  $("#upgrade3").click(function(){
    if(score >= upgrade3_cost){
      upgrade3_amount += 1;
      updateScore(-upgrade3_cost);
      upgrade3_cost = Math.floor(1.2 * upgrade3_cost);
      $("#upgrade3 span.cost").html(upgrade3_cost);
      $("#upgrade3 span.amount").html(upgrade3_amount);
    }
  });

  $("#upgrade4").click(function(){
    if(score >= upgrade4_cost){
      upgrade4_amount += 1;
      updateScore(-upgrade4_cost);
      upgrade4_cost = Math.floor(1.2 * upgrade4_cost);
      $("#upgrade4 span.cost").html(upgrade4_cost);
      $("#upgrade4 span.amount").html(upgrade4_amount);
    }
  });

  $("#upgrade5").click(function(){
    if(score >= upgrade5_cost){
      upgrade5_amount += 1;
      updateScore(-upgrade5_cost);
      upgrade5_cost = Math.floor(1.2 * upgrade5_cost);
      $("#upgrade5 span.cost").html(upgrade5_cost);
      $("#upgrade5 span.amount").html(upgrade5_amount);
    }
  });

  function tick(){
    timer += 0.25;
    if(timer < last_adopted + 1){
      $("#kitten-main").addClass('pet');
      $("#kitten-main").removeClass('idle');
      $("#kitten-main").removeClass('sleep');
    }else if(timer > last_adopted + 6 ){
      $("#kitten-main").removeClass('pet');
      $("#kitten-main").removeClass('idle');
      $("#kitten-main").addClass('sleep');
    }else{
      $("#kitten-main").removeClass('pet');
      $("#kitten-main").addClass('idle');
      $("#kitten-main").removeClass('sleep');
    }
    if(upgrade1_last_hit < timer){
      updateScore(upgrade1_payout * upgrade1_amount);
      upgrade1_last_hit += upgrade1_timeout;
    }
    if(upgrade2_last_hit < timer){
      updateScore(upgrade2_payout * upgrade2_amount);
      upgrade2_last_hit += upgrade2_timeout;
    }
    if(upgrade3_last_hit < timer){
      updateScore(upgrade3_payout * upgrade3_amount);
      upgrade3_last_hit += upgrade3_timeout;
    }
    if(upgrade4_last_hit < timer){
      updateScore(upgrade4_payout * upgrade4_amount);
      upgrade4_last_hit += upgrade4_timeout;
    }
    if(upgrade5_last_hit < timer){
      updateScore(upgrade5_payout * upgrade5_amount);
      upgrade5_last_hit += upgrade5_timeout;
    }
  }
  setInterval(tick,250);

  </script>
</body>
</html>