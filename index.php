<?php 
$page = "include/body.php";
$slider = true;

if(isset($_GET['p']))
{
	$page = $_GET['p'];
	switch($page)
	{
		case "contact.php";
		{
			$page = "contact.php";
			$slider = false;
			break;
		}
		case "categorie.php";
		{
			$page = "categorie.php";
			$slider = false;
			break;
		}
		case "product.php";
		{
			$page = "product.php";
			$slider = false;
			break;
		}
		case "cart.php";
		{
			$page = "cart.php";
			$slider = false;
			break;
		}
		case "checkout.php";
		{
			$page = "checkout.php";
			$slider = false;
			break;
		}
	}
}
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<?php include "include/head.php" ?>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<?php include "include/header.php" ?>

	<?php if($slider) include "include/slider.php" ?>
	
	<?php include $page ?>

	<?php include "include/body.php" ?>
	
	
	<?php include "include/footer.php" ?>
	

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>