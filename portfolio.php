<!DOCTYPE html>
<html lang="en">
<?php
global $test;
$test =2;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zense is a community of developers run and managed by the students of IIIT Bangalore">
    <meta name="author" content="Zense">
    <title>Portfolio | Zense</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">  
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a target="blank" href="https://www.facebook.com/zense.dev"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="blank" href="https://plus.google.com/+ZenseCoIndev/"><i class="fa fa-google-plus"></i></a></li>
                            <li><a target="blank" href="https://www.linkedin.com/groups/Zense-6731377"><i class="fa fa-linkedin"></i></a></li>
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

                    <a class="navbar-brand" href="index.php">
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
    <!--/#header-->


    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1> So what have we been up to?</h1>
                        <h2>Our community has a bunch of cool projects and we have many more to come. Spend some time here and check out our work :)</h2>
                        
                    </div>
                    <a target="blank" href="https://www.facebook.com/zense.dev"><img src="images/home/slider/like.png" class="slider-hill" alt="slider image" style="width:400px;height:auto"></a>
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#action-->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <br>
                <h1>Completed Projects</h1> 
                <br>
                <div class="portfolio-items">
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/3.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a data-toggle="modal" data-target="#modal3"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>E-Cell Website</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/4.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a data-toggle="modal" data-target="#modal4"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>NIOS Website</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mobile">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/5.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a data-toggle="modal" data-target="#modal5"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Akshaya Patra Foundation Mobile App</h2>
                            </div>
                        </div>
                    </div>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/6.png" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a data-toggle="modal" data-target="#modal6"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Connect the Disconnected</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/1.png" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a data-toggle="modal" data-target="#modal1"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Spandan StockXChange</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/2.png" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a data-toggle="modal" data-target="#modal2"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>Matchmaker</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <br>
                    <h1>Ongoing Projects</h1> 
                    <br>
                    
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->

    <br><br><br><br><br>

    <!--Footer starts here-->
    <?php
    include "assets/footer.php"
    ?>
    <!--Footer Ends here-->
    <!--/#footer-->

    <!-- Modal -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" area-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Stockxchange</h4>
                    </div>
                    <!--Modal Content-->
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/portfolio-details/1.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-6">
                            <div class="project-name overflow">
                                <h2 class="bold">Spandan StockXChange</h2>
                                <ul class="nav navbar-nav navbar-default">
                                    <li><a href="#"><i class="fa fa-clock-o"></i>March,2014</a></li>
                                </ul>
                            </div>
                            <div class="project-info overflow">
                                <h3>Project Info</h3>
                                <p>Spandan StockXChange is online trading game built over a virtual share marker, with real time NSE stock quotations. </p>
                            </div>
                            <div class="live-preview">
                                <a target="blank" href="http://stockxchange.zense.co.in/" class="btn btn-common uppercase">Check It Out!</a>
                            </div>
                        </div>
                    </div>
                    <!--End of Modal Content-->
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" area-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Matchmaker</h4>
                    </div>
                    <!--Modal Content-->
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/portfolio-details/2.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-6">
                            <div class="project-name overflow">
                                <h2 class="bold">Matchmaker</h2>
                                <ul class="nav navbar-nav navbar-default">
                                    <li><a href="#"><i class="fa fa-clock-o"></i>July,2014</a></li>
                                </ul>
                            </div>
                            <div class="project-info overflow">
                                <h3>Project Info</h3>
                                <p>Matchmaker was a fun project, the idea was to make something good and usable for our seniors overnight. It was never a serious project, but it deservers attention considering the number of users we have there ;) </p>
                                <p>Matchmaker is an online email based portal that allows you to ask out your crush with ease, if you know his/her email that is it. If you and your crush enter each others emails, you will be notified. Happy crushing <3  </p>
                            </div>
                            <div class="live-preview">
                                <a target="blank" href="http://matchmaker.zense.co.in" class="btn btn-common uppercase">Check It Out!</a>
                            </div>
                        </div>
                    </div>
                    <!--End of Modal Content-->
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" area-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">E-Cell Website</h4>
                    </div>
                    <!--Modal Content-->
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/portfolio-details/3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-6">
                            <div class="project-name overflow">
                                <h2 class="bold">E-Cell, IIIT-B Website</h2>
                                <ul class="nav navbar-nav navbar-default">
                                    <li><a href="#"><i class="fa fa-clock-o"></i>July,2014</a></li>
                                </ul>
                            </div>
                            <div class="project-info overflow">
                                <h3>Project Info</h3>
                                <p>Our community is making the online portal for the entrepreneurship cell of IIIT-B. It will feature regular news and updates regarding various events, talks and other cool stuff.</p>
                            </div>
                            <div class="live-preview">
                                <a href="" class="btn btn-common uppercase">Coming Soon!</a>
                            </div>
                        </div>
                    </div>
                    <!--End of Modal Content-->
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" area-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">NIOS Raipur Website</h4>
                    </div>
                    <!--Modal Content-->
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/portfolio-details/4.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-6">
                            <div class="project-name overflow">
                                <h2 class="bold">NIOS Website</h2>
                                <ul class="nav navbar-nav navbar-default">
                                    <li><a href="#"><i class="fa fa-clock-o"></i>July,2014</a></li>
                                </ul>
                            </div>
                            <div class="project-info overflow">
                                <h3>Project Info</h3>
                                <p>This the website for National Institute for Open Schooling,Raipur Regional Center.</p>
                            </div>
                            <div class="live-preview">
                                <a href="" class="btn btn-common uppercase">Coming Soon!</a>
                            </div>
                        </div>
                    </div>
                    <!--End of Modal Content-->
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- Modal -->
        <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" area-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Connect the Disconnected</h4>
                    </div>
                    <!--Modal Content-->
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/portfolio-details/6.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-6">
                            <div class="project-name overflow">
                                <h2 class="bold">Connect the Disconnected</h2>
                                <ul class="nav navbar-nav navbar-default">
                                    <li><a href="#"><i class="fa fa-clock-o"></i>August,2014</a></li>
                                </ul>
                            </div>
                            <div class="project-info overflow">
                                <h3>Project Info</h3>
                                <h3>Connect the Disconnected</h3>
                                <p>This was the project which won us 2nd Runners Up Award at the IIMB Policy Hackathon. This project was worked on by</p>
                                <ul>
									<li>Vikas Yadav</li>
									<li>Siddartha Sekhar Padhi</li>
									<li>Aditya Paliwal</li>
									<li>Shivam Kumar</li>
                                </ul>
                                <p>The idea was to crowd source all the government schemes into one place. We are developing this to make it more usable and we'll propose it to Govt of Karnataka later on.</p>
								<p>Source code available on github <a target=="blank" href="https://github.com/zense/policy_hackathon">Click Here</a></p>
                            </div>
                            <div class="live-preview">
                                <a target="blank" href="http://ctdkarnataka.zense.co.in" class="btn btn-common uppercase">Check It Out!</a>
                            </div>
                        </div>
                    </div>
                    <!--End of Modal Content-->
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->

        <!-- Modal -->
        <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" area-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Akshaya Patra Application</h4>
                    </div>
                    <!--Modal Content-->
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/portfolio-details/5.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-6">
                            <div class="project-name overflow">
                                <h2 class="bold">The Akshaya Patra Foundation App</h2>
                                <ul class="nav navbar-nav navbar-default">
                                    <li><a href="#"><i class="fa fa-clock-o"></i>July,2014</a></li>
                                </ul>
                            </div>
                            <div class="project-info overflow">
                                <h3>Project Info</h3>
                                <p>This is a Android based application for a local NGO, The Akshaya Patra Foundation. It is a donation app which will help increase funding for the NGO's various programmes</p>
                            </div>
                            <div class="live-preview">
                                <a href="" class="btn btn-common uppercase">Coming Soon!</a>
                            </div>
                        </div>
                    </div>
                    <!--End of Modal Content-->
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53194921-1', 'auto');
	  ga('send', 'pageview');

	</script>    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>    
</body>
</html>
