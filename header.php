<?php $actual_link = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  user-scalable=no" />
    <meta name="author" content="photofinder.com" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title><?php echo $title; ?></title>
    <link rel="icon" href="public/images/png/favicon.png" type="image/x-icon" sizes="16x16">
    <link rel="shortcut icon" href="public/images/icon/favicon.ico" type="image/x-icon">
    <link href="public/css/app.css" rel="stylesheet" />
    <link href="assets/plugins/slick/slick.css" rel="stylesheet" />
    <script src="assets/js/font-awesome-5.js"></script>
    <link href="assets/plugins/aos/aos.css" rel="stylesheet" />
    <link href="assets/plugins/datepicker/bootstrap-datepicker.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<!-- Preloader -->
<section>
    <div id="preloader">
        <div id="site-preloader" class="site-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="o" class="letters-loading">
                        o
                    </span>
                    <span data-text-preloader="a" class="letters-loading">
                        a
                    </span>
                    <span data-text-preloader="d" class="letters-loading">
                        d
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="n" class="letters-loading">
                        n
                    </span>
                    <span data-text-preloader="g" class="letters-loading">
                        g
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                </div>
            </div>	
        </div>
    </div>
</section>

<header class="photofinder-navbar">
    <nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container-lg">
            <a class="navbar-brand" href="index.php">
                <img src="./public/images/png/logo.png" alt="PhotoFinder Logo" width="200" title="PhotoFinder Logo" />
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ham-icon text-white"><i class="fas fa-bars"></i></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarResponsive" style="">
                <ul class="navbar-nav font-weight-light">
                    <li <?php if($actual_link=="index.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link" href="index.php">The Problem</a>
                    </li>
                    <li <?php if($actual_link=="index.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link ml-lg-4" href="index.php">The Solution</a>
                    </li>
                    <li <?php if($actual_link=="event.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link ml-lg-4" href="event.php">Demo Event</a>
                    </li>
                    <li <?php if($actual_link=="index.php"){echo "class= 'active'";}else{echo "";} ?>>
                        <a class="nav-link ml-lg-4" href="index.php">Contact Us</a>
                    </li>
                    <li class="d-block d-lg-none text-center">
                        <a href="event.php" class="btn btn-secondary rounded-lg mt-4 mt-lg-0 px-3 py-2 font-min">Try Product Demo</a>
                    </li>
                </ul>
            </div>

            <div class="mt-3 mt-lg-0 d-none d-lg-block">
                <!-- Demo Button -->
                <div class="align-self-center">
                    <a href="event.php" class="btn btn-secondary rounded-lg mt-4 mt-lg-0 font-weight-light">Try Product Demo</a>
                </div>
            </div>

        </div>
    </nav>
</header>