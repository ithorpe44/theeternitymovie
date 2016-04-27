<?php

	// The Eternity Movie Homepage
	$page = 0;
	
	include('includes/header.php');
?>

				

				<div id="feature">
					<div class="rotating-container">
						<?php
							/*
                                <a class="fancybox" href="#popup"><img src="images/mlnjs_banner.jpg"></a>
								<div class="rotating-item"><a href="screenings.php"><img src="images/theaters_banner.jpg"></a></div>
                            */
						?>
						<div class="rotating-item"><a href="https://squareup.com/store/eternitythemovie" target="_blank"><img title="Buy Eternity: The Movie" alt="Buy Eternity: The Movie" src="images/store_banner.jpg"></a></div>
						<div class="rotating-item"><a href="https://squareup.com/store/eternitythemovie" target="_blank"><img title="Buy Eternity: The Movie" alt="Buy Eternity: The Movie" src="images/store_banner.jpg"></a></div>
						<?php
							/*
								<div class="rotating-item"><a href="http://www.amazon.com/dp/B01AZ0VVRU/ref=atv_hm_hom_1_c_s9obwan_2_1?_encoding=UTF8" target="_blank"><img src="images/amazon_banner.jpg"></a></div>
								<div class="rotating-item"><a href="https://itunes.apple.com/us/movie/eternity-the-movie/id1070728634" target="_blank"><img src="images/itunes_banner.jpg"></a></div>
								<div class="rotating-item"><a href="https://play.google.com/store/movies/details?id=j_uKn98cwtk" target="_blank"><img src="images/googleplay_banner.jpg"></a></div>
								<div class="rotating-item"><a href="http://www.blueicevodka.com/" target="_blank"><img src="images/blueice_banner.jpg"></a></div>
								<div class="rotating-item"><a class="fancybox" href="#popup"><img src="images/mlnjs_banner.jpg"></a></div>
								<div class="rotating-item"><a href="http://www.newwavetravel.net/ourtravelprofessionals/darwinclearwater/" target="_blank"><img src="images/newwave_banner.jpg"></a></div>
							*/
						?>
						
	
					</div>
					<div id="popup">
							<p class="header">
								Get your free copy of<br>
								<i>Make Love, not Just Sex</i>
							</p>
							<p>
								<script type="text/javascript" src="https://cashmusic.org/public/cashmusic.js"></script>
								<script type="text/javascript"> window.cashmusic.embed('https://cashmusic.org/public','8800');</script>
							</p>
						</div>
				</div>
				<script type="text/javascript" src="js/infinite-rotator.js"></script>
				<div id="teaser" class="left">
					<div>
						<?php
							// YouTube Make Love not Just Sex Video Embed
						?>
						<iframe width="680" height="383" src="//www.youtube.com/embed/nevrHyHVNIM?playlist=prL1_qynRao,lX1SGjNrWLQ,MZoaJDni4Ck&rel=0&showinfo=1" frameborder="0" allowfullscreen></iframe>
						
						<?php
						/* Vimeo Trailer Link
						<iframe src="http://player.vimeo.com/video/58900361?byline=0&portrait=0&title=0" width="680" height="382" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						*/
						?>
					
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
			
<?php
	
	include('includes/footer.php');
?>