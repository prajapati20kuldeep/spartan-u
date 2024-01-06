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
   <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
   <link rel="stylesheet" href="css/bootstrap.min.css" />
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
                        <a href="index.php" class="tab">Home</a>
                     </li>
                     <li>
                        <a href="course.php" class="tab">Courses</a>
                     </li>
                     <li>
                        <a href="resources.php" class="tab active">Resources</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="tab_section">
      <div class="container">
         <div class="coustem_container">
            <div class="listing_tabs">
               <div class="listing">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                           data-bs-target="#tab-1" type="button" role="tab" aria-controls="pills-home"
                           aria-selected="true">Sales</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tab-2"
                           type="button" role="tab" aria-controls="pills-profile"
                           aria-selected="false">Installers</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#tab-3"
                           type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Tech</button>
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
               <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="tab_menu">
                     <div class="tab_title_menu">
                        <h2 class="front_title">Recents</h2>
                     </div>
                     <div class="tab_item_wrapper">
                        <div class="resources_item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="images/sale1.png" alt="">
                           <div class="resources_title">
                              <h6>How to sell to geriatrics...</h6>
                           </div>
                           <div class="video">
                              <img src="images/video.png" alt="">
                           </div>
                        </div>
                        <div class="resources_item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="images/sale2.png" alt="">
                           <div class="resources_title">
                              <h6>300.mov</h6>
                           </div>
                           <div class="video">
                              <img src="images/video.png" alt="">
                           </div>
                        </div>
                        <div class="resources_item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="images/sale3.png" alt="">
                           <div class="resources_title">
                              <h6>ThermodynamicsForD..</h6>
                           </div>
                           <div class="video">
                              <img src="images/video.png" alt="">
                           </div>
                        </div>
                        <div class="resources_item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="images/sale4.png" alt="">
                           <div class="resources_title">
                              <h6>AlexSmith4.png</h6>
                           </div>
                           <div class="video">
                              <img src="images/video.png" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="tab_title_menu">
                        <h2 class="front_title">Files</h2>
                     </div>
                     <div class="file_listing_tab">
                        <div class="tab_link">
                           <div class="demo_link_wrapper">
                              <div class="demo_link">
                                 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                          data-bs-target="#filter-1" type="button" role="tab" aria-controls="pills-home"
                                          aria-selected="true">New Hire</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                          data-bs-target="#filter-2" type="button" role="tab"
                                          aria-controls="pills-profile" aria-selected="false">Setter</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                          data-bs-target="#filter-3" type="button" role="tab"
                                          aria-controls="pills-contact" aria-selected="false">Closer</button>
                                    </li>
                                 </ul>
                              </div>
                              <div class="filter_link-menu">
                                 <div class="dropdown">
                                    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown"
                                       aria-expanded="false" data-bs-auto-close="outside">
                                       <span>
                                          <img src="images/Vector (2).png" alt="">
                                       </span>
                                       Filters

                                    </button>
                                    <form class="dropdown-menu">
                                       <div class="mb-0">
                                          <div class="main">
                                             <label for="exampleDropdownFormEmail2" class="form-label">
                                                Videos
                                             </label>
                                             <input type="checkbox" id="exampleDropdownFormEmail2">
                                          </div>
                                       </div>
                                       <div class="mb-0">
                                          <div class="main">
                                             <label for="exampleDropdownFormPassword2" class="form-label">Images</label>
                                             <input type="checkbox" id="exampleDropdownFormPassword2">
                                          </div>
                                       </div>
                                       <div class="mb-0">
                                          <div class="main">
                                             <label for="exampleDropdownFormPassword3" class="form-label">PDFs</label>
                                             <input type="checkbox" id="exampleDropdownFormPassword3">
                                          </div>
                                       </div>
                                       <div class="mb-0">
                                          <div class="main">
                                             <label for="exampleDropdownFormPassword4" class="form-label">Audio</label>
                                             <input type="checkbox" id="exampleDropdownFormPassword4">
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="filter-1" role="tabpanel"
                                 aria-labelledby="pills-home-tab">.
                                 <div class="hire_title">
                                    <h4>New Hire</h4>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/Vector (3).png" alt="">
                                          Gaurav Selfies
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          AlexSmith.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          HowToSellToGeriatrics.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          AlexSmith.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          300.mov
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.mp3
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          ThermodynamicsForDummys.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.png
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          deadliftForm.pdf
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="filter-2" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">
                                 <div class="hire_title">
                                    <h4>Setter</h4>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/Vector (3).png" alt="">
                                          Gaurav Selfies
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          AlexSmith.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          HowToSellToGeriatrics.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          AlexSmith.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          300.mov
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.mp3
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          ThermodynamicsForDummys.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.png
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          deadliftForm.pdf
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="filter-3" role="tabpanel"
                                 aria-labelledby="pills-contact-tab">
                                 <div class="hire_title">
                                    <h4>Closer</h4>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/Vector (3).png" alt="">
                                          Gaurav Selfies
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          AlexSmith.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          HowToSellToGeriatrics.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          AlexSmith.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          300.mov
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.mp3
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          ThermodynamicsForDummys.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.png
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          deadliftForm.pdf
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="tab_menu">
                     <div class="tab_title_menu">
                        <h2 class="front_title">Recents</h2>
                     </div>
                     <div class="tab_item_wrapper">
                        <div class="resources_item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="images/sale1.png" alt="">
                           <div class="resources_title">
                              <h6>Sunobi.mp4</h6>
                           </div>
                           <div class="video">
                              <img src="images/video.png" alt="">
                           </div>
                        </div>
                        <div class="resources_item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="images/sale2.png" alt="">
                           <div class="resources_title">
                              <h6>Quativa.pdf</h6>
                           </div>
                           <div class="video">
                              <img src="images/video.png" alt="">
                           </div>
                        </div>
                        <div class="resources_item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="images/sale3.png" alt="">
                           <div class="resources_title">
                              <h6>Sunobi.wav</h6>
                           </div>
                           <div class="video">
                              <img src="images/video.png" alt="">
                           </div>
                        </div>
                        <div class="resources_item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="images/sale4.png" alt="">
                           <div class="resources_title">
                              <h6>Sunergy.png</h6>
                           </div>
                           <div class="video">
                              <img src="images/video.png" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="tab_title_menu">
                        <h2 class="front_title">Files</h2>
                     </div>
                     <div class="file_listing_tab">
                        <div class="tab_link">
                           <div class="demo_link_wrapper">
                              <div class="demo_link">
                                 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                          data-bs-target="#filter-4" type="button" role="tab" aria-controls="pills-home"
                                          aria-selected="false">Sunobi</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                          data-bs-target="#filter-5" type="button" role="tab"
                                          aria-controls="pills-profile" aria-selected="false">Quativa</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link " id="pills-contact-tab" data-bs-toggle="pill"
                                          data-bs-target="#filter-6" type="button" role="tab"
                                          aria-controls="pills-contact" aria-selected="true">Sunergy</button>
                                    </li>
                                 </ul>
                              </div>

                              <div class="filter_link-menu">
                                 <div class="dropdown">
                                    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown"
                                       aria-expanded="false" data-bs-auto-close="outside">
                                       <span>
                                          <img src="images/Vector (2).png" alt="">
                                       </span>
                                       Filters

                                    </button>
                                    <form class="dropdown-menu">
                                       <div class="mb-0">
                                          <div class="main">
                                             <label for="exampleDropdownFormEmail4" class="form-label">Videos</label>
                                             <input type="checkbox" id="exampleDropdownFormEmail4">
                                          </div>

                                       </div>
                                       <div class="mb-0">
                                          <div class="main">
                                             <label for="exampleDropdownFormPassword5" class="form-label">Images</label>
                                             <input type="checkbox" id="exampleDropdownFormPassword5">
                                          </div>

                                       </div>
                                       <div class="mb-0">
                                          <div class="main">
                                             <label for="exampleDropdownFormPassword6" class="form-label">PDFs</label>
                                             <input type="checkbox" id="exampleDropdownFormPassword6">
                                          </div>

                                       </div>
                                       <div class="mb-0">
                                          <div class="main">
                                             <label for="exampleDropdownFormPassword7" class="form-label">Audio</label>
                                             <input type="checkbox" id="exampleDropdownFormPassword7">
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade" id="filter-4" role="tabpanel" aria-labelledby="pills-home-tab">
                                 <div class="hire_title">
                                    <h4>Sunobi</h4>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/Vector (3).png" alt="">
                                          Gaurav Selfies
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          AlexSmith.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          HowToSellToGeriatrics.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>

                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          AlexSmith.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>

                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          300.mov
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>

                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.mp3
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>

                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          ThermodynamicsForDummys.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>

                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>

                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.png
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>

                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          deadliftForm.pdf
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="filter-5" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">
                                 <div class="hire_title">
                                    <h4>Quativa</h4>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/Vector (3).png" alt="">
                                          Gaurav Selfies
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          AlexSmith.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          HowToSellToGeriatrics.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          AlexSmith.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          300.mov
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.mp3
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          ThermodynamicsForDummys.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.png
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          deadliftForm.pdf
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade active show" id="filter-6" role="tabpanel"
                                 aria-labelledby="pills-contact-tab">
                                 <div class="hire_title">
                                    <h4>Sunergy</h4>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/Vector (3).png" alt="">
                                          Gaurav Selfies
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          AlexSmith.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          HowToSellToGeriatrics.mp4
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/frame1.png" alt="">
                                          AlexSmith.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          300.mov
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.mp3
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="hire_wrapper">
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb.png" alt="">
                                          ThermodynamicsForDummys.pdf
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="hire_info">
                                       <span class="name_info">
                                          <img src="images/thumb1.png" alt="">
                                          AlexSmith.png
                                       </span>
                                    </div>
                                    <div class="drop_down">
                                       <span class="ellipse dropdown-toggle" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="fa-solid fa-ellipsis"></i></span>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">File name</a></li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#" target="_blank">
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                                open in new tab
                                             </a>
                                          </li>
                                          <li>
                                             <a class="dropdown-item" href="#">
                                                <span><i class="fa-solid fa-download"></i></span>
                                                Download
                                             </a>
                                          </li>
                                       </ul>
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
                  <!-- <video id="my-player" class="video-js" controls="auto" poster="//vjs.zencdn.net/v/oceans.png"
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
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/video.min.js"></script>
   <script src="js/coustem.js"></script>
   <script src="js/jquery.min.js"></script>
   <script>
      $(document).ready(function () {
         $('.navlinks ul li a').on('click', function () {
            $('.navlinks ul li a').removeClass('active');
            $(this).addClass('active');
         })
      });
   </script>
   <script>
      $(".filter_link_info").click(function () {
         $(".dropdown-menu_list").toggleClass("show");
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
      $(document).on("change", "input[type='checkbox']", function () {
         $(this).parent()[this.checked ? "addClass" : "removeClass"]("checked");
      });
   </script>
</body>

</html>