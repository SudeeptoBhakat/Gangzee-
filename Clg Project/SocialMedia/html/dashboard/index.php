<?php
   session_start();
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Gangzee</title>

   <link rel="shortcut icon" href="../assets/images/favicon.ico" />
   <link rel="stylesheet" href="../assets/css/libs.min.css">
   <link rel="stylesheet" href="../assets/css/socialv.css?v=4.0.0">
   <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
   <link rel="stylesheet" href="../assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
   <link rel="stylesheet" href="../assets/vendor/font-awesome-line-awesome/css/all.min.css">
   <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">

</head>

<body class="  ">
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <div class="iq-sidebar  sidebar-default ">
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="active">
                     <a href="../dashboard/index.php" class=" ">
                        <i class="las la-home"></i><span>Home</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="../app/profile.php" class=" ">
                        <i class="las la-user"></i><span>Profile</span>
                     </a>
                  </li>
                  <!-- <li class="">
                     <a href="../app/group.html" class=" ">
                        <i class="las la-users"></i><span>Gang</span>
                     </a>
                  </li> -->
               </ul>
            </nav>
            <div class="p-5"></div>
         </div>
      </div>

      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-navbar-logo d-flex justify-content-between">
                  <a href="../dashboard/index.html">
                     <img src="../assets/images/gangzee.png" class="img-fluid" alt="">
                  </a>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                     </div>
                  </div>
               </div>
               <div class="iq-search-bar device-search">
                     <form class="searchbox"  role="search" action='../../html\app\search.php' method='GET'>
                          <button class="btn btn-link search-link p-3" type="submit"><i class="ri-search-line"></i></button>
                          <input type="text" name="str" class="text search-input" placeholder="Search here...">
                      </form>
               </div>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav  ms-auto navbar-list">
                     <li class="nav-item dropdown">
                        <!--Navbar Group/ Friend request-->
                        <a href="#" class="dropdown-toggle" id="group-drop" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="ri-group-line"></i></a>
                        <div class="sub-drop sub-drop-large dropdown-menu" aria-labelledby="group-drop">
                           <div class="card shadow-none m-0">
                              <div class="card-header d-flex justify-content-between bg-primary">
                                 <div class="header-title">
                                    <h5 class="mb-0 text-white">Friend Request</h5>
                                 </div>
                                 <small class="badge  bg-light text-dark ">1</small>
                              </div>
                              <div class="card-body p-0">
                                 <div class="iq-friend-request">
                                    <div
                                       class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                       <div class="d-flex align-items-center">
                                          <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                          <div class="ms-3">
                                             <h6 class="mb-0 ">Jaques Amole</h6>
                                             <p class="mb-0">40 friends</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center">
                                          <a href="javascript:void();" class="me-3 btn btn-primary rounded">Confirm</a>
                                          <a href="javascript:void();" class="me-3 btn btn-secondary rounded">Delete
                                             Request</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <a href="#" class=" btn text-primary">View More Request</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <!--nav Bar Notification-->
                     <li class="nav-item dropdown">
                        <a href="#" class="search-toggle   dropdown-toggle" id="notification-drop"
                           data-bs-toggle="dropdown">
                           <i class="ri-notification-4-line"></i>
                        </a>
                        <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                           <div class="card shadow-none m-0">
                              <div class="card-header d-flex justify-content-between bg-primary">
                                 <div class="header-title bg-primary">
                                    <h5 class="mb-0 text-white">All Notifications</h5>
                                 </div>
                                 <small class="badge  bg-light text-dark">1</small>
                              </div>
                              <div class="card-body p-0">
                                 <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                       </div>
                                       <div class="ms-3 w-100">
                                          <h6 class="mb-0 ">Emma Watson Bni</h6>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <p class="mb-0">95 MB</p>
                                             <small class="float-right font-size-12">Just Now</small>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                               </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="   d-flex align-items-center dropdown-toggle" id="drop-down-arrow"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php
                              if(!empty($_SESSION['profile-pic'])){ 
                                 echo "<img src=../../". $_SESSION['profile-pic'] . " alt='userimg' class='img-fluid rounded-circle me-3'>";
                                 }
                              else{
                                 echo "<img src='../assets/images/user.png' alt='userimg' class='img-fluid rounded-circle me-3'>";
                                 }
                           ?>
                           <div class="caption">
                              <h6 class="mb-0 line-height">
                              <?php
                                 echo $_SESSION['name'];
                              ?>
                              </h6>
                           </div>
                        </a>
                        <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                           <div class="card shadow-none m-0">
                              <div class="card-header  bg-primary">
                                 <div class="header-title">
                                    <h5 class="mb-0 text-white">Hello <?php
                                       echo $_SESSION['name'];
                                    ?></h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                              </div>
                              <div class="card-body p-0 ">
                                 <a href="../app/profile.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="d-flex align-items-center">
                                       <div class="rounded card-icon bg-soft-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="../app/profile-edit.php" class="iq-sub-card iq-bg-warning-hover">
                                    <div class="d-flex align-items-center">
                                       <div class="rounded card-icon bg-soft-warning">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="btn btn-primary iq-sign-btn" href="../../signout.php"
                                       role="button">Sign
                                       out<i class="ri-login-box-line ms-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      
      <div id="content-page" class="content-page">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 row m-0 p-0">
                  <div class="col-sm-12">
                     <div id="post-modal-data" class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                           <div class="header-title">
                              <h4 class="card-title">Create Post</h4>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="d-flex align-items-center">
                              <div class="user-img">
                              <?php
                                 if(!empty($_SESSION['profile-pic'])){ 
                                    echo "<img src=../../". $_SESSION['profile-pic'] . " alt='userimg' class='avatar-60 rounded-circle'>";
                                    }
                                 else{
                                    echo "<img src='../assets/images/user.png' alt='userimg' class='avatar-60 rounded-circle'>";
                                    }
                              ?>
                                 <!-- <img src="../assets/images/user.png" alt='userimg' class='avatar-60 rounded-circle'> -->
                              </div>
                              <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#post-modal" action="javascript:void();">
                                 <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                              </form>
                           </div>
                           <hr>
                           <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                              <li class="me-3 mb-md-0 mb-2">
                                 <a href="#" class="btn btn-soft-primary">
                                    <img src="../assets/images/small/07.png" alt="icon" class="img-fluid me-2">
                                    Photo/Video
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog   modal-fullscreen-sm-down">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                          class="ri-close-fill"></i></button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="d-flex align-items-center">
                                       <div class="user-img">
                                       <?php
                                          if(!empty($_SESSION['profile-pic'])){ 
                                             echo "<img src=../../". $_SESSION['profile-pic'] . " alt='userimg' class='avatar-60 rounded-circle img-fluid'>";
                                             }
                                          else{
                                             echo "<img src='../assets/images/user.png' alt='userimg' class='avatar-60 rounded-circle img-fluid'>";
                                             }
                                       ?>
                                          <!-- <img src="../assets/images/user.png" alt='userimg' class='avatar-60 rounded-circle img-fluid'> -->
                                       </div>

                                       <!----------------------------------------------------- For Write Post ----------------------------------------------->


                                       <form class="post-text ms-3 w-100" action="javascript:void();">
                                          <input type="text" class="form-control rounded"
                                             placeholder="Write something here..." style="border:none;">
                                       </form>
                                    </div>
                                    <hr>
                                    <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                       <li class="col-md-6 mb-3">
                                          <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img
                                                src="../assets/images/small/07.png" alt="icon" class="img-fluid">
                                             Photo</div>
                                       </li>
                                    </ul>
                                    <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                           <div class="user-post-data">
                              <div class="d-flex justify-content-between">
                                 <div class="me-3">
                                    <img class="rounded-circle img-fluid" src="../assets/images/user/01.jpg" alt="">
                                 </div>
                                 <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                       <div class="">
                                          <h5 class="mb-0 d-inline-block">Anna Sthesia</h5>
                                          <span class="mb-0 d-inline-block">Add New Post</span>
                                          <p class="mb-0 text-primary">Just Now</p>
                                       </div>
                                       <div class="card-post-toolbar">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                             </span>
                                             <div class="dropdown-menu m-0 p-0">
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <div class="h4">
                                                         <i class="ri-save-line"></i>
                                                      </div>
                                                      <div class="data ms-2">
                                                         <h6>Save Post</h6>
                                                         <p class="mb-0">Add this to your saved items</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-close-circle-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Hide Post</h6>
                                                         <p class="mb-0">See fewer posts like this.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-user-unfollow-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Unfollow User</h6>
                                                         <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-notification-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Notifications</h6>
                                                         <p class="mb-0">Turn on notifications for this post</p>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-3">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                 commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac
                                 massa sed rhoncus</p>
                           </div>
                           <div class="user-post">
                              <div class=" d-grid grid-rows-2 grid-flow-col gap-3">
                                 <div class="row-span-2 row-span-md-1">
                                    <img src="../assets/images/page-img/p2.jpg" alt="post-image"
                                       class="img-fluid rounded w-100">
                                 </div>
                                 <div class="row-span-1">
                                    <img src="../assets/images/page-img/p1.jpg" alt="post-image"
                                       class="img-fluid rounded w-100">
                                 </div>
                                 <div class="row-span-1 ">
                                    <img src="../assets/images/page-img/p3.jpg" alt="post-image"
                                       class="img-fluid rounded w-100">
                                 </div>
                              </div>
                           </div>
                           <div class="comment-area mt-3">
                              <div class="d-flex justify-content-between align-items-center flex-wrap">
                                 <div class="like-block position-relative d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                       <div class="like-data">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                             </span>
                                             <div class="dropdown-menu py-2">
                                                <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Like"><img
                                                      src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Love"><img
                                                      src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Happy"><img
                                                      src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="HaHa"><img
                                                      src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Think"><img
                                                      src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Sade"><img
                                                      src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Lovely"><img
                                                      src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="total-like-block ms-2 me-3">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                             </span>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="total-comment-block">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                             aria-expanded="false" role="button">
                                             20 Comment
                                          </span>
                                          <div class="dropdown-menu">
                                             <a class="dropdown-item" href="#">Max Emum</a>
                                             <a class="dropdown-item" href="#">Bill Yerds</a>
                                             <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                             <a class="dropdown-item" href="#">Tara Misu</a>
                                             <a class="dropdown-item" href="#">Midge Itz</a>
                                             <a class="dropdown-item" href="#">Sal Vidge</a>
                                             <a class="dropdown-item" href="#">Other</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                    <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                       aria-controls="share-btn"><i class="ri-share-line"></i>
                                       <span class="ms-1">99 Share</span></a>
                                 </div>
                              </div>
                              <hr>
                              <ul class="post-comments list-inline p-0 m-0">
                                 <li class="mb-2">
                                    <div class="d-flex">
                                       <div class="user-img">
                                          <img src="../assets/images/user/02.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Monty Carlo</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="d-flex">
                                       <div class="user-img">
                                          <img src="../assets/images/user/03.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Paul Molive</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                              <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                 <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                 <div class="comment-attagement d-flex">
                                    <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="col-sm-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                           <div class="user-post-data">
                              <div class="d-flex justify-content-between">
                                 <div class="me-3">
                                    <img class="rounded-circle img-fluid" src="../assets/images/user/03.jpg" alt="">
                                 </div>
                                 <div class="w-100">
                                    <div class="d-flex  justify-content-between">
                                       <div class="">
                                          <h5 class="mb-0 d-inline-block">Barb Ackue</h5>
                                          <span class="mb-0 d-inline-block">Added New Image in a Post</span>
                                          <p class="mb-0 text-primary">1 hour ago</p>
                                       </div>
                                       <div class="card-post-toolbar">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" id="postdata-5" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                             </span>
                                             <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-save-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Save Post</h6>
                                                         <p class="mb-0">Add this to your saved items</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-close-circle-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Hide Post</h6>
                                                         <p class="mb-0">See fewer posts like this.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-user-unfollow-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Unfollow User</h6>
                                                         <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-notification-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Notifications</h6>
                                                         <p class="mb-0">Turn on notifications for this post</p>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-3">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                 commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac
                                 massa sed rhoncus</p>
                           </div>
                           <div class="user-post">
                              <a href="javascript:void();"><img src="../assets/images/page-img/p4.jpg" alt="post-image"
                                    class="img-fluid rounded w-100"></a>
                           </div>
                           <div class="comment-area mt-3">
                              <div class="d-flex justify-content-between align-items-center flex-wrap">
                                 <div class="like-block position-relative d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                       <div class="like-data">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                             </span>
                                             <div class="dropdown-menu py-2">
                                                <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Like"><img
                                                      src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Love"><img
                                                      src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Happy"><img
                                                      src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="HaHa"><img
                                                      src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Think"><img
                                                      src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Sade"><img
                                                      src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Lovely"><img
                                                      src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="total-like-block ms-2 me-3">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                             </span>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="total-comment-block">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                             aria-expanded="false" role="button">
                                             20 Comment
                                          </span>
                                          <div class="dropdown-menu">
                                             <a class="dropdown-item" href="#">Max Emum</a>
                                             <a class="dropdown-item" href="#">Bill Yerds</a>
                                             <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                             <a class="dropdown-item" href="#">Tara Misu</a>
                                             <a class="dropdown-item" href="#">Midge Itz</a>
                                             <a class="dropdown-item" href="#">Sal Vidge</a>
                                             <a class="dropdown-item" href="#">Other</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                    <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                       aria-controls="share-btn"><i class="ri-share-line"></i>
                                       <span class="ms-1">99 Share</span></a>
                                 </div>
                              </div>
                              <hr>
                              <ul class="post-comments list-inline p-0 m-0">
                                 <li class="mb-2">
                                    <div class="d-flex ">
                                       <div class="user-img">
                                          <img src="../assets/images/user/02.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Monty Carlo</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="d-flex ">
                                       <div class="user-img">
                                          <img src="../assets/images/user/03.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Paul Molive</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                              <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                 <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                 <div class="comment-attagement d-flex">
                                    <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div> --> 
                  <div class="col-sm-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                           <div class="user-post-data">
                              <div class="d-flex justify-content-between">
                                 <div class="me-3">
                                    <img class="rounded-circle img-fluid" src="../assets/images/user/04.jpg" alt="">
                                 </div>
                                 <div class="w-100">
                                    <div class=" d-flex  justify-content-between">
                                       <div class="">
                                          <h5 class="mb-0 d-inline-block">Ira Membrit</h5>
                                          <p class="mb-0 d-inline-block">Update her Status</p>
                                          <p class="mb-0 text-primary">6 hour ago</p>
                                       </div>
                                       <div class="card-post-toolbar">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                             </span>
                                             <div class="dropdown-menu m-0 p-0">
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-save-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Save Post</h6>
                                                         <p class="mb-0">Add this to your saved items</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-close-circle-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Hide Post</h6>
                                                         <p class="mb-0">See fewer posts like this.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-user-unfollow-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Unfollow User</h6>
                                                         <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-notification-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Notifications</h6>
                                                         <p class="mb-0">Turn on notifications for this post</p>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-3">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                 commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac
                                 massa sed rhoncus</p>
                           </div>
                           <div class="comment-area mt-3">
                              <div class="d-flex justify-content-between align-items-center flex-wrap">
                                 <div class="like-block position-relative d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                       <div class="like-data">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                             </span>
                                             <div class="dropdown-menu py-2">
                                                <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Like"><img
                                                      src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Love"><img
                                                      src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Happy"><img
                                                      src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="HaHa"><img
                                                      src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Think"><img
                                                      src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Sade"><img
                                                      src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Lovely"><img
                                                      src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="total-like-block ms-2 me-3">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                             </span>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="total-comment-block">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                             aria-expanded="false" role="button">
                                             20 Comment
                                          </span>
                                          <div class="dropdown-menu">
                                             <a class="dropdown-item" href="#">Max Emum</a>
                                             <a class="dropdown-item" href="#">Bill Yerds</a>
                                             <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                             <a class="dropdown-item" href="#">Tara Misu</a>
                                             <a class="dropdown-item" href="#">Midge Itz</a>
                                             <a class="dropdown-item" href="#">Sal Vidge</a>
                                             <a class="dropdown-item" href="#">Other</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                    <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                       aria-controls="share-btn"><i class="ri-share-line"></i>
                                       <span class="ms-1">99 Share</span></a>
                                 </div>
                              </div>
                              <hr>
                              <ul class="post-comments list-inline p-0 m-0">
                                 <li class="mb-2">
                                    <div class="d-flex">
                                       <div class="user-img">
                                          <img src="../assets/images/user/02.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Monty Carlo</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="d-flex ">
                                       <div class="user-img">
                                          <img src="../assets/images/user/03.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Paul Molive</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                              <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                 <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                 <div class="comment-attagement d-flex">
                                    <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                           <div class="post-item">
                              <div class="d-flex justify-content-between">
                                 <div class="me-3">
                                    <img class="rounded-circle img-fluid avatar-60" src="../assets/images/user/1.jpg"
                                       alt="">
                                 </div>
                                 <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                       <div class="">
                                          <h5 class="mb-0 d-inline-block">Bni Cyst</h5>
                                          <p class="ms-1 mb-0 d-inline-block">Changed Profile Picture</p>
                                          <p class="mb-0">3 day ago</p>
                                       </div>
                                       <div class="card-post-toolbar">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                             </span>
                                             <div class="dropdown-menu m-0 p-0">
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-save-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Save Post</h6>
                                                         <p class="mb-0">Add this to your saved items</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-close-circle-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Hide Post</h6>
                                                         <p class="mb-0">See fewer posts like this.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-user-unfollow-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Unfollow User</h6>
                                                         <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-notification-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Notifications</h6>
                                                         <p class="mb-0">Turn on notifications for this post</p>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="user-post text-center">
                              <a href="javascript:void();"><img src="../assets/images/page-img/p5.jpg" alt="post-image"
                                    class="img-fluid rounded w-100 mt-3"></a>
                           </div>
                           <div class="comment-area mt-3">
                              <div class="d-flex justify-content-between align-items-center flex-wrap">
                                 <div class="like-block position-relative d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                       <div class="like-data">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                             </span>
                                             <div class="dropdown-menu py-2">
                                                <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Like"><img
                                                      src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Love"><img
                                                      src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Happy"><img
                                                      src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="HaHa"><img
                                                      src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Think"><img
                                                      src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Sade"><img
                                                      src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Lovely"><img
                                                      src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="total-like-block ms-2 me-3">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                             </span>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="total-comment-block">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                             aria-expanded="false" role="button">
                                             20 Comment
                                          </span>
                                          <div class="dropdown-menu">
                                             <a class="dropdown-item" href="#">Max Emum</a>
                                             <a class="dropdown-item" href="#">Bill Yerds</a>
                                             <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                             <a class="dropdown-item" href="#">Tara Misu</a>
                                             <a class="dropdown-item" href="#">Midge Itz</a>
                                             <a class="dropdown-item" href="#">Sal Vidge</a>
                                             <a class="dropdown-item" href="#">Other</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                    <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                       aria-controls="share-btn"><i class="ri-share-line"></i>
                                       <span class="ms-1">99 Share</span></a>
                                 </div>
                              </div>
                              <hr>
                              <ul class="post-comments list-inline p-0 m-0">
                                 <li class="mb-2">
                                    <div class="d-flex">
                                       <div class="user-img">
                                          <img src="../assets/images/user/02.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Monty Carlo</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="d-flex">
                                       <div class="user-img">
                                          <img src="../assets/images/user/03.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Paul Molive</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                              <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                 <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                 <div class="comment-attagement d-flex">
                                    <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                           <div class="user-post-data">
                              <div class="d-flex justify-content-between">
                                 <div class="me-3">
                                    <img class="rounded-circle img-fluid" src="../assets/images/user/02.jpg" alt="">
                                 </div>
                                 <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                       <div class="">
                                          <h5 class="mb-0 d-inline-block">Paige Turner</h5>
                                          <p class="mb-0 d-inline-block">Added New Video in his Timeline</p>
                                          <p class="mb-0 text-primary">1 day ago</p>
                                       </div>
                                       <div class="card-post-toolbar">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                             </span>
                                             <div class="dropdown-menu m-0 p-0">
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-save-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Save Post</h6>
                                                         <p class="mb-0">Add this to your saved items</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-close-circle-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Hide Post</h6>
                                                         <p class="mb-0">See fewer posts like this.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-user-unfollow-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Unfollow User</h6>
                                                         <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <i class="ri-notification-line h4"></i>
                                                      <div class="data ms-2">
                                                         <h6>Notifications</h6>
                                                         <p class="mb-0">Turn on notifications for this post</p>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-3">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                 commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac
                                 massa sed rhoncus</p>
                           </div>
                           <div class="user-post">
                              <div class="ratio ratio-16x9">
                                 <iframe src="https://www.youtube.com/embed/j_GsIanLxZk?rel=0" allowfullscreen></iframe>
                              </div>
                           </div>
                           <div class="comment-area mt-3">
                              <div class="d-flex justify-content-between align-items-center flex-wrap">
                                 <div class="like-block position-relative d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                       <div class="like-data">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                             </span>
                                             <div class="dropdown-menu py-2">
                                                <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Like"><img
                                                      src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Love"><img
                                                      src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Happy"><img
                                                      src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="HaHa"><img
                                                      src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Think"><img
                                                      src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Sade"><img
                                                      src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                   data-bs-placement="top" title="Lovely"><img
                                                      src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="total-like-block ms-2 me-3">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                             </span>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="total-comment-block">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                             aria-expanded="false" role="button">
                                             20 Comment
                                          </span>
                                          <div class="dropdown-menu">
                                             <a class="dropdown-item" href="#">Max Emum</a>
                                             <a class="dropdown-item" href="#">Bill Yerds</a>
                                             <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                             <a class="dropdown-item" href="#">Tara Misu</a>
                                             <a class="dropdown-item" href="#">Midge Itz</a>
                                             <a class="dropdown-item" href="#">Sal Vidge</a>
                                             <a class="dropdown-item" href="#">Other</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                    <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                       aria-controls="share-btn"><i class="ri-share-line"></i>
                                       <span class="ms-1">99 Share</span></a>
                                 </div>
                              </div>
                              <hr>
                              <ul class="post-comments list-inline p-0 m-0">
                                 <li class="mb-2">
                                    <div class="d-flex flex-wrap">
                                       <div class="user-img">
                                          <img src="../assets/images/user/02.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Monty Carlo</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="d-flex flex-wrap">
                                       <div class="user-img">
                                          <img src="../assets/images/user/03.jpg" alt="userimg"
                                             class="avatar-35 rounded-circle img-fluid">
                                       </div>
                                       <div class="comment-data-block ms-3">
                                          <h6>Paul Molive</h6>
                                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                          <div class="d-flex flex-wrap align-items-center comment-activity">
                                             <a href="javascript:void();">like</a>
                                             <a href="javascript:void();">reply</a>
                                             <a href="javascript:void();">translate</a>
                                             <span> 5 min </span>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                              <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                 <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                 <div class="comment-attagement d-flex">
                                    <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Stories</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <ul class="media-story list-inline m-0 p-0">
                           <li class="d-flex mb-3 align-items-center">
                              <i class="ri-add-line"></i>
                              <div class="stories-data ms-3">
                                 <h5>Creat Your Story</h5>
                                 <p class="mb-0">time to story</p>
                              </div>
                           </li>
                           <li class="d-flex mb-3 align-items-center active">
                              <img src="../assets/images/page-img/s2.jpg" alt="story-img"
                                 class="rounded-circle img-fluid">
                              <div class="stories-data ms-3">
                                 <h5>Anna Mull</h5>
                                 <p class="mb-0">1 hour ago</p>
                              </div>
                           </li>
                           <li class="d-flex mb-3 align-items-center">
                              <img src="../assets/images/page-img/s3.jpg" alt="story-img"
                                 class="rounded-circle img-fluid">
                              <div class="stories-data ms-3">
                                 <h5>Ira Membrit</h5>
                                 <p class="mb-0">4 hour ago</p>
                              </div>
                           </li>
                           <li class="d-flex align-items-center">
                              <img src="../assets/images/page-img/s1.jpg" alt="story-img"
                                 class="rounded-circle img-fluid">
                              <div class="stories-data ms-3">
                                 <h5>Bob Frapples</h5>
                                 <p class="mb-0">9 hour ago</p>
                              </div>
                           </li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block mt-3">See All</a>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Events</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                           <div class="dropdown">
                              <div class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                 aria-expanded="false" role="button">
                                 <i class="ri-more-fill h4"></i>
                              </div>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                 style="">
                                 <a class="dropdown-item" href="#"><i class="ri-eye-fill me-2"></i>View</a>
                                 <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill me-2"></i>Delete</a>
                                 <a class="dropdown-item" href="#"><i class="ri-pencil-fill me-2"></i>Edit</a>
                                 <a class="dropdown-item" href="#"><i class="ri-printer-fill me-2"></i>Print</a>
                                 <a class="dropdown-item" href="#"><i
                                       class="ri-file-download-fill me-2"></i>Download</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <ul class="media-story list-inline m-0 p-0">
                           <li class="d-flex mb-4 align-items-center ">
                              <img src="../assets/images/page-img/s4.jpg" alt="story-img"
                                 class="rounded-circle img-fluid">
                              <div class="stories-data ms-3">
                                 <h5>Web Workshop</h5>
                                 <p class="mb-0">1 hour ago</p>
                              </div>
                           </li>
                           <li class="d-flex align-items-center">
                              <img src="../assets/images/page-img/s5.jpg" alt="story-img"
                                 class="rounded-circle img-fluid">
                              <div class="stories-data ms-3">
                                 <h5>Fun Events and Festivals</h5>
                                 <p class="mb-0">1 hour ago</p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Upcoming Birthday</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <ul class="media-story list-inline m-0 p-0">
                           <li class="d-flex mb-4 align-items-center">
                              <img src="../assets/images/user/01.jpg" alt="story-img" class="rounded-circle img-fluid">
                              <div class="stories-data ms-3">
                                 <h5>Anna Sthesia</h5>
                                 <p class="mb-0">Today</p>
                              </div>
                           </li>
                           <li class="d-flex align-items-center">
                              <img src="../assets/images/user/02.jpg" alt="story-img" class="rounded-circle img-fluid">
                              <div class="stories-data ms-3">
                                 <h5>Paul Molive</h5>
                                 <p class="mb-0">Tomorrow</p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Suggested Pages</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                           <div class="dropdown">
                              <div class="dropdown-toggle" id="dropdownMenuButton01" data-bs-toggle="dropdown"
                                 aria-expanded="false" role="button">
                                 <i class="ri-more-fill h4"></i>
                              </div>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                 <a class="dropdown-item" href="#"><i class="ri-eye-fill me-2"></i>View</a>
                                 <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill me-2"></i>Delete</a>
                                 <a class="dropdown-item" href="#"><i class="ri-pencil-fill me-2"></i>Edit</a>
                                 <a class="dropdown-item" href="#"><i class="ri-printer-fill me-2"></i>Print</a>
                                 <a class="dropdown-item" href="#"><i
                                       class="ri-file-download-fill me-2"></i>Download</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <ul class="suggested-page-story m-0 p-0 list-inline">
                           <li class="mb-3">
                              <div class="d-flex align-items-center mb-3">
                                 <img src="../assets/images/page-img/42.png" alt="story-img"
                                    class="rounded-circle img-fluid avatar-50">
                                 <div class="stories-data ms-3">
                                    <h5>Iqonic Studio</h5>
                                    <p class="mb-0">Lorem Ipsum</p>
                                 </div>
                              </div>
                              <img src="../assets/images/small/img-1.jpg" class="img-fluid rounded"
                                 alt="Responsive image">
                              <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line me-2"></i>
                                    Like Page</a></div>
                           </li>
                           <li class="">
                              <div class="d-flex align-items-center mb-3">
                                 <img src="../assets/images/page-img/42.png" alt="story-img"
                                    class="rounded-circle img-fluid avatar-50">
                                 <div class="stories-data ms-3">
                                    <h5>Cakes & Bakes </h5>
                                    <p class="mb-0">Lorem Ipsum</p>
                                 </div>
                              </div>
                              <img src="../assets/images/small/img-2.jpg" class="img-fluid rounded"
                                 alt="Responsive image">
                              <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line me-2"></i>
                                    Like Page</a></div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 text-center">
                  <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper End-->
   <footer class="iq-footer bg-white">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
               </ul>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
               Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
            </div>
         </div>
      </div>
   </footer> <!-- Backend Bundle JavaScript -->
   <script src="../assets/js/libs.min.js"></script>
   <!-- slider JavaScript -->
   <script src="../assets/js/slider.js"></script>
   <!-- masonry JavaScript -->
   <script src="../assets/js/masonry.pkgd.min.js"></script>
   <!-- SweetAlert JavaScript -->
   <script src="../assets/js/enchanter.js"></script>
   <!-- SweetAlert JavaScript -->
   <script src="../assets/js/sweetalert.js"></script>
   <!-- app JavaScript -->
   <script src="../assets/js/charts/weather-chart.js"></script>
   <script src="../assets/js/app.js"></script>
   <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
   <script src="../assets/js/lottie.js"></script>


   <!-- offcanvas start -->

   <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
      aria-labelledby="shareBottomLabel">
      <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body small">
         <div class="d-flex flex-wrap align-items-center">
            <div class="text-center me-3 mb-3">
               <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="">
               <h6>Facebook</h6>
            </div>
            <div class="text-center me-3 mb-3">
               <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="">
               <h6>Twitter</h6>
            </div>
            <div class="text-center me-3 mb-3">
               <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="">
               <h6>Instagram</h6>
            </div>
            <div class="text-center me-3 mb-3">
               <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="">
               <h6>Google Plus</h6>
            </div>
            <div class="text-center me-3 mb-3">
               <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="">
               <h6>In</h6>
            </div>
            <div class="text-center me-3 mb-3">
               <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="">
               <h6>YouTube</h6>
            </div>
         </div>
      </div>
   </div>
</body>

</html>