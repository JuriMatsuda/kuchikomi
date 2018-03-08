<?php
include "../app/config/database.php";
include "../public/views/header.php";
include "../app/functions/product.php";
?>

<?php
fetch_products($mysqli);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
    <title>Restaurant Elegant - Pingendo template</title>
    <meta name="description" content="Free Bootstrap 4 Pingendo Elegant template for restaurant and food">
    <meta name="keywords" content="Pingendo restaurant food elegant free template bootstrap 4">
    <!-- CSS dependencies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
    <link rel="stylesheet" href="../public/theme.css" type="text/css">
    <!-- Script: Make my navbar transparent when the document is scrolled to top -->
    <script src="https://d33wubrfki0l68.cloudfront.net/js/12e3ca424c3c55e3d306e6423ed9e81f260dd657/aquamarine/js/navbar-ontop.js"></script>
    <!-- Script: Animated entrance -->
    <script src="https://d33wubrfki0l68.cloudfront.net/js/fe6311b3c294cba469a3939f21603640522c41e5/aquamarine/js/animate-in.js"></script>
</head>
<body>
<!-- Navbar -->
<!--<nav class="navbar-expand-md navbar-dark bg-dark navbar fixed-top">-->
<!--    <div class="container">-->
<!--        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"-->
<!--                data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false"-->
<!--                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>-->
<!--        <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">-->
<!--            <ul class="navbar-nav">-->
<!--                <li class="nav-item mx-3">-->
<!--                    <a class="nav-link text-light" href="#"><b>PINGENDO</b></a>-->
<!--                </li>-->
<!--                <li class="nav-item mx-2">-->
<!--                    <a class="nav-link" href="#menu"><b>MENU</b></a>-->
<!--                </li>-->
<!--                <li class="nav-item mx-2">-->
<!--                    <a class="nav-link" href="#venue"><b>VENUE</b></a>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <a class="btn navbar-btn btn-secondary mx-2" href="#book"><b>BOOK</b></a>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

<!-- Cover -->
<div class="align-items-center d-flex photo-overlay py-5 cover"
     style="background-image: url(../public/img/lgf01a201410020600.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 align-self-center text-lg-left text-center">
                <h1 class="mb-0 mt-4 display-3">CODE BASE</h1>
                <p class="mb-5 lead">Nchaaa</p>
            </div>
            <div class="col-lg-5 p-2">
                <form class="p-4 bg-dark-opaque" method="post" action="https://formspree.io/">
                    <h4 class="mb-4 text-center">Sign Up</h4>
                    <div class="form-group"><label>Name</label>
                        <input type="text" class="form-control" placeholder="Your Name"></div>
                    <div class="form-group"><label>e-mail</label>
                        <input type="text" class="form-control" placeholder="xxx@ncha.hoyo"></div>
                    <div class="form-group"><label>Password</label>
                        <input type="text" class="form-control" placeholder="nchaaaaaaaa"></div>
                    <div class="form-group"><label>Confirm Password</label>
                        <input type="text" class="form-control" placeholder="nchaaaaaaaa"></div>
                    <button type="submit" class="btn mt-4 btn-block btn-outline-primary p-2"><b>Register</b>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Intro -->


<!-- Gallery -->


<!-- Menu -->


<!-- Carousel reviews -->


<!-- Carousel venue -->


<!-- Events -->


<!-- Dark opaque section -->
<div class="py-5 photo-overlay" id="book"
     style="background-image: url(&quot;assets/restaurant/makereservation_dark.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-lg-6 p-3 animate-in-down">
                <form class="p-4 bg-dark-opaque" method="post" action="https://formspree.io/">
                    <h4 class="mb-4 text-center">Make a reservation</h4>
                    <p class="my-4">Book your table in advance. No cue, no waiting lists. Pre-order your favourite dish
                        or suggest new recipes to our chefs. We will do all our best for complying to your requests</p>
                    <div class="form-group"><label>Name</label>
                        <input class="form-control" placeholder="Type here"></div>
                    <div class="form-group"><label>Time</label>
                        <input type="time" class="form-control" placeholder="13"></div>
                    <div class="form-group"><label>People</label>
                        <input type="number" class="form-control" placeholder="2"></div>
                    <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-primary"><b>Reserve a table</b>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-12 mt-3">
                <p class="text-center text-muted">© Copyright 2018 Nchaaa - All rights reserved. </p>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<!-- Script: Smooth scrolling between anchors in the same page -->
<script src="https://d33wubrfki0l68.cloudfront.net/js/26a3094ac9c5e8d045f102e8929a6db58b3bbd83/aquamarine/js/smooth-scroll.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-29443235-15"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-29443235-15');
</script><!-- Hotjar Tracking Code for https://templates.pingendo.com -->
<script>
    (function (h, o, t, j, a, r) {
        h.hj = h.hj || function () {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {hjid: 713084, hjsv: 6};
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>
</body>
</html>