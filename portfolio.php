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
                    <!--<a target="blank" href="https://www.facebook.com/zense.dev"><img src="" class="slider-hill" alt="slider image" style="width:400px;height:auto"></a>-->
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#action-->

    <section id="portfolio">
        <div class="container">
                <br>
                <h1>Completed Projects</h1> 
                <br>
                <div class="portfolio-items" id="completed">
					
					
                </div>
        </div>
           
        <div class="container">
               
                    <br>
                    <h1>Ongoing Projects</h1> 
                    <br>
                    <div class="portfolio-items" id="ongoing">
					
					
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

    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53194921-1', 'auto');
	  ga('send', 'pageview');

	</script>    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        var get_projects = function(){
            $.ajax({
                type: 'GET',
                url: 'https://dl.dropboxusercontent.com/s/32n0rxhuk6hnal4/projects.json?dl=0',
                    dataType: 'json',
                    encode: true
            })

            .done(function(data){
                console.log(data);
                var i=0, j=0;
                var ap = '<div class="row">'
                var bp = '<div class="row">'
                $.each(data.projects, function(key, item){
					var d= '<a href="'+item.url+'" target="__blank" class="btn btn-common uppercase">Check this out!</a>'
					$('body').append('<div class="modal fade" id="modal'+item.id+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" area-hidden="false">\
            <div class="modal-dialog">\
                <div class="modal-content">\
                    <div class="modal-header">\
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>\
                        <h4 class="modal-title" id="myModalLabel">'+item.name+'</h4>\
                    </div>\
                    <br>\
                    <div class="row">\
                        <div class="col-sm-6">\
                            <img src="'+item.image+'" class="img-responsive" alt="">\
                        </div>\
                        <div class="col-sm-6">\
                            <div class="project-name overflow">\
                                <h2 class="bold">'+item.name+'</h2>\
                                <ul class="nav navbar-nav navbar-default">\
                                    <li><a href="#"><i class="fa fa-clock-o"></i>July,2014</a></li>\
                                </ul>\
                            </div>\
                            <div class="project-info overflow">\
                                <h3>Project Info</h3>'+
                                item.information +
                            '</div>\
                            <div class="live-preview">'+d+'\
                            </div>\
                        </div>\
                    </div>\
                    <div class="modal-footer">\
                        <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>\
                    </div>\
                </div>\
            </div>\
        </div>')
					if(item.status=="1"){
						ap += '<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">\
                        <div class="portfolio-wrapper">\
                            <div class="portfolio-single">\
                                <div class="portfolio-thumb" style="width: 100%; height: 200px;position: relative; overflow: hidden">\
                                    <img src="'+item.image+'" style="width:100% height: auto" class="img-responsive" alt="">\
                                </div>\
                                <div class="portfolio-view">\
                                    <ul class="nav nav-pills">\
                                        <li><a data-toggle="modal" data-target="#modal'+item.id+'"><i class="fa fa-link"></i></a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                            <div class="portfolio-info ">\
                                <h2>'+item.name+'</h2>\
                            </div>\
                    </div></div>';
                        i+=1;
                        if(i%4==0){
								ap+='</div>'
						}
					}
					else{
						bp += '<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">\
                        <div class="portfolio-wrapper">\
                            <div class="portfolio-single">\
                                <div class="portfolio-thumb" style="width: 100%; height: 200px;position: relative; overflow: hidden">\
                                    <img src="'+item.image+'" style="width:100% height: auto" class="img-responsive" alt="">\
                                </div>\
                                <div class="portfolio-view">\
                                    <ul class="nav nav-pills">\
                                        <li><a data-toggle="modal" data-target="#modal'+item.id+'"><i class="fa fa-link"></i></a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                            <div class="portfolio-info ">\
                                <h2>'+item.name+'</h2>\
                            </div>\
                    </div></div>';
                        j+=1;
                        if(j%4==0){
								bp+='</div>'
						}
					}
					
                });
                if(i%4!=0) ap+='</div>'	;
                if(j%4!=0) bp+='</div>';
                $('#completed').append(ap)
                $('#ongoing').append(bp)
            })
            .fail(function(data){
                alert("ajax failed");
                console.log(data);
            });

        };
        get_projects()
	});
</script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>    
</body>
</html>
