<?php
include "config.php";
session_start();
if(isset($_POST['submit']))
{
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    if ($username != "" && $password != ""){
        $sql = "select * from login_table where username = '".$username."' and password = '".$password."' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $sql_query1 = "select count(*) as cntUser from login_table where username='".$username."' and password='".$password."'";
        $result1 = mysqli_query($conn,$sql_query1);
        $row1 = mysqli_fetch_array($result1);
        $count1 = $row1['cntUser'];
        if($count1 == 1){
            $_SESSION['username'] = $username;
            if($row['user_type'] == 1){
                $_SESSION['user_type'] = 1;
                header("location:faculty.php");
            }
            elseif($row['user_type'] == 2){
                $_SESSION['user_type'] = 2;
                header("location:student.php");
            }
            elseif($row['user_type'] == 3){
                $_SESSION['user_type'] = 3;
                header("location:warden.php");
            }
    
        }
        else{
            echo '<script>alert("Invalid username and password")</script>';
        }
    }
    else{
        echo '<script>alert("Username Or Password is Not entered")</script>';
    }
    


}
if(isset($_POST['reset'])){
    header("location:reset.php");
}

?>

<html>
<head id="Head1"><title>
    SRI VISHNU ENGINEERING COLLEGE FOR WOMEN
</title>
    
    <style type="text/css">
<!--
.input_loginBlue {
    FONT-SIZE: 10px;
    COLOR: #0033CC;
    FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif;
    HEIGHT: 16px;
    border: 1px solid #CCCCCC;
}
.style11 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; color: #4E7CC9; }
.style19 {
    font-family: Geneva, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: bold;
    color: #FC3A00;
}
#Table_01 tr td table tr td #Table_2 tr td table {
    color: #B41400;
}
.style21 {
    font-family: Geneva, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: bold;
    color: #B41400;
}
.style22 {color: #FFFFFF}
-->
</style>

    <meta name="google-site-verification" content="khFWr1W7SQUI6MdPGs1FuaHAr8DzA5czzzEpeGzRyPY" />
    <meta name="facebook-domain-verification" content="lba3uqff1tkgmqfnbsbdjywc3xzvcs" />
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="favicon.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MN894NS');</script>
<!-- End Google Tag Manager -->

    <!-- Web Fonts  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Libs CSS -->
    <link href="css2/bootstrap.min.css" rel="stylesheet" />
    <link href="css2/style.min.css" rel="stylesheet" />
    <link href="css2/font-awesome.min.css" rel="stylesheet" />
    <link href="css2/streamline-icon.min.css" rel="stylesheet" />
    <link href="css2/v-nav-menu.min.css" rel="stylesheet" />
    <link href="css2/v-portfolio.min.css" rel="stylesheet" />
    <link href="css2/v-blog.min.css" rel="stylesheet" />
    <link href="css2/v-animation.min.css" rel="stylesheet" />
    <link href="css2/v-bg-stylish.min.css" rel="stylesheet" />
    <link href="css2/v-shortcodes.min.css" rel="stylesheet" />
    <link href="css2/theme-responsive.min.css" rel="stylesheet" />
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet" />
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />
     
    <!-- Current Page CSS -->
    <link href="plugins/rs-plugin/css/settings.css" rel="stylesheet" />
    <link href="plugins/rs-plugin/css/custom-captions.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css2/custom.min.css">
    <link href="css2/styledefault22.css" rel="stylesheet">


<!-- Global site tag (gtag.js) - Google Ads: 668420716 -- 26052022 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-668420716"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-668420716');
</script>

    
<title>SHRI VISHNU ENGINEERING COLLEGE FOR WOMEN</title>
<style>
    @media only screen and (max-width: 800px) {
    
    /* Force table to not be like tables anymore */
    #no-more-tables table, 
    #no-more-tables thead, 
    #no-more-tables tbody, 
    #no-more-tables th, 
    #no-more-tables td, 
    #no-more-tables tr { 
        display: block; 
    }
 
    /* Hide table headers (but not display: none;, for accessibility) */
    #no-more-tables thead tr { 
        position: absolute;
        top: -9999px;
        left: -9999px;
    }
 
    #no-more-tables tr { border: 1px solid #ccc; }
 
    #no-more-tables td { 
        /* Behave  like a "row" */
        border: none;
        border-bottom: 1px solid #eee; 
        position: relative;
        padding-left: 55%; 
        white-space: normal;
        text-align:left;
    }
 
    #no-more-tables td:before { 
        /* Now like a table header */
        position: absolute;
        /* Top/left values mimic padding */
        top: 6px;
        left: 6px;
        width: 50%; 
        padding-right: 10px; 
        white-space: nowrap;
        text-align:left;
        font-weight: bold;
    }
 
    /*
    Label the data
    */
    #no-more-tables td:before { content: attr(data-title); }

    
}  
</style>

