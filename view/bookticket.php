<?php
session_start();
include('../models/dbconnection.php');
include('../includes/files.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Travel & Tourism - book tickets page</title>
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
                    <h2>Book Tickets</h2>
                    <div class="inner-link">
                        <span><a href="http://localhost/travel/index.php">home</a></span>
                        <span>/</span>
                        <span><a href="http://localhost/travel/view/bookticket.php">Book Tickets</a></span>
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
                            <img style="height:45vh;" src="../assets/images/bus.jpg" class="img-fluid person" alt="destination">
                            <div class="overlay">
                                <div class="overlay_shape">
                                    <a href="http://localhost/travel/controller/busticket.php" class="view-all">Book Now<i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="travel-text">
                            <h3>Bus Ticket</h3>
                            <p style="font-size:14px!important;">Fare varies from destination to destination</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="travel-place">
                        <div class="work-image">
                            <img style="height:45vh;" src="../assets/images/train.jpg" class="img-fluid person" alt="destination">
                            <div class="overlay">
                              <div class="overlay_shape">
                                  <a href="http://localhost/travel/controller/trainticket.php" class="view-all">Book Now<i class="fas fa-long-arrow-alt-right"></i></a>
                              </div>
                            </div>
                        </div>
                        <div class="travel-text">
                          <h3>Train Ticket</h3>
                          <p style="font-size:14px!important;">Fare varies from destination to destination</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="travel-place">
                        <div class="work-image">
                            <img style="height:45vh;" src="../assets/images/plane.jpg" class="img-fluid person" alt="destination">
                            <div class="overlay">
                              <div class="overlay_shape">
                                  <a href="http://localhost/travel/controller/planeticket.php" class="view-all">Book Now<i class="fas fa-long-arrow-alt-right"></i></a>
                              </div>
                            </div>
                        </div>
                        <div class="travel-text">
                          <h3>Plane Ticket</h3>
                          <p style="font-size:14px!important;">Fare varies from destination to destination</p>
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
