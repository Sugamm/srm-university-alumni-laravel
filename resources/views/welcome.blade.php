
@include('layouts.header')
   <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/4.jpg" alt="img">
        </figure>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/1.jpg" alt="img">
        </figure>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/5.jpg" alt="img">
        </figure>
      </div>  
    </div>
    <!-- Start single slider item -->    
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/6.png" alt="img">
        </figure>
      </div>  
    </div>
  </section>
  <!-- End Slider -->
  <!-- Start news, events, profile card  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single card hidden-xs">
              <h3>News & Announcement</h3>
              <ul>
                <li>
                  <a href="#" style="cursor: pointer;">
                    <div class="panel-head">
                      <b>24 sept 2016</b>
                      <div class="row">
                        <div class="col-md-10  col-sm-10  col-xs-10">
                          <p>
                           Congratulations to all the alumni for participating and making the Cancer Fundraising a  massive Fundraising ...
                          </p>
                        </div>
                        <div class="col-md-2  col-sm-2  col-xs-2">
                          <i class="fa fa-caret-right hover_link" style="margin-top:15px;color: #ccc; "></i>
                        </div>
                      </div>                   
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" style="cursor: pointer;">
                    <div class="panel-head">
                      <b>24 sept 2016</b>
                      <div class="row">
                        <div class="col-md-10 col-sm-10  col-xs-10">
                          <p>
                            The Motion Picture club at RU has been awarded the silver screen award for its Short Film 'Blue S...
                          </p>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <i class="fa fa-caret-right hover_link" style="margin-top:15px;color: #ccc; "></i>
                        </div>
                      </div>                   
                    </div>
                  </a>
                </li>
                <li>
                  <div class="panel-head" style="text-align: center;">
                    <a href="#">View More</a>                  
                  </div>
                </li>
              </ul>
            </div>
            <!-- end single service -->
            <!-- Start single service -->
            <div class="mu-service-single card hidden-xs">
              <h3>Upcomming Events</h3>
              <ul>
                <li>
                  <a href="#" style="cursor: pointer;">
                    <div class="panel-head">
                      <div class="row">
                        <div class="col-md-4  col-sm-4  col-xs-4 event-card">
                         <div class="event-date-card" style="">
                            <p>Wednesday</p>
                            <h4>24 Nov</h4>
                         </div>
                        </div>
                        <div class="col-md-8  col-sm-8  col-xs-8">
                         <div class="event-detail-card">
                            <h4>Reunion - class of 2009</h4>
                            <p>
                             <b>Venue</b><br>
                             SRM university
                            </p>
                          </div>
                        </div>
                      </div>                   
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" style="cursor: pointer;">
                    <div class="panel-head">
                      <div class="row">
                        <div class="col-md-4  col-sm-4  col-xs-4 event-card">
                         <div class="event-date-card" style="">
                            <p>Thusday</p>
                            <h4>06 Jan</h4>
                         </div>
                        </div>
                        <div class="col-md-8  col-sm-8  col-xs-8">
                         <div class="event-detail-card">
                            <h4>Reunion - class of 2010</h4>
                            <p>
                             <b>Venue</b><br>
                             SRM university
                            </p>
                          </div>
                        </div>
                      </div>                   
                    </div>
                  </a>
                </li>
                <li>
                  <div class="panel-head" style="text-align: center;">
                    <a href="#">View More</a>                  
                  </div>
                </li>
              </ul>
            </div>
            <!-- end single service -->
            
            @if (Route::has('login'))
                @if (Auth::check())
                    <!-- Start single service -->
                    <div class="mu-service-single">
                      <div class="card" style="background: #fff;">
                        <div class="row">
                          <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 profile-card-name">
                            <h5 style="color: #be2f3c">Hi Sugam!</h5>
                            <h6>Welcome Back</h6>
                          </div>
                          <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 profile-card-img">
                             <img src="assets/img/profile/profile.jpg" class="img-circle" alt="Avatar" style="width:100%;box-shadow: 0px 1px 14px #909090;">
                          </div>
                        </div>
                        <p style="    padding: 10px 0 0px 16px;margin: 0;font-size: 12px;color: #d4d4d4;">84% Completed</p>
                        <div class="container" style="text-align: center;width: inherit;">
                          <div class="progress" style="height: 5px;border-radius: 50px;">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100" style="width:70%;">
                            </div>
                          </div>
                          <h5><b>Complete your profile</b></h5> 
                          <p style="font-size: 1.3rem">Help the alumni community 
                          understand who you are, and what you care about.</p> 
                          <a href="http://alumni.srm.com/edit-profile.php"><button type="button" class="btn btn-primary" style="background: #10406a;margin-bottom: 22px;font-size: 12px;padding: 10px 15px;">Update Profile</button></a>
                        </div>
                      </div>              
                    </div>
                    <!-- end single service -->
                @else
                    <!-- Start single service -->
                    <div class="mu-service-single card">
                      <h3>Sign in / Register</h3>              
                      <a href="login.php" style="cursor: pointer;">
                        <img src="assets/img/login/facebook.png" style="width: 100%;margin: 60px 0 20px 0;padding: 0 18px;">
                      </a>               
                      <a href="login.php" style="cursor: pointer;">
                        <img src="assets/img/login/google.png" style="width: 100%;margin: 0px 0px 72px 0;padding: 0 18px;">
                      </a> 
                    </div> 
                @endif
            @endif  
            <!-- end single service -->
            <!-- Start single service -->
           <!--  <div class="mu-service-single">
              <div class="card" style="background: #fff;">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 profile-card-name">
                    <h5 style="color: #be2f3c">Hi Sugam!</h5>
                    <h6>Welcome Back</h6>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 profile-card-img">
                     <img src="assets/img/img_avatar.png" class="img-circle" alt="Avatar" style="width:100%;box-shadow: 0px 1px 14px #909090;">
                  </div>
                </div>
                <p style="    padding: 10px 0 0px 16px;margin: 0;font-size: 12px;color: #d4d4d4;">84% Completed</p>
                <div class="container" style="text-align: center;width: inherit;">
                  <div class="progress" style="height: 5px;border-radius: 50px;">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85"
                    aria-valuemin="0" aria-valuemax="100" style="width:70%;">
                    </div>
                  </div>
                  <h5><b>Complete your profile</b></h5> 
                  <p style="font-size: 1.3rem">Help the alumni community 
                  understand who you are, and what you care about.</p> 
                  <a href="http://alumni.srm.com/edit-profile.php"><button type="button" class="btn btn-primary" style="background: #10406a;margin-bottom: 22px;font-size: 12px;padding: 10px 15px;">Update Profile</button></a>
                </div>
              </div>              
            </div> -->
            <!-- end single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End news, events, profile card   -->
  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left card hidden-xs">
                  <!-- Start Title -->
                  <div class="card-title">
                    <h2>SRM Social</h2>              
                  </div>
                 <ul  class="nav nav-pills" style="margin: 0">
                  <li class="active">
                    <a  href="#facebook" data-toggle="tab">Facebook</a>
                  </li>
                  <li class="">
                    <a href="#twitter" data-toggle="tab">Twitter</a>
                  </li>
                </ul>
                  <div class="tab-content clearfix">
                    <div class="tab-pane active" id="facebook">
                    <div class="fb-page" data-href="https://www.facebook.com/SRM-University-Alumni-1281420338558834/?fref=ts" data-tabs="timeline"  data-width="500" data-height="550"  data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SRM-University-Alumni-1281420338558834/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SRM-University-Alumni-1281420338558834/?fref=ts"><img src="assets/img/loader.gif"></a></blockquote></div>
                    </div>
                    <div class="tab-pane" id="twitter" >
                      <!-- <a class="twitter-timeline" href="https://twitter.com/TwitterDev/timelines/539487832448843776">National Park Tweets - Curated tweets by TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                    </div>
                  </div>
              </div>

              <div class="mu-about-us-left card" style="margin-top: 15px;">
                  <!-- Start Title -->
                  <div class="card-title">
                    <h2>Alumni Support</h2>              
                  </div>
                  <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6"><img src="assets/img/img_avatar2.png" class="img-responsive img-circle"></div>
                                    <div class="col-md-9 col-xs-6">
                                        <h5>Anuska Sharma</h5>
                                        <div class="col-md-8" style="padding:0px;">
                                          <p>I need some help on switching careers from engineering to sales. </p>
                                        </div>
                                        <div class="col-md-4">
                                          <button class="btn btn-danger">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>            
                        </div> 
                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6"><img src="assets/img/img_avatar.png" class="img-responsive img-circle"></div>
                                    <div class="col-md-9 col-xs-6">
                                        <h5>Vinay Babu</h5>
                                        <div class="col-md-8" style="padding:0px;">
                                          <p>I need help to select my career option engineering to bussiness. </p>
                                        </div>
                                        <div class="col-md-4">
                                          <button class="btn btn-danger">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>            
                        </div>  
                    <!-- End Item -->
                    </div>
                    <!-- End Carousel Inner -->
                    <div class="controls">
                        <div>
                          <a href="#">View All</a>
                        </div>
                    </div>
                  </div>
                </div>
                 <div class="mu-about-us-left card hidden-xs" style="margin-top: 15px;">
                    <!-- Start Title -->
                    <div class="card-title">
                      <h2>Popular Videos</h2>              
                    </div>
                  <iframe width="458" height="280" src="https://www.youtube.com/embed/rarLuUhvRuw" frameborder="0" allowfullscreen></iframe>
                  <div class="panel-footer">
                  <a href="#" style="font-size:18px;">
                      < 
                    </a>
                    <a href="#">
                        View More. 
                    </a>
                    <a href="#" style="font-size:18px;">
                       >
                    </a>
                  </div>
                </div>
              </div>
              <!-- col-md-6 -->
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left card" >
                  <!-- Start Title -->
                  <div class="card-title">
                    <a href="gallery.php" style="color: #fff;"><h2>Gallery</h2></a>             
                  </div>
                  <div class=" card-img-content">
                  <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                      <img src="assets/img/blog/blog-4.jpg">
                    </div>
                    <div style="padding: 15px;">
                    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6" style="padding: 0">
                      <img src="assets/img/blog/blog-1.jpg">
                    </div>
                    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6" style="padding: 0">
                      <img src="assets/img/blog/blog-2.jpg">
                    </div>
                    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6" style="padding: 0">
                      <img src="assets/img/blog/blog-5.jpg">
                    </div>
                    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6" style="padding: 0">
                      <img src="assets/img/blog/blog-6.jpg">
                    </div>
                    </div>
                    </div>
                  </div>
              </div>
              
              <div class="mu-about-us-left card" style="margin-top: 15px;">
                  <!-- Start Title -->
                  <div class="card-title">
                    <h2>Career Center</h2>              
                  </div>
                  <ul>
                    <li>
                      <a href="#" style="cursor: pointer;">
                        <div class="panel-head">
                           <div class="career-center-list">
                              <blockquote><h4>Graphic Designer Intern</h4>
                              <p>
                                Wittyfeed<br>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                               <span>Indore</span>
                              </p>
                              </blockquote>
                            </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" style="cursor: pointer;">
                        <div class="panel-head">
                           <div class="career-center-list">
                              <blockquote><h4>Editorial / Journalism Internship</h4>
                              <p>
                                The Triumphant Group <br>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                               <span>New York</span>
                              </p>
                              </blockquote>
                            </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                <div class="panel-footer">
                  <a href="#">
                      View More.
                  </a>
                </div>
              </div>         

              <div class="mu-about-us-left card" style="margin-top: 15px;">
                  <!-- Start Title -->
                  <div class="card-title">
                    <h2>Notable Alumni</h2>              
                  </div>
                   <!-- Start testimonial -->
                    <section id="mu-testimonial">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="mu-testimonial-area">
                              <div id="mu-testimonial-slide" class="mu-testimonial-content">
                                <!-- start testimonial single item -->
                                <div class="mu-testimonial-item">
                                  <div class="mu-testimonial-quote">
                                    <blockquote>
                                      <p>Imagine with all your mind. Believe with all your heart. Achieve with all your  might.</p>
                                    </blockquote>
                                  </div>
                                  <div class="mu-testimonial-img">
                                    <img src="assets/img/img_avatar2.png" alt="img">
                                  </div>
                                  <div class="mu-testimonial-info">
                                    <h4>Hiti Jaiswal</h4>
                                  </div>
                                </div>
                                <!-- end testimonial single item -->
                                <!-- start testimonial single item -->
                                <div class="mu-testimonial-item">
                                  <div class="mu-testimonial-quote">
                                    <blockquote>
                                      <p> Be Thankful for the hard times, for they have made you.</p>
                                    </blockquote>
                                  </div>
                                  <div class="mu-testimonial-img">
                                    <img src="assets/img/img_avatar.png" alt="img">
                                  </div>
                                  <div class="mu-testimonial-info">
                                    <h4>Vinay Singal</h4>
                                  </div>
                                </div>
                                <!-- end testimonial single item -->
                                <!-- start testimonial single item -->
                                <div class="mu-testimonial-item">
                                  <div class="mu-testimonial-quote">
                                    <blockquote>
                                      <p>A goal without a plan is just a wish.</p>
                                    </blockquote>
                                  </div>
                                  <div class="mu-testimonial-img">
                                    <img src="assets/img/img_avatar.png" alt="img">
                                  </div>
                                  <div class="mu-testimonial-info">
                                    <h4>Shashank Vaishnav</h4>
                                  </div>
                                </div>
                                <!-- end testimonial single item -->
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>
                    <!-- End testimonial -->
                   
                  </div>
              </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->
   <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <p style="color: #fff; text-align: center;margin-bottom: 50px;font-weight: lighter;font-size: 32px;">Alumni Around The World</p>
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-map-marker"></span>
                  <h4 class="counter">568</h4>
                  <p>Dubai</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-map-marker"></span>
                  <h4 class="counter">3500</h4>
                  <p>India</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-map-marker"></span>
                  <h4 class="counter">250</h4>
                  <p>USA</p>
                </div>
              </div>
              <div class="col-md-12 text-center center-block" style="margin: 40px 0 0 0"> 
                <button class="btn btn-lg btn-default" style="color:#fff;font-size:12px;background: rgba(117, 117, 117, 0.54);padding: 10px 50px">Explore alumni on map</button> 
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=1743528282592686";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@extends('layouts.footer')

