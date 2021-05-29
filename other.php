<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>other</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Hide and show -->

  <meta charset="UTF-8">
	<title>Hide and Show Content with Tabs</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".content .tab_content").hide();
			$(".content .tab_content:first-child").show();

			$("ul li").click(function(){
			  
			  $("ul li").removeClass("active");
			  $(this).addClass("active");
			  
			  var current_tab = $(this).attr("data-list");
			  $(".content .tab_content").hide();
			  $("."+current_tab).show();
			})
		});
	</script>
        
       
<style>
/***/
/* General CSS */
/***/
body {
    color: #797979;
    background: #ffffff;
    font-family: 'Open Sans', sans-serif;
}

h1,
h2, 
h3, 
h4,
h5, 
h6 {
    color: #343148;
}

a {
    color: #454545;
    transition: .3s;
}

a:hover,
a:active,
a:focus {
    color: #F7CAC9;
    outline: none;
    text-decoration: none;
}

.btn:focus,
.form-control:focus {
    box-shadow: none;
}

.container-fluid {
    max-width: 1366px;
}

.back-to-top {
    position: fixed;
    display: none;
    background: #F7CAC9;
    width: 44px;
    height: 44px;
    text-align: center;
    line-height: 1;
    font-size: 22px;
    right: 15px;
    bottom: 15px;
    transition: background 0.5s;
    z-index: 9;
}

.back-to-top:hover {
    background: #343148;
}

.back-to-top:hover i {
    color: #F7CAC9;
}

.back-to-top i {
    color: #343148;
    padding-top: 10px;
}


/**/
/* Top Bar CSS **/
/**/
.top-bar {
    position: relative;
    height: 35px;
    background: #343148;
}

.top-bar .top-bar-left {
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.top-bar .top-bar-right {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.top-bar .text {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
    height: 35px;
    padding: 0 10px;
    text-align: center;
    border-left: 1px solid rgba(255, 255, 255, .15);
}

.top-bar .text:last-child {
    border-right: 1px solid rgba(255, 255, 255, .15);
}

.top-bar .text i {
    font-size: 13px;
    color: #ffffff;
    margin-right: 5px;
}

.top-bar .text h2 {
    color: #eeeeee;
    font-weight: 400;
    font-size: 13px;
    letter-spacing: 1px;
    margin: 0;
}

.top-bar .text p {
    color: #eeeeee;
    font-size: 14px;
    font-weight: 400;
    margin: 0 0 0 5px;
}

.top-bar .social {
    display: flex;
    height: 35px;
    font-size: 0;
    justify-content: flex-end;
}

.top-bar .social a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 100%;
    font-size: 16px;
    color: #ffffff;
    border-right: 1px solid rgba(255, 255, 255, .15);
}

.top-bar .social a:first-child {
    border-left: 1px solid rgba(255, 255, 255, .15);
}

.top-bar .social a:hover {
    color: #092a49;
    background: #ffffff;
}

/**/
/* Hide and Show Tab  **/
/**/

*{
  
  list-style: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
  background: #ffffff;
}

.wrapper{
  width: 900px;
  background: #fff;
  
  border-radius: 2px;
}

.wrapper .tabs ul{
  width: 100%;
  height: 50px;
  display: flex;
}

.wrapper .tabs ul li{
  width: 25%;
  height: 50px;
  padding: 10px 10px;
  text-align: center;

  background: #EBFAF4;
  cursor: pointer;
  text-transform: uppercase;
  color:black;
  font-size: 16px;
  font-weight:bold;
  
  transition: all 0.3s ease;
}

.wrapper .tabs ul li:first-child{
  border-top-left-radius: 3px;
}

.wrapper .tabs ul li:last-child{
  border-top-right-radius: 3px;
}

.wrapper .tabs ul li img{
  width: 35px;
  height: 35px;
  display: block;
  margin: 0 auto 3px;
}

.wrapper .content{
  padding: 30px;
  height: 600px;
  border-bottom: 6px solid #44c8fe;
  border-radius: 3px;
}

.wrapper .content .tab_content{
  font-size: 20px;
  line-height: 2px;
  text-align:centre;
}

.wrapper .tabs ul li.active{
  border-top: 6px solid #44c8fe;
  margin-top: -15px;
  background: #fff;
  color: #44c8fe;
  padding-top: 9px;
}

@media (min-width: 992px) {
    .top-bar {
        padding: 0 60px;
    }
}


/**/
/* Nav Bar CSS **/
/**/
.navbar {
    position: relative;
    transition: .5s;
    z-index: 999;
}

.navbar.nav-sticky {
    position: fixed;
    top: 0;
    width: 100%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .3);
}

