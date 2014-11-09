<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/homepageCss.css">
<meta name="viewport" content="width=device-width" >
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<title>Customization</title>
</head>
<body>
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function(){
FB.init({
    appId: '1453103351595436', status: true, cookie: true, xfbml: true }); 
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];if   (d.getElementById(id)) {return;}js = d.createElement('script'); js.id = id; js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url, image){
var obj = {method: 'feed',link: url, picture: 'http://www.url.com/images/'+image,name: title,description: desc};
function callback(response){}
FB.ui(obj, callback);
}
</script>

<div id="bg"> </div>
<a href="http://teresamadariaga.dk/hop/"><div id="custhoplogo"> </div></a><div id="ourlogo"></div>
<p id="CustJoyTitle">Joy meter</p><img src="img/joymeter.png" class="Custjoymeter" alt="joy-meter"/>
<img id="mobilemenubutton" src="img/mobilemenubutton.png" alt="menu-button"/>






<!--START of LEFT content. Rankig, profile and create new hoptimist-->




<div id="CustLeftWrapper">
<div id="custexitinfo"><p id = "custexitinfotext">x</p></div> <!--exit button for when the user is done reading the information-->
<table>
<tr><td><h2>Joy meter</h2></td></tr>
<tr><td><p>The Joy meter is a progress tracker for this campaign. It goes up every time someone shares a Hoptimist.</p>
<p>Check on it every day while it's still there, because when it's filled up to the max, something nice is going to happen!</p></td></tr>
<tr><td><h2>Instructions</h2></td></tr>
<tr><td><p>Now that you have decided that you want to customize a Hoptimist, you have to know how to! </p>
<p>For a start, you can hover over the nose if you are on a desktop, or press it if you're on a mobile device. This way, you can customize all parts of the body.</p></td></tr></table>


</div>

<!--END of LEFT content. Rankig, profile and create new hoptimist-->

<!--START of RIGHT content. Badges-->
<div id="CustRightWrapper">


<canvas id="myCanvas" width="330" height="414"></canvas>
<div class="menuBox" id="menu">
<ul>
<li><h3>Head Colors</h3></li>
<li><a href="#" onclick="drawHoved('red');">Red</a></li>
<li><a href="#" onclick="drawHoved('blue');">Blue</a></li>
<li><a href="#" onclick="drawHoved('flower');">Flower</a></li>
<li><a href="#" onclick="drawHoved('winter');">Winter</a></li>
<li><a href="#" onclick="drawHoved('yellow');">Yellow</a></li>
</ul>
</div>
<div class="menuBox" id="Nosemenu">
<ul>
<li><h3>Nose Colors</h3></li>
<li><a href="#" onclick="drawNose('Nred');">Red</a></li>
<li><a href="#" onclick="drawNose('Nblue');">Blue</a></li>
<li><a href="#" onclick="drawNose('Nblack');">Black</a></li>
<li><a href="#" onclick="drawNose('Nyellow');">Yellow</a></li>
<li><a href="#" onclick="drawNose('Ngrey');">Grey</a></li>
</ul>
</div>
<div class="menuBox" id="Springmenu">
<ul>
<li><h3>Spring Colors</h3></li>
<li><a href="#" onclick="drawSpring('Sred');">Red</a></li>
<li><a href="#" onclick="drawSpring('Sblue');">Blue</a></li>
<li><a href="#" onclick="drawSpring('Swhite');">White</a></li>
<li><a href="#" onclick="drawSpring('Syellow');">Yellow</a></li>
<li><a href="#" onclick="drawSpring('Sgrey');">Grey</a></li>
</ul>
</div>
<div class="menuBox" id="Buttmenu">
<ul>
<li><h3>Bottom Colors</h3></li>
<li><a href="#" onclick="drawButt('Bred');">Red</a></li>
<li><a href="#" onclick="drawButt('Bblue');">Blue</a></li>
<li><a href="#" onclick="drawButt('Bwhite');">White</a></li>
<li><a href="#" onclick="drawButt('Byellow');">Yellow</a></li>
<li><a href="#" onclick="drawButt('Bflower');">Flower</a></li>
</ul>
</div>
<div class="menuBox" id="Legsmenu">
<ul>
<li><h3>Leg Colors</h3></li>
<li><a href="#" onclick="drawLegs('Lred');">Red</a></li>
<li><a href="#" onclick="drawLegs('Lblue');">Blue</a></li>
<li><a href="#" onclick="drawLegs('Lwhite');">White</a></li>
<li><a href="#" onclick="drawLegs('Lyellow');">Yellow</a></li>
<li><a href="#" onclick="drawLegs('Lflower');">Flower</a></li>
</ul>
</div>

    <br/>
<a href="http://teresamadariaga.dk/hop/customization.php" data-image="img/flowerButt.png" data-title="Sharing my Joy" data-desc="I made my very own Hoptimist and I decided to share it to share my personal joy with someone I love." class="btnShare"><img src="img/share.png" id="shareButton" alt="fb.share"/></a>
<script>
$('.btnShare').click(function(){
elem = $(this);
postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

return false;
});
</script>
</div>

<!--END of RIGHT content. Badges-->

<div id="custFooterbg">

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

<!--contact form-->
<div id="custcontactform">
<div id="custexitform"><p id ="custexittext">x</p></div> <!--exit button in case the user doesn't want to send the message/accidentally click the envelope-->
<p id="questions">Questions? Ask us here!</p>
<form action="handle_form.php" method="post">
<p>Name:<br/><input type="text" name="name" size="20"/></p>
<p>Email Address:<br/><input type="text" name="email" size="20"/></p>
<p>Message:<br/><textarea name="comments" rows="3" cols="30"></textarea></p>
<input id = "submitbutton" type="submit" name="submit" value="Send My Feedback"/>
</form>
</div>
<!--end of contact form-->

<script src ="contactformclick.js"></script>
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
	  window.setTimeout(drawHoptimist, 150);
	   
      document.getElementById("myCanvas").addEventListener('click', function(e) {
		  			 console.log(e.clientX + " " + e.clientY);
		   $(".menuBox").hide(); 
		   var Xmouse = e.clientX - document.getElementById("CustRightWrapper").offsetLeft;
		   var Ymouse = e.clientY - document.getElementById("CustRightWrapper").offsetTop;
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
</body>
</html>
