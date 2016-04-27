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
		
		<?php
			if(isset($_GET['p']) && $_GET['p'] == 1){
		?>
		
				$(document).ready(function() {
					$.fancybox.open({href: '#popup'});
				});
		<?php		
			}
		?>
		</script>
	</head>

	<body>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-46407813-2', 'auto');
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
					Welcome to the official website for Eternity: The Movie	
				</div>
				<div id="nav">
					<div>
						<ul>
							<li><a href="index.php"<?php if($page == 0){ echo(' id="active";'); }?>>Home</a></li>
							<li><a href="about.php"<?php if($page == 1){ echo(' id="active";'); }?>>Synopsis</a></li>
							<li><a href="cast.php"<?php if($page == 2){ echo(' id="active";'); }?>>Cast &amp; Crew</a></li>
							<li><a href="screenings.php"<?php if($page == 3){ echo(' id="active";'); }?>>Watch the Movie</a></li>
							<li><a href="press.php"<?php if($page == 4){ echo(' id="active";'); }?>>Press</a></li>
							<li><a href="downloads.php"<?php if($page == 5){ echo(' id="active";'); }?>>Downloads</a></li>
							<li><a href="contacts.php"<?php if($page == 6){ echo(' id="active";'); }?>>Contact</a></li>
							<li style="margin-right: 0px;"><a href="https://squareup.com/store/eternitythemovie" target="_blank">Shop</a></li>
						</ul>
					</div>
				</div>
				
			