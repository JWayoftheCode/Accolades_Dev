<?php
	require("includes/header.php");
?>

	<link rel="stylesheet" href="<?=ROOT?>/assets/css/main.css" />

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

</head>

<body class="is-preload">
	
	<!-- Wrapper -->
	<div id="wrapper">
		
		<!-- Intro -->
		<section class="intro">
			<header>
				<h1>Accolades561</h1>
				<p>A skater company <a href="https://twitter.com/ajlkn">@wayofcode</a> / <a href="https://instagram.com/accolades_561?igshid=YmMyMTA2M2Y=">@accolades561</a></p>
				<ul class="actions">
					<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
				</ul>
			</header>
			<div class="content">
				<span class="image fill" data-position="center"><img src="<?=ROOT?>/img/logo.jpeg" alt="" /></span>
			</div>
		</section>
		
		<!-- Section -->
		<section id="first">
			<header>
				<h2>New Releases</h2>
			</header>
			<div class="content">
				<p><strong>New Apparel Dropping Soon!</strong> </p>
				<!--				<span class="image main"><img src="images/pic02.jpg" alt="" /></span>-->
				
					<!--	Set Timer 	-->
					<div id="CountDown" data-date="<?php echo $timer?>"></div>
			</div>
		</section>
		
		<!-- Section -->
		<section>
			<header>
				<h2>Get in touch</h2>
			</header>
			<div class="content">
				<p><strong>Contact Us</strong> We love to hear any suggestions.</p>
				<form>
					<div class="fields">
						<div class="field half">
							<input type="text" name="name" id="name" placeholder="Name" />
						</div>
						<div class="field half">
							<input type="email" name="email" id="email" placeholder="Email" />
						</div>
						<div class="field">
							<textarea name="message" id="message" placeholder="Message" rows="7"></textarea>
						</div>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Send Message" class="button primary" /></li>
					</ul>
				</form>
			</div>
			<footer>
				<ul class="items">
					<li>
						<h3>Email</h3>
						<a href="#">information@untitled.ext</a>
					</li>
					<li>
						<h3>Phone</h3>
						<a href="#">(000) 000-0000</a>
					</li>
					<li>
						<h3>Address</h3>
						<span>1234 Somewhere Road, Nashville, TN 00000</span>
					</li>
					<li>
						<h3>Elsewhere</h3>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon brands fa-codepen"><span class="label">Codepen</span></a></li>
						</ul>
					</li>
				</ul>
			</footer>
		</section>
		
		<!-- Copyright -->
		<div class="copyright">&copy; Untitled. All rights reserved. Design: <a href="https://html5up.net">Way Of Code LLC.</a>.</div>
	
	</div>
	
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
	<!--//////// TIMER : REQUIRED FILES ////////-->
	<link rel="stylesheet" href="../app/core/timer/inc/TimeCircles.css">
	
	<script src="../app/core/timer/inc/TimeCircles.js"></script>
	<script>
		$(function () {
			$("#CountDown").TimeCircles();
		});
	</script>
	<!--/////// TIMER : REQUIRED FILES  ///////-->
	
</html>