.navbar .navbar-brand {
    margin: 0;
    color: #ffffff;
    font-size: 45px;
    line-height: 0px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: .5s;
    
}

.navbar .navbar-brand span {
    color: #343148;
    text-transform: lowercase;
    transition: .5s;
}

.navbar.nav-sticky .navbar-brand span {
    color: #ffffff;
}

.navbar .navbar-brand img {
    max-width: 100%;
    max-height: 40px;
}

.navbar-dark .navbar-nav .nav-link,
.navbar-dark .navbar-nav .nav-link:focus,
.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    padding: 10px 10px 8px 10px;
    color: #ffffff;
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    background: rgba(256, 256, 256, .1);
    transition: none;
}

.navbar .dropdown-menu {
    margin-top: 0;
    border: 0;
    border-radius: 0;
    background:#ffffff;
}

@media (min-width: 992px) {
    .navbar {
        position: absolute;
        width: 100%;
        top: 35px;
        padding: 20px 60px;
        background: #F0F8FF!important;
        z-index: 9;
    }
    
    .navbar.nav-sticky {
        padding: 10px 60px;
        background: #343148 !important;
    }
    
    .navbar a.nav-link {
        padding: 8px 15px;
        font-size: 14px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
}

@media (max-width: 991.98px) {   
    .navbar {
        padding: 15px;
        background: #343148 !important;
    }
    
    .navbar .navbar-brand span {
        color: #ffffff;
    }
    
    .navbar a.nav-link {
        padding: 5px;
    }
    
    .navbar .dropdown-menu {
        box-shadow: none;
    }
}


/***/
/* Hero CSS **/
/***/
.hero {
    position: relative;
    width: 100%;
    margin-bottom: 45px;
    padding: 90px 0;
    background: #87CEFA;
    overflow: hidden;
}

.hero .container-fluid {
    padding: 0;
}
.hero .hero-image {
    position: relative;
    text-align: right;
}

.hero .hero-image img {
    max-width: 80%;
    max-height: 80%;
}

.hero .hero-text {
    position: relative;
    padding-left: 75px;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
}

.hero .hero-text h1 {
    color: #343148;
    font-size: 60px;
    font-weight: 700;
    margin-bottom: 20px;
}

.hero .hero-text p {
    color: #343148;
    font-size: 18px;
    margin-bottom: 25px;
}

.hero .hero-btn .btn {
    padding: 12px 20px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #F7CAC9;
    background: #343148;
    border-radius: 0;
    transition: .3s;
}

.hero .hero-btn .btn:hover {
    color: #343148;
    background: #ffffff;
}

.hero .hero-btn .btn:first-child {
    margin-right: 10px;
}

@media (max-width: 991.98px) {
    .hero .hero-text {
        padding: 0 15px;
    }
    
    .hero .hero-text h1 {
        font-size: 35px;
    }
    
    .hero .hero-text p {
        font-size: 16px;
    }
    
    .hero .hero-text .btn {
        padding: 12px 30px;
        letter-spacing: 1px;
    }
}

@media (max-width: 767.98px) {
    .hero .hero-text h1 {
        font-size: 30px;
        font-weight: 600;
    }
    
    .hero .hero-text p {
        font-size: 14px;
    }
    
    .hero .hero-text .btn {
        padding: 10px 15px;
        font-weight: 400;
        letter-spacing: 1px;
    }
}

@media (max-width: 575.98px) {
    .hero .hero-text h1 {
        font-size: 25px;
        font-weight: 600;
    }
    
    .hero .hero-text p {
        font-size: 14px;
    }
    
    .hero .hero-text .btn {
        padding: 8px 10px;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 0;
    }
    
    .hero .hero-text .top_left .h3{
	font-size: 16px;
	
   }


   
</style>
</head>

    <body> 
       <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="top-bar-left">
                            
                            <div class="text">
                               <h2>Contact us at abc@gmail.com</h2>
                   		
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
            <div class="container-fluid">
                <a href="home.php" class="navbar-brand" style="color:Cadetblue;">BLOC</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="home.php" class="nav-item nav-link " style="color:black;">Home</a>
			
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:black;">domain</a>
                            <div class="dropdown-menu">
                                <a href="ML.php" class="dropdown-item">Machine Learning</a>
                                <a href="ai.php" class="dropdown-item">Artificial Intelligence</a>
			<a href="wd.php" class="dropdown-item">Web Development</a>
			<a href="mad.php" class="dropdown-item">Mobile App Development</a>
			<a href="health.php" class="dropdown-item">Healthcare</a>
			<a href="fin.php" class="dropdown-item">Finance</a>
			<a href="iot.php" class="dropdown-item">IoT</a>
			<a href="bc.php" class="dropdown-item">BlockChain</a>
			<a href="agri.php" class="dropdown-item">Agriculture & Rural Development</a>
			<a href="other.php" class="dropdown-item">Other</a>
                            </div>
			
                        </div>
			<input type="text" class="form-control" placeholder="Search" disabled name="search">
			
                        
		<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:black">profile</a>
                            <div class="dropdown-menu">
                                <a href="set.php" class="dropdown-item">Profile Update</a>
                        <a href="pro.html" class="dropdown-item">My Projects</a> 
			<a href="completed.html" class="dropdown-item disabled">My Completed Projects</a>
			<a href="saved.html" class="dropdown-item disabled">Saved Projects</a>
			<a href="login.php" class="dropdown-item">Logout</a>
                            </div>
			
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Other</h1>
                            
                                
                                <b>Hey <?php echo $_SESSION['name']; ?>, couldn't find the domain you were looking for? Don't worry , upload your project idea here.</b>
                            </p>
			<div class="top_left">
	<a href="FORM_other.php"><h3><b><button<span style="background-color: #555555; color:white;font-size: 17px; shadow:5px; padding :10px 15px; cursor: pointer;">+New Query</b></button></h3></a>
	</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Hero End --!>
        
       



        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script> 
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

     
     <!-- Hide and Show --> 
   <div class="wrapper">
  <div class="tabs">
    <ul>
      <li class="active" data-list="tab_1">
        <p>Ongoing Projects</p>
      </li>
      <li data-list="tab_2">
        Completed projects</li>
  </ul>
  </div>
<div class="content">
  <div class="tab_content tab_1">

        <?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM other_project");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>

<table class='table table-bordered table-striped' >
<tr>

<td>Name</td>
<td>Members</td>
<td>Contact</td>
<td>Preview</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>

<td><?php echo $row["p_name"]; ?></td>
<td><?php echo $row["teamsize"];?></td>
<td><?php echo $row["contact"]; ?></td>
<td><?php echo $row["preview"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
  </div>
  <div class="tab_content tab_2">
<?php
include_once 'database2.php';
$result = mysqli_query($conn,"SELECT * FROM other_project");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>

<table class='table table-bordered table-striped' >
<tr>

<td>Name</td>
<td>Members</td>
<td>Contact</td>
<td>Preview</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>

<td><?php echo $row["p_name"]; ?></td>
<td><?php echo $row["teamsize"];?></td>
<td><?php echo $row["contact"]; ?></td>
<td><?php echo $row["preview"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
  </div>
  </div>
        
        
    </body>
</html>