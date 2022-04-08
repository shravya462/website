<?php session_start();
error_reporting(0);
if($_SESSION['username']=='')
{
	header("location:login.php");
}
else 
{
include("connection.php"); //connection.php
date_default_timezone_set("Asia/Calcutta");
$systemdate= date("H:i:s Y/m/d");
$query="select * from alfred_newslink";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if(isset($_POST['submit']))
{
	
	$newslink=$_POST['newslink'];
	
	if($count==0)//insert 
	{
	
	
		$sql="insert into alfred_newslink(newslink) values('$newslink')";
		if($res=mysqli_query($conn,$sql))
		{	
			echo '<script>alert("Added Succesfully")</script>'; 
			echo "<script>window.open('addnewslink.php','_self')</script>";
		
		}
		else
		{	
			echo '<script>alert("Failed to Add")</script>'; 
			echo "<script>window.open('addnewslink.php','_self')</script>";
		}	
		
		
		
	}
	else
	{
		//update
		
		$sql="update  alfred_newslink set newslink='$newslink'";
		if($res=mysqli_query($conn,$sql))
		{	
			echo '<script>alert("Updated Succesfully")</script>'; 
			echo "<script>window.open('addnewslink.php','_self')</script>";
		
		}
		else
		{	
			echo '<script>alert("Failed to Update")</script>'; 
			echo "<script>window.open('addnewslink.php','_self')</script>";
		}	
		
		
		
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
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo5.png">
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
		<!-- header -->
		  <header class="site-header header-transparent">
       <!--  <div class="top-bar">
            <div class="container-fluid">
               <div class="row d-flex justify-content-between align-items-center">
                  <div class="dlab-topbar-left">
                     <ul>
                        <li><i class="la la-#ad1f41-volume"></i> <a href="tel:9686675463" >9686675463</a></li>
                        <li><i class="las la-map-marker"></i> <a href="">Castelino Complex, Main Road, Kemmannu</a></li>
                     </ul>
                  </div>
                  <div class="dlab-topbar-right">
                     <ul>
                        <li><i class="la la-clock"></i>  Mon - Sat 8.00 - 18.00</li>
                        <li><i class="las la-envelope-open"></i> <a href="mailto:enquiry@kallianpur-kemmannuproperties.com">mailto:enquiry@kallianpur-kemmannuproperties.com</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>-->
         <!-- main header -->
         <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
               <div class="container-fluid clearfix">
                  <!-- website logo -->
                  <div class="logo-header mostion logo-dark">
                     <a href="index.php"><img src="media/alfredroche.jpg" alt=""></a>
                  </div>
                  <!-- nav toggle button -->
                  <!--<button class="navbar-toggler collapsed navicon justify-content-end " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                  <span></span>
                  </button>-->
                  <!-- extra nav -->
                 <div class="extra-nav">
                     <div class="extra-cell">
                     	<a href="logout.php" class="btn btn-primary btnhover13">Logout</a>
                     </div>
                     </div>
                 <!-- <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                     <div class="logo-header d-md-block d-lg-none">
                        <a href="index.php"><img src="media/alfredroche.jpg" alt=""></a>
                     </div>
                  <ul class="nav navbar-nav navbar">
                       
                        
							<li class="active"><a href="addnewslink.php">Add News Link</a>
                        </li>
						</ul>
                        
                  </div>-->
               </div>
            </div>
         </div>
         <!-- main header END -->
      </header>
		<!-- header END -->
        <div class="page-content bg-white">
			<!-- Main Slider -->
			<div class="dlab-bnr-inr">
				<div class="container">
					<div class="dlab-bnr-inr-entry">
						<h1> News Link</h1>
						<!-- Breadcrumb row -->
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							
						</nav>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- Main Slider -->
			<section class="content-inner-1" data-content="">				
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-1 col-md-5 col-sm-12">
							
							
						</div>
						<div class="col-lg-10 col-md-7 col-sm-12 m-b30">
							<form class="contact-box  p-a30 border-1"  method="POST" enctype="multipart/form-data" id="form" >
								<h3 class="title-box">Add/Update News Link</h3>
								
								
								<div class="row">
									<div class="col-lg-12 col-md-6">
									<label for="" > News Link:</label>
										<div class="form-group">
											<div class="input-group">
											
												<input name="newslink" type="text" required="" class="form-control" placeholder=""  value="<?php echo $row['newslink']?>"  required>
											</div>
										</div>
									</div>
									
									<?php if($count==0){ ?>
									
									<div class="col-lg-12 col-md-12">
										<input name="submit" type="submit" value="Submit" class="btn btn-primary">
									</div>
									<?php }else { ?>
									<div class="col-lg-12 col-md-12">
										<input name="submit" type="submit" value="Update" class="btn btn-primary">
									</div>
									
									<?php } ?>
								</div>
								
								
							</form>
						</div>
					</div>
				</div>
			</section>
			
			
		</div>
    <!-- Footer -->
    <!-- Footer -->
       <!--  <footer class="site-footer" id="footer">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                     <div class="widget widget_about">
                        <div class="footer-logo">
                           <a href="index.php"><img src="images/logo6.png" alt=""/></a> 
                        </div>
                        <p></p>
                     </div>
                  </div>
                  <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.6s">
                     <div class="widget">
                        <h5 class="footer-title">Useful Links</h5>
                        <ul class="contact-info-bx">
                             <li><a href="index.php" style="color:white">Home</a></li>
                                <li><a href="about.html" style="color:white">About</a></li>
                                <li><a href="property.php" style="color:white">Land</a></li>
								<li><a href="requirement.php" style="color:white">Post Requirement</a></li>
                               <li><a href="contact.php" style="color:white">Contact </a></li>
                        </ul>
                     </div>
                  </div>
				  
				      <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.6s">
                     <div class="widget">
                        <h5 class="footer-title">Contact Us</h5>
                        <ul class="contact-info-bx">
                           <li><i class="las la-map-marker"></i>Castelino Complex, Main Road, Kemmannu </li>
                           <li><i class="las la-#ad1f41-volume"></i><a href="tel:9686675463" style="color:white">9686675463</a></li>
                           <li><i class="las la-envelope-open"></i><a href="mailto:enquiry@kallianpur-kemmannuproperties.com" style="color:white">enquiry@kallianpur-kemmannuproperties.com</a></li>
                        </ul>
                     </div>
                  </div>
				  
				
              
               </div>
            </div>
         </div>
         <!-- footer bottom part -->
         <div class="footer-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-12 text-md-left text-center">
                     <span>
                     Copyright © 2021 All Rights Reserved 
                     <div class="col-md-6 col-sm-12 text-md-right text-center"> 
                     </div>
                  </div>
               </div>
            </div>
      </footer>
    <!-- Footer END-->
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
<script src="js/dz.ajax.js"></script><!-- AJAX JS -->


</body>


</html>
<?php } ?>