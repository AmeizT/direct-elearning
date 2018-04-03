<header id="navbar" role="banner">
			<div id="siteLogo" role="brand">
				<img src="img/logo.png" alt="logo" />
			</div>

			<!-- Navigation Menu -->
			<nav id="menuTop" role="navigation">
				<ul>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'selected'; }else { echo ''; } ?>"><a href="index.php">Welcome</a></li>
					<li><a href="">Business</a></li>
					<div class="dropdown">
						<li class="dropbtn"><a href="#">Products</a>	</li>
						<div class="dropdown-content">
						    <a href="student-products.php">Student Devices</a>
						    <a href="#">Teacher Devices</a>
						    <a href="#">Laptop Tablets</a>
						    <a href="#">Classmate PCs</a>
						    <a href="#">Desktops</a>
						    <a href="#">Modern Classroom Furniture</a>

						</div>
					</div>
					<li><a href="">Software</a></li>
					<li><a href="">Contacts</a></li>
				</ul>
			</nav>

			<div id="hamburger">
				<button id="toggleMenu"><span></span></button>
			</div>
		</header>
