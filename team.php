<!DOCTYPE html>
<html lang="en">

<?php
global $test;
$test =3;
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


<section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Meet the Team</h1>
                
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <h1>Core Team</h1>
                    <div class="container">
                        <div class="item active" id="core">
                            
                        </div>
                    </div>
                    <hr>
                    
                    <h1>Members</h1>
                    <div class="container">
                        <div class="item active" id="members">
                            
                        </div>
					</div>
					<hr>
					<h1>Mentors</h1>
                    <div class="container">
                        <div class="item active" id="mentors">
                            
                        </div>
					</div>
					
					
                    <!-- Controls -->
                    <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                    <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                </div>
            </div>
        </div>
    </section>
<!--/#team-->
<!--home-slider-->


<!--features-->
<!--Footer Section Starts here-->
<?php
include "assets/footer.php"
?>
<!--Footer Section Ends here-->

<!--footer-->
<script type="text/javascript" src="js/jquery.js"></script>
<script>
$(document).ready(function(){
        var get_mentors = function(){
            $.ajax({
                type: 'GET',
                url: 'https://dl.dropboxusercontent.com/s/0n8uh9fnmcen09e/team.json?dl=0',
                    dataType: 'json',
                    encode: true
            })

            .done(function(data){
                console.log(data);
                var i=0;
                var ap = '<div class="row">'
                $.each(data.data[0].core, function(key, item){
					ap += '<div class="col-sm-3 col-xs-6">\
                            <div class="team-single-wrapper">\
                                <div class="team-single">\
                                    <div class="person-thumb" style="width:auto; height:200px; position: relative; overflow:hidden">\
                                        <img src="'+item.image_url+'"  class="img-responsive" alt="">\
                                    </div>\
                                    <div class="social-profile">\
                                        <ul class="nav nav-pills">\
                                            <li><a href="'+item.contact.facebook+'" target="_blank"><i class="fa fa-facebook"></i></a></li>\
                                            <li><a href="'+item.contact.github+'"><i class="fa fa-github"></i></a></li>\
                                            <li><a href="'+item.contact.linkedIn+'"><i class="fa fa-linkedin"></i></a></li>\
                                            <li><a href="'+item.contact.twitter+'"><i class="fa fa-twitter"></i></a></li>\
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                                <div class="person-info">\
                                    <h2>'+item.name+'</h2>\
                                    <p>'+item.designation+'</p>\
                                </div>\
                            </div>\
                        </div>';
                        i+=1;
                        if(i%4==0){
								ap+='</div>'
							}
                });
                if(i%4!=0) ap+='</div>'	;
                $('#core').append(ap)
                
                
                i=0;
                ap = '<div class="row">'
                $.each(data.data[0].members, function(key, item){
					ap += '<div class="col-sm-3 col-xs-6">\
                            <div class="team-single-wrapper">\
                                <div class="team-single">\
                                    <div class="person-thumb" style="width:auto; height:200px; position: relative; overflow:hidden">\
                                        <img src="'+item.image_url+'"  class="img-responsive" alt="">\
                                    </div>\
                                    <div class="social-profile">\
                                        <ul class="nav nav-pills">\
                                            <li><a href="'+item.contact.facebook+'" target="_blank"><i class="fa fa-facebook"></i></a></li>\
                                            <li><a href="'+item.contact.github+'"><i class="fa fa-github"></i></a></li>\
                                            <li><a href="'+item.contact.linkedIn+'"><i class="fa fa-linkedin"></i></a></li>\
                                            <li><a href="'+item.contact.twitter+'"><i class="fa fa-twitter"></i></a></li>\
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                                <div class="person-info">\
                                    <h2>'+item.name+'</h2>\
                                    <p>'+item.designation+'</p>\
                                </div>\
                            </div>\
                        </div>';
                        i+=1;
                        if(i%4==0){
								ap+='</div>'
							}
                });
                if(i%4!=0) ap+='</div>'	;
                $('#members').append(ap)
                
                i=0;
                ap = '<div class="row">'
                $.each(data.data[0].mentors, function(key, item){
					ap += '<div class="col-sm-3 col-xs-6">\
                            <div class="team-single-wrapper">\
                                <div class="team-single">\
                                    <div class="person-thumb" style="width:auto; height:200px; position: relative; overflow:hidden">\
                                        <img src="'+item.image_url+'"  class="img-responsive" alt="">\
                                    </div>\
                                    <div class="social-profile">\
                                        <ul class="nav nav-pills">\
                                            <li><a href="'+item.contact.facebook+'" target="_blank"><i class="fa fa-facebook"></i></a></li>\
                                            <li><a href="'+item.contact.github+'"><i class="fa fa-github"></i></a></li>\
                                            <li><a href="'+item.contact.linkedIn+'"><i class="fa fa-linkedin"></i></a></li>\
                                            <li><a href="'+item.contact.twitter+'"><i class="fa fa-twitter"></i></a></li>\
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                                <div class="person-info">\
                                    <h2>'+item.name+'</h2>\
                                    <p>'+item.designation+'</p>\
                                </div>\
                            </div>\
                        </div>';
                        i+=1;
                        if(i%4==0){
								ap+='</div>'
							}
                });
                if(i%4!=0) ap+='</div>'	;
                $('#mentors').append(ap)
                
                
                
                
            })
            .fail(function(data){
                alert("ajax failed");
                console.log(data);
            });

        };
        get_mentors()
	});

</script>

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
