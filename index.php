<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Tim Croteau - UX Strategy | Design | All Around Nice Fella</title>
		<meta name="description" content="The online portfolio of Tim Croteau, UX strategist & designer.">
		<meta name="author" content="Tim Croteau">
		<!--[if lt IE 9]>
			<!-- For compatibility with older IEs -->
			<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<![endif]-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link href="stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
		<!--[if IE]>
			<link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<![endif]-->
		<link rel="stylesheet" href="stylesheets/styles.css" type="text/css">
		<script src="//use.typekit.net/cte4lth.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</head>

	<body>

		<div id="wrapper">
			<header role="banner" id="heading">
				<hgroup>
					<h1>Tim Croteau | </h1>
					<h2>Designer + UX Strategist</h2>
				</hgroup>
			</header>
			<div id="main">
				<section id="charts">
					<h2>About</h2>
					<div>
						<h3>Skills</h3>
						<span class="chartwell pies">
							<span class="one" title="UX Design">20</span>
							<span class="two">20</span>
							<span class="three">20</span>
							<span class="four">15</span>
							<span class="five">15</span>
							<span class="six">10</span>
						</span>
						
						<ul class="bullets skills">
							<li class="one">UX Strategy</li>
							<li class="two">UI Design</li>
							<li class="three">Info. Architecture</li>
							<li class="four">Content Strategy</li>
							<li class="five">Messaging</li>
							<li class="six">Lead Generation</li>
						</ul>
					</div>
					<div>
						<h3>Stats</h3>
						<span class="chartwell pies">
							<span class="one">100</span>
							<span class="hole">Y</span>
						</span>
						<div id="man">&nbsp;</div>
						<ul class="bullets stats">
							<li class="one"><strong>Location:</strong> Boston, MA</li>
							<li class="two"><strong>Experience (years):</strong> ~8</li>
							<li class="three"><strong>Clients Served:</strong> ~150</li>
							<li class="four"><strong>Education:</strong> B.A. Comp. Sci.</li>
							<li class="five"><strong>Favorite Beer:</strong> Guinness</li>
							<li class="six"><strong>Favorite Food:</strong> Mexican</li>
						</ul>
					</div>
					<div>
						<h3>Tech</h3>
						<span class="chartwell pies">
							<span class="one">27</span>
							<span class="two">20</span>
							<span class="three">14</span>
							<span class="four">27</span>
							<span class="five">6</span>
							<span class="six">6</span>
						</span>
						
						<ul class="bullets tech">
							<li class="one">Photoshop</li>
							<li class="two">Fireworks</li>
							<li class="three">Illustrator</li>
							<li class="four">HTML/CSS</li>
							<li class="five">Javascript</li>
							<li class="six">JQuery</li>
						</ul>
					</div>
				</section>
				<section id="work">
					<h2>Featured Work</h2>
					<section class="thumb">
						<a rel="leanModal" href="#zoom1"><img src="images/work/tedx_thumb.jpg"></a>
						<hgroup>
							<h1>TEDx Beacon Street</h1>
							<h2>UI Design</h2><a href="http://www.tedxbeaconstreet.com" target="_blank">View Site</a></hgroup>
					</section>
					<figure id="zoom1"><img src="images/work/tedx_lg.jpg"></figure>
					<section class="thumb">
						<a rel="leanModal" href="#zoom2"><img src="images/work/click_thumb.jpg"></a>
						<hgroup>
							<h1>ClickSoftware.com</h1>
							<h2>UX Planning</h2>Resource Locator Wireframe</hgroup>
					</section>
					<figure id="zoom2"><img src="images/work/click_lg.jpg"></figure>
					
					<section class="thumb">
						<a rel="leanModal" href="#zoom3"><img src="images/work/tattoo_thumb.png"></a>
						<hgroup>
							<h1>Music-Themed Tattoo</h1>
							<h2>Graphic Design</h2>Options for back or side placement</hgroup>
					</section>
					<figure id="zoom3"><img src="images/work/tattoo_lg.png"></figure>

					<section class="thumb">
						<a rel="leanModal" href="#zoom4"><img src="images/work/mobile_thumb.png"></a>
						<hgroup>
							<h1>Mobile Checkout</h1>
							<h2>UI Design</h2>Mobile Checkout Concept for <a href="http://www.ctshirts.com" target="_blank">ctshirts.com</a></hgroup>
					</section>
					<figure id="zoom4"><img src="images/work/mobile_lg.png"></figure>
				</section>

				<section id="contact">
					<aside>
						<p>I am currently available for consulting and design work, as well as the occasional voice acting gig. I can also be found on:</p>
						<ul>
							<li><a href="http://www.dribbble.com/timcroteau" target="_blank">Dribbble</a></li>
							<li><a href="http://www.twitter.com/timcroteau" target="_blank">Twitter</a></li>
							<li><a href="http://www.linkedin.com/profile/view?id=71357283" target="_blank">LinkedIn</a></li>
						</ul>
					</aside>
					<h2>Contact Me</h2>
					<?php
				        // if the form has been submitted, process it - otherwise, just display the form normally
				        if(isset($_POST['send'])){
				            
				            // pull submitted info out of the form
				            $name = strip_tags($_POST['name']);
				            $emailFrom = strip_tags($_POST['email']);
				            $message = strip_tags($_POST['comments']);
				            
				            // who you're sending the email to (probably change this)
				            $emailTo = "tim@timcroteau.org";
				            $subject = "Portfolio Site - Contact Form Submission";
				            
				            // inset information into the body of the email
				            $body = "Name: ".$name."\n";
				            $body .= "Email: ".$emailFrom."\n";
				            $body .= "Message: ".$message;
				            
				            // set the email headers
				            $headers = "From: ".$emailFrom."\n";
				            $headers .= "Reply-To:".$emailFrom."\n";    
				            
				            $success = mail($emailTo, $subject, $body, $headers);
				            
				            // this is the message that gets displayed after submission
				            if ($success){
				                echo 'Thanks so much! I\'ll be in touch soon.';
				            } else {
				                echo 'Uh Oh... I think I screwed up sending that...';
				            }
				        
				        } else {
				    ?>


					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="contact_me">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" pattern="^[\w\d\'\- ]{3,}$" title="Must include at least 2 characters" required>
						<label for="email">Email Address</label>
						<input type="email" id="email" name="email" required>
						<label for="comments">Comment or Question</label>
						<textarea id="comments" name="comments" maxlength="1000" pattern="{0,1000}" title="1000 character maximum, please" required></textarea>
						<button type="submit" name="send">Send Message</button>
					</form>
					 <?php
            }
        ?>
				</section>
			</div>
			<footer>&copy; 2012 Tim Croteau. All rights reserved. <a href="mailto:tim@timcroteau.org" target="_blank">Email Me</a></footer>
		</div>
		<script src="js/excanvas.min.js"></script>
		<script src="js/chartwell.min.js" type="text/javascript"></script>
		<script src="js/chartwell_pies.min.js" type="text/javascript"></script>
		<script>
			window.onload = function(){
				FFChartwell()
			}
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.leanModal.min.js"></script>
		<script type="text/javascript">
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 0,overlay : 0.7 });		
			});
		</script>
	</body>
</html>
