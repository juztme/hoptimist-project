<?php

$sApplicationId = '1453103351595436';
$sApplicationSecret = 'e0c91a61c5e14742497880b8f96c9ff1';
$iLimit = 99;

?>
<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="stylesheet" type="text/css" href="CSS/homepageCss.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <title>Hoptimist Campaign</title>
</head>
<body>


<div id="bg"> </div>
<a href="http://teresamadariaga.dk/hop/"><div id="hoplogo"> </div></a>
<p id="JoyTitle">Joy meter</p><img src="img/joymeter.png" class="joymeter" alt="joy-meter"/>


<div id="banner"></div>
<div id="reallogo"></div>
<div id="motivationText">
<p>
Create your own "happiness buddy"<br/>
and share the Danish joy across the world
</p>
</div>

<!--START of LEFT content. Rankig, profile and create new hoptimist-->

<div id="rankArea">
<img src="img/rank.png" id="rankIMG" alt="rank-icon"/>
Rank (name)
<img src="img/joymeter.png" id="progress" alt="progress-bar"/>
</div>

            <div id="user-info"></div>
            <button id="fb-auth"><img src="img/login.png" alt="fb-login"/></button>
<div id="LeftWrapper">
<a href="customization.php"><div id="hoptimistSketch"><canvas id="myCanvas" width="330" height="414"></canvas></div></a>
 <script>
	
	  var srces = ["img/redHead.png", "img/blueHead.png", "img/flowerHead.png", "img/winterHead.png", "img/yellowHead.png"];
	  var headColors = ["red", "blue", "flower", "winter", "yellow"];
	  var imgs = { };
	  for (var i = 0; i < srces.length; i++) {
	       imgs[headColors[i]] = srces[i];
	  }
	  
	  var Nosesrces = ["img/redNose.png", "img/DblueNose.png", "img/blackNose.png", "img/yellowNose.png", "img/greyNose.png"];
	  var noseColors = ["Nred", "Nblue", "Nblack", "Nyellow", "Ngrey"];
	  var Noseimgs = { };
	  for (var i = 0; i < Nosesrces.length; i++) {
	       Noseimgs[noseColors[i]] = Nosesrces[i];
	  }
	
		  var Springsrces = ["img/redSpring.png", "img/blueSpring.png", "img/whiteSpring.png", "img/yellowSpring.png", 		  "img/greySpring.png"];
	  var SpringColors = ["Sred", "Sblue", "Swhite", "Syellow", "Sgrey"];
	  var Springimgs = { };
	  for (var i = 0; i < Springsrces.length; i++) {
	       Springimgs[SpringColors[i]] = Springsrces[i];
	  }
	  
	  		  var Buttsrces = ["img/redButt.png", "img/blueButt.png", "img/whiteButt.png", "img/yellowButt.png", 		  "img/flowerButt.png"];
	  var ButtColors = ["Bred", "Bblue", "Bwhite", "Byellow", "Bflower"];
	  var Buttimgs = { };
	  for (var i = 0; i < Buttsrces.length; i++) {
	       Buttimgs[ButtColors[i]] = Buttsrces[i];
	  }
	  
	  	  var Legssrces = ["img/redLegs.png", "img/blueLegs.png", "img/whiteLegs.png", "img/yellowLegs.png", "img/flowerLegs.png"];
	  var LegsColors = ["Lred", "Lblue", "Lblack", "Lyellow", "Lflower"];
	  var Legsimgs = { };
	  for (var i = 0; i < Legssrces.length; i++) {
	       Legsimgs[LegsColors[i]] = Legssrces[i];
	  }
	  
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');
      var imageHead = new Image();
      imageHead.src = 'img/redHead.png';
     /* imageHead.onload = function() {
        context.drawImage(imageHead, 28, 7, 250, 230);
	  };*/
	  
	  	        var imageEyes = new Image();
      imageEyes.src = 'img/openEyes.png';
    /*  imageEyes.onload = function() {
        context.drawImage(imageEyes, 90, 100, 130, 50);
	  };*/
	        var imageNose = new Image();
      imageNose.src = 'img/redNose.png';
     /* imageNose.onload = function() {
        context.drawImage(imageNose, 125, 150, 50, 50);
	  };*/
	  	    var imageButt = new Image();
      imageButt.src = 'img/redButt.png';
     /* imageButt.onload = function() {
        context.drawImage(imageButt, 57, 262, 200, 80);
	  };*/
	  	    var imageSpring = new Image();
      imageSpring.src = 'img/redSpring.png';
      /*imageSpring.onload = function() {
        context.drawImage(imageSpring, 80, 230, 160, 70);
	  };*/
	  	    var imageLegs = new Image();
      imageLegs.src = 'img/redLegs.png';
      /*imageLegs.onload = function() {
        context.drawImage(imageLegs, 60, 325, 200, 80);
	  };*/
	  
      function drawHoptimist() {
		  context.drawImage(imageHead, 28, 7, 250, 230);
		  context.drawImage(imageEyes, 90, 100, 130, 50);
		  context.drawImage(imageNose, 125, 150, 50, 50);
		  context.drawImage(imageButt, 57, 262, 200, 80);
		  context.drawImage(imageSpring, 80, 230, 160, 70);
		  context.drawImage(imageLegs, 60, 326, 200, 80);
		  $(".menuBox").hide(); 
	  };
	  window.setTimeout(drawHoptimist, 1500);
	   
      document.getElementById("myCanvas").addEventListener('click', function(e) {
		  			 console.log(e.clientX + " " + e.clientY);
		   $(".menuBox").hide(); 
		   var Xmouse = e.clientX - document.getElementById("CustRightWrapper").offsetLeft;
		   var Ymouse = e.clientY + document.getElementById("myCanvas").offsetTop;
		   console.log(e.clientX + " - " + document.getElementById("CustRightWrapper").offsetLeft+ " = " +Xmouse);
		   console.log(e.clientY + " - " + document.getElementById("CustRightWrapper").offsetTop+ " = " +Ymouse);
		   //1, 1+3, 2, 2+4
		if (Xmouse > 60 && Xmouse < 260 && Ymouse > 325 && Ymouse < 405){ //Legs menu
			 	 document.getElementById("Legsmenu").style.display="block";
				 document.getElementById("Legsmenu").style.top=Ymouse+"px";
				 document.getElementById("Legsmenu").style.left=Xmouse+"px";
		   };
		if (Xmouse > 80 && Xmouse < 240 && Ymouse > 230 &&  Ymouse < 300){ //Spring menu
			 	 document.getElementById("Springmenu").style.display="block";
				 document.getElementById("Springmenu").style.top=Ymouse+"px";
				 document.getElementById("Springmenu").style.left=Xmouse+"px";
		   };
		if (Xmouse > 57 && Xmouse < 257 && Ymouse > 262 && Ymouse< 342){ //Butt menu
			 	 document.getElementById("Buttmenu").style.display="block";
				 document.getElementById("Buttmenu").style.top=Ymouse+"px";
				 document.getElementById("Buttmenu").style.left=Xmouse+"px";
		   };
         if (Xmouse > 28 && Xmouse < 265 && Ymouse > 7 && Ymouse < 245){ //head menu
		 
			if (Xmouse > 125 && Xmouse < 175 && Ymouse > 150 && Ymouse < 200){ //125, 125+50, 150, 150+50, Nose menu
				 document.getElementById("Nosemenu").style.display="block";
				 document.getElementById("Nosemenu").style.top=Ymouse+"px";
				 document.getElementById("Nosemenu").style.left=Xmouse+"px";
				 //IF statement inside the head, for the nose/eyes.
			 }
			 else {
				 document.getElementById("menu").style.display="block";
				 document.getElementById("menu").style.top=Ymouse+"px";
				 document.getElementById("menu").style.left=Xmouse+"px";
			 }
		 }

      });
	  function drawNose(color) { //call function on "onclick" in a tag
		imageNose.src = Noseimgs[color]; //Update src attribute off imageHead object.
	  	imageNose.onload = drawHoptimist;
		  } 
	  function drawSpring(color) { //call function on "onclick" in a tag
		imageSpring.src = Springimgs[color]; //Update src attribute off imageHead object.
	  	imageSpring.onload = drawHoptimist;
		  } 
	  function drawButt(color) { //call function on "onclick" in a tag
		imageButt.src = Buttimgs[color]; //Update src attribute off imageHead object.
	  	imageButt.onload = drawHoptimist;
	  }
	 function drawLegs(color) { //call function on "onclick" in a tag
		imageLegs.src = Legsimgs[color]; //Update src attribute off imageHead object.
	  	imageLegs.onload = drawHoptimist;
	  }
	  function drawHoved(color) { //call function on "onclick" in a tag
		imageHead.src = imgs[color]; //Update src attribute off imageHead object.
	  	imageHead.onload = drawHoptimist;
	  }

