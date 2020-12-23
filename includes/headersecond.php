<header>
          <nav id="nav-part" class="navbar header-nav custom_nav navbar-expand-md other-page">
            <div class="container p-0">
                <a class="navbar-brand">Travel & Tourism</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link <?php echo ($page == "http://localhost/travel/index.php" ? "active" : "")?>" href="http://localhost/travel/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/travel/view/bookticket.php">Book Tickets</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/travel/view/accomodation.php">Accomodations</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($page == "http://localhost/travel/view/tourpackage.php" ? "active" : "")?>" href="http://localhost/travel/view/tourpackage.php">Tour Packages</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($page == "http://localhost/travel/view/aboutus.php" ? "active" : "")?>" href="http://localhost/travel/view/aboutus.php">About Us</a></li>


                        <?php
                        if (strlen($_SESSION['detsuid']==0)) { ?>
                      </ul>
                          <ul class="login_menu navbar-right nav-sign">
                            <li class="login"><a href="http://localhost/travel/view/register.php" class="btn-4">Sign up /</a><a href="http://localhost/travel/view/login.php" style="margin-left:0!important;" class="btn-4"> login</a></li>
                          </ul>

                        <?php  } else{ ?>

                          <li class="nav-item"><a class="nav-link" href="http://localhost/travel/controller/logout.php">Logout</a></li>
                      </ul>

                        <?php } ?>

                </div>
            </div>
          </nav>
      </header>
