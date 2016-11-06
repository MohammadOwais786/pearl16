<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Register For Farhan</title>
		<meta
                    name="description" content="BITS Pilani Hyderabad Campus prides itself, every year, on hosting some of the most prestigious cultural competitions in India. Among this year's lineup of contests are Till Deaf Do We Part, the gritty battle of the bands, Gliteratti, the fashion showcase , Terpsichore, for college dance troupes , Catharsis, our film festival and Fraglore, the 3-day event dedicated solely to gaming. Pearl also boasts a wide variety of photography, arts, quizzing, theatre, and literary events this year.">
               
                <meta
                    name="robots" content="index, follow" />
                <meta
                    name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
                <meta
                    name="apple-mobile-web-app-capable" content="yes" />
                <meta
                    property="og:type" content="website">
                <meta
                    property="og:site_name" content="Pearl'16">
                <meta
                    property="og:title" content="Pearl'16">
                <meta
                    property="og:description" content="BITS Pilani Hyderabad Campus prides itself, every year, on hosting some of the most prestigious cultural competitions in India. Among this year's lineup of contests are Till Deaf Do We Part, the gritty battle of the bands, Gliteratti, the fashion showcase , Terpsichore, for college dance troupes , Catharsis, our film festival and Fraglore, the 3-day event dedicated solely to gaming. Pearl also boasts a wide variety of photography, arts, quizzing, theatre, and literary events this year.">
                <meta
                    property="og:url" content="www.bits-pearl.org">
    <meta name="author" content="Department Of Technical Arts">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<style>
		
.sec1{
margin-top:50px;
}


@media only screen and (max-width: 50.063em) { 
.sec1{
margin-top:30vw;
}
}
		</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66631400-1', 'auto');
  ga('send', 'pageview');

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
		
			$(document).ready(function(){
				$("#reg").click(function(){
					var name = document.getElementById("q1").value;
			
                        var phone = document.getElementById("q2").value;
			
					
					
					$.post("database.php", { name: name,phone: phone
					}, function (data) {
                if (data == "1"){
                    
					alert('Thank you! We\'ll be in touch.');
					
 					}
                else{
                    
					alert('Thank you! We\'ll be in touch.');
 }
});
					/*
					
					or
					AJAX request (maybe show loading indicator while we don't have an answer..)
					*/

					// let's just simulate something...
					});
				}
			 );
		</script>
	</head>
	<body style="overflow-x:hidden">
		<div class="row">
			<!-- Top Navigation -->
			<div class="col-md-12">
			<img src="farhan_web.jpg" width="100%" height="100%">
			</div>
			</div>
			<br>
			<br>
			<div class="container">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
			<h2>
			Concert by Farhan Akhtar for Pearl, <br>
BITS Pilani, Hyderabad Campus<br>
Date: 20th March, 2016<br><br>
</h2>
<h4>
After enthralling you with the likes of Vishal Shekhar, Wolfmother and Advaita, Pearl is back for 2016 and this time, we bring you the one and only Farhan Akhtar! The director, screenwriter, producer, actor, playback singer, lyricist is one of the most eminent personalities in Bollywood and has established his mettle as a singer with films like Rock On!!, Zindagi Na Milegi Dobara, Wazir and many more. We, at BITS, are excited and enthralled to have Farhan Akhtar perform at Pearl and we hope that you are too. So mark your calendars to the 20th of March, because it is going to be one heck of a show.
</h4>
<br><br>
<center>
<a href="https://www.facebook.com/events/1694862894122828/" target="_blank" style="font-size:25px;">Facebook-Event Link</a><br>
<a href="Pearl- https://www.facebook.com/bitspearl/?fref=ts" target="_blank" style="font-size:25px;">Pearl</a><br><br><br></center>
</div>

<center>
<h2>Register</h2><br>
 <div class="form-group">
    
    <input type="text" class="form-control" id="q1" placeholder="name" style="width:300px;">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="q2" placeholder="phone" style="width:300px;">
  </div><br>
  <button type="button" id="reg" class="btn btn-primary">Register</button>
</center>
<div class="col-md-1">
			</div>
			
			
			
			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/stepsForm.js"></script>
		<script src="js/classie1.js"></script>
		<link rel="stylesheet" type="text/css" href="css/set2.css" />
		
	</body>
</html>
	