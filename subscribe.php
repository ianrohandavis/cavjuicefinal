<?php 
	include("includes/config.php");
	$name = "";
	$email ="";
	$message ="";
	
	$date = date("Y/m/d");
	function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}
	function sanitizeFormEmail($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}
if(isset($_SESSION['userLoggedIn'])) {
	$username = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}
if(isset($_POST['submit_5'])){
		$query = mysqli_query($con, "INSERT INTO purchaseHistory VALUES ('$username','50', '$date')");
		header("Location: https://test.bitpay.com/invoice?id=Urbcu9TrheB5uG46AM5ppP");
		// 
		
}
if(isset($_POST['submit_10'])){
	$query = mysqli_query($con, "INSERT INTO purchaseHistory VALUES ('$username','10', '$date')");
	header("Location: https://test.bitpay.com/invoice?id=73nGiCVM7rTN3eLgXBCVLG");
}

if(isset($_POST['submit_promo'])){
	if($_POST['promo'] == "Juice"){
		$query = mysqli_query($con, "INSERT INTO purchaseHistory VALUES ('$username','1', '$date')");
		header("Location: https://test.bitpay.com/invoice?id=73nGiCVM7rTN3eLgXBCVLG");
}else{
	header("Location subscribe.php");
}
}


	

	
 ?>

 <!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cav Juice</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Subscribe</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<img src="images/logo.png" width="17px">
								<li><a href="index.php">Home</a></li>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="subscribe.php">Subscribe</a></li>
								<li><a href="logout.php">Logout</a></li>
								<li><a href="login.php">Log In</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<article id="main" class="special">
							<header>
								<h2><a href="#">Subscribe to receive your smoothies!</a></h2>
								<p>
									“A healthy outside starts from the inside.”
								</p>
							</header>
							<!--<a href="#" class="image featured"><img src="images/smoothieAbout.jpg" alt="" /></a>
							<section>
								<header>-->
									<h3>Options:</h3>
								</header>
								<p>
									Cav Juice allows members to subscribe for either the 10 Juices a Month Plan or the 5 Juices a Month Plan. Pick the plan that works best with your life!
								</p>


								<form method="post">
								<p> 5 Juice per Month Package</p>
								<form action="https://test.bitpay.com/checkout" method="post" >
  									<input type="hidden" name="action" value="checkout" />
  									<input type="hidden" name="posData" value="" />
  									<input type="hidden" name="data" value="jlSytq8N6SR2jJZl7HNxvBIK7M7VNMl6MS0jL7C9Uu0eoXmmtDjQOd79ysD5yx32ZvF33tYImksor5utYG0HIdrZIAZPTvs5bkPC7nFqvxXALlOJuRJUqmoc+6Vf0/b2Lj08bi+TMLSdkZtLJFHKMOrTBHikqQmU3r919fVDVjg7eUsVKwFdEDZHwhreINBpSiSkOdDN77Bf7sc4m6buqZ60xY4DReu4mQ6exeV/zYA=" />
  									<input type="submit" name="submit_5" value='' src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg"  style="width:210px; background-image: url(https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg) " alt="BitPay, the easy way to pay with bitcoins." >
								</form>
								
								<p> 10 Juice per Month Package </p>
								<form action="https://test.bitpay.com/checkout" method="post" >
  									<input type="hidden" name="action" value="checkout" />
 									<input type="hidden" name="posData" value="" />
									<input type="hidden" name="data" value="jlSytq8N6SR2jJZl7HNxvBIK7M7VNMl6MS0jL7C9Uu0eoXmmtDjQOd79ysD5yx32XmoJ3xQvXw2pI74k70S9UmayE56sPTiIKTQOn06u0PyqdVFlu6xzuj1ooxf2qzLg+aF4hNvrPiqKtSxez93oAgElcYZDmtEqgyCRXvR+8uoosk6FAkWGEEfRQwjfJCweYU917GyAQexUbIHkTvmAU+b0wZFxVPXx13m4PVzYYp0=" />
  									<input type="submit" name="submit_10" value='' src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg"  style="width:210px; background-image: url(https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg)" alt="BitPay, the easy way to pay with bitcoins." >
								</form>

								<p> Promo code? Enter below: </p>
								<input type="text" name="promo">
								<form action="https://test.bitpay.com/checkout" method="post" >
  									<input type="hidden" name="action" value="checkout" />
  									<input type="hidden" name="posData" value="" />
									<input type="hidden" name="data" value="jlSytq8N6SR2jJZl7HNxvBIK7M7VNMl6MS0jL7C9Uu0eoXmmtDjQOd79ysD5yx32TidzTQpQDsI133foLAvhuIm5lE2T11XZi3RCVq49yAF32LUoK2xRvVD2kz9QZKy1" />
									<input type="submit" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit_promo" style="width:210px; background-image: url(https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg)" alt="BitPay, the easy way to pay with bitcoins." >
								</form>

								</form>

								<br></br>

								<div>
									
									<a href="refund.php"><h3>Request A Refund</h3></a>

								</div>

								
							</section>
							<section>
								<header>
									<h3>Fresh Juice Made In-House</h3>
								</header>
								<p>
									We love bring you the freshest juice, right from the kitchen squeezed in front of you. Not only do we grow the fruit in our local garden we harvest and blend those fruits in our satte of the art kitcehn.
								</p>
							</section>
						</article>
						<hr />
						
					</div>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Tweets -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="tweet">
												Thanks for the shipment @Cav Juice, Inc. !!!
												<span class="timestamp">5 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Sooo pleased with my Cav Juice order!! Thanks XOXO
												<span class="timestamp">30 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												I never leave the house w/out my juice...
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												If you havn't tried these juices, you're missing out!
												<span class="timestamp">5 hours ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Posts -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3 ><a href="#">New study links juice to athletic performance </a></h3>
												</header>
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3 ><a href="#">The benefits of multivitamins</a></h3>
												</header>
												<span class="timestamp">6 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3 ><a href="#">Trening Start-ups: Cav Juice, Inc.</a></h3>
												</header>
												<span class="timestamp">Yesterday</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3 ><a href="#">A juice a day keeps the doctor away</a></h3>
												</header>
												<span class="timestamp">2 days ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Photos -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<div class="row gtr-25">
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice1.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice2.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice3.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice4.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice5.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/juice6.jpg" alt="" /></a>
										</div>
									</div>
								</section>

						</div>
						<hr />
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Follow us on Social Media!</h3>
										</header>
										<!-- <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p> -->
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>