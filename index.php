<!DOCTYPE html>
<html lang="en">

<?php
global $test;
$test =1;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zense is a community of developers run and managed by the students of IIIT Bangalore">
    <meta name="author" content="Zense">
    <title>Home | Zense</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">      
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1449319895336334&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
						</script>
</head><!--/head-->
<body>
	<header id="header">
        <!--Social Media Starts here-->

        <!--Social Media Ends here-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <?php include 'assets/social_media.php' ?>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand " href="index.php">
                    	<h1><img src="images/logo.png" alt="logo" style="width:200px;height:auto"></h1>
                    </a>          
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <?php include 'navbar.php'?>

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--header-->
    <section id="home-slider">
    
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1><b>Welcome to the official home page of the Zense community.</b></h1>
                        <p>Find out anything and everything about us right here and stay in touch with the latest news :)</p>
                    </div>
                    
						
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image" style="width:623px;height:auto">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--home-slider-->

    <section id="company-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="about-us">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1 class="bold">About Zense</h1>
                        <div id="fb-root"></div>
                        
                        <div class="row">
                            <div class="col-sm-10">
                                <p>Zense is a community of developers run and managed by the students of IIIT Bangalore.<br> <br> Our aim is to unite passionate developers and provide them a platform to collaborate and innovate with other geeky folks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="fb-like-box" data-href="https://www.facebook.com/zense.dev" data-width="400px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="action" class="responsive" style="color:white">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title" style="color:white">What makes Zense special?</h1>
                            <p>Here are three things that make us different.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon1.png" alt="">
                        </div>
                        <h2>Student Governed Body!</h2>
                        <p>All affairs and projects are managed by the students. No college body can interfere with your ideas!</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/ecell.jpg" alt="">
                        </div>
                        <h2>Partnered with E-Cell at IIITB</h2>
                        <p>We have collaborated with Entrepreneurship Cell at IIIT Bangalore to promote the Entreprenurship culture amongst our group.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/bolt.png" alt="">
                        </div>
                        <h2>Charge Your Ideas</h2>
                        <p>Have some ideas but don't have the skills? Come collaborate with other members of our community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services-->
    <section id="action" class="responsive" style="color:white">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title" style="color:white">We have a bunch of cool projects!</h1>
                            <p>Why don't you check them out?</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="portfolio.php" class="btn btn-common">TAKE THE TOUR</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--action-->
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1><strong>Our Aims and Objectives</strong></h1>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image1.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2><strong>Collaborative Community</strong></h2>
                        <P>To establish a community that promotes a Do-It-Yourself culture and quench your thirst for knowledge. You can get your idea and collaborate with people with the appropriate skill set for your ideas.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2><strong>Promote Entreprenuership</strong></h2>
                        <P>We want to create an entrepreneurial culture. Each day we see some new idea in the industry and oh boy, these ideas are coming quick. We will provide a platform for budding entrepreneurs to bring forth their idea and acquire the necessary skills and implement it.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image2.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image3.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2><strong>The Cutting Edge</strong>   </h2>
                        <P>We want to keep in touch with the bleeding edge of new technologies and experiment with cool new tools and services. With new things being released each day it is harder and harder to keep in touch with the pace of technology. This community will help you catch up.</P>
                    </div>
                </div>
               <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2><strong>And Finally...</strong></h2>
                        <P>Think. Innovate. Create. Zense encourages people to talk about tackle various problems, we want you to think about viable solutions to these problems. Everybody can tell how bad a problem is but only a few come out with solutions to these problems.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image4.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--features-->
    <!--Footer Section Starts here-->
    <?php
    include "assets/footer.php"
    ?>
    <!--Footer Section Ends here-->

    <!--footer-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53194921-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
