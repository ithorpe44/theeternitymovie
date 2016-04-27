<?php
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Eternity: The Website</title>
		
		<link rel="stylesheet" type="text/css" href="css/main.css">	
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>	
		<script src="js/scripts.js"></script>
		
		<!-- Add jQuery library -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		
		<!-- Add fancyBox -->
		<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		</script>
		
	</head>

	<body>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-46407813-1', 'eternitythewebsite.com');
			ga('send', 'pageview');
		
		</script>
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=550991891618805";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<div id="container">
			<div id="logo">
				<img src="images/logo.png">
			</div>
			<div id="content">
				<div id="slogan">
					<a class="fancybox" href="#inline1">Welcome to the official website for Eternity: The Movie</a>
					
					<div id="inline1" style="width:400px;display: none;">
						<h3>Etiam quis mi eu elit</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
						</p>
					</div>
	
				</div>
				<div id="teaser" class="left">
					<div>
						<iframe src="http://player.vimeo.com/video/58900361?byline=0&portrait=0&title=0" width="680" height="382" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div id="contact" class="right">
					<div id="form">
						<div id="form_heading">Questions? Comments?</div>	
						<form action="#" id="contact_form" onSubmit="validate_form(); return false;">
							<div>
							<label>Full Name*<input type="text" id="etm_name" required></label>
							</div>
							<div>
							<label>Email Address*<input type="email" id="etm_email" required></label>
							</div>
							<label>Phone Number<input type="text" id="etm_phone"></label>
							<div>
							<label>Message<textarea id="message"></textarea></label>		
							</div>				
							<div class="submit">
								<input type="submit" class="submit_button" value="Submit">
								<!--<a class="submit_button" href="#" onclick="document.getElementById('contact_form').submit();">Submit</a>-->
							</div>
							<br />
							<div style="clear: both"></div>
						</form> 
						<div id="contact_response">
						
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div id="soundtrack_row" class="margin14">
					<div id="itunes_widget" class="left">
						<iframe src="http://widgets.itunes.apple.com/widget.html?c=us&brc=000000&blc=000000&trc=000000&tlc=000000&d=&t=&m=music&e=album&w=325&h=300&ids=818906340&wt=discovery&partnerId=&affiliate_id=&at=&ct=" frameborder=0 style="overflow-x:hidden;overflow-y:hidden;width:325px;height: 300px;border:0px"></iframe>
					</div>
					<div id="soundtrack_ad" class="left">
						<a href="https://itunes.apple.com/us/album/eternity-the-soundtrack/id818906340" target="_blank"><img src="images/soundtrack_ad.jpg" title="Buy Album on iTunes"></a>
					</div>
				</div>
				<div class="clear"></div>
				<div id="social_row" class="margin14">
					<div id="poster" class="left">
						<img src="images/Eternity_Poster.jpg">
					</div>
					<div class="left" id="fb_widget">
						<div class="fb-like-box" data-href="http://www.facebook.com/EternityTheMovie" data-width="300" data-height="590" data-colorscheme="dark" data-show-faces="false" data-header="true" data-stream="true" data-show-border="false"></div>
					</div>
					<div class="left" id="twitter_widget">
						<a class="twitter-timeline"  href="https://twitter.com/EternityTweets" width="300" height="594" data-widget-id="430040181295419392">Twitter Feed</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
				<div class="clear"></div>
				<div id="main">
				</div>
			</div>
		</div>
		
	</body>
</html>