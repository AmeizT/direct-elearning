<!-- J-Query Plug-in -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Open and close mobile navigation -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#toggleMenu').click(function(){
				$('#navOverlay').toggleClass('active');
				$('#navbar').toggleClass('active');
				$('#main').toggleClass('active');
				$('#toggleMenu, #menuTop, #siteLogo, #navbar').toggleClass('toggle');
			})
		})
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#toggleDrop').click(function(){
				$('#subMenu').toggleClass('active').slideToggle(300);
				$('#toggleDrop').toggleClass('toggle');
			})
		})
	</script>

	<script>
	   	$(window).scroll(function() {
		if ($(document).scrollTop() > 100) {
			$('#navbar, #menuTop').addClass('shrink').fadeIn(500);
			} else {
				$('#navbar, #menuTop').removeClass('shrink');
			}
		});
	</script>