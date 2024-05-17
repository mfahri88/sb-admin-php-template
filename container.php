<?php require_once "validasi-login.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php include_once "elements/head.php"; ?>

<body class="sb-nav-fixed">

	<?php include_once "elements/navbar.php"; ?>
	
	<div id="layoutSidenav">
		
		<?php include_once "elements/sidenav.php"; ?>
		
		<div id="layoutSidenav_content">
		
			<main>
			
				<?php
				@$page = $_GET['page'];
				switch($page){
					default: 
						include_once "pages/dashboard.php";
					break;
				}
				?>
				
			</main>
			
			<?php include_once "elements/footer.php"; ?>

		</div>
	</div>

	<?php require_once "elements/script-bottom.php"; ?>
	
</body>
</html>
