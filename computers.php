<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title = "Computers";
		include 'inc/head.php';
	 ?>
</head>

<body class="main">
	<section>
		<?php include 'inc/nav-overlay.php'; ?>
	</section>

	<section id="pageHeader">
		<?php include 'inc/desktop-nav.php'; ?>
	</section>

	<section id="mobile">
		<?php include 'inc/mobile-nav.php'; ?>
	</section>

	<section>
				<div class="container-float" id="computers-page">
						<div id="div-overlay">
							<div class="" id="tradeMark">
								<span>&copy 2018 Direct eLearning</span>
							</div>

							<div class="" id="hContent-pages">
									<h1 class="page-title">Laptops</h1>
									<span>Desktops<b>.</b></span>
									<p class="p-title">Computers and accessories. </p>
									
							</div>
						
						</div>
				</div>
	</section>

	<section class="free-space">
		<div>
			<hr class="free-space">
		</div>
	</section>
	
	<section>
		<div class="container-float" id="products">
			

			<div class="text-center" id="prods">
				<div class="product-container" id="prod1">
					<img src="img/desktop.png" alt="Direct E-Learning products" class="image" style="width:100%">
					<div class="middle">
						<div class="text"> Desktop<b>.</b> </div>
						<p class="product-info"> some text here  </p>
					</div>
				</div>

				<div class="product-container" id="prod2">
					<img src="img/laptop.jpeg" alt="Direct E-Learning products" class="image" style="width:100%">
				
					<div class="middle">
						<div class="text">Laptop<b>.</b> </div>
						<p class="product-info">A better interactive learning experience | New ways to learn | Ease of use | Easy to connect.</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<section class="free-space">
		<div>
			<hr class="free-space">
			<div class="row">
				<div class="sm-col-12" style="text-align: center;">
					<button >More Products</button>
				</div>
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
