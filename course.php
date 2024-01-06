<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Spartan-U</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
   <link rel="stylesheet" href="css/owl.carousel.min.css" />
   <link rel="stylesheet" href="css/owl.theme.default.min.css" />
   <link rel="stylesheet" href="css/video-js.min.css">
   <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>
<?php include('./includes/header.php') ?>
   <section class="haeder_base base">
      <div class="coustem_container">
         <div class="container">
            <div class="header_base_wrapper">
               <div class="white_logo">
                  <a href="index.php"><img src="images/white_logo.png" alt="" /></a>
               </div>
               <div class="navlinks">
                  <ul>
                     <li>
                        <a href="index.php" class="tab ">Home</a>
                     </li>
                     <li>
                        <a href="course.php" class="tab active">Courses</a>
                     </li>
                     <li>
                        <a href="resources.php" class="tab">Resources</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="tab_section">
      <div class="coustem_container">
         <div class="container">
            <div class="tab_wrapper">
               <div class="listing_wrapper_base">
                  <div class="listing_tabs">
                     <div class="listing">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                 aria-selected="true">Sales</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                 aria-selected="false">Installers</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                 aria-selected="false">Tech</button>
                           </li>
                        </ul>
                     </div>
                     <div class="search">
                        <input type="text" placeholder="Search.." class="coustem_input">
                        <div class="search_image">
                           <img src="images/Vector (1).png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="tab_tile_wrapper-main">
                           <div class="tab_title">
                              <h2>New Hire</h2>
                           </div>
                           <div class="progerss_wrapper">
                              <div class="numbring">
                                 <div class="numbering_text">
                                    <h6>Completion</h6>
                                 </div>
                                 <div class="numbering_count">
                                    <h6>6/6</h6>
                                 </div>
                              </div>
                              <div class="progress_bar">
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="company_logo_wrapper">
                           <div class="owl-carousel owl-theme owl_base_theme">
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal1.png" alt="">
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>

                                    <h4 class="item_title">INTRO</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal2.png" alt="">
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>

                                    <h4 class="item_title">Solar & Spartan</h4>
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal3.png" alt="">
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">Why We Knock</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal4.png" alt="">
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">Everyday Spartan</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal10.png" alt="">
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">show me the money</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal9.png" alt="">
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">Welcome to spartan</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab_tile_wrapper-main">
                           <div class="tab_title">
                              <h2>Setter</h2>
                           </div>
                           <div class="progerss_wrapper">
                              <div class="numbring">
                                 <div class="numbering_text">
                                    <h6>Completion</h6>
                                 </div>
                                 <div class="numbering_count">
                                    <h6>1/6</h6>
                                 </div>
                              </div>
                              <div class="progress_bar">
                                 <div class="bar demo active">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="company_logo_wrapper">
                           <div class="owl-carousel owl-theme owl_base_theme">
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosala.png" alt="">
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">Panels</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                 </div>

                              </div>
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosalb.png" alt="">
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                    <div class="main_line">
                                       <span class="line perctage"></span>
                                    </div>
                                    <h4 class="item_title">market share</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/carosalc.png" alt="">
                                    <h4 class="item_title">Electricity</h4>
                                 </div>

                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/carosald.png" alt="">
                                    <h4 class="item_title">the deal</h4>
                                 </div>

                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/carosale.png" alt="">
                                    <h4 class="item_title">the deal</h4>
                                 </div>

                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/carosalf.png" alt="">
                                    <h4 class="item_title">the deal</h4>
                                 </div>

                              </div>
                           </div>
                        </div>
                        <div class="tab_tile_wrapper-main">
                           <div class="tab_title">
                              <h2>Closer</h2>
                           </div>
                           <div class="progerss_wrapper">
                              <div class="numbring">
                                 <div class="numbering_text">
                                    <h6>Locked</h6>
                                 </div>
                                 <div class="numbering_count">
                                    <span class="lock"><i class="fa-solid fa-lock"></i></span>
                                 </div>
                              </div>
                              <div class="progress_bar">
                                 <div class="bar demo">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                                 <div class="bar demo">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="company_logo_wrapper">
                           <div class="owl-carousel owl-theme owl_base_theme">
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/closure1.png" alt="">
                                    <h4 class="item_title active">Sales</h4>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/closure2.png" alt="">
                                    <h4 class="item_title active">project management</h4>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/closure3.png" alt="">
                                    <h4 class="item_title active">Environment</h4>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/closure4.png" alt="">
                                    <h4 class="item_title active">The future</h4>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/carosale.png" alt="">
                                    <h4 class="item_title active">the deal</h4>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/carosalf.png" alt="">
                                    <h4 class="item_title active">the deal</h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="tab_tile_wrapper-main">
                           <div class="tab_title">
                              <h2>Sunonbi</h2>
                           </div>
                           <div class="progerss_wrapper">
                              <div class="numbring">
                                 <div class="numbering_text">
                                    <h6>Completion</h6>
                                 </div>
                                 <div class="numbering_count">
                                    <h6>4/4</h6>
                                 </div>
                              </div>
                              <div class="progress_bar">
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="company_logo_wrapper">
                           <div class="owl-carousel owl-theme owl_base_theme">
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal5.png" alt="">
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">How To Use App</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal6.png" alt="">
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">How To Add your self into their System</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                    
                                 
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal7.png" alt="">
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">How To Process a Payement</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                    
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/carosal8.png" alt="">
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">How to do something</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                        <div class="tab_tile_wrapper-main">
                           <div class="tab_title">
                              <h2>Quativa</h2>
                           </div>
                           <div class="progerss_wrapper">
                              <div class="numbring">
                                 <div class="numbering_text">
                                    <h6>Completion</h6>
                                 </div>
                                 <div class="numbering_count">
                                    <h6>1/4</h6>
                                 </div>
                              </div>
                              <div class="progress_bar">
                                 <div class="bar demo active">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                                 <div class="bar">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="company_logo_wrapper">
                           <div class="owl-carousel owl-theme owl_base_theme">
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/quantive1.png" alt="">
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">How does this work again?</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                 </div>
                              </div>
                              <!-- <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/quantive2.png" alt="">
                                    <div class="main_line">
                                       <span class="line perctage"></span>
                                    </div>
                                    <h4 class="item_title">How to repair industrial-grade windmills</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                 </div>
                              </div> -->
                              <div class="item">
                                 <div class="item_carosal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="images/quantive2.png" alt="">
                                    <div class="main_line">
                                       <span class="line"></span>
                                    </div>
                                    <h4 class="item_title">How does this work again?</h4>
                                    <div class="video">
                                       <img src="images/video.png" alt="">
                                    </div>
                                    <div class="time">
                                       <h6>7:30</h6>
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/quantive3.png" alt="">
                                    <h4 class="item_title active">This video is locked hahahahaha</h4>
                                 </div>

                              </div>
                              <div class="item">
                                 <div class="item_carosal">
                                    <img src="images/quantive4.png" alt="">
                                    <h4 class="item_title active">Danger - Live Wires</h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


               </div>

            </div>
         </div>
      </div>
      </div>
      </div>
   </section>
   <div class="video_wrapper">
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="back_image" id="img">
                     <a href="home_page.html">
                        <img src="images/Vector (5).png" alt="">
                     </a>
                  </div>
                  <h4>SETTER - market share</h4>
               </div>
               <div class="modal-body">
                  <!-- <video id="my-player" class="video-js" controls preload="auto" poster="//vjs.zencdn.net/v/oceans.png"
                     data-setup='{}'>
                     <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
                     </source>
                     <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm">
                     </source>
                     <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
                     </source>
                     <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">
                           supports HTML5 video
                        </a>
                     </p>
                  </video> -->
                  <div id="buttonbar" >
                                       
                     <button id="rew" onclick="skip(-10)">
                        <img src="images/rewiew.png" alt="">
                     </button>
                     <button id="play" onclick="vidplay()">
                        <img src="images/Vector (10).png" alt="">
                     </button>
                     <button id="fastFwd" onclick="skip(10)">
                        <img src="images/forward.png" alt="">
                     </button>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn" id="demo">
                     <span><img src="images/lession.png" alt=""></span>
                     Lessons
                  </button>
                  <button type="button" class="btn" id="right">
                     <span><img src="images/Vector (4).png" alt=""></span>
                     Next Lesson
                  </button>
               </div>
            </div>
         </div>
         <div class="overlay">
         </div>
         <div class="side_bar">
            <h4>Setter</h4>
            <ul>
               <li>
                  <a href="#" class="side_link">
                     Panels
                     <span><i class="fa-solid fa-square-check"></i></span>
                  </a>
               </li>
               <li>
                  <a href="#" class="side_link active">
                     Market Share
                     <span><i class="fa-solid fa-clock"></i></span>
                  </a>
               </li>
               <li>
                  <a href="#" class="side_link">
                     Electricity
                     <span><i class="fa-solid fa-lock"></i></span>
                  </a>
               </li>
               <li>
                  <a href="#" class="side_link">
                     The Deal
                     <span><i class="fa-solid fa-lock"></i></span>
                  </a>
               </li>
               <li>
                  <a href="#" class="side_link">
                     Types of Deals
                     <span><i class="fa-solid fa-lock"></i></span>
                  </a>
               </li>
               <li>
                  <a href="#" class="side_link">
                     Homeowners 101
                     <span><i class="fa-solid fa-lock"></i></span>
                  </a>
               </li>
            </ul>
         </div>
         <div class="full_side_bar">
            <div class="side_bar_header">
               <div class="cross" id="cancel">
                  <img src="images/Vector (6).png" alt="">
               </div>
               <div class="side_bar_title">
                  <h4>SETTER - Quiz</h4>
               </div>
            </div>
            <div class="main_thumb_nail">
               <div class="thumb_nail">
                  <div class="thumb back">
                     <span class="indicates">1/3</span>
                  </div>
                  <div class="thumb">
                  </div>
                  <div class="thumb">
                  </div>
               </div>
               <div class="information">
                  <p class="discription">What is the primary benefit of installing solar panels for
                     homeowners? </p>
               </div>
               <div class="indication_box">
                  <div class="tab_box" id="color">
                     <h5>Increased property value</h5>
                  </div>
                  <div class="tab_box">
                     <h5>Reduced electricty bills</h5>
                  </div>
                  <div class="tab_box">
                     <h5>Protection against outages</h5>
                  </div>
                  <div class="tab_box" id="dark">
                     <h5>All of the above</h5>
                  </div>
               </div>
               <div class="next_button">
                  <a href="#" class="question_link" id="next">
                     Next Question
                     <span><img src="images/Vector (7).png" alt=""></span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/swiper.min.js"></script>
   <script src="js/video.min.js"></script>
   <script src="js/coustem.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script>
      $('.owl_base_theme').owlCarousel({
         loop: false,
         margin: 10,
         autoplay: false,
         nav: false,
         autoplayTimeout: 3000,
         responsive: {
            0: {
               items: 1
            },
            600: {
               items: 4
            },
            1000: {
               items: 4
            }
         }
      });
   </script>
   <!-- coloring_fill_css===================== -->
   <script>
      $(document).ready(function () {
         $('#color').on('click', function () {
            $('#next').toggleClass('move');
         });
      }); 
   </script>
   <script>
      $(document).ready(function () {
         $('#dark').on('click', function () {
            $('#next').toggleClass('movee');
         });
      }); 
   </script>
   <script>
      $(document).ready(function () {
         $('#color').on('click', function () {
            $('#color').toggleClass('red');
         });
      }); 
   </script>
   <script>
      $(document).ready(function () {
         $('#dark').on('click', function () {
            $('#dark').toggleClass('green');
         });
      }); 
   </script>
   <script>
      $(document).ready(function () {
         $('#dark').on('click', function () {
            $('#next').toggleClass('move');
         });
      }); 
   </script>
   <!-- coloring_fill_css===================== -->
   <script>
      $(document).ready(function () {
         $('.side_link').on('click', function () {
            $('.side_link').removeClass('active');
            $(this).addClass('active');
         })
      });
   </script>
   <script>
      $("#right").click(function () {
         $(".full_side_bar").addClass("demo");
         $("#cancel").click(function () {
            $(".full_side_bar").removeClass("demo");
         });
      });
   </script>
   <script>
      $(document).ready(function () {
         $('.tab').on('click', function () {
            $('.tab').removeClass('active');
            $(this).addClass('active');
         })
      });
   </script>
   <script>
      $("#demo").click(function () {
         $(".side_bar").addClass("main");
         $(".overlay").addClass("over");
      });
   </script>
   <script>
      $(".overlay").click(function () {
         $(".overlay").removeClass("over");

      });
   </script>
   <script>
      $(".overlay").click(function () {
         $(".side_bar").removeClass("main");

      });
   </script>
</body>

</html>