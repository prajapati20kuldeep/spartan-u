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
   <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="css/swiper.min.css">
   <link rel="stylesheet" href="css/video-js.min.css">
   <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>
<?php include('./includes/header.php') ?>
   <section class="haeder_base">
      <div class="coustem_container">
         <div class="container">
            <div class="header_base_wrapper">
               <div class="white_logo">
                  <a href="index.php"><img src="images/white_logo.png" alt=""></a>
               </div>
               <div class="navlinks">
                  <ul>
                     <li>
                        <a href="index.php" class="tab active">Home</a>
                     </li>
                     <li>
                        <a href="course.php" class="tab">Courses</a>
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
   <section class="banner_section">
         <div class="container">
            <div class="banner_row">
               <div class="row p-0 m-0">
                  <div class="col-md-6">
                     <div class="banner_text">
                        <div class="text_base">
                           <h2>IT’S Time to LEVEL Up.</h2>
                           <p>Learn from the best. Grow your skills. Overcome anything and everything.</p>
                           <a href="javascript:void(0)" class="resume_link">
                              <span class="arrow_img">
                                 <img src="images/Vector.png" alt="">
                              </span>
                              Resume
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 p-0 ">
                     <div class="swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <img src="images/marble.png" alt="">
                              <div class="name_base">
                                 <h4>“Dwell on the beauty of life. Watch the stars, and see yourself<br> running with
                                    them.”<br>
                                    - Marcus Aurelius</h4>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <img src="images/darkmarble.png" alt="">
                              <div class="name_base">
                                 <h4>“It's not that we have little time.but more that we waste a good deal of it”<br>
                                    -Seneca</h4>
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
   <section class="sugested_section">
      <div class="coustem_container">
         <div class="container">
            <div class="sugested_wrapper">
               <div class="title">
                  <h2>Suggested</h2>
               </div>
               <div class="auth_btn">
                  <a href="#" class="watch_link">
                     Watch More
                     <span><i class="fa-solid fa-arrow-right"></i></span>
                  </a>
               </div>
            </div>
            <div class="product_card_image">
               <div class="row">
                  <div class="col-md-3">
                     <div class="product_cards" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="images/card1.png" alt="">
                        <h4>Market Share</h4>
                        <div class="time">
                           <h6>7:30</h6>
                        </div>
                        <div class="video">
                           <img src="images/video.png" alt="">
                        </div>
                     </div>
                     <div class="video_wrapper">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                           aria-hidden="true">
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
                                    <!-- <video id="Video1" class="video-js" controls
                                       poster="//vjs.zencdn.net/v/oceans.png" data-setup='{}'>
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
                                    <!-- <video   id="Video1">


                                       poster="//vjs.zencdn.net/v/oceans.png" data-setup='{}'>
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
                                    <div class="tab_box"  id="dark">
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
                              <div class="main_thumb_nail nail">
                                 <div class="thumb_nail">
                                    <div class="thumb back">
                                       <span class="indicates">2/3</span>
                                    </div>
                                    <div class="thumb back">
                                    </div>
                                    <div class="thumb">
                                    </div>
                                 </div>
                                 <div class="information">
                                    <p class="discription">What is net metering</p>
                                 </div>
                                 <div class="indication_box">
                                    <div class="tab_box">
                                       <h5>A government incentive program for solar installations</h5>
                                    </div>
                                    <div class="tab_box" id="dark1">
                                       <h5>The process of selling excess solar energy back to the grid</h5>
                                    </div>
                                    <div class="tab_box" id="color1">
                                       <h5>A financial subsidy provided to homeowners who install solar panels</h5>
                                    </div>
                                    <div class="tab_box">
                                       <h5>A warranty offered by solar panel manufacturers</h5>
                                    </div>
                                 </div>
                                 <div class="next_button">
                                    <a href="#" class="question_link" id="next1">
                                       Next Question
                                       <span><img src="images/Vector (7).png" alt=""></span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="product_cards" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="images/card2.png" alt="">
                        <h4>Intro</h4>
                        <div class="time">
                           <h6>7:30</h6>
                        </div>
                        <div class="video">
                           <img src="images/video.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="product_cards" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="images/card3.png" alt="">
                        <h4>Solar & Spartan</h4>
                        <div class="time">
                           <h6>7:30</h6>
                        </div>
                        <div class="video">
                           <img src="images/video.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="product_cards" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="images/card4.png" alt="">
                        <h4>Everyday Spartan</h4>
                        <div class="time">
                           <h6>7:30</h6>
                        </div>
                        <div class="video">
                           <img src="images/video.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/swiper.min.js"></script>
   <script src="js/video.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/coustem.js"></script>
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
         $('.side_link').on('click', function () {
            $('.side_link').removeClass('active');
            $(this).addClass('active');
         })
      });
   </script>
   <!-- coloring_fill_css 1===================== -->
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
    <script>
        $(document).ready(function () {
       $('#next').on('click', function () {
          $('.main_thumb_nail.nail').toggleClass('nail_base');
          $('.main_thumb_nail').toggleClass('thumb_base');
       });
      }); 
    </script>
    <!-- coloring_fill_css 1===================== -->
     <!-- coloring_fill_css 2===================== -->
     <script>
      $(document).ready(function () {
       $('#color1').on('click', function () {
          $('#next1').toggleClass('move1');
       });
      }); 
    </script>
     <script>
       $(document).ready(function () {
        $('#dark1').on('click', function () {
           $('#next1').toggleClass('movee1');
        });
       }); 
     </script>
    <script>
       $(document).ready(function () {
        $('#color1').on('click', function () {
           $('#color1').toggleClass('red1');
        });
       }); 
     </script>
     <script>
       $(document).ready(function () {
        $('#dark1').on('click', function () {
           $('#dark1').toggleClass('green1');
        });
       }); 
     </script>
    
    <script>
       $(document).ready(function () {
        $('#dark').on('click', function () {
           $('#next').toggleClass('move1');
        });
       }); 
     </script>
      <!-- coloring_fill_css 2===================== -->
   <script>
      var mySwiper = new Swiper('.swiper-container', {
         loop: true,
         autoplay: {
            delay: 4000,
         },
         speed: 2000,
         effect: 'fade',
         fadeEffect: {
            crossFade: true
         },

         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
      })
   </script>
   <!-- <script>
      function vidplay() {
         var video = document.getElementById("Video1");
         var button = document.getElementById("play");
         if (video.paused) {
            video.play();
            button.textContent = "||";
         } else {
            video.pause();
            button.textContent = ">";
         }
      }
  
      function restart() {
          var video = document.getElementById("Video1");
          video.currentTime = 0;
      }
  
      function skip(value) {
          var video = document.getElementById("Video1");
          video.currentTime += value;
      }      
  </script> -->
</body>
</html>