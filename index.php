<?php 
if(isset($_POST['submit'])) {
    $to = "s.tech.cornell@gmail.com";
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
  }
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Movement App- CSCW Demo from the Social Tech Lab at Cornell Tech</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="images/fav.png" />	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!---->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Movement, CSCW Demo, Social Tech Lab, Community Awareness App" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //-->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
 <!-- Custom Theme files -->
<!----webfonts---->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!---- //end-smoth-scrolling---->
<!----start-top-nav-script---->
<script>
	$(function() {
		var pull 		= $('#pull');
			menu 		= $('nav ul');
			menuHeight	= menu.height();
		$(pull).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
		});
		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	});
</script>
<!----//End-top-nav-script---->
</head>
<body>
	<!-----start-container----->
	<!-----header-section------>
	<div class="header-section">
		<!----- start-header---->
		<div id="home" class="header">
			<div class="container">
				<div class="top-header">
					<div class="logo">
						<a href="#"><img src="images/logo.png" title="logo" /></a>
					</div>
					<!----start-top-nav---->
					 <nav class="top-nav">
						<ul class="top-nav">
							<li class="active"><a href="#home" class="scroll">Home </a></li>
							<li class="page-scroll"><a href="#about" class="scroll">About </a></li>
							<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Feedback</a></li>
						</ul>
						<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
					</nav>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!----- //End-header---->
		<!----- start-slider---->
		<!----start-slider-script---->
		<script src="js/responsiveslides.min.js"></script>
		 <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider4").responsiveSlides({
				auto: false,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
		  </script>
		<!----//End-slider-script---->
		<!-- Slideshow 4 -->
			<div  id="top" class="callbacks_container" width="400px">
			  <ul class="rslides" id="slider4">
				<li>
				  <img src="images/slide.jpg" alt="">
				  <div class="caption text-center">
					<div class="slide-text-info">
						<h1>Introducing <span>Movement</span></h1>
						<h2>Building Community Anonymously</h2>
						<div class="slide-text">
							<ul>
								<li><span> </span>Privately keep track of the venues you visit</li>
								<li><span> </span>Anonymously contribute popular places to the CSCW Community Display</li>
								<li><span> </span>Sign and view the secret guestbook for the places you go</li>
							</ul>
							<br><br></br>
						</div>
						<div class="big-btns">
							<a class="apple" href="//docs.google.com/forms/d/1kJ_i2BsTMZMV5yxfNyyGet7T_RvoGLxtQS0WJzGGP5I/viewform" target="blank"><label> </label>Download for iPhone</a>
							<br><br>
							<a class="droid" href="//docs.google.com/forms/d/1Db-MtHXTOYqneEpt1IKzeq-jUa0ROWUXRUuAGIJMxLM/viewform" target="blank"><label> </label>Download for Android</a>
						</div>

						<!--<div class="foursquare">
							<p>Don't want to download Movement but still want to contribute your venues to the CSCW display? Use your Foursquare account!
							</p>
						</div>
					<div class="big-btns">
							<a  href="https://foursquare.com/oauth2/authenticate?client_id=R45DAJAM3NA0RUQUSRGETDN32HKG3LAC3K54Y11MM5KEUTWH&response_type=code&redirect_uri=https://s.tech.cornell.edu/movement/foursquare.html" class="view" ><label> </label>Login with Foursquare</a>
					</div>-->


					</div>

					</div>

					
				</div>

				</li>

				<!--<li>
				  <img src="images/slide.jpg" alt="">
				  <div class="caption text-center">
					<div class="slide-text-info">
						<h1>Introducing <span>Amazing app.</span></h1>
						<h2>Made to modify and use anywhere</h2>
						<div class="slide-text">
							<ul>
								<li><span> </span>Sed ut perspiciatis unde omnis </li>
								<li><span> </span>Iste natus erAmaror sit voluptatem accusantium </li>
								<li><span> </span>doloremque laudantium</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<div class="big-btns">
							<a class="download" href="#"><label> </label>Download</a>
							<a class="view" href="#"><label> </label>view gallery</a>
						</div>
					</div>
				  </div>
				</li>
				<li>
				  <img src="images/slide.jpg" alt="">
				  <div class="caption text-center">
					<div class="slide-text-info">
						<h1>Introducing <span>Best app.</span></h1>
						<h2>Made to modify and use anywhere</h2>
						<div class="slide-text">
							<ul>
								<li><span> </span>Sed ut perspiciatis unde omnis </li>
								<li><span> </span>Iste natus error sit voluptatem accusantium </li>
								<li><span> </span>doloremque laudantium</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<div class="big-btns">
							<a class="download" href="#"><label> </label>Download</a>
							<a class="view" href="#"><label> </label>view gallery</a>
						</div>
					</div>
				  </div>
				</li>
				<li>
				  <img src="images/slide.jpg" alt="">
				   <div class="caption text-center">
				   <div class="slide-text-info">
						<h1>Introducing <span>Amazing app.</span></h1>
						<h2>Made to modify and use anywhere</h2>
						<div class="slide-text">
							<ul>
								<li><span> </span>Sed ut perspiciatis unde omnis </li>
								<li><span> </span>Iste natus error sit voluptatem accusantium </li>
								<li><span> </span>doloremque laudantium</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<div class="big-btns">
								<a class="download" href="#"><label> </label>Download</a>
								<a class="view" href="#"><label> </label>view gallery</a>
						</div>
					</div>
				  </div>
				</li>
