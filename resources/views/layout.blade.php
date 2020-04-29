<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Royal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dropdownCheckboxes.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!--reserve-->
     <!-- Icons font CSS-->
     <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
     <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
     <!-- Font special for pages-->
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
 
     <!-- Vendor CSS-->
     <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
     <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
 
     <!-- Main CSS-->
     <link href="css/main.css" rel="stylesheet" media="all">
    
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href={{route('home')}}>Royal</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href={{route('home')}} class="nav-link">Home</a></li>
	          <li class="nav-item"><a href={{route('rooms')}} class="nav-link">Rooms</a></li>
	          <li class="nav-item"><a href={{route('restaurant')}} class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href={{route('about')}} class="nav-link">About</a></li>
	          <li class="nav-item"><a href={{route('blog')}} class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href={{route('contact')}} class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <main class="py-4">
		@yield('content')
	</main>

    <!--footer-->
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Royal</h2>
                <p>The Royal is a quiet,  hotel with an old world charm.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">Useful Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Blog</a></li>
                  <li><a href="#" class="py-2 d-block">Rooms</a></li>
                  <li><a href="#" class="py-2 d-block">Amenities</a></li>
                  <li><a href="#" class="py-2 d-block">Gift Card</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Privacy</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Career</a></li>
                  <li><a href="#" class="py-2 d-block">About Us</a></li>
                  <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                  <li><a href="#" class="py-2 d-block">Services</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="icon-heart color-danger" aria-hidden="true"></i> 
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>
      
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- // <script src="js/jquery.timepicker.min.js"></script> -->
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dropdownCheckboxes.min.js"></script>
    <!--reserve-->

       <!-- Jquery JS-->
       <script src="vendor/jquery/jquery.min.js"></script>
       <!-- Vendor JS-->
       <script src="vendor/select2/select2.min.js"></script>
       <script src="vendor/datepicker/moment.min.js"></script>
       <script src="vendor/datepicker/daterangepicker.js"></script>
   
       <!-- Main JS-->
       <script src="js/global.js"></script>
      
    </body>
  </html>