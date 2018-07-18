<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kitten Clicker</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
    max-width: 360px;
  }

  #kitten-main {
    margin: 3px auto;
    background-image: url('kitten_sprite_by_isibee-d69r5rj.gif');
    background-repeat: no-repeat;
    background-size: 800px;
    width: 150px;
    height: 225px;
    cursor: pointer;
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
    max-width: 320px;
    font-size: 14px;
    opacity: 0.4;
    min-height: 110px;
  }
  .upgradeBox .upgradeImage { width: 100px; height: 100px; border: 4px solid black; float: left;}

  .upgradeBox.ready { border: 2px solid white; opacity: 1.0; }
  .upgradeBox.ready .upgradeImage { border: 4px solid white; }
  .spacer {padding: 1px; margin: 10px;}

</style>
<body>
  <div class="box">
    <h2>Kittens: <span id="output">0</span></h2>
    <p>Puppy Bonus: +<span id="puppy-output">0</span>% to all kittens.</p>
  </div>
  <div class="box">
    <p>Click to Adopt!</p>
    <div id="kitten-main" class="idle"></div>
  </div>
  <div class="box">
    <p>Upgrades!</p>
    <div id="upgrade1" class="upgradeBox">
      <img class="upgradeImage" src="kitten-mom.png">
      <p>Kitten mother will give birth to a new kitten every 5 seconds</p>
      <p>Cost: <span class="cost">10</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade2" class="upgradeBox">
      <img class="upgradeImage" src="kitten-faucet.jpg">
      <p>Kitten Faucet will attract a kitten every 2 seconds</p>
      <p>Cost: <span class="cost">100</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade3" class="upgradeBox">
      <img class="upgradeImage" src="kitten-checkpoint.gif">
      <p>Kitten Checkpoint will respawn 4 kittens every second</p>
      <p>Cost: <span class="cost">500</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade4" class="upgradeBox">
      <img class="upgradeImage" src="kitten-portal.gif">
      <p>Kitten Portal will pull an interdimensional 10 kittens every second</p>
      <p>Cost: <span class="cost">3000</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade5" class="upgradeBox">
      <img class="upgradeImage" src="kitten-astronaut.jpeg">
      <p>Kitten Astronauts fly in kittens from kitten planet. 40 kittens every second</p>
      <p>Cost: <span class="cost">10000</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade6" class="upgradeBox">
      <img class="upgradeImage" src="kitten-satan.jpg">
      <p>Kitten Satan resurrects fallen kittens from the pits of hell. 166 kittens every second</p>
      <p>Cost: <span class="cost">66600</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
    <div id="upgrade7" class="upgradeBox">
      <img class="upgradeImage" src="kitten-sayian.jpg">
      <p>Kitten Sayian uses the dragon balls to wish into existence 500 kittens every second</p>
      <p>Cost: <span class="cost">200000</span></p>
      <p>Amount: <span class="amount">0</span></p>
    </div>
  </div>



  <div class="box">
    <p>Achievements!</p>
    <div id="achievementAmount1" class="upgradeBox">
      <h2>For Starters...</h2>
      <p>Adopt a Kitten</p>
      <p>Award: +0% Puppy Bonus</p>
    </div>
    <div id="achievementAmount2" class="upgradeBox">
      <h2>I Like Kittens</h2>
      <p>Own 10 Kitten</p>
      <p>Award: +0.5% Puppy Bonus</p>
    </div>
    <div id="achievementAmount3" class="upgradeBox">
      <h2>I Love Kittens</h2>
      <p>Own 100 Kitten</p>
      <p>Award: +0.5% Puppy Bonus</p>
    </div>
    <div id="achievementAmount4" class="upgradeBox">
      <h2>I Need Kittens</h2>
      <p>Own 1,000 Kitten</p>
      <p>Award: +1% Puppy Bonus</p>
    </div>
    <div id="achievementAmount5" class="upgradeBox">
      <h2>Kitten Hoard</h2>
      <p>Own 10,000 Kitten</p>
      <p>Award: +1.5% Puppy Bonus</p>
    </div>
    <div id="achievementAmount6" class="upgradeBox">
      <h2>Kitten Army</h2>
      <p>Own 100,000 Kitten</p>
      <p>Award: +2% Puppy Bonus</p>
    </div>
    <div id="achievementAmount7" class="upgradeBox">
      <h2>Kitten Master</h2>
      <p>Own 1,000,000 Kitten</p>
      <p>Award: +5% Puppy Bonus</p>
    </div>
    <div id="achievementAmount8" class="upgradeBox">
      <h2>Kitten Overlord</h2>
      <p>Own 10,000,000 Kitten</p>
      <p>Award: +20% Puppy Bonus</p>
    </div>

    <div class="spacer"></div>


    <div id="achievementMother1" class="upgradeBox">
      <h2>Nursing</h2>
      <p>Own 1 Kitten Mother</p>
      <p>Award: +0% Puppy Bonus</p>
    </div>
    <div id="achievementMother2" class="upgradeBox">
      <h2>Nursery</h2>
      <p>Own 5 Kitten Mothers</p>
      <p>Award: +0.5% Puppy Bonus</p>
    </div>
    <div id="achievementMother3" class="upgradeBox">
      <h2>Breeder</h2>
      <p>Own 10 Kitten Mothers</p>
      <p>Award: +1% Puppy Bonus</p>
    </div>
    <div id="achievementMother4" class="upgradeBox">
      <h2>Population Problem</h2>
      <p>Own 25 Kitten Mothers</p>
      <p>Award: +1.5% Puppy Bonus</p>
    </div>

    <div class="spacer"></div>


    <div id="achievementFaucet1" class="upgradeBox">
      <h2>Wet Kitty</h2>
      <p>Own 1 Kitten Faucet</p>
      <p>Award: +0.5% Puppy Bonus</p>
    </div>
    <div id="achievementFaucet2" class="upgradeBox">
      <h2>Thirsty Kitty</h2>
      <p>Own 5 Kitten Faucets</p>
      <p>Award: +1% Puppy Bonus</p>
    </div>
    <div id="achievementFaucet3" class="upgradeBox">
      <h2>Quenched Kitty</h2>
      <p>Own 10 Kitten Faucets</p>
      <p>Award: +1.5% Puppy Bonus</p>
    </div>
    <div id="achievementFaucet4" class="upgradeBox">
      <h2>Hydroponics</h2>
      <p>Own 25 Kitten Faucets</p>
      <p>Award: +2% Puppy Bonus</p>
    </div>

    <div class="spacer"></div>


    <div id="achievementCheckpoint1" class="upgradeBox">
      <h2>Checkpoint... done</h2>
      <p>Own 1 Kitten Checkpoint</p>
      <p>Award: +1% Puppy Bonus</p>
    </div>
    <div id="achievementCheckpoint2" class="upgradeBox">
      <h2>I'll be back</h2>
      <p>Own 5 Kitten Checkpoint</p>
      <p>Award: +1.5% Puppy Bonus</p>
    </div>
    <div id="achievementCheckpoint3" class="upgradeBox">
      <h2>Back again!</h2>
      <p>Own 15 Kitten Checkpoint</p>
      <p>Award: +2% Puppy Bonus</p>
    </div>

    <div class="spacer"></div>


    <div id="achievementPortal1" class="upgradeBox">
      <h2>This was a Triumph!</h2>
      <p>Own 1 Kitten Portal</p>
      <p>Award: +1.5% Puppy Bonus</p>
    </div>
    <div id="achievementPortal2" class="upgradeBox">
      <h2>I'm making a note here...</h2>
      <p>Own 5 Kitten Portal</p>
      <p>Award: +2% Puppy Bonus</p>
    </div>
    <div id="achievementPortal3" class="upgradeBox">
      <h2>Huge Success!</h2>
      <p>Own 10 Kitten Portal</p>
      <p>Award: +2.5% Puppy Bonus</p>
    </div>

    <div class="spacer"></div>


    <div id="achievementAstronaut1" class="upgradeBox">
      <h2>To Infinity!</h2>
      <p>Own 1 Kitten Astronaut</p>
      <p>Award: +2% Puppy Bonus</p>
    </div>
    <div id="achievementAstronaut2" class="upgradeBox">
      <h2>And Beyond!!</h2>
      <p>Own 5 Kitten Astronauts</p>
      <p>Award: +2.5% Puppy Bonus</p>
    </div>

    <div class="spacer"></div>


    <div id="achievementSatan1" class="upgradeBox">
      <h2>Welcome to hell!</h2>
      <p>Own 1 Kitten Satan</p>
      <p>Award: +2.5% Puppy Bonus</p>
    </div>
    <div id="achievementSatan2" class="upgradeBox">
      <h2>Enjoy the Buffet!!</h2>
      <p>Own 5 Kitten Satans</p>
      <p>Award: +3% Puppy Bonus</p>
    </div>

    <div class="spacer"></div>


    <div id="achievementSayian1" class="upgradeBox">
      <h2>I am the Kitten of the universe!</h2>
      <p>Own 1 Kitten Sayian</p>
      <p>Award: +5% Puppy Bonus</p>
    </div>
  </div>

