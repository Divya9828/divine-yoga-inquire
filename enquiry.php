<?php
include "navbar.php";
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>YOGA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="./bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css-int/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="asset\Divineyoga.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/contact.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" id="enquiryPageHeading">
                <h1 data-aos="fade-up" data-aos-delay="100">Enquiry Form</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                <form action="" method="POST">

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="wp_number" id="inputEmail3" placeholder="Whatsapp Number" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact_number" id="inputEmail3" placeholder="Contact Number" required />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="mail" id="inputEmail3" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="country" id="inputEmail3" placeholder="Country that you are residing currently" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="beginner" id="inputEmail3" placeholder="Are you a beginner in yoga?" required />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">What online classes are you interested in?
                        </label>
                        <select class="form-control" name="class" id="inputEmail3" required>
                            <option value="Yoga for Women">Yoga for Women</option>
                            <option value="Yoga for Men">Yoga for Men</option>
                            <option value="Pregnancy Yoga">Pregnancy Yoga</option>
                            <option value="Meditation sessions">Meditation sessions</option>
                            <option value="Europe Timezone Sessions">
                                Europe Timezone Sessions
                            </option>
                            <option value="Detox diet">Detox diet</option>
                            <option value="Yoga with Diet">Yoga with Diet</option>
                            <option value="Help me to choose">Help me to choose</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="health_issue" id="inputEmail3" placeholder="Do you have any health issues ?" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="time" id="inputEmail3" placeholder="Your available time for call ?" required />
                    </div>
                    <center>
                        <button type="submit" name="btn" id="foem_btn" class="btn btn-default">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>

<?php
// $con = mysqli_connect("localhost","root","","yoga");
if (isset($_POST['btn'])) {


    $mail = $_POST['mail'];
    $name = $_POST['name'];
    $wp_number = $_POST['wp_number'];
    $contact_number = $_POST['contact_number'];
    $country = $_POST['country'];
    $beginner = $_POST['beginner'];
    $class = $_POST['class'];
    $health_issue = $_POST['health_issue'];
    $time = $_POST['time'];

    $insert = "insert into client (mail,name,wp_number,contact_number,country,beginner,class,health_issue,time)
                 values('$mail','$name','$wp_number','$contact_number','$country','$beginner','$class','$health_issue','$time')";

    if (mail($mail, "Divine yoga", "Name:" . $name . ",<br>" . "\r\n" . "E-Mail:" . $mail . ",<br>" . "\r\n" . "Whatsapp Number :" . $wp_number . ",<br>" . "\r\n" . "Contact Number 
      :" . $contact_number . ",<br>" . "\r\n" . "Country:" . $country . ",<br>" . "\r\n" . "beginner:" . $beginner . ",<br>" . "\r\n" . "class:" . $class . ",<br>" . "\r\n" . "health_issue:" . $health_issue . ",<br>" . "\r\n" . "time:" . $time, $headers)) {
        echo "<script>alert('Registerd Successfully')</script>";
    } else {
        echo "<script>alert('Registration Failed')</script>";
    }
}

?>