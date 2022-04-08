
  <?php
  error_reporting(0);
  include("connection.php");
  
if(isset($_POST['submit'])){
   $to = "cappro@rediffmail.com"; // this is your Email address
   $from = $_POST['email']; // this is the sender's Email address
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $country = $_POST['country'];
   $city = $_POST['city'];
   $message=$_POST['message'];
   $subject = $_POST['subject'];
   $subject2 = "Copy of Mail";
   $message = $name . " wrote the following:" . "\n\n" . "Name:". $name ."\n\n". "Phone No:". $phone ."\n\n".
   "Address" .$address . "\n\n" . "City:". $city ."\n\n".  "Country:" .$country ."\n\n". "Message:". $message;
   $message2 = "Here is a copy of your message " . $name . "\n\n" .$message;
   $headers = "From:" . $from;
   $headers2 = "From:" . $to;
   mail($to,$subject,$message,$headers);
   mail($from,$subject2,$message2,$headers2); // sends a copy of the message to
   }
   $query="select * from alfred_newslink";
   $result=mysqli_query($conn,$query);
  
   $row= mysqli_fetch_array($result);
$count= mysqli_num_rows($result);

?>
<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Servant of God Rev. Fr. Alfred Roche Capuchin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">

    <!-- Dependency Stylesheet -->
    <link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/animate/animate.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/meanmenu/css/meanmenu.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/flaticon/fonts/flaticon.css" type="text/css">
    <link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="dependencies/owl.carousel/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/owl.carousel/css/owl.theme.default.min.css" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap"
        rel="stylesheet">

    <!-- Site Stylesheet -->    
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    
</head>