</script>
<a href="customization.php"><div id="createButton"><div id="ButtonContent"><img src="img/createButton.png" id="createIMG" alt="create-icon"/>Create new Hoptimist</div></div></a>
<div id = "historyhops"><img src = "img/historyhops.png" alt="history-hoptimists"/></div>
<div id="history"><p id="historytext">History</p></div>
</div>
<!--</div>-->
<!--END of LEFT content. Rankig, profile and create new hoptimist-->

<!--START of RIGHT content. Badges-->
<div id="RightWrapper">

<table>
<tr><td></td><td><h1 id="badgeTitle">Badges</h1></td></tr>
<tr><td><img src="img/plant.png" id="Badgeplant" class="BadgesIcon" alt="badge-plant"/></td><td>
<h2>More Oxygen</h2><p class="badgesText">Shared 1 hoptimist and helped with planting more trees.</p></td></tr>
<tr><td><img src="img/windmill.png" id="Badgemill" class="BadgesIcon" alt="badge-windmill"/></td><td><h2>Natural Electricity</h2><p class="badgesText">Shared 5 hoptimists and helped with installing more windmills outside the city.</p></td></tr>
<tr><td><img src="img/bin.png" id="Badgebin" class="BadgesIcon" alt="badge-bin"/></td><td><h2>No Trash Left</h2><p class="badgesText">Shared 15 hoptimists and helped with getting more recycle bins.</p> </td></tr>
<tr><td><img src="img/butterfly.png" id="Badgebutterfly" class="BadgesIcon" alt="badge-butterfly"/></td><td><h2>Fresher Air</h2><p class="badgesText">Shared 30 hoptimists and helped with research towards <span id="gradient">alternatives for automobile gas.</span></p> </td></tr>
<tr><td></td><td><div id="ViewMore"><p id="ViewText">View More</p></div></td></tr>
</table>