-->
			  </ul>
			</div>
							<div class="divice-demo">
					<img src="images/device-in-hand.png" title="Movement in hand" />
					</div>
			<!---//divice----->
		<!----- //End-slider---->
		</div>

				<!----//features-grids----->
				<!----//features----->
				<!----screen-shot-gallery---->
				<!--<div id="gallery" class="screen-shot-gallery">
					<div class="container">
						<div class="section-head text-center">
							<h3><span class="frist"> </span>SCREENSHOTS GALLERY<span class="second"> </span></h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
						</div>
					</div>
					<!----sreen-gallery-cursual---->
					<!--<div class="sreen-gallery-cursual">
						 <!-- requried-jsfiles-for owl -->
						<!--<link href="css/owl.carousel.css" rel="stylesheet">
							<script src="js/owl.carousel.js"></script>
								<script>
							$(document).ready(function() {
							  $("#owl-demo").owlCarousel({
								items : 3,
								lazyLoad : true,
								autoPlay : true,
							  });
							});
							</script>
					-->	
						 <!-- //requried-jsfiles-for owl -->
						 <!-- start content_slider -->
						 <!--<div class="container">
						   <div id="owl-demo" class="owl-carousel">
								<div class="item">
									<img class="lazyOwl" data-src="images/screen.jpg" alt="screen-name">
								<div class="item">
									<img class="lazyOwl" data-src="images/screen.jpg" alt="screen-name">
								</div>
								<div class="item">
									<img class="lazyOwl" data-src="images/screen.jpg" alt="screen-name">
								</div>
								<div class="item">
									<img class="lazyOwl" data-src="images/screen.jpg" alt="screen-name">
								</div>
								<div class="item">
									<img class="lazyOwl" data-src="images/screen.jpg" alt="screen-name">
								</div>
								<div class="item">
									<img class="lazyOwl" data-src="images/screen.jpg" alt="screen-name">
								</div>
								<div class="item">
									<img class="lazyOwl" data-src="images/screen.jpg" alt="screen-name">
								</div>
								<div class="item">
									<img class="lazyOwl" data-src="images/screen.jpg" alt="screen-name">
								</div>
						  </div>
					</div>
					<!--//sreen-gallery-cursual---->
				</div>
			</div>
			<!--//screen-shot-gallery---->
			<!---- show-reel ---->
			<!---pop-up-box---->
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<!---//pop-up-box---->
				<!--
			<div class="show-reel text-center">
				<div class="container">
					<h5>SHOW  <a class="popup-with-zoom-anim" href="#small-dialog"><span> </span></a> REEL</h5>
					<div id="small-dialog" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/38584262" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
				</div>
			</div>
			<!---- //show-reel ---->
			<!----team---->
			<div id="about" class="team">
				<div class="container">
					<div class="section-head text-center">
						<h3><span class="frist"> </span>ABOUT<span class="second"> </span></h3>
						<p>The proliferation of mobile devices and popularity of applications like Facebook and Twitter has allowed people to

stay connected to their far-spread networks. However, little

attention has been spent on connections in the local, physical community. These collocated connections are important

for building social capital, sharing resources, and providing

physical support. Movement is a visualization that uses location data generated automatically by mobile devices to

increase community awareness following a new standard

of privacy preservation. Movement also consists of an app

that allows for direct connection to people with shared location histories, again in a secure and private manner. As an

integrated demo at CSCW, Movement displays the popular venues

visited by conference attendees and allow users to connect

