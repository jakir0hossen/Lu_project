<?php include "z_db.php";?>
<!doctype html>
<html class="no-js" lang="en">
<!-- <?php
    $rrs=mysqli_query($con,"SELECT * FROM section_title Where id=1");
$rs = mysqli_fetch_array($rrs);
$test_title = "$rs[test_title]";
$test_text="$rs[test_text]";
$enquiry_title="$rs[enquiry_title]";
$enquiry_text="$rs[enquiry_text]";
$enquiry_text="$rs[enquiry_text]";
$contact_title="$rs[contact_title]";
$contact_text="$rs[contact_text]";
$port_title="$rs[port_title]";
$port_text="$rs[port_text]";
$service_title="$rs[service_title]";
$service_text="$rs[service_text]";
$why_title="$rs[why_title]";
$why_text="$rs[why_text]";
$about_title="$rs[about_title]";
$about_text="$rs[about_text]";
?> -->



<?php
    $rt=mysqli_query($con,"SELECT * FROM sitecontact where id=1");
    $tr = mysqli_fetch_array($rt);
    $phone1 = "$tr[phone1]";
    $phone2 = "$tr[phone2]";
    $email1 = "$tr[email1]";
    $email2 = "$tr[email2]";
    $longitude = "$tr[longitude]";
    $latitude = "$tr[latitude]";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="description" content="">
    <meta name="author" content="Themeland">
    <?php
    $rr=mysqli_query($con,"SELECT * FROM siteconfig where id=1");
    $r = mysqli_fetch_array($rr);
    $site_title = "$r[site_title]";
    $site_about = "$r[site_about]";
    $site_footer = "$r[site_footer]";
    $follow_text = "$r[follow_text]";
?>

    <title>Lu Magazine - <?php print $site_title ?></title>




    <link rel="stylesheet" href="assets/css/style.css">


    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
    <!--====== Preloader Area Start ======-->
    <div id="preloader">
        <!-- Digimax Preloader -->
        <div id="digimax-preloader" class="digimax-preloader">
            <!-- Preloader Animation -->
            <div class="preloader-animation">
                <!-- Spinner -->
                <div class="spinner"></div>
                <!-- Loader -->
                <div class="loader">
                    <span data-text-preloader="L" class="animated-letters">V</span>
                    <span data-text-preloader="U" class="animated-letters">O</span>
                    <span data-text-preloader="M" class="animated-letters">G</span>
                    <span data-text-preloader="A" class="animated-letters">U</span>
                    <span data-text-preloader="G" class="animated-letters">E</span>
                    <span data-text-preloader="A" class="animated-letters">E</span>
                    <span data-text-preloader="Z" class="animated-letters">E</span>
                    <span data-text-preloader="I" class="animated-letters">E</span>
                    <span data-text-preloader="N" class="animated-letters">E</span>
                    
                </div>
                <p class="fw-5 text-center text-uppercase">Loading</p>
            </div>
            <!-- Loader Animation -->
            <div class="loader-animation">
                <div class="row h-100">
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Preloader Area End ======-->

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main overflow-hidden">
        <!-- ***** Header Start ***** -->
        <header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    <!-- Navbar Brand-->
                    <?php
    $rt=mysqli_query($con,"SELECT ufile FROM logo where id=1");
    $tr = mysqli_fetch_array($rt);
    $ufile = "$tr[ufile]";
?>

                    <a class="navbar-brand" href="index.html">
                        <img class="navbar-brand-regular" src="dashboard/uploads/logo/<?php print $ufile?>" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="dashboard/uploads/logo/<?php print $ufile?>" alt="sticky brand-logo">
                    </a>
                    <div class="ml-auto"></div>
                    <!-- Navbar -->
                    <!-- <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home </a>

                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">LU</a>
                            <ul>
                        <li><a href="./blog.php">Blogs</a></li>
                        <li><a href="./books.php">Book</a></li>
                        <li><a href="./event.php">Event</a></li>
                        <li><a href="./#">Lu Club</a>
                            <ul>
                                <li><a href="./lucc.php">LUCC</a></li>
                                <li><a href="./lussc.php">LUSSC</a></li>
                                <li><a href="./luec.php">LUEC</a></li>
                                <li><a href="./ieee.php">IEEE</a></li>
                                <li><a href="./ludc.php">LUDC</a></li>
                                <li><a href="./lumuna.php">LUMUNA</a></li>
                                <li><a href="./bncc.php">LU BNCC</a></li>
                                <li><a href="./lutc.php">LUTC</a></li>
                            </ul>
                        </li>
                     </ul>
                        </li>
                        <li class="nav-item">
                            <a href="services.php" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="portfolio.php" class="nav-link">Portfolio</a>
                        </li>


                    </ul> -->

                    <ul class="navbar-nav items">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a href="about.php" class="nav-link">About Us</a>
    </li>
    <li class="nav-item dropdown">
        <a href="about.php" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            LU
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="./blog.php" class="dropdown-item">Blogs</a></li>
            <li><a href="./books.php" class="dropdown-item">Book</a></li>
            <li><a href="./event.php" class="dropdown-item">Event</a></li>
            <li class="dropdown-submenu">
                <a href="" class="dropdown-item dropdown-toggle">Lu Club</a>
                <ul class="dropdown-menu">
                    <li><a href="./lucc.php" class="dropdown-item">LUCC</a></li>
                    <li><a href="./lussc.php" class="dropdown-item">LUSSC</a></li>
                    <li><a href="./luec.php" class="dropdown-item">LUEC</a></li>
                    <li><a href="./ieee.php" class="dropdown-item">IEEE</a></li>
                    <li><a href="./ludc.php" class="dropdown-item">LUDC</a></li>
                    <li><a href="./lumuna.php" class="dropdown-item">LUMUNA</a></li>
                    <li><a href="./bncc.php" class="dropdown-item">LU BNCC</a></li>
                    <li><a href="./lutc.php" class="dropdown-item">LUTC</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link">News</a>
    </li>
  
    <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" id="galleryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Gallery
    </a>
    <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
        <li><a href="./photo.php" class="dropdown-item">Photo & Video</a></li>
    </ul>
</li>

    
</ul>

                    <!-- Navbar Icons -->
                    <!-- <ul class="navbar-nav icons">
                    <?php
   $q="SELECT * FROM  social ORDER BY id DESC LIMIT 5";
 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

	$id="$ro[id]";
    $fa="$ro[fa]";
    $social_link="$ro[social_link]";

print "
<li class='nav-item social'>
<a href='$social_link' class='nav-link'><i class='fab $fa'></i></a>
</li>
";
}?>
                    </ul> -->

                    <!-- Navbar Toggler -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="fas fa-bars toggle-icon m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action Button -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="contact" class="btn ml-lg-auto btn-bordered-white"><i class="fas fa-paper-plane contact-icon mr-md-2"></i>Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ***** Header End ***** -->
