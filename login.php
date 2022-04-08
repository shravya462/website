<?php
session_start();
error_reporting(0);
date_default_timezone_set('asia/kolkata');





if(isset($_POST['submit']))
{
 
  $username = $_POST['username'];
  $password = $_POST['password']; 
 
 if($username=="Admin" && $password=="Admin@123")
{ 
   

       $_SESSION['username']=$username;
	
	     $extra="addnewslink.php";

         $uip=$_SERVER['REMOTE_ADDR'];

         $host  = $_SERVER['HTTP_HOST'];
         $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
         header("location:http://$host$uri/$extra");
         exit();
		 
}

else
{
    
   echo "<script>alert('Please enter correct credentials');</script>";
   
	

}

}

?>
 
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servant of God Rev. Fr. Alfred Roche Capuchin</title>
    <!-- Favicon icon -->
   
    <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="vendor/lightgallery/css/lightgallery.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
	
</head>

<body>

    <div class="page-wraper">
		<div class="page-content">
			<section class="welcome-screen" style="background-image:url(media/bg1.jpg); background-size:cover;">
				
				<div class="container-fluid">
					<div class="welcome-header">
						<div class="wlcm-logo">
							<img src="media/alfredroche.jpg" alt=""/>
						</div>
					</div>
					<div class="wlcm-form">
						<div class="enter-form">
							<form action="" method="post">
								<h2 class="wlcm-form-title">Enter Your Credentials</h2>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="las la-"></span>
									</div>
									<input type="text" name="username" class="form-control" placeholder="User Name" aria-label="Your Name"/>
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="las las la-"></span>
									</div>
									<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password"/>
								</div>
								
								<input type="submit" name="submit" class="btn btn-primary" value="Submit">
							</form>
						</div>
						<div class="enter-button">
							
							<a href="" class="btn btn-primary">Enter
								<div class="enter-animate">
								   <div class="arrow"></div><div class="arrow"></div><div class="arrow"></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			
			</section>
		</div>
	</div>
	
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="vendor/wow/wow.js"></script><!-- WOW JS -->
<script src="vendor/bootstrap/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="vendor/owl-carousel/owl.carousel.js"></script><!-- OWL-CAROUSEL JS -->
<script src="vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC-POPUP JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="vendor/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="vendor/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="vendor/lightgallery/js/lightgallery-all.min.js"></script><!-- LIGHTGALLERY -->
<script src="vendor/bootstrap-select/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT -->
<script src="js/dz.carousel.js"></script><!-- OWL-CAROUSEL -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>


</html>