</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">





<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN894NS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<style>








.trigger_popup {
                    transform: rotate(90deg) !important;
                    position: fixed; 
                    top: 66%; 
                   right:-46px;
                    z-index: 999;
                    cursor: pointer;
                    background-color: #b8292f;
                    border-color: #b8292f;
                    border-radius: 5px;
                    border-bottom-right-radius: 0;
                    border-bottom-left-radius: 0; 
                    padding: 10px 22px;
                    font-size: 18px;
                    color: #fff;
                    line-height: 1.33;                  
                }
.trigger_popup:hover {
                    background-color: #d63232;
                    border-color: #d63232;
                }

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999; /* Sit on top */
  padding-top: 35px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: transparent;
  margin: auto;
  padding: 0;
  border: 0px solid #888;
  max-width: 390px;
  position: relative;
}

/* The Close Button */
.close {
    color: #c1c1c1;
    float: right;
    font-size: 30px;
    font-weight: bold;
    position: absolute;
    right: 15px;
    z-index: 9999;
    top: 2px;
}

.close:hover,
.close:focus {
  color: #797878;
  text-decoration: none;
  cursor: pointer;
}
.head_text {
    background-color: #dd3333;
    color: #fff;
    text-align: center;
    padding: 7px;
    font-size: 20px;
    border-top-left-radius: 35px;
}

@media (max-width:768px) {
    .trigger_popup {
        transform: rotate(0);
        bottom: 0;
        top: 90%;
        right: unset;
        margin: 0;
        left: 15%;
        font-size: 14px;
        padding: 6px 10px;
    }
    .popupCloseButton {
        top: -10px;
        right: -2px;
    }
}
#topreader{
    background-color: #a51c96;
}
header ul.nav-pills>li.active>a, span.dropcap2 {
    color: #a51c96;
}
top:hover, .article-body-wrap .share-links a:hover, .author-link, .carousel-wrap>a:hover, .comments-likes a:hover i, .comments-likes a:hover span, .copyright a:hover, .item-link:hover, .list-toggle:after, .media-body .reply-link:hover, .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover, .portfolio-pagination div:hover>i, .post-content h2.title a:hover, .post-header .post-meta-info a:hover, .pricing-column h3, .pricing-column ul li i.fa, .read-more em:before, .read-more i:before, .read-more-link, .recent-post .post-item-details a:hover, .search-item-meta a, .search-item-meta-down a, .share-links>a:hover, .sidebar .v-archive-widget ul>li a:hover, .sidebar .v-category-widget ul>li a:hover, .sidebar .v-meta-data-widget ul>li a:hover, .sidebar .v-nav-menu-widget ul>li a:hover, .sidebar .v-recent-entry-widget ul>li a:hover, .slideout-filter ul li a:hover, .v-blog-item .read-more, .v-blog-item-details a:hover, .v-color, .v-divider.v-up a, .v-icon, .v-link, .v-list li i, .v-list-v2 li i, .v-nav-menu-widget ul>li.current-menu-item a, .v-pagination a:hover, .v-portfolio-item .v-portfolio-item-permalink, .v-right-sidebar-inner>.active>a, .v-right-sidebar-inner>.active>a:focus, .v-right-sidebar-inner>.active>a:hover, .v-search-items .star-vote li, a.current-menu-item, a:hover, div.v-color, footer a:hover, header nav ul.nav-main li a:hover, header nav ul.nav-main li.dropdown.active>a i.fa-caret-down, header nav ul.nav-main li.dropdown:hover>a i.fa-caret-down, header nav ul.nav-main ul.dropdown-menu>li>a:hover, header nav.mega-menu ul.nav-main li.mega-menu-item ul.sub-menu a:hover, header ul.nav-pills>li.active>a, span.dropcap2 {
    color: #a51c96;
}
.signup, .v-tagline-box-v1, header nav ul.nav-main ul.dropdown-menu, header nav.mega-menu ul.nav-main li.mega-menu-item ul.dropdown-menu {
    border-top-color: #a51c96;
}
.btn.v-btn, input[type=submit] {
    position: relative;
    display: inline-block;
    margin-right: 10px;
    vertical-align: middle;
    text-align: center;
    cursor: pointer;
    zoom: 1;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    line-height: 1.3;
    text-transform: uppercase;
    color: #333!important;
    box-shadow: 0 1px 0 0 #065296;
    font-weight: 700;
}
</style>



