<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		$title = "Home ";
		include 'inc/head.php';
	 ?>
</head>
<body class="main">
	<?php include 'inc/facebook.php'; ?>
	<section>
		<?php include 'inc/nav-overlay.php'; ?>
	</section>

	<section id="pageHeader">
		<?php include 'inc/desktop-nav.php'; ?>
	</section>
	
	<section id="mobile">
		<?php include 'inc/mobile-nav.php'; ?>
	</section>

	<!-- Home page section -->
	<section>
		<div class="container-float" id="hero">
			<video autoplay muted loop id="evideo">
				<source src="vid/elearn.mp4" type="video/mp4">
			</video>

			<div class="" id="tradeMark">
				<span>&copy 2018 Direct eLearning</span>
			</div>

			<div class="" id="hContent">
				<h1>Smarter and better <br>approach to learning<b>.</b></h1>
				<span id="tline"></span>
				<p>Embraced by millennial students and tutors; eLearning integrates information communication technology with teaching<br> and learning, therefore empowering tutors and engaging learners.</p>
				<item style="padding-left: 22px;">
				<div  class="fb-like" data-href="https://www.facebook.com/directelearning/"   data-width="300" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true" id="facebook" style="background-color:rgba(255, 255, 255, 0.4);"></div>
                </item>
				<span id="scroll"></span>
			</div>

			<div id="hBottom">
				<?php include 'inc/social.php'; ?>
			</div>
		</div>
	</section>

	<section id="About">
		<div class="container-float" id="about">
			<h2>Learning meets<br> <b>Technology</b><b>.</b></h2>
			<span id="tline"></span>
			<p>Direct eLearning delivers an enhanced approach to the education system by equipping schools with elearning tools and promoting the integration of education and technology. The prime areas of focus are contributing to the development and innovation of the curriculum and assessment for engagement, progression, quality, inclusion and continuity across sectors and governing bodies.</p>
			<span id="cirline"></span>
		</div>
	</section>

	<section>
		<div class="container-float" id="products">
			<div id="prodIntro">
				<h1>Bridging<br> the gap <b>between</b> education and tech<b>.</b></h1>
				<span id="tline"></span>
				<p>The key to an interactive approach to learning lies in technology benefiting the tutors and students. eLearning simplifies the education system. This is an approach that makes it easier to manage schools and resources for more efficient results. Additionally, our services are not only limited to the supply of elearning products and software but extends to information and technology capacity building programs.</p>
			</div>

			<div class="text-center" id="prods">
				<div class="" id="prod1">
					<i class="flaticon-laptop" id="fcon"></i>
					<h3>Student devices<b>.</b></h3>
					<p>We supply laptops, tablets and classmate personal computers for students and many other elearning devices and products.</p>
					<button>Explore our Products</button>
				</div>

				<div class="" id="prod2">
					<i class="flaticon-old-school" id="fcon"></i>
					<h3>School Products<b>.</b></h3>
					<p>A good learning environment must be fully furnished with modern desks, chairs and interactive devices.</p>
					<button>Explore our Products</button>
				</div>

				<div class="" id="prod3">
					<i class="flaticon-classroom" id="fcon"></i>
					<h3>Capacity Building<b>.</b></h3>
					<p>In addition to supplying elearning products, we also engage in training and employee development programs for teachers.</p>
					<button>Explore our Courses</button>
				</div>

				<div class="" id="prod4">
					<i class="flaticon-network" id="fcon"></i>
					<h3>Networking<b>.</b></h3>
					<p>In addition to supplying elearning products for teachers, we also offer teacher training and professional development programs.</p>
					<button>Explore our Services</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container-float text-center" id="callout">
			<span id="vline"></span>
			<h2>Let's build<br> the best <b>learning</b> environment<b>.</b></h2>
			<span id="tline"></span>
			<p>Our mission is to develop effective interpersonal skills essential for personal, social professional, educational fullfilment, foster critical thinking, collaboration, communication in learning; developing flexibility and creativity.</p>
			<button>Read More</button>
			<!--<div class="container" id="linar"></div>-->
		</div>
	</section>

	<section>
		<div class="container-float" id="partners">
			<div class="" id="partnersInfo">
				<h3>Partnerships <br>that matters to us.</h3>
				<p>Direct eLearning has partnered with information and technology giants and internationally recognised organizations across the world in a bid to continuosly improve our services and staying abreast of global technology changes with an impact to elearning.</p>
				<div class="container" id="linar"></div>
			</div>

			<div class="container" id="partnersLogos">
				<div class="container" id="allLogos">
					<!-- Partner Logo 1 -->
					<div id="logo">
						<img src="img/ms.png" alt="microsoft" />
					</div>

					<!-- Partner Logo 2 -->
					<div id="logo">
						<img src="img/newlin.png" alt="newline" />
					</div>

					<!-- Partner Logo 3 -->
					<div id="logo">
						<img src="img/intel.png" alt="intel" />
					</div>

					<!-- Partner Logo 4 -->
					<div id="logo">
						<img src="img/intel.png" alt="microsoft" />
					</div>

					<!-- Partner Logo 5 -->
					<div id="logo">
						<img src="img/ms.png" alt="newline" />
					</div>

					<!-- Partner Logo 6 -->
					<div id="logo">
						<img src="img/newlin.png" alt="intel" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container-float text-center" id="quotes">
			<span class="fa fa-quote-left"></span>
				<p id="black">Direct eLearning is very professional and they always value their customers but most importantly, reliability is their inner-strength.</p>
				<cite><strong>Sam Sibanda</strong> - Eastview High School</cite>
			<span class="fa fa-quote-right"></span>
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
