<?php 
include("header.php");
include("db.php");
include("function.php");
?>
	<div>
		<nav class="grid-main">
			<input type="checkbox" name="check" id="toggle">
			<div class="grid-logo">
				<div><img src="images/logo.png"></div>
				<div class="label-container"><label for="toggle" id="label">&#9776;</label></div>
			</div>
			<ul class="main">
				
				<?php   echo show_menu(); ?>
			</ul>

			
		</nav>
	</div>

</body>
</html>