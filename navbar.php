<?php
echo '
<li ';
if($test==1){
    echo 'class="active"';
}
    echo '><a href="index.php">Home</a></li>';
echo '
<li ';
if($test==2){
    echo 'class="active"';
}
echo '><a href="portfolio.php">Portfolio</a></li>';
echo '
<li ';
if($test==3){
    echo 'class="active"';
}
echo '><a href="team.php">Our Team</a></li>';
echo '
<li ';
if($test==4){
    echo 'class="active"';
}
echo '><a href="#contact-us">Contact Us</a></li>';


?>