</div>

<!--END of RIGHT content. Badges-->
<div id="progressbar"></div>
<div id="Footerbg">

<table id="tableSponsor">
<caption>Sponsors</caption>
<tr>
<td><a href="http://www.egtireshredders.com/"><img src="img/ecogreen.png" id="ecoGreen" class="sponsorsIcon" alt="ecogreen-link"/></a></td>
<td><a href="http://www.soundplan.eu/english"><img src="img/soundplan.png" id="Soundplan" class="sponsorsIcon" alt="soundplan-link"/></a></td>
<td><a href="http://www.imerco.dk/"><img src="img/imerco.jpg" id="imerco" class="sponsorsIcon" alt="imerco-link"/></a></td>
<td><a href="http://www.kop-kande.dk/"><img src="img/kopkande.jpg" id="kopogkande" class="sponsorsIcon" alt="kopogkande-link"/></a></td>
</tr>
</table>

<table id="tableSocial">
<caption>Contact</caption>
<tr><td><a href = "https://www.facebook.com/hoptimist"><img src="img/facebookIcon.png" id="facebook" class="SocialMediaIcon" alt="facebook-link"/></a></td>
<td><a href="https://www.youtube.com/channel/UCcKQpSmZqtKht-mTffKm1uw"><img src="img/YouTube.png" id="youtube" class="SocialMediaIcon" alt="youtube-link"/></a></td>
<td><img src="img/email.jpg" id="email" class="SocialMediaIcon" alt="email-link"/></td>
</tr>
</table>

</div><!--end of the footer-->

        <div id="fb-root"></div>

        <script>
        function sortMethod(a, b) {
            var x = a.name.toLowerCase();
            var y = b.name.toLowerCase();
            return ((x < y) ? -1 : ((x > y) ? 1 : 0));
        }

        window.fbAsyncInit = function() {
            FB.init({ appId: '<?= $sApplicationId ?>',
                status: true,
                cookie: true,
                xfbml: true,
                oauth: true
            });

            function updateButton(response) {
                var button = document.getElementById('fb-auth');

                if (response.authResponse) { // in case if we are logged in
                    var userInfo = document.getElementById('user-info');
                    FB.api('/me', function(response) {
                        userInfo.innerHTML = '<img src="https://graph.facebook.com/' + response.id + '/picture">' + response.name;
                        button.innerHTML = 'Log out here';

                    });

                    button.onclick = function() {
                        FB.logout(function(response) {
                            window.location.reload();
                        });
                    };
                } else { // otherwise - dispay login button
                    button.onclick = function() {
                        FB.login(function(response) {
                            if (response.authResponse) {
                                window.location.reload();
                            }
                        }, {scope:'email'});
                    }
                }
            }

            // run once with current status and whenever the status changes
            FB.getLoginStatus(updateButton);
            FB.Event.subscribe('auth.statusChange', updateButton);
        };

        (function() {
            var e = document.createElement('script'); e.async = true;
            e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
            document.getElementById('fb-root').appendChild(e);
        }());
        </script>
        
<!--contact form-->
<div id="contactform">
<div id="exitform"><p id = "exittext">x</p></div> <!--exit button in case the user doesn't want to send the message/accidentally click the envelope-->
<p id="questions">Questions? Ask us here!</p>
<form action="handle_form.php" method="post">
<p>Name:<br/><input type="text" name="name" size="20"/></p>
<p>Email Address:<br/><input type="text" name="email" size="20"/></p>
<p>Message:<br/><textarea name="comments" rows="3" cols="30"></textarea></p>
<input id = "submitbutton" type="submit" name="submit" value="Send message!"/>
</form>
</div>
<!--end of contact form-->

<script src ="contactformclick.js"></script>

</body>
</html>
