<?php
include 'libs/load.php';

?>

<html lang="en">

<?php load_template('_head');?>

<body onload="myFunction()" style="margin: 0;">
	<!-- left Design start -->
	<div class="preloader">
		<div style="background-color: black;width: 100%;height: 100vh;" id="loader">
			<div id="loader-inner"></div>
		</div>
	</div>
	<div style="display: none;" id="mydiv" class="animate-bottom">
		<div class="mouseanimation">
			<span class="mouse">
				<span class="mouse-wheel"></span>
			</span>
		</div>
		<!-- left Design end -->

		<?php load_template('_nav');?>

		<?php load_template('_section1');?>

		<?php load_template('_footer');?>

		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
		<script src="/portfolio/index.js"></script>
		<script>
			let TabPraveen = false;
			const interval = setInterval(() => {
				document.title = TabPraveen ? 'About Me <3' : '(1) New Message';

				TabPraveen = !TabPraveen;
			}, 1000)
		</script>
</body>

</html>