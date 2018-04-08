<header id="navbar" role="banner">
			<div id="siteLogo" role="brand">
				<a href="index.php"><img src="img/logo/sitelogob.png" alt="logo" /></a>
			</div>

			<!-- Navigation Menu -->
			<nav id="menuTop" role="navigation">
				<ul>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'selected'; }else { echo ''; } ?>"><a href="index.php">Welcome</a></li>
					<div class="dropdown">
						<li class="dropbtn"><a href="#">Services</a></li>
						<div class="dropdown-content">
							<a href="cctv.php">CCTV</a>
							<a href="network.php">Networking</a>
							<a href="ict.php">ICT Consulting</a>
							<a href="training.php">Trainings</a>
						</div>
					</div>
					<div class="dropdown">
						<li class="dropbtn"><a href="#">Products</a>	</li>
						<div class="dropdown-content">
						    <a href="student-products.php">Student Devices</a>
						    <a href="teacher-products.php">Teacher Devices</a>
						    <a href="furniture.php">Modern Classroom Furniture</a>
						     <!-- <p>to use  boardroom equip and funiture</p> -->

						</div>
					</div>

					<li><a href="software.php">Software</a></li>
					<li><a href="contact.php">Contacts</a></li>
				</ul>
			</nav>

			<div id="hamburger">
				<button id="toggleMenu"><span></span></button>
			</div>
		</header>
