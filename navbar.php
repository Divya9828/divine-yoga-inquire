<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

    <!--====== Title ======-->
    <title>DivineYogaforWomen</title>

    <!--====== Favicon Icon ======-->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png"> -->

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css-int/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css-int/font-awesome.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href=" css-int/LineIcons.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css-int/animate.css">

    <!--====== Aos css ======-->
    <link rel="stylesheet" href="css-int/aos.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css-int/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="css-int/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="css-int/style.css">

    <style>
        body {
            overflow-x: hidden;
            font-family: 'Montserrat';
        }

        .navbar .navbar-brand img {
            max-width: 200px;
            display: flex;
            justify-content: center;
        }

        .navbar .navbar-nav .nav-item a {
            color: #1d1d23d4;
            font-family: 'Hind', sans-serif;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 600;
            -webkit-transition: all 0.4s ease-out 0s;
            -moz-transition: all 0.4s ease-out 0s;
            -ms-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
        }

        .navbar .navbar-nav .nav-item.active a,
        .navbar .navbar-nav .nav-item:hover a {
            color: #EB3656;
            text-decoration: none;
        }

        .menuTitles {
            width: 800px;
        }

        .btn {
            outline: none;
        }

        /* dropdown */
        .btn-default:active:hover,
        .btn-default.active:hover,
        .open>.dropdown-toggle.btn-default:hover,
        .btn-default:active:focus,
        .btn-default.active:focus,
        .open>.dropdown-toggle.btn-default:focus,
        .btn-default:active.focus,
        .btn-default.active.focus,
        .open>.dropdown-toggle.btn-default.focus {
            color: #EB3656;
            background-color: #fff;
            border-color: #fff;
        }

        .our-dropdown {
            background-color: #fff;
            outline: #fff;
        }

        .dropdown-toggle:hover {
            background-color: #fff;
            color: #eb3656;
        }

        #drop {
            color: #1d1d23d4;
            font-family: 'Hind', sans-serif;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.4s ease-out 0s;
        }

        #drop:hover {
            color: #eb3656;
        }

        .navigation-bar-mobile {
            display: none;
        }

        @media (max-width: 576px) {
            .navigation-bar {
                display: none;
            }

            .navigation-bar-mobile {
                display: block;
            }

            #drop {
                padding-left: 0;
            }

            .navbar-toggler {
                margin-top: 8%;
            }
        }
    </style>
</head>

<body>
    <div class="navigation-bar">
        <div class="container">
            <div class="row">
                <div>
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="./index.php">
                            <img src="asset/Divineyoga.png" alt="divine yoga logo" height="auto" width="100%">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse menuList" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav d-flex align-items-center justify-content-center pt-4 menuTitles">
                                <li class="nav-item">
                                    <a class="page-scroll" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown page-scroll">
                                        <button class="btn btn-default our-dropdown dropdown-toggle" type="button" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color: transparent; border: none; outline: none;">
                                            SERVICES
                                        </button>
                                        <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
                                            <li><a href="./group-yoga.php">Group Yoga</a></li>
                                            <li><a href="./pregnancy-yoga.php">Pregnancy yoga</a></li>
                                            <li><a href="./personal-sessions.php">Personal Session</a></li>
                                            <li><a href="./detox-diet.php">Detox Diet</a></li>
                                            <li><a href="./yoga-teacher-training.php">Yoga Teacher Training</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="consultation.php">Consultation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="enquiry.php">Enquiry</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown page-scroll">
                                        <button class="btn btn-default our-dropdown dropdown-toggle" type="button" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color: transparent; border: none; outline: none;">
                                            ABOUT
                                            <span class=""></span>
                                        </button>
                                        <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
                                            <li class="nav-item">
                                                <a class="page-scroll" href="about.php">ABOUT</a>
                                            </li>
                                            <li><a href="demo1.php">ADMIN</a></li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile view -->
    <div class="navigation-bar-mobile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <img src="asset/Divineyoga.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown page-scroll">
                                        <button class="btn btn-default our-dropdown dropdown-toggle" type="button" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color: transparent; border: none; outline: none;">
                                            SERVICES
                                            <span class=""></span>
                                        </button>
                                        <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
                                            <li><a href="./group-yoga.php">Group Yoga</a></li>
                                            <li><a href="./pregnancy-yoga.php">Pregnancy yoga</a></li>
                                            <li><a href="./personal-sessions.php">Personal Session</a></li>
                                            <li><a href="./detox-diet.php">Detox Diet</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="our-product.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="consultation.php">Consultation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown page-scroll">
                                        <button class="btn btn-default our-dropdown dropdown-toggle" type="button" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color: transparent; border: none; outline: none;">
                                            ABOUT
                                            <span class=""></span>
                                        </button>
                                        <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
                                            <li class="nav-item">
                                                <a class="page-scroll" href="about.php">ABOUT</a>
                                            </li>
                                            <li><a href="demo1.php">ADMIN</a></li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!--====== jquery js ======-->
    <script src="js-int/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js-int/vendor/jquery-1.12.4.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="js-int/bootstrap.min.js"></script>

    <!--====== WOW js ======-->
    <script src="js-int/wow.min.js"></script>

    <!--====== Slick js ======-->
    <script src="js-int/slick.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="js-int/scrolling-nav.js"></script>
    <script src="js-int/jquery.easing.min.js"></script>

    <!--====== Aos js ======-->
    <script src="js-int/aos.js"></script>


    <!--====== Main js ======-->
    <script src="js-int/main.js"></script>
</body>

</html>