with others who visited the same locations. </p><p>To learn more about the project, read our <a href="movement_camera_ready.pdf" target="blank">CSCW demo submission.</a></p>
						<p>Movement was designed and developed by the <a href="http://s.tech.nyc" target="blank">Social Technologies Lab</a> at <a href="tech.cornell.edu" target="blank">Cornell Tech</a>. <br>This work was funded by AOL through the <a href="http://www.connectedexperiences.org" target="blank">Connected Experiences Laboratory.</a></p>
					</div>
				</div>
				<!----team-members---->
				<div class="team-members">
					<div class="container">
						<div class="col-md-3 team-member">
							<div class="team-member-info">
									
										<div class="clearfix"> </div>
									</ul>
								</label>
							</div>
						</div>
						<div class="col-md-3 team-member">
							<div class="team-member-info">
								<a href="http://tech.cornell.edu" target="blank"><img class="member-pic" src="images/Horizontal Cornell + Jacobs - Black.png" title="Cornell Tech" /></a>
									</ul>
								</label>
							</div>
						</div>
						<div class="col-md-3 team-member">
							<div class="team-member-info">
								<a href="http://www.aol.com" target="blank"><img class="logos" src="images/aol-logo.png" title="AOL" /></a>
								</label>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
						<div class="clearfix"> </div>
				<!--//team-members---->
				</div>
			</div>
			<!----//team---->
			<div class="clearfix"> </div>
			
			<!-----FEATURED----->
			
		<!-----FEATURED----->
		<!-----getintouch----->
		<div id="contact" class="getintouch">
			<div class="container">
				<div class="section-head text-center">
					<h3><span class="frist"> </span>Leave Us Feedback<span class="second"> </span></h3>
					<p>CSCW marks the first release of Movement, so please let us know what you think so that we can incorporate your feedback into future iterations. Thank you for testing it out!</p>
				</div>
				<!---->



				<div class="col-md-9 getintouch-left">
					<div class="contact-form col-md-10">
						<h3>Let Us Know What You Think!</h3>


<!-- 						<form enctype="text/plain" method="post" action="MAILTO:s.tech.cornell@gmail.com">
							<input type="text" name="name" placeholder="Name" required />
							<input type="text" name="email" placeholder="Email" required  />
							<textarea name="message" placeholder="Message" required></textarea>
							<input type="submit" value="Send message" />
						</form> -->

						<form action="" method="post">
							<input type="text" name="name" placeholder="Name" required >
							<input type="text" name="email" placeholder="Email" required >
							<textarea rows="5" name="message" placeholder="Message" required ></textarea>
							<input type="submit" name="submit" value="Send message">
						</form>
					</div>
					<!--<ul class="footer-social-icons col-md-2 text-center">
						<li><a class="f-be" href="#"><span> </span></a></li>
						<li><a class="f-tw" href="#"><span> </span></a></li>
						<li><a class="f-db" href="#"><span> </span></a></li>
						<li><a class="f-ti" href="#"><span> </span></a></li>
						<li><a class="f-go" href="#"><span> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
				-->
				</div>
				<div class="col-md-2 getintouch-left">
					<div class="footer-divice">
						<img src="images/device-half.png" title="getintouch" />
					</div>
				</div>	
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid about-info">
						<a href="#"><img src="images/logo.png" title="Movement" /></a>
						<p>Building Community Anonymously</p>
					</div>
					<div class="col-md-3 footer-grid subscribe">
						<h3>Subscribe </h3>
						<form action="//nyc.us12.list-manage.com/subscribe/post?u=29fc6ecc44ebe11b0169accfe&amp;id=f1cff316c0" method="post" iid="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<input type="text" placeholder="" required />
							<input type="submit" value="" />
						</form>
						<p>Get the latest updates on what we're working on at the <a href="http://s.tech.nyc" target="blank">Social Tech Lab.</a></p>
					</div>
					<div class="col-md-3 footer-grid explore">
						<h3>More About Us</h3>
						<ul class="col-md-10">
							<li><a href="http://s.tech.nyc" target="blank">Social Tech Lab</a></li>
							<li><a href="http://www.connectedexperiences.org" target="blank">Connected Experiences Lab</a></li>
							<li><a href="http://tech.cornell.edu" target="blank">Cornell Tech</a></li>
							<li><a href="http://www.aol.com" target="blank">AOL</a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-3 footer-grid copy-right">
						<p class="copy"> © 2016 Cornell Tech. </p><p>All rights reserved. </p>
					</div>
					<div class="clearfix"> </div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
								containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
							};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
		</div>
		<!---//footer----->		
</body>
</html>

