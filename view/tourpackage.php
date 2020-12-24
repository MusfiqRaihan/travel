<?php
session_start();
include('../models/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Travel & Tourism - tour package page</title>
    <link rel="stylesheet" href="../assets/font/flaticon.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/dd.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <link href="../assets/css/jquery.fancybox.min.html" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-1.css">
    <link rel="stylesheet" href="../assets/css/responsive-1.css">
</head>

<body>

    <div id="preloader">
        <div id="loading-center">
            <img src="../assets/images/white.gif" alt="">
        </div>
    </div>

     <a href="#" id="back-top-btn">
       <i class="fas fa-angle-double-up"></i>
     </a>

    <?php include '../includes/headersecond.php' ?>


   <section id="inner_banner" class="inner_banner">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                <div class="inner-text">
                    <h2>Tour Packages</h2>
                    <div class="inner-link">
                        <span><a href="http://localhost/travel/index.php">home</a></span>
                        <span>/</span>
                        <span><a href="http://localhost/travel/view/tourpackage.php">Tour Packages</a></span>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>


    <section id="tour-package" class="tour tour-other section">
            <div class="container">

                <div class="row">
                  <div class="col-md-4">
                    <div class="travel-place">
                        <div class="work-image">
                            <img src="../assets/images/tour-package-4.jpg" class="img-fluid person" alt="destination">
                            <div class="overlay">
                                <div class="overlay_shape">
                                    <a href="http://localhost/travel/controller/smallpackage.php" class="view-all">Book Now<i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="travel-text">
                            <h3>Small Package</h3>
                            <p>for 4 Days <span>|</span> ৳ ৮০০০</p>
                            <p>include bus ticket and hotel rent</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="travel-place">
                        <div class="work-image">
                            <img src="../assets/images/tour-package-5.jpg" class="img-fluid person" alt="destination">
                            <div class="overlay">
                              <div class="overlay_shape">
                                  <a href="http://localhost/travel/controller/mediumpackage.php" class="view-all">Book Now<i class="fas fa-long-arrow-alt-right"></i></a>
                              </div>
                            </div>
                        </div>
                        <div class="travel-text">
                            <h3>Medium package</h3>
                            <p>for 4 Days <span>|</span> ৳ ১২,০০০</p>
                            <p>include AC bus ticket and cottage rent</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="travel-place">
                        <div class="work-image">
                            <img src="../assets/images/tour-package-6.jpg" class="img-fluid person" alt="destination">
                            <div class="overlay">
                              <div class="overlay_shape">
                                  <a href="http://localhost/travel/controller/largepackage.php" class="view-all">Book Now<i class="fas fa-long-arrow-alt-right"></i></a>
                              </div>
                            </div>
                        </div>
                        <div class="travel-text">
                            <h3>Large package</h3>
                            <p>for 5 Days <span>|</span> ৳ ২৫,০০০</p>
                            <p>include AC bus and fivestar hotel rent</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <?php include '../includes/footer.php'; ?>


        <script src="../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/waypoints.min.html"></script>
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <script src="../assets/js/jquery-ui.min.js"></script>
        <script src="../assets/js/jquery.dd.min.js"></script>
        <script src="../assets/js/mixitup.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/SmoothScroll.js"></script>
        <script src="../assets/js/script.js"></script>

    </body>

    </html>
