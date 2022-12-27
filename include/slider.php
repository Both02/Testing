<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "PHP";

$connection = mysqli_connect($host,$user,$pass,$db) or die("Both Smoke alot");

$sql = "SELECT * FROM tbl_shop ";
$result = mysqli_query($connection,$sql);
?>




<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="hero-slider owl-carousel">
            <?php
                while($row = mysqli_fetch_array($result))
                {
            ?>
			<div class="hs-item">
				<div class="hs-left"><img src="img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price"><?=$row['txt_1']?></div>
						<h2><?=$row['txt_2']?></h2> 
						<a href="" class="site-btn"><?=$row['txt_3']?></a>
					</div>	
				</div>
			</div>
            <?php
                }
            ?>
			<!-- <div class="hs-item">
				<div class="hs-left"><img src="img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $19.90</div>
						<h2><span>2018</span> <br>summer collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div> -->
		</div>
	</section>
	<!-- Hero section end -->