<!--end admission style slide button-->







  
    <div class="header-container" >
        <header class="header fixed clearfix" style="background-image:url(img/bkimage.png)">

            <div class="container">
                <!--Site Logo-->
                <div class="logo" >
                    
                    <img src="img/bhimavaram.jpg" style="max-width:100%;width:650px; height:63px;margin-right:200px;margin-top:5px;" >
                </div>

                <div class="navbar-collapse nav-main-collapse collapse">
                    <nav class="nav-main mega-menu">
                        <ul class="nav nav-pills nav-main" id="mainMenu">
                            <li class="dropdown mega-menu-item mega-menu-fullwidth active">
                                <a class="dropdown-toggle" href="index.html">About SVECW</a>
                                <ul class="dropdown-menu three-columns">
                                    <li>
                                        <div class="mega-menu-content no-smx">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">About us</span>
                                                            <ul class="sub-menu">
                                                             <li><a href="https://www.svecw.edu.in/index.php/about-us/about-vision-mission-values-vmv">Vision &amp; Mission</a></li>
            <li><a href="https://www.svecw.edu.in/index.php/about-us/about-society-sves">About Society</a></li>
            <li><a href="https://www.svecw.edu.in/index.php/placements/placements-details">Placement Details</a></li>
            <li><a href="https://www.svecw.edu.in/index.php/infrastructure">Infrastructure</a></li>
            <li><a href="https://www.svecw.edu.in/index.php/contactus">Contact Information</a></li>


                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">Latest video's</span>
                                                            <video id="cc1" controls autoplay muted >
        <source src="svecw.mp4" type="video/mp4">
        
       
      </video>
                                                           
                                                        </li>
                                                    </ul>
                                                    
                                                </div>
                                                <div class="col-md-5">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">Mission</span>
                                                            <ul class="sub-menu">
                                                            
                                                                <ul class="fa-ul"><li><i class="fa fa-circle" style="font-size:10px"></i>To achieve Academic excellence through innovative learning practices</li>
<li><i class="fa fa-circle"  style="font-size:10px"></i>To instill self confidence among rural students by supplementing with co-curricular and extra-curricular activities</li>
<li><i class="fa fa-circle"  style="font-size:10px"></i>To inculcate discipline and values among students</li>
<li><i class="fa fa-circle"  style="font-size:10px"></i>To establish centers for Institute Industry partnership</li>
<li><i class="fa fa-circle"  style="font-size:10px"></i>To extend financial assistance for the economically weaker sections</li>
<li><i class="fa fa-circle"  style="font-size:10px"></i>To create self employment opportunities and skill up gradation</li>
<li><i class="fa fa-circle"  style="font-size:10px"></i>To support environment friendly Green Practices</li>
                                            Creating innovation hubs</li></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                              <li class="dropdown ">
                                <a class="dropdown-toggle" href="#">Hostels</a>
                                <ul class="dropdown-menu">
                                    <li>
                                  <li class="dropdown-submenu">
                                        <a href="#">First Year Hostels</a>
                                        <ul class="dropdown-menu">
                                <li><a href="#">Hostel-1</a></li>
                                <li><a href="#">Hostel-2</a></li>
                                <li><a href="#">Hostel-3</a></li>
                                </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Second Year Hostels</a>
                                        <ul class="dropdown-menu">
                                <li><a href="#">Hostel-1</a></li>
                                <li><a href="#">Hostel-2</a></li>
                                <li><a href="#">Hostel-3</a></li>
                                </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Third Year Hostels</a>
                                        <ul class="dropdown-menu">
                               <li><a href="#">Hostel-1</a></li>
                                <li><a href="#">Hostel-2</a></li>
                                <li><a href="#">Hostel-3</a></li>
                                </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Fourth Year Hostels</a>
                                        <ul class="dropdown-menu">
                                <li><a href="#">Hostel-1</a></li>
                                <li><a href="#">Hostel-2</a></li>
                                <li><a href="#">Hostel-3</a></li>
                            </ul>
                                    </li>

                                        
                                </ul>
                            </li>
                            <li><a href="login.php">Login</a></li>
                           
                            <li><a class="dropdown-toggle" href="#">Contact Us</a> </li>        
    
                        </ul>
                    </nav>
                    <!--End Main Menu-->
                </div>


  <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

        <div class="text-block" style="background-color: #a51c96;">
                <a href=" #"> 
            <p>Hostel Registration</p>
            </a>
        </div>
        <span class="v-header-shadow"></span>
            </div>
        </header>