<div class="upgradeBox">
  <p>Made with love<br>For: Sparkie<br>Love, Spex</p>
</div>
  <script>
  function increasePuppyBonus(amount){
    puppy_bonus = Math.round( (puppy_bonus + amount) * 10 ) / 10;
    $("#puppy-output").html(puppy_bonus);
  }
  function achievementCheck(){
    if(!$("#achievementAmount1").hasClass('ready')){
      if(score >= 1){
        $("#achievementAmount1").addClass('ready');
      }
    }else if(!$("#achievementAmount2").hasClass('ready')){
      if(score >= 10){
        $("#achievementAmount2").addClass('ready');
        increasePuppyBonus(0.5);
      }
    }else if(!$("#achievementAmount3").hasClass('ready')){
      if(score >= 100){
        $("#achievementAmount3").addClass('ready');
        increasePuppyBonus(0.5);
      }
    }else if(!$("#achievementAmount4").hasClass('ready')){
      if(score >= 1000){
        $("#achievementAmount4").addClass('ready');
        increasePuppyBonus(1);
      }
    }else if(!$("#achievementAmount5").hasClass('ready')){
      if(score >= 10000){
        $("#achievementAmount5").addClass('ready');
        increasePuppyBonus(1.5);
      }
    }else if(!$("#achievementAmount6").hasClass('ready')){
      if(score >= 100000){
        $("#achievementAmount6").addClass('ready');
        increasePuppyBonus(2);
      }
    }else if(!$("#achievementAmount7").hasClass('ready')){
      if(score >= 1000000){
        $("#achievementAmount7").addClass('ready');
        increasePuppyBonus(5);
      }
    }else if(!$("#achievementAmount8").hasClass('ready')){
      if(score >= 10000000){
        $("#achievementAmount8").addClass('ready');
        increasePuppyBonus(20);
      }
    }

    if(!$("#achievementMother1").hasClass('ready')){
      if(upgrade1_amount >= 1){
        $("#achievementMother1").addClass('ready');
      }
    }else if(!$("#achievementMother2").hasClass('ready')){
      if(upgrade1_amount >= 5){
        $("#achievementMother2").addClass('ready');
        increasePuppyBonus(0.5);
      }
    }else if(!$("#achievementMother3").hasClass('ready')){
      if(upgrade1_amount >= 10){
        $("#achievementMother3").addClass('ready');
        increasePuppyBonus(1);
      }
    }else if(!$("#achievementMother4").hasClass('ready')){
      if(upgrade1_amount >= 25){
        $("#achievementMother4").addClass('ready');
        increasePuppyBonus(1.5);
      }
    }

    if(!$("#achievementFaucet1").hasClass('ready')){
      if(upgrade2_amount >= 1){
        $("#achievementFaucet1").addClass('ready');
        increasePuppyBonus(0.5);
      }
    }else if(!$("#achievementFaucet2").hasClass('ready')){
      if(upgrade2_amount >= 5){
        $("#achievementFaucet2").addClass('ready');
        increasePuppyBonus(1);
      }
    }else if(!$("#achievementFaucet3").hasClass('ready')){
      if(upgrade2_amount >= 10){
        $("#achievementFaucet3").addClass('ready');
        increasePuppyBonus(1.5);
      }
    }else if(!$("#achievementFaucet4").hasClass('ready')){
      if(upgrade2_amount >= 25){
        $("#achievementFaucet4").addClass('ready');
        increasePuppyBonus(2);
      }
    }

    if(!$("#achievementCheckpoint1").hasClass('ready')){
      if(upgrade3_amount >= 1){
        $("#achievementCheckpoint1").addClass('ready');
        increasePuppyBonus(1);
      }
    }else if(!$("#achievementCheckpoint2").hasClass('ready')){
      if(upgrade3_amount >= 5){
        $("#achievementCheckpoint2").addClass('ready');
        increasePuppyBonus(1.5);
      }
    }else if(!$("#achievementCheckpoint3").hasClass('ready')){
      if(upgrade3_amount >= 15){
        $("#achievementCheckpoint3").addClass('ready');
        increasePuppyBonus(2);
      }
    }

    if(!$("#achievementPortal1").hasClass('ready')){
      if(upgrade4_amount >= 1){
        $("#achievementPortal1").addClass('ready');
        increasePuppyBonus(1.5);
      }
    }else if(!$("#achievementPortal2").hasClass('ready')){
      if(upgrade4_amount >= 5){
        $("#achievementPortal2").addClass('ready');
        increasePuppyBonus(2);
      }
    }else if(!$("#achievementPortal3").hasClass('ready')){
      if(upgrade4_amount >= 10){
        $("#achievementPortal3").addClass('ready');
        increasePuppyBonus(2.5);
      }
    }

    if(!$("#achievementAstronaut1").hasClass('ready')){
      if(upgrade5_amount >= 1){
        $("#achievementAstronaut1").addClass('ready');
        increasePuppyBonus(2);
      }
    }else if(!$("#achievementAstronaut2").hasClass('ready')){
      if(upgrade5_amount >= 5){
        $("#achievementAstronaut2").addClass('ready');
        increasePuppyBonus(2.5);
      }
    }

    if(!$("#achievementSatan1").hasClass('ready')){
      if(upgrade6_amount >= 1){
        $("#achievementSatan1").addClass('ready');
        increasePuppyBonus(2.5);
      }
    }else if(!$("#achievementSatan2").hasClass('ready')){
      if(upgrade6_amount >= 5){
        $("#achievementSatan2").addClass('ready');
        increasePuppyBonus(3);
      }
    }

    if(!$("#achievementSayian1").hasClass('ready')){
      if(upgrade7_amount >= 1){
        $("#achievementSayian1").addClass('ready');
        increasePuppyBonus(5);
      }
    }
  }
  $("#kitten-main").click(function(){
    updateScore(1);
    last_adopted = timer;
  });

  var score = 0;
  var timer = 0;
  var last_adopted = 0;

  var puppy_bonus = 0;

  var upgrade1_amount = 0;
  var upgrade1_cost = 10;
  var upgrade1_payout = 0.2;

  var upgrade2_amount = 0;
  var upgrade2_cost = 100;
  var upgrade2_payout = 0.5;

  var upgrade3_amount = 0;
  var upgrade3_cost = 500;
  var upgrade3_payout = 4;

  var upgrade4_amount = 0;
  var upgrade4_cost = 3000;
  var upgrade4_payout = 10;

  var upgrade5_amount = 0;
  var upgrade5_cost = 10000;
  var upgrade5_payout = 40;

  var upgrade6_amount = 0;
  var upgrade6_cost = 66600;
  var upgrade6_payout = 166;

  var upgrade7_amount = 0;
  var upgrade7_cost = 200000;
  var upgrade7_payout = 500;

  function updateScore(amount){
    if(amount > 0){
      score = score + (amount * ((puppy_bonus/100) + 1));
    }else{
      score = score + amount;
    }
    $("#output").html(Math.floor(score));

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
    if(score >= upgrade6_cost){
      $("#upgrade6").addClass('ready');
    }else{
      $("#upgrade6").removeClass('ready');
    }
    if(score >= upgrade7_cost){
      $("#upgrade7").addClass('ready');
    }else{
      $("#upgrade7").removeClass('ready');
    }
  }

  $("#upgrade1").click(function(){
    if(score >= upgrade1_cost){
      upgrade1_amount += 1;
      updateScore(-upgrade1_cost);
      upgrade1_cost = Math.floor(1.15 * upgrade1_cost);
      $("#upgrade1 span.cost").html(upgrade1_cost);
      $("#upgrade1 span.amount").html(upgrade1_amount);
    }
  });

  $("#upgrade2").click(function(){
    if(score >= upgrade2_cost){
      upgrade2_amount += 1;
      updateScore(-upgrade2_cost);
      upgrade2_cost = Math.floor(1.15 * upgrade2_cost);
      $("#upgrade2 span.cost").html(upgrade2_cost);
      $("#upgrade2 span.amount").html(upgrade2_amount);
    }
  });

  $("#upgrade3").click(function(){
    if(score >= upgrade3_cost){
      upgrade3_amount += 1;
      updateScore(-upgrade3_cost);
      upgrade3_cost = Math.floor(1.15 * upgrade3_cost);
      $("#upgrade3 span.cost").html(upgrade3_cost);
      $("#upgrade3 span.amount").html(upgrade3_amount);
    }
  });

  $("#upgrade4").click(function(){
    if(score >= upgrade4_cost){
      upgrade4_amount += 1;
      updateScore(-upgrade4_cost);
      upgrade4_cost = Math.floor(1.15 * upgrade4_cost);
      $("#upgrade4 span.cost").html(upgrade4_cost);
      $("#upgrade4 span.amount").html(upgrade4_amount);
    }
  });

  $("#upgrade5").click(function(){
    if(score >= upgrade5_cost){
      upgrade5_amount += 1;
      updateScore(-upgrade5_cost);
      upgrade5_cost = Math.floor(1.15 * upgrade5_cost);
      $("#upgrade5 span.cost").html(upgrade5_cost);
      $("#upgrade5 span.amount").html(upgrade5_amount);
    }
  });

  $("#upgrade6").click(function(){
    if(score >= upgrade6_cost){
      upgrade6_amount += 1;
      updateScore(-upgrade6_cost);
      upgrade6_cost = Math.floor(1.15 * upgrade6_cost);
      $("#upgrade6 span.cost").html(upgrade6_cost);
      $("#upgrade6 span.amount").html(upgrade6_amount);
    }
  });

  $("#upgrade7").click(function(){
    if(score >= upgrade7_cost){
      upgrade7_amount += 1;
      updateScore(-upgrade7_cost);
      upgrade7_cost = Math.floor(1.15 * upgrade7_cost);
      $("#upgrade7 span.cost").html(upgrade7_cost);
      $("#upgrade7 span.amount").html(upgrade7_amount);
    }
  });

  function tick(){
    timer += 0.1;
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
    updateScore(upgrade1_payout * upgrade1_amount * 0.1);
    updateScore(upgrade2_payout * upgrade2_amount * 0.1);
    updateScore(upgrade3_payout * upgrade3_amount * 0.1);
    updateScore(upgrade4_payout * upgrade4_amount * 0.1);
    updateScore(upgrade5_payout * upgrade5_amount * 0.1);
    updateScore(upgrade6_payout * upgrade6_amount * 0.1);
    updateScore(upgrade7_payout * upgrade7_amount * 0.1);
    achievementCheck();
  }
  setInterval(tick,100);

  </script>
</body>
</html>