<body class="sidebar-demo close-sidebar" style="overflow-x: hidden;">
    
   
    <div id="wrapper" class="wrapper">
        <!--=====================================-->
        <!--=       Offcanvas Menu Start        =-->
        <!--=====================================-->
        <div class="fxt-offcanvas-wrap">             
            <div class="fxt-offcanvas-content">  
  <button id="btn-toggle" class="btn-toggle sidebar-toggle sidebar-toggle-btn" style="background:white">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>			
                <div class="logo-area">
                    <a href="" class="default-logo"><img src="media/" alt=""></a>
                </div>
              
            </div>
            <div class="fxt-offcanvas-nav">
                <ul id="onepage_nav">
                    <li class="current"><a href="#wrapper">Home</a></li>
                    <li><a href="#section2">Life Journey</a></li>
                    <li><a href="#section3">Links</a></li>
                    <li><a href="#section4">Provincial Minister</a></li>
                    <!--li><a href="">Witnesses</a></li>
                    <li><a href="">News</a></li-->
                    <li><a href="#section7"> Gallery</a></li>
                    <li><a href="#section8">Contact</a></li>
                </ul>
            </div>
        </div>        
        <!--=====================================-->
        <!--=        Offcanvas Menu End         =-->
        <!--=====================================-->
        <div class="fxt-main-content">
        <!--=====================================-->
        <!--=            Banner Start           =-->
        <!--=====================================-->
		<style>
						
				@media only screen and (min-width: 960px) {
							#title_message
							{
						          visibility:hidden;
	  
							}
							.bg-common
							{
								background-image:url("media/bg.jpg");
							}
        
					}
				@media only screen and (max-width: 480px) {
					#title_message
					{
						visibility:visible;
					}
					.bg-common
							{
								background-image:url("media/bg1.jpg");
							}
				}
						</style>
        <section class="fxt-main-banner-section bg-common"  >
            <div class="container">
                <div class="fxt-main-banner-box-layout1 has-animation">
                    <div class="top-content">
                        <div class="item-img">
                            <div class="translate-zoomout-10 opacity-animation transition-50 transition-delay-100">
                                <img src="media/bg12.png" alt="Figure">
                            </div>
                        </div>
						
						
						         <div id="title_message">
                        <div class="item-content">
                            <div class="translate-bottom-100 opacity-animation transition-150 transition-delay-500">
                             <div class="item-top-text" >Servant of God </div>
                            </div>
                            <div class="translate-bottom-100 opacity-animation transition-150 transition-delay-800">
                                <h2 class="item-title"  > Rev. Fr. Alfred Roche Capuchin</h2>
                            </div>

                          
                        </div>
						</div>
                    </div>
                    <!--<div class="bottom-content">
                        <div class="item-social">
                            <ul>
                                <li>
                                    <div
                                        class="translate-bottom-100 opacity-animation transition-50 transition-delay-1300">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="translate-bottom-100 opacity-animation transition-50 transition-delay-1500">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="translate-bottom-100 opacity-animation transition-50 transition-delay-1700">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="translate-bottom-100 opacity-animation transition-50 transition-delay-1900">
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="translate-bottom-100 opacity-animation transition-50 transition-delay-2100">
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="translate-bottom-100 opacity-animation transition-50 transition-delay-2300">
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item-website">
                            <div class="translate-bottom-100 opacity-animation transition-50 transition-delay-2400">
                                <a href="#"> alfredrochecap.com</a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=             Banner End            =-->
        <!--=====================================-->


      
           <!--=====================================-->
        <!--=            About Start           =-->
        <!--=====================================-->



        <!--=====================================-->
        <!--=            About Start           =-->
        <!--=====================================-->
        <section class="fxt-about-section bg-color-1" id="section2">
            <div class="container">
                <div class="fxt-heading-layout1">
                    <h2 class="heading-title">About</h2>
                    <div class="heading-paragraph">The life of ‘Servant of God, Rev. Fr. Alfred Roche’, OFM Capuchin.
                    </div>
                    <div class="heading-line"></div>
                </div>
                <div class="row">
                <div class="col-lg-12 col-16">
                        <div class="fxt-about-box-layout2">
                           
                            
                            <p style="text-align:justify">   Born on 3rd April 1924 in Moodahadu, Barkur, as the youngest and the fifth child of Isaac Roche and Carmine Ana Stella Montherio.
                            Receives Holy Sacrament of Communion in May 1931. </p>
                            <p> Had his primary education in the Moodahadu Primary School, Pandeshwar, till 5th Standard and continued in the St. Anthony’s Higher Primary School, Airody, Sastan.
                            High school studies in Milagres High School, Kallianpur. He became an active and well sought Member of the Milagres Kallianpur Parish Choir.
                            In Kallianpur attends native Capuchin Rev. Fr. Philip Neri’s First Holy Mass and later his meeting with this newly ordained priest, the event is a turning point in the life of young Peter John……</p>
                            <p> In 1943, at the age of 20 decides to join Seminary and the congregation of Capuchins, to walk in the footsteps of St. Francis of Assisi.  Makes the commitment to join Franciscan religious order, on 03.02.1944, at Monte Mariano in Farangipet. Rev. Fr. Ambrose Rebello was his first Novice Master.
                            As it was the practice to renounce the past and embrace the future, the name Peter John changed to Alfred Roche.
                            Makes his First Profession on 11th April 1945.
                            <p>In 1946 travels to Quilon, St. Anthony’s Friary, Kerala to study Philosophy.
                            Completes Theological studies in Amalashram Trichy.
                            On 11th April, 1949 makes the Final Profession.</p>
                            <p> Ordained Capuchin Priest on 11th April, 1951, at the age of 28, in Kotagiri, St Joseph’s Friary, in Nilagiries in Tamil Nadu, earlier known as Madras Presidency.
                            Newly ordained young Priest, thereafter known as Rev. Fr. Alfred Roche, OFM – Order of Friars, Minor, Capuchins.
                            Celebrate First Holy Mass at native, St. Peters Church, Barkur, on 14th April, 1951. Rev Fr. Charles Nazareth was the Parish Priest, and makes the elaborate arrangements, for this historical event.
                            Fr. Roche celebrates the ‘Golden Jubilee of his dedicated Religious Life’ on 30th April 1995, in Holy Family Church, Brahmmavar.
                            Breathes his last in early morning at 5.30 a.m. on 31st December, 1996, at the age of 72.
                            </p>
                            <div class="personal-info">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <!--div class="info-list">
                                            <ul>
                                                <li><span>Birthday:</span>05. 09.1975</li>
                                                <li><span>City:</span>Sydney</li>
                                                <li><span>Study:</span>Australia University</li>
                                                <li><span>Website:</span>www.mywebsite.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="info-list">
                                            <ul>
                                                <li><span>Age:</span>33 Years</li>
                                                <li><span>Degree:</span>Master</li>
                                                <li><span>Mail:</span>email@example.com</li>
                                                <li><span>#ad1f41:</span>+01 458 789 4492</li>
                                            </ul>
                                        </div>
                                    </div-->
                                </div>
                            </div>
                        </div>
                    </div>
					
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=             About End             =-->
        <!--=====================================-->
              <!--=====================================-->
        <!--=            Progress Start         =-->
        <!--=====================================-->
        <section class="fxt-progress-section  bg-attachment-fixed" data-bg-image="media/youtubebg.jpg"  style="background:url('media/youtubebg.jpg');background-position: center;
  background-size: cover;
  background-repeat: no-repeat;" id="section3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-5 col-6">
                        <div class="fxt-progress-box-layout1">
                           
                            <div class="item-label"><a href="https://www.youtube.com/channel/UCOzGO7HbTgILTCA3HSDehnQ" target="_blank"><img src="media/img5.png" alt="" ></a></div>

                        </div>
                    </div>
					<div class="col-lg-3 col-sm-5 col-6">
                        <div class="fxt-progress-box-layout1">
                           
                            
                            <div class="item-label"></div>
                        </div>
                    </div>
				
                    <div class="col-lg-6 col-sm-8 col-6">
                        <div class="fxt-progress-box-layout1">
                           
                            
                            <div class="item-label"></div>
							<div class="item-label" style="background:#ddd7d7"><a href="https://www.daijiworld.com/news/homeLiveProgram?hpVideoID=1" target="_blank">Click on this to get live</a></div>
                        </div>
                    </div>
					 <div class="col-lg-6 col-sm-8 col-6">
                        <div class="fxt-progress-box-layout1">
                           
                            
                            <div class="item-label"></div>
							<div class="item-label" ></div>
                        </div>
                    </div>
					
					
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=            Progress End           =-->
        <!--=====================================-->

        <section class="fxt-about-section bg-color-1" id="section4">
            <div class="container">
                <div class="fxt-heading-layout1">
                    <h2 class="heading-title">Provincial Minister and the Definitors</h2>
                    <!--<div class="heading-paragraph">There are many variations of passages of Lorem Ipsum available
                    </div>-->
                    <div class="heading-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12 has-animation">
                        <div class="fxt-about-box-layout1">
                            <div class="translate-zoomout-10 opacity-animation transition-50 transition-delay-500">
                                <div class="item-img">
                                    <img data-tilt src="media/John Alwyn Dias.jpg" alt="About">
                                </div>                            
                            </div>
                            <div class="translate-bottom-50 opacity-animation transition-150 transition-delay-1000">
                                <a href="" class="download-btn btn-fill">Fr. John Alwyn Dias<br/>
								 <font size="2px"> Provincial Minister</font>
								</a>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-4 col-12 has-animation">
                        <div class="fxt-about-box-layout1">
                            <div class="translate-zoomout-10 opacity-animation transition-50 transition-delay-500">
                                <div class="item-img">
                                    <img data-tilt src="media/Paul Melwyn.jpg" alt="About">
                                </div>                            
                            </div>
                            <div class="translate-bottom-50 opacity-animation transition-150 transition-delay-1000">
                                <a href="" class="download-btn btn-fill">Fr. Paul Melwyn D'Souza<br/>
								 <font size="2px"> 	Vice Provincial & First Definitor</font>
								</a>
                            </div>
                        </div>
                   </div><div class="col-lg-4 col-12 has-animation">
                        <div class="fxt-about-box-layout1">
                            <div class="translate-zoomout-10 opacity-animation transition-50 transition-delay-500">
                                <div class="item-img">
                                    <img data-tilt src="media/Peter Cpyrian.jpg" alt="About">
                                </div>                            
                            </div>
                            <div class="translate-bottom-50 opacity-animation transition-150 transition-delay-1000">
                                <a href="" class="download-btn btn-fill">Fr. Peter Cyprian D'souza<br/>
								 <font size="2px"> Second Definitor</font>
								</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-12 has-animation">
                        <div class="fxt-about-box-layout1">
                            <div class="translate-zoomout-10 opacity-animation transition-50 transition-delay-500">
                                <div class="item-img">
                                    <img data-tilt src="media/Victor Robin D'Souza.jpg" alt="About">
                                </div>                            
                            </div>
                            <div class="translate-bottom-50 opacity-animation transition-150 transition-delay-1000">
                               <a href="" class="download-btn btn-fill">Fr. Robin Victor D'Souza<br/>
								 <font size="2px">Third Definitor</font>
								</a>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-4 col-12 has-animation">
                        <div class="fxt-about-box-layout1">
                            <div class="translate-zoomout-10 opacity-animation transition-50 transition-delay-500">
                                <div class="item-img">
                                    <img data-tilt src="media/William Prabhu.jpg" alt="About">
                                </div>                            
                            </div>
                            <div class="translate-bottom-50 opacity-animation transition-150 transition-delay-1000">
                                <a href="" class="download-btn btn-fill">Fr. William Prabhu<br/>
								 <font size="2px"> 	Fourth Definitor</font>
								</a>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					
					
					
					
					
                   <!-- <div class="col-lg-8 col-12">
                        <div class="fxt-about-box-layout2">
                            <h3 class="item-title">Maria Lopez</h3>
                            <div class="item-subtitle">Graphic Designer &amp; Web Developer</div>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority is have
                                suffered alteration in that some form by injected humour or randomised that words which
                                don't
                                look even slightly believable. If you are going a to use a passage of Lorem Ipsum you
                                need to be sure
                                there isn't anything embarrassing. There are is many variations of passages available.
                            </p>
                            <div class="personal-info">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="info-list">
                                            <ul>
                                                <li><span>Birthday:</span>05. 09.1975</li>
                                                <li><span>City:</span>Sydney</li>
                                                <li><span>Study:</span>Australia University</li>
                                                <li><span>Website:</span>www.mywebsite.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="info-list">
                                            <ul>
                                                <li><span>Age:</span>33 Years</li>
                                                <li><span>Degree:</span>Master</li>
                                                <li><span>Mail:</span>email@example.com</li>
                                                <li><span>#ad1f41:</span>+01 458 789 4492</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--->
					
                </div>
            </div>
        </section>
		
		
		
		
		
		
		
		
		<section class="fxt-about-section bg-color-1" id="section3">
            <div class="container">
                <div class="fxt-heading-layout1">
                    <h2 class="heading-title">Vice-Postulator</h2>
                    <!--<div class="heading-paragraph">There are many variations of passages of Lorem Ipsum available
                    </div>-->
                    <div class="heading-line"></div>
                </div>
                <div class="row">
				
				<div class="col-lg-4 col-12 has-animation">
                        
                    </div>
                   <div class="col-lg-4 col-12 has-animation">
                        <div class="fxt-about-box-layout1">
                            <div class="translate-zoomout-10 opacity-animation transition-50 transition-delay-500">
                                <div class="item-img">
                                    <img data-tilt src="media/Santa Lopes.jpg" alt="About">
                                </div>                            
                            </div>
                            <div class="translate-bottom-50 opacity-animation transition-150 transition-delay-1000">
                                <a href="" class="download-btn btn-fill">Fr.Santa Lopes<br/>
								 <font size="2px">Vice-Postulator</font>
								</a>
                            </div>
                        </div>
                    </div>
	
			
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=             About End             =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=            Skill Start           =-->
        <!--=====================================-->        
      <!--  <section class="fxt-skill-section" id="section3">
            <div class="container">                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fxt-skill-wrap-layout1">
                            <div class="item-heading">
                                <h2 class="item-title">Technical Skills</h2>
                                <p>There are many variations available but the majority</p>
                            </div>
                            <ul class="fxt-skill-box-layout1">
                                <li class="single-item">
                                    <label>UI/UX Designer</label>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 85%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                                            <span>85%</span>
                                        </div>
                                    </div>                                   
                                </li>
                                <li class="single-item">
                                    <label>JavaScript</label>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 61%; visibility: visible; animation-duration: 2000ms; animation-delay: 200ms; animation-name: slideInLeft;">
                                            <span>61%</span>
                                        </div>
                                    </div>                                    
                                </li>
                                <li class="single-item">
                                    <label>HTML5</label>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 69%; visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: slideInLeft;">
                                            <span>90%</span>
                                        </div>
                                    </div>                                    
                                </li>
                                <li class="single-item">
                                    <label>PHP / MYSQL</label>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 69%; visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: slideInLeft;">
                                            <span>69%</span>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fxt-skill-wrap-layout2">
                            <div class="item-heading">
                                <h2 class="item-title">Professional Skills</h2>
                                <p>There are many variations available but the majority</p>
                            </div>
                            <ul class="fxt-skill-box-layout2">
                                <li class="single-item">
                                    <label>Photoshop</label>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 85%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                                            <span>85%</span>
                                        </div>
                                    </div>                                   
                                </li>
                                <li class="single-item">
                                    <label>Illustrator</label>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 61%; visibility: visible; animation-duration: 2000ms; animation-delay: 200ms; animation-name: slideInLeft;">
                                            <span>61%</span>
                                        </div>
                                    </div>                                    
                                </li>
                                <li class="single-item">
                                    <label>AngularJS</label>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 69%; visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: slideInLeft;">
                                            <span>90%</span>
                                        </div>
                                    </div>                                    
                                </li>
                                <li class="single-item">
                                    <label>PHP</label>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 69%; visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: slideInLeft;">
                                            <span>69%</span>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!--=====================================-->
        <!--=             Skill End             =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=            Service Start          =-->
        <!--=====================================-->
        <!--<section class="fxt-service-section bg-color-1" id="section4">
            <div class="container">
                <div class="fxt-heading-layout1">
                    <h2 class="heading-title">What I do</h2>
                    <div class="heading-paragraph">There are many variations of passages of Lorem Ipsum available</div>
                    <div class="heading-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-100">
                            <div class="fxt-service-box-layout1">
                                <div class="item-img animation-delay0">
                                    <img src="media/service/service1.png" alt="service">
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">UI/UX Design</a></h3>
                                    <p>There are many variations passages of Lorem Ipsum available majority have dummy
                                        passage.</p>
                                    <a href="#" class="item-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-400">
                            <div class="fxt-service-box-layout1">
                                <div class="item-img animation-delay1">
                                    <img src="media/service/service2.png" alt="service">
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Web Development</a></h3>
                                    <p>There are many variations passages of Lorem Ipsum available majority have dummy
                                        passage.</p>
                                    <a href="#" class="item-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-700">
                            <div class="fxt-service-box-layout1">
                                <div class="item-img animation-delay2">
                                    <img src="media/service/service3.png" alt="service">
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Apps Development</a></h3>
                                    <p>There are many variations passages of Lorem Ipsum available majority have dummy
                                        passage.</p>
                                    <a href="#" class="item-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-100">
                            <div class="fxt-service-box-layout1">
                                <div class="item-img animation-delay3">
                                    <img src="media/service/service4.png" alt="service">
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Strategy Solutions</a></h3>
                                    <p>There are many variations passages of Lorem Ipsum available majority have dummy
                                        passage.</p>
                                    <a href="#" class="item-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-300">
                            <div class="fxt-service-box-layout1">
                                <div class="item-img animation-delay4">
                                    <img src="media/service/service5.png" alt="service">
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Digital Marketing</a></h3>
                                    <p>There are many variations passages of Lorem Ipsum available majority have dummy
                                        passage.</p>
                                    <a href="#" class="item-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-700">
                            <div class="fxt-service-box-layout1">
                                <div class="item-img animation-delay5">
                                    <img src="media/service/service6.png" alt="service">
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">Social Media</a></h3>
                                    <p>There are many variations passages of Lorem Ipsum available majority have dummy
                                        passage.</p>
                                    <a href="#" class="item-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=            Service End            =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=            Testimonial Start      =-->
        <!--=====================================-->
        <section class="fxt-testimonial-section parallaxie" data-bg-image="media/bg2.jpg" style="background:url('media/bg2.jpg');background-position: center;
  background-size: cover;
  background-repeat: no-repeat;">
            <div class="container">
                <div class="rc-carousel dot-control-layout1" data-loop="true" data-items="3" data-margin="50" data-autoplay="false"
                    data-autoplay-timeout="3000" data-smart-speed="700" data-dots="true" data-nav="false"
                    data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true"
                    data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="1"
                    data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false"
                    data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true"
                    data-r-extra-large="3" data-r-extra-large-nav="false" data-r-extra-large-dots="true">
                    <div class="fxt-testimonial-box-layout1">
                        <div class="item-icon">
                            <i class="flaticon-right-quote"></i>
                        </div>
                        <div class="item-text">“Don’t fear, because I am with you; don’t be afraid, for I am your God. I will strengthen you, I will surely help you; I will hold you with my righteous strong hand.” </div>
                        <div class="item-name">Isaiah<span>-41:10</span></div>
                    </div>
                    <div class="fxt-testimonial-box-layout1">
                        <div class="item-icon">
                            <i class="flaticon-right-quote"></i>
                        </div>
                        <div class="item-text">
						Humble yourselves, therefore, under the mighty hand of God so that at the proper time He may exalt you, casting all your anxieties on Him, because He cares for you.</div>
                        <div class="item-name">Peter <span>- 5:6–7 </span></div>
                    </div>                    
                    <div class="fxt-testimonial-box-layout1">
                        <div class="item-icon">
                            <i class="flaticon-right-quote"></i>
                        </div>
                        <div class="item-text"> 
                     "So do not fear, for I am with you; do not be dismayed, for I am your God. I will strengthen you and help you; I will uphold you with my righteous right hand."</div>
                        <div class="item-name"> Isaiah  <span>- 41:10(NIV)</span></div>
                    </div>
                    <div class="fxt-testimonial-box-layout1">
                        <div class="item-icon">
                            <i class="flaticon-right-quote"></i>
                        </div>
                        <div class="item-text">The Lord is my light and my salvation; Whom shall I fear? The Lord is the strength of my life; Of whom shall I be afraid?