</div>
<div class="container">
            <div class="row">
            <div class="col-md-12">
            <div id="main_content111">
                    
            <form name="form1" method="post" action="" id="form1">
            <h1 style="display: none">Placements</h1>
            <img src="img/Hostel-Management-01.jpeg" alt="Hostel-Management" class="post1 img-responsive"  style = "width: 1450px; height : 153px"/>
            <div id="container">
               <div id="myCarousel" class="carousel slide" data-ride="carousel" > 
            <div class="carousel-inner" >
           <table class="table">
                <tr>
                    <td height="450" bordercolor="#F9FFE1" bgcolor="#F5F5F5" align="center">
                        <table id="Table2" style="background-color: White; width : 353px; height : 256px;" border="0"
                            cellpadding="0" cellspacing="0">
                            <tr>
                                <td style = "padding-left: 0px;" align='center'>
                                    <img src="img/facultylogin.jpeg" width="106" height="143" alt=""></td>
                            </tr>
                            <tr>
                                
                                <td style="background-image: url(collegeimages/login_11.gif); background-repeat: no-repeat;padding-right: 100px;">
                                    <br>
                                    <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                        <tr>
                                            <td width="50%" style="white-space: nowrap" align="right">
                                                <span class="style19"><font size="4">User Name :</font></span></td>
                                            
                                            <td>
                                                <input name="username" type="text" id="username" class="input_loginBlue" style="width:150px; height : 30px" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="white-space: nowrap" align="right" height = 50px>
                                                <span class="style19"><font size="4">Password :</font></span></td>
                                            <td>
                                                <input name="password" type="password" id="password" class="input_loginBlue" style="width:150px; height : 30px;" />
                                            </td>
                                        </tr>
                                        <tr height = 100px>
                                        <td style = "padding-left : 150px; padding-right: 25px">
                                        <input type="submit" value="Submit" name="submit" id="submit" /></td>
                                        <td><input type="submit" id="reset" value="Forgot Password" name = 'reset'/></td>
                                        </tr>
                            </table>
                            </td>
                                
                                
                            </tr>
                          
            </table>
                    </td>
            <br/></tr></table>
                    </div>
            </div>
            </div>
            </form>
            </div>
        </div>
    </div>

    </div>
     <div class="footer-wrap" >
            <footer style="background-image:url(img/cc5.png);margin-top:-20px;repeat:none">
                <div class="container" >
                    <div class="row">
                        <div class=" col-xs-12 col-md-12 col-sm-12" style="margin-top:-25px;">
                            <section class="widget">
                            <h3 style="color:white">Quick Links</h3>
                            <div class="widget-heading">
                                    <div class="horizontal-break"></div>
                                </div>

                <ul>
        <div class=" col-md-3 col-sm-3 ">
                            <section class="widget"><ul>
        <li><a href="#">About College</a></li></ul>
                            </section>
                        </div>
                        <div class=" col-md-3 col-sm-3">
                            <section class="widget"><ul>
        <li><a href="#">About Hostels</a></li></ul>
                            </section>
                        </div>
                        <div class=" col-md-3 col-sm-3">
                            <section class="widget"><ul>
        <li><a href="#">Hostel Registration</a></li></ul>
                            </section>
                        </div>
                        <div class="  col-md-3 col-sm-3">
                            <section class="widget"><ul>
        <li><a href="#">Contact us</a></li></ul>
                            </section>
                        </div>
                    </div>
        
              <!-- <li><a href="flist.aspx">Our Faculty-Our Strength</a></li>
              <li><a href="PGalleries.aspx">Photo Galleries</a></li>
          <li><a href="stugri.aspx">Student Grievances</a></li> 
          <li><a href="Staff-Grievances.aspx">Staff Grievances</a></li>
            <li><a href="vec/default.aspx">Value Education Cell</a></li>
            </ul>


                                
                            </section>
                        </div>
                        
                        <div class=" col-xs-6 col-md-6 col-sm-6">
                            <section class="widget">
                            <br/>
                            <br/><br/>

                                <ul>
                    <li><a href="Technical-Partners.aspx">Technology Skilling Partnerships</a></li>
                                    <li><a href="admissions.aspx">Admissions</a></li>
                    <li><a href="site/index.htm">Academics</a></li> 
                    <li><a href="es.aspx?id=0">Exam Section</a></li>
                                    <li><a href="https://moodle.kluniversity.in/">LMS</a></li>
                                    <li><a href="https://newerp.kluniversity.in/">ERP</a></li>
                    <li><a href="Statutory-Committees-Cells.aspx">Statutory Committees & Cells</a></li>
                                    <li><a href="klupanorama.aspx">K L Newsletter</a></li>
                    <li><a href="http://uif.kluniversity.in/">UIF</a></li>
                    <li><a href="privacy.aspx">Privacy Policy</a></li>       
                                </ul>
                            </section>
                        </div>
                           
                         

                    </div>
                </div> -->
            </footer>

            <div class="copyright"  style="background-color: #a51c96">
                <div class="container">
                    <p>© Copyright 2022 by SVECW. All Rights Reserved.</p>

                    <ul class="social-icons std-menu pull-right">
                        <li><a href="https://www.facebook.com/KLUniversity/" target="_blank" data-placement="top" rel="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>                        
                        <li><a href="https://www.youtube.com/kluniversitylive" target="_blank" data-placement="top" rel="tooltip" title="" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>                        
                        <li><a href="https://www.linkedin.com/school/1353501/" target="_blank" data-placement="top" rel="tooltip" title="" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/kluniversityofficial/" target="_blank" data-placement="top" rel="tooltip" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://in.pinterest.com/kluniversityofficial/" target="_blank" data-placement="top" rel="tooltip" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>

                    </ul>

                </div>
            </div>
        </div>
        <!--End Footer-Wrap-->
    </div>

    <!--// BACK TO TOP //-->
    <div id="back-to-top" class="animate-top"><i class="fa fa-angle-up"></i></div>



    <!-- Libs -->
    <script src="js/jquery2.min.js"></script>
    

    <script src="js/bootstrap2.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.carouFredSel.min.js"></script>
    <script src="js/jquery2.validate.js"></script>
    <script src="js/theme-plugins.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/view.min9df2.js?auto"></script>

    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/theme-core.js"></script>
   
    </form>
