<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>ALUMNI SRM UNIVERSITY | Home</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://www.srmuniv.ac.in/sites/default/files/favicon_0.ico" type="image/vnd.microsoft.icon">
    <!-- Font awesome -->
    <link href="{{URL::to('assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{URL::to('assets/css/bootstrap.css')}}" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/slick.css')}}">          
    <!-- Theme color -->
    <link id="switcher" href="{{URL::to('assets/css/theme-color/default.css')}}" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="{{URL::to('assets/css/style.css')}}" rel="stylesheet">    
    <link href="{{URL::to('assets/css/model.css')}}" rel="stylesheet"> 
   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

 
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header" style="width: 100%">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="row">
          <div class="col-lg-4 col-md-4">
          <!-- LOGO -->              
          <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" class="img-responsive"></a>
          </div>
           
            <div id="contact" class="col-lg-8 col-md-8  hidden-xs hidden-sm">
             <div style="display: inline-flex;padding: 0 0 0 458px;">
             <h4>Contact</h4>
             <nav>
                <ul  class="mu-top-social-nav">
                  <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                  <li><a href="#"><span class="fa fa-envelope"></span></a></li>
                </ul>
              </nav>
            </div>
          </div> 
          </div>
        </div>
      </div>     
    </nav>
  </section>
  <!-- End menu -->
   <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-2 col-md-2 hidden-xs">
                <ul  class="nav navbar-nav  main-nav">
                  <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
                </ul>
              </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                  <div class="mu-header-top-right">
                    <div id="navbar" class="navbar-collapse collapse">
                      <ul id="top-menu" class="nav navbar-nav navbar-right main-nav" style="text-align: center">            
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Directory <span class="fa fa-angle-down"></span></a>
                          <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li><a href="search.php">By Search</a></li>                
                            <li><a href="map.php">By Map</a></li> 
                            <li><a href="#">By Resource</a></li>
                            <li><a href="#">Community</a></li>                   
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Careers <span class="fa fa-angle-down"></span></a>
                          <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li><a href="job.php">Jobs</a></li>                
                            <li><a href="internship.php">Internship</a></li>  
                            <!-- <li><a href="#">Upload Resume</a></li>   -->
                            <li><a href="gallery.php">Track my application</a></li>       
                          </ul>
                        </li> 
                        <li><a href="mentership.php">Mentorship</a></li>           
                        <li><a href="events.php">Events</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Give Back <span class="fa fa-angle-down"></span></a>
                          <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li><a href="#">Volunter</a></li>                
                            <li><a href="#">Make a donation</a></li>                
                          </ul>
                        </li>  
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="fa fa-angle-down"></span></a>
                          <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li><a href="#">Alumni Needs</a></li>                
                            <li><a href="#">Membership</a></li>  
                            <!-- <li><a href="#">Class Notes</a></li>   -->
                            <li><a href="gallery.php">Photo gallery</a></li>  
                            <li><a href="#">Newsletters</a></li>             
                          </ul>
                        </li>   
                         @if (Route::has('login'))
                                @if (Auth::check())
                                    <!-- <a href="{{ url('/home') }}">Home</a> -->
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sugam <span class="fa fa-angle-down"></span></a>
                                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="{{ url('/home') }}">My Feed</a></li> 
                                        <li><a href="{{ url('/home') }}">My Profile</a></li>                
                                        <li><a href="edit-profile.php">Edit Profile</a></li>  
                                        <li><a href="index.php">Logout</a></li>            
                                      </ul>
                                    </li> 
                                @else
                                    <!-- <a href="{{ url('/register') }}">Register</a> -->
                                     <li><a href="{{ url('/login') }}">Login</a></li>  
                                @endif
                        @endif                                   
                      </ul>                     
                    </div><!--/.nav-collapse -->        
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="loginmodal-container">
        <h1>Login to Your Account</h1><br><hr>
         <a href="login.php" style="cursor: pointer;">
          <img src="assets/img/login/facebook.png" style="width: 100%;margin: 20px 0 20px 0;padding: 0 18px;">
        </a>
     
        <a href="login.php" style="cursor: pointer;">
          <img src="assets/img/login/google.png" style="width: 100%;margin: 0px 0px 20px 0;padding: 0 18px;">
        </a>
        <hr>
      </div>
    </div>
  </div>
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->