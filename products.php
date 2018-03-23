<!DOCTYPE html>
<html lang="en">

<head>
	<?php 
		$title = "Products";
		include 'inc/head.php';
	 ?>
</head>

<body class="main">
	<section>
		<?php include 'inc/overlay.php'; ?>
	</section>

	<section id="pageHeader">
		<?php include 'inc/desktop-nav.php'; ?>
	</section>

	<section id="mobile">
		<?php include 'inc/mobile-nav.php'; ?>
	</section>

	<section>
		<div class="container-float" id="hero">
			<div class="" id="tradeMark">
				<span>&copy 2018 Direct eLearning</span>
			</div>

			<div class="" id="hContent">
				<h1>Smarter and better <br>approach to learning<b>.</b></h1>
				<span id="tline"></span>
				<p>Embraced by millennial students and tutors; eLearning integrates information communication technology with teaching<br> and learning, therefore empowering tutors and engaging learners.</p>
				<button>Learn More</button>
				<span id="scroll"></span>
			</div>

			<div id="hBottom">
				<div id="scroll">
					
				</div>

				<nav id="heroSocial">
					<ul>
						<li><a href="#" class="fa fa-facebook-square"></a></li>
						<li><a href="#" class="fa fa-tiwtter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
						<li><a href="#" class="fa fa-linkedin-square"></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</section>



	<section>
		<footer id="footer">
			<?php include 'inc/footer.php'; ?>
		</footer>
	</section>








</body>
	<!-- includes for JavaScripts -->
	<?php include 'inc/scripts.php'; ?>