</div>
                        <div class="item-name"> Psalm <span>- 27:1</span></div>
                    </div>
                   
                   
                    
                </div>
            </div>       
        </section>
        <!--=====================================-->
        <!--=             Testimonial End       =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=             Portfolio Start         =-->
        <!--=====================================-->
        <section class="fxt-portfolio-section bg-color-1" id="section7" data-bg-image="media/bg4.jpg" style="background:url('media/bg4.jpg');background-position: center;
  background-size: cover;
  background-repeat: no-repeat;">
            <div class="container">
                <div class="fxt-heading-layout1">
                    <h2 class="heading-title">Gallery</h2>
                    <div class="heading-paragraph">Some Memories of Rev. Fr. Alfred Roche Capuchin</div>
                    <div class="heading-line"></div>
                </div>
                <div class="isotope-wrap">
                    <!--<div class="text-center">
                        <div class="isotope-classes-tab isotop-btn">
                            <a class="current nav-item" data-filter="*">All Categories</a>
                            <a class="nav-item" data-filter=".web">Web Design</a>
                            <a class="nav-item" data-filter=".mockups">Branding Mockups</a>
                            <a class="nav-item" data-filter=".photography">Photography</a>
                        </div>
                    </div>-->
                    <div class="row featuredContainer">
                        <div class="col-lg-2
						col-md-6 col-sm-6 col-12 mockups has-animation">
                            <div class="translate-left-10 opacity-animation transition-200 transition-delay-100">
                                <div class="fxt-portfolio-box-layout1">
                                    <div class="item-img">
                                        <img src="media/pic1.jpg" alt="Portfolio" >
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 web has-animation">
                            <div class="translate-left-10 opacity-animation transition-200 transition-delay-400">
                                <div class="fxt-portfolio-box-layout1">
                                    <div class="item-img">
                                        <img src="media/pic2.jpg" alt="Portfolio">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 mockups has-animation">
                            <div class="translate-left-10 opacity-animation transition-200 transition-delay-1600">
                                <div class="fxt-portfolio-box-layout1">
                                    <div class="item-img">
                                        <img src="media/pic6.jpg" alt="Portfolio">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 photography has-animation">
                            <div class="translate-left-10 opacity-animation transition-200 transition-delay-1900">
                                <div class="fxt-portfolio-box-layout1">
                                    <div class="item-img">
                                        <img src="media/pic7.jpg" alt="Portfolio">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 photography has-animation">
                            <div class="translate-left-10 opacity-animation transition-200 transition-delay-2200">
                                <div class="fxt-portfolio-box-layout1">
                                    <div class="item-img">
                                        <img src="media/pic8.jpg" alt="Portfolio">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-2 col-md-6 col-sm-6 col-12 photography has-animation">
                            <div class="translate-left-10 opacity-animation transition-200 transition-delay-700">
                                <div class="fxt-portfolio-box-layout1">
                                    <div class="item-img">
                                        <img src="media/pic3.jpg" alt="Portfolio">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 photography has-animation">
                            <div class="translate-left-10 opacity-animation transition-200 transition-delay-1000">
                                <div class="fxt-portfolio-box-layout1">
                                    <div class="item-img">
                                        <img src="media/pic4.jpg" alt="Portfolio">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 web photography has-animation">
                            <div class="translate-left-10 opacity-animation transition-200 transition-delay-1300">
                                <div class="fxt-portfolio-box-layout1">
                                    <div class="item-img">
                                        <img src="media/pic5.jpg" alt="Portfolio">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=              Project End          =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=            Progress Start         =-->
        <!--=====================================-->
        <section class="fxt-progress-section bg-common bg-attachment-fixed" data-bg-image="media/bg3.jpg" style="background:url('media/bg3.jpg');background-position: center;
  background-size: cover;
  background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-11 col-12">
                        <div class="fxt-progress-box-layout1">
                        <div class="item-label">PRAYER</div>
                            <div class="item-label">
                         
                            All-bountiful Father,
                            You have been blessing your
                            beloved Priest
                            Fr. Alfred Roche Capuchin,
                            All-through his life-journey in this
                            world
                            You conferred on him the grace of
                            priesthood
                            and made him a minister of your
                            Word and Sacraments
                            You bestowed upon him the
                            graces of love and compassion,
                            which he generously used while
                            working in your vineyard
                            Grant him, we humbly pray,
                            the grace of entering into
                            the Assembly of the Canonized
                            Saints,
                            So that he may become a
                            powerful intercessor
                            of your Grace and Blessing to
                            your children. 
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=            Progress End           =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=            Pricing Start          =-->
        <!--=====================================-->
      <!--  <section class="fxt-pricing-section bg-color-1" id="section6">
            <div class="container">
                <div class="fxt-heading-layout1">
                    <h2 class="heading-title">Pricing Table</h2>
                    <div class="heading-paragraph">There are many variations of passages of Lorem Ipsum available</div>
                    <div class="heading-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-100">
                            <div class="fxt-pricing-box-layout1">
                                <div class="pricing-amount">
                                    <div class="item-price">$1600<span>/month</span></div>
                                </div>
                                <div class="pricing-title">
                                    <h3 class="item-title">Full-time work</h3>
                                    <div class="item-subtitle">Available for full time</div>
                                </div>
                                <div class="features-list">
                                    <ul>
                                        <li>Ui/Ux Design</li>
                                        <li>Digital Marketing</li>
                                        <li>Web Development</li>
                                        <li>Apps Developing</li>
                                        <li>24/7 Support Done</li>
                                    </ul>
                                </div>
                                <a href="#" class="item-btn btn-fill">HIRE ME</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-400">
                            <div class="fxt-pricing-box-layout1">
                                <div class="pricing-amount">
                                    <div class="item-price">$400<span>/Per Project</span></div>
                                </div>
                                <div class="pricing-title">
                                    <h3 class="item-title">Fixed Price Project</h3>
                                    <div class="item-subtitle">I am available for fixed Price</div>
                                </div>
                                <div class="features-list">
                                    <ul>
                                        <li>Ui/Ux Design</li>
                                        <li>Digital Marketing</li>
                                        <li>Web Development</li>
                                        <li>Apps Developing</li>
                                        <li>24/7 Support Done</li>
                                    </ul>
                                </div>
                                <a href="#" class="item-btn btn-fill">HIRE ME</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-700">
                            <div class="fxt-pricing-box-layout1">
                                <div class="pricing-amount">
                                    <div class="item-price">$25<span>/Per Hour</span></div>
                                </div>
                                <div class="pricing-title">
                                    <h3 class="item-title">Hourley work</h3>
                                    <div class="item-subtitle">Available for Hourley Projets</div>
                                </div>
                                <div class="features-list">
                                    <ul>
                                        <li>Ui/Ux Design</li>
                                        <li>Digital Marketing</li>
                                        <li>Web Development</li>
                                        <li>Apps Developing</li>
                                        <li>24/7 Support Done</li>
                                    </ul>
                                </div>
                                <a href="#" class="item-btn btn-fill">HIRE ME</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=             Pricing End           =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=            Blog Start             =-->
        <!--=====================================-->
       <!-- <section class="fxt-blog-section bg-color-2" id="section7">
            <div class="container">
                <div class="fxt-heading-layout1">
                    <h2 class="heading-title">Latest Blog</h2>
                    <div class="heading-paragraph">There are many variations of passages of Lorem Ipsum available</div>
                    <div class="heading-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-100">
                            <div class="fxt-blog-box-layout1">
                                <div class="item-img">
                                    <a href="single-blog.html">
                                        <img src="media/blog/blog1.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="far fa-calendar-alt"></i>14 July, 2017</li>
                                            <li><i class="far fa-user"></i><a href="#">Jessica</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="item-title"><a href="single-blog.html">Harbour amid a Slowen
                                            down in singer city.</a></h3>
                                    <p>There are many variations of Lorem is Ipsum is available majority alteration some form
                                        the injected.</p>
                                    <a href="single-blog.html" class="btn-text item-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-400">
                            <div class="fxt-blog-box-layout1">
                                <div class="item-img">
                                    <a href="single-blog.html">
                                        <img src="media/blog/blog2.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="far fa-calendar-alt"></i>14 July, 2017</li>
                                            <li><i class="far fa-user"></i><a href="#">Amac Jajah</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="item-title"><a href="single-blog.html">Trip To Iqaluit In
                                            Nunavut A Canadian Arctic City</a></h3>
                                    <p>There are many variations of Lorem is Ipsum is available majority alteration some form
                                        the injected.</p>
                                    <a href="single-blog.html" class="btn-text item-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 has-animation">
                        <div class="translate-left-10 opacity-animation transition-200 transition-delay-700">
                            <div class="fxt-blog-box-layout1">
                                <div class="item-img">
                                    <a href="single-blog.html">
                                        <img src="media/blog/blog3.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="far fa-calendar-alt"></i>14 July, 2017</li>
                                            <li><i class="far fa-user"></i><a href="#">Sergio Pliego</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="item-title"><a href="single-blog.html">World Travel Holdings
                                            Will Be Honored Alongside.</a></h3>
                                    <p>There are many variations of Lorem is Ipsum is available majority alteration some form
                                        the injected.</p>
                                    <a href="single-blog.html" class="btn-text item-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=               Blog End            =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=            Contact Start          =-->
        <!--=====================================-->
        <section class="fxt-contact-section bg-color-1" id="section8" data-bg-image="media/figure/map.png">
            <div class="container">
                <div class="fxt-heading-layout1">
                    <h2 class="heading-title">Contact Us</h2>
                    <div class="heading-paragraph">Please Fill in the form  and we will get back to you at the earliest. </div>
                    <div class="heading-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="fxt-contact-box-layout1">
                            <div class="contact-list">
                                <div class="item-icon">
                                    <i class="flaticon-placeholder"></i>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title">Address</h3>
                                    <div class="item-text">The Vice - Postulator</div>
									 <div class="item-text">
									Saccidananda, Capuchin Provincialate
									Dr. Rajkumar Road, P. B. No. 1060
									Rajajinagar I Block,
									</div>
									<div class="item-text">
									Bangalore 560010
									Karnataka, India.
									</div>
                                   
                                </div>
                            </div>
                            <div class="contact-list">
                                <div class="item-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title">Email:</h3>
                                    <div class="item-text">  cappro@rediffmail.com   </div>
									 <div class="item-text">   psecretary@rediffmail.com   </div>
                                </div>
                            </div>
                          
                            <div class="contact-list">
                                <div class="item-icon">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title">Phone</h3>
                                    <div class="item-text"><a href="Tel:080-23377790" style="color:#ad1f41">080-23377790</a>,<a href="080-23470178" style="color:#ad1f41">080-23470178</a></div>
                                </div>
                            </div>
							
							 <div class="contact-list">
                                <div class="item-icon">
                                    <a href="https://www.facebook.com/CapuchinAlfredRoche" target="_blank"><i class="fab fa-facebook-f"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
									<i class="fab fa-instagram"></i>&nbsp;&nbsp;&nbsp;&nbsp;

								
                                    <i class="fab fa-twitter"></i>
                                </div>
                               
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="fxt-contact-box-layout2">
                            <form method="POST" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <input type="text" class="form-control" placeholder="Full Name" name="name" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
									<div class="col-lg-12 form-group">
                                        <input type="text" class="form-control" placeholder="Adddress" name="address" data-error="Address field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
									<div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" placeholder="City" name="city" data-error="City field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
									<div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" placeholder="Country" name="country" data-error="Country field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" placeholder="E-mail" name="email" data-error="Email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
									<div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" placeholder="phone" name="phone" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" placeholder="Subject" name="subject" data-error="Subject field is required" required>
                                            <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="message" id="form-message" class="form-control textarea"
                                            placeholder="Your Message" cols="30" rows="7" data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                    </div>
									
                                    <div class="col-lg-12 form-group">
                                        <input type="submit" class="btn-fill submit-btn"  value="SEND MESSAGE" >
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=             Contact End           =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=            Footer Start           =-->
        <!--=====================================-->
        <footer class="fxt-footer-section bg-color-2">
            <div class="container">
                <div class="fxt-footer-box-layout1">
                    <div class="copyright-text">Copyright © 2021 All Rights Reserved.| <a href="#">Kishoo Enterprises</a></div>
                </div>
            </div>
        </footer>
        <!--=====================================-->
        <!--=             Footer End            =-->
        <!--=====================================-->
        </div>
    </div>
    

    <!-- Dependency Scripts -->
    <script src="dependencies/jquery/js/jquery.min.js"></script>
    <script src="dependencies/popper.js/js/popper.min.js"></script>
    <script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="dependencies/jquery.counterup/js/jquery.counterup.min.js"></script>
    <script src="dependencies/waypoints/js/jquery.waypoints.min.js"></script>
    <script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="dependencies/imagesloaded/js/imagesloaded.pkgd.min.js"></script>
    <script src="dependencies/isotope-layout/js/isotope.pkgd.min.js"></script>
    <script src="dependencies/meanmenu/js/jquery.meanmenu.min.js"></script>
    <script src="dependencies/jQuery-One-Page-Nav/js/jquery.nav.js"></script>
    <script src="dependencies/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="dependencies/parallaxie/parallaxie.js"></script>
    <script src="dependencies/tilt/tilt.jquery.min.js"></script>
    <script src="dependencies/animated-headline/animated.headline.min.js"></script>
    <script src="dependencies/wow/wow.min.js"></script>
    
    <script src="assets/js/app.js"></script>

 <!-- Color Picker -->
    <script src="switcher/js/jquery-ui.min.js"></script>
    <script src="switcher/js/bootstrap-select.js"></script>
    <script src="switcher/js/evol.colorpicker.min.js" type="text/javascript"></script>
    <script src="switcher/js/js.cookie.js" type="text/javascript"></script>
    <script src="switcher/js/dmss.js"></script>
  

</body>



</html>
        

   