<style>
#popup-df162b880ad9625799fa889753de08aa{
z-index:9999;
}
.npfTitle-df162b880ad9625799fa889753de08aa {
    color: #9a0000;
    text-align: center;
    font-size: 26px;
}
.trigger_popup {
right:-52px;
}
</style>

<script src="https://cdn.npfs.co/js/widget/npfwpopup.js"></script>
<script>
let npfWdf162b880ad9625799fa889753de08aa = new NpfWidgetsInit({
'widgetId': 'df162b880ad9625799fa889753de08aa',
'baseurl': 'widgets.nopaperforms.com',
'formTitle': 'Lets Connect',
'titleColor': '#9a0000',
'backgroundColor': '#e7e7e8',
'iframeHeight': '532px',
'buttonbgColor': '#ff0000',
'buttonTextColor': '#FFF',
        });
</script>
<style>
.wa-float{
position:fixed;
bottom:44px;
right:0px;
text-align:center;
    z-index:100;
}
</style>

<style>

@media (max-width:768px) {

.trigger_popup {
    transform: rotate(0)!important;
    bottom: 0!important;
    top: unset!important;
    right: 0px;
    height: 48px;
    left: 0;
    font-size: 16px;
    padding: 0px 10px!important;
    width: 50%;
    border-radius: 0px;
    border: 0px;
    }
   
.wa-float{
bottom:0px!important;
right:0px!important;
    z-index:100;
background-color:#ffc107;
width:50%;
}
.wa-float img{
width:143px;
}
.mtable, .table-responsive>.table>tbody>tr>td, .table-responsive>.table>tbody>tr>th {
white-space:normal!important;
}
.copyright{
margin-bottom:48px;
}
header {
overflow-x: hidden;
}

}


</style>


</body>
</html>
