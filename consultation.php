<?php
include "navbar.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>consultation</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="./bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/CONSULTATION.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    #head-title {
        height: 140px;
    }

    .main-img {
        height: 60%;
        width: 60%;
    }

    @media (max-width:567px) {
        .main-img {
            height: 100%;
            width: 65%;
        }

        #head-title {
            height: 120px;
        }
    }
</style>

<body id="body">
    <!-- head section start -->
    <div class="container-fluid">
        <div class="row" style="margin-top: 12%;">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12">
                <img src="./asset/photo-1544006659-f0b21884ce1d.jfif" data-aos="fade-up" data-aos-delay="100" alt="" style="border-radius:5px ;" class="col-lg-offset-2 col-xs-offset-2 main-img">
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                    <div id="head-title" data-aos="fade-up" data-aos-delay="100">
                        <h3>consultation</h3>
                        <h5><a href="index.php">Home</a> / <a href="CONSULTATION.php">consultation</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid">
        <div class="row" style="margin-top: 8%;">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12">
                <img src="./asset/photo-1544006659-f0b21884ce1d.jfif" data-aos="fade-up" data-aos-delay="100" alt="" height="80%" width="100%" style="border-radius:10px;">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <div id="head-title" data-aos="fade-up" data-aos-delay="100">
                    <h3>consultation</h3>
                    <h5><a href="index.php">Home</a> / <a href="CONSULTATION.php"> consultation </a></h4>
                </div>
            </div>
        </div>
    </div> -->
        <!-- header section end -->
        <div class="container-fluid">
            <div class="row" style="margin-top: 2%;">
                <div class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1">
                    <!-- <img src="./asset/photo-1544006659-f0b21884ce1d.jfif" height="600" width="600" class="img-responsive" style="border-radius:30px;"><br> -->
                    <p class="content" style=" font-size: 15px;">It’ll be a one on one discussion through a voice call.</p>
                    <p title="content">Note:</p>
                    <p title="content">

                    </p>
                    <ol start="1">
                        <li>1.Only one issue per person will be addressed during the call.</li>
                        <li>2.Queries related to our Yoga / diet programs and other doubts can be clarified.</li>
                        <li>3.No home remedies will be shared in call.</li>
                    </ol>
                </div>

                <div class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1">
                    <p id="title" data-aos="fade-up" data-aos-delay="100"><strong style="color:#eb3656;">Book an appointment</strong></p>
                    <button type="button" class="btn btn-floating" id="whatsapp" style="background-color: #EB3656;">
      <a href="https://wa.me/message/EXUIE3WA7HEPN1" target="_blank">
        <!-- <img src="./images/whatsapp_icon.png" alt="" height="100%" width="100%"> -->
        <i class="fa-brands fa-whatsapp" style="color:#fff"></i> <span style="color:#fff">Inquire Now</span>
      </a>
    </button>
                    <p title="content" style="font-size:14px; margin-top:10px">We will discuss the time with you once you have registered,
                        and then set up a call.</p>

                </div>


            </div>
        </div>
        <?php
        include "footer.php";
        ?>
        <script src="./bootstrap-3.4.1-dist/js/bootstrap.js"></script>
</body>

</html>