<?php
include 'libs/load.php';

?>

<html lang="en">

<?php load_template('_head');?>

<body onload="myFunction()" style="margin: 0;">

	<?php load_template('_nav');?>

	<?php load_template('_section2');?>

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