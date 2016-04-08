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
			<!----team---->
			<div id="about" class="team">
				<div class="container" style="text-align:left">
					<div class="section-head" style="text-align:left">
						<h3><span class="frist"> </span>MoveMeant Privacy Policy <span class="second"> </span></h3>
						<p>This Privacy Policy describes how we handle the information we collect and receive about users. There are two things you should keep in mind as you read it:

- First, the Privacy Policy applies only to MoveMeant services that link to or refer to this Privacy Policy. These services include websites, mobile apps, other online services and anything else that links to or refers to this policy. To keep things simple, we refer to all these services as our "Services."
- Second, the Privacy Policy applies no matter what computer or device you use to access our Services.

We've done our best to keep this Privacy Policy short and simple, but if you have any questions about it, we hope you’ll let us know.</p>

						<p><b>Information We Collect and Receive</b><br>

We collect and receive information about users in a few different ways:
Information you give us. You can give us information directly. For example:

- When you sign up for MoveMeant account you give us information such as your name and email address.</p>

<p><b>Information we collect or receive when you use our Services</b><br>

We will collect the following data during the study:

- the total number of venues you visit,
- the total number of times you open the app and
- the total number of times you sign and/or view the guestbook for a particular venue.

We also collect anonymized aggregates across all participants in the study of the total number of visits and the guestbook signatures for each venue.

It is not possible for us to reconstruct your complete location history from the data we receive. Your complete location history is only stored on your own device and can be removed by deleting the app after the study has finished. You can turn off the location tracking at any time from the settings menu in the app and you can delete a tracked venue at any time from the venues page of the app.

</p><p><b>After the study is complete</b><br>

After the study is complete you should delete the app from your phone. This will complete stop the app from tracking your location and collecting your data. After the study is compete we will turn off our server which will stop your data being collected even if you forget to delete the app.</p>
	
</body>
</html>

