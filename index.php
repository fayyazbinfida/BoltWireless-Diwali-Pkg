<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Diwali - Offer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0 justify-content-between">
                <a href="index.html" class="nav-item nav-link active"><img src="img/telus.png" class="logo_ " width="200px" alt="logo"></a>
                <a href="#contact" class="btn btn-primary btn_offer rounded-pill py-2 px-3">Get A Quote</a>

            </nav>
        </div>
    </div>
    <!-- Navbar End -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $provider = $_POST["provider"];
    $contactMethod = $_POST["contactMethod"];
    $message = $_POST["message"];

    
    // Email subject
    $subject = "Diwali Offer Form Submission";


    $messageBody = <<<HTML
    <!doctype html>
    <html lang="en-US">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Contact Form Submission</title>
        <meta name="description" content="Contact Form Submission Email">
    </head>
    <style>
        a:hover {
            text-decoration: underline !important;
        }
    </style>
    <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
        <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
            style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
            <tr>
                <td>
                    <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
                        align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="height:80px;">&nbsp;</td>
                        </tr>
                        <!-- Logo -->

                        <tr>
                            <td style="height:20px;">&nbsp;</td>
                        </tr>
                        <!-- Email Content -->
                        <tr>
                            <td>
                                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                    style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
                                    <tr>
                                        <td style="height:40px;">&nbsp;</td>
                                    </tr>
                                    <!-- Title -->
                                    <tr>
                                        <td style="padding:0 15px; text-align:center;">
                                            <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">Contact Form Submission</h1>
                                            <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece;
                                                width:100px;"></span>
                                        </td>
                                    </tr>
                                    <!-- Details Table -->
                                    <tr>
                                        <td>
                                            <table cellpadding="0" cellspacing="0" style="width: 100%; border: 1px solid #ededed">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                            Name:</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            $name</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                            Email:</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            $email</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                            Phone Number:</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            $number</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                            Current Provider:</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            $provider</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;  border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Preferred Contact Method:</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                            $contactMethod</td>
                                                    </tr>

                                                    <tr>
                                                        <td style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                            Message:</td>
                                                        <td style="padding: 10px; color: #455056;">$message</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:40px;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>
HTML;

  
$headers = "";
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers = "From:$email" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= "Reply-To: boltwirelessca@gmail.com" . "\r\n" .

$success = false;

if (mail("boltwirelessca@gmail.com", $subject, $messageBody, $headers) && mail("ebadtahiri@gmail.com", $subject, $messageBody, $headers)) {
    $success = true;
}



// JavaScript for the Sweet Alert
if ($success) {
    echo '<script>
        Swal.fire({
            title: "Emails Sent",
            text: "Emails have been successfully sent.",
            icon: "success",
        });
    </script>';
} else {
    echo '<script>
        Swal.fire({
            title: "Emails Not Sent",
            text: "There was an error sending the emails.",
            icon: "error",
        });
    </script>';
}
  
}
?>


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5 bg-primary py-5 bg_banner">
        <div class="row justify-content-center py-lg-5 mx-0">
            <div class="col-lg-11 text-start">
                <div class="row mx-0">
                    <div class="col-lg-7">
                        <p class="fs-4 text-white animated slideInRight mb-0">Diwali <strong>Offer</strong>
                        </p>
                        <h1 class="display-3 text-white mb-2 animated slideInRight">$40* <sub class="sub_title">Per
                                Month</sub>
                            <br>
                            <span class="pt-lg-0 pt-1 d-block">40 GB DATA</span>
                        </h1>
                        <h1 class="text-white mb-4 animated slideInRight">Unbeatable Savings for<br class="d-lg-block d-none">
                            a Joyous Diwali!
                        </h1>
                        <a href="#contact" class="btn btn-light btn-sm btn_offer fw-bold rounded-pill py-3 px-5 animated slideInRight">GET
                            A
                            OFFER</a>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center justify-content-center">
                        <!-- <img src="img/chirage.png" class="img-fluid" alt="image"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <section>
        <div class="container-xxl">
            <div class="container">
                <div class="row py-5 justify-content-center">
                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="img/about.png" class="img-fluid" alt="image">
                            </div>
                            <div class="col-lg-6">
                                <h1 class="text-primary mb-4 animated slideInRight">Unwrap Diwali Delights with Telus!🪔</sub>
                                </h1>
                                <p>Celebrate this Diwali with a fantastic offer that will light up your world! Our
                                    Diwali
                                    Offer 
                                    Plan brings you the best of mobile connectivity and savings, so you can stay
                                    connected
                                    with
                                    your loved ones near and far. For only $40 per month, you get an incredible bundle
                                    of
                                    services that includes</p>
                                <a href="#contact" class="btn btn-light btn-sm btn_offer fw-bold rounded-pill py-3 px-4 animated slideInRight">GET
                                    IN TOUCH</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h4 class="display-10 mb-10">Light up your Diwali with Telus, your trusted partner in connectivity!</h4>
                 <h2 class="display-6 mb-6">Offer Includes</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11 px-0">
                    <div class="row g-4 justify-content-center mx-0">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item position-relative h-100">
                                <div class="service-text rounded p-5 h-100">
                                    <h5 class="mb-3">40GB Data</h4>
                                        <p class="mb-0">Stay connected, stream, and browse without limits.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item position-relative h-100">
                                <div class="service-text rounded p-5 h-100">
                                    <h5 class="mb-3">Unlimited Canada-wide Calling</h4>
                                        <p class="mb-0">Talk to your friends and family across the country without
                                            worrying
                                            about the minutes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item position-relative h-100">
                                <div class="service-text rounded p-5 h-100">
                                    <h5 class="mb-3">Unlimited Canada-wide SMS</h4>
                                        <p class="mb-0">Send messages with no restrictions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item position-relative h-100">
                                <div class="service-text rounded p-5 h-100">
                                    <h5 class="mb-3">Premium Voicemail</h4>
                                        <p class="mb-0">Never miss an important message.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item position-relative h-100">
                                <div class="service-text rounded p-5 h-100">
                                    <h5 class="mb-3">International SMS</h4>
                                        <p class="mb-0">Connect with friends and family around the world.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <a href="#contact" class="btn btn-primary btn_offer d-lg-block w-mxc btn-sm fw-bold rounded-pill py-3 px-4 animated slideInRight">GET
                    OFFER</a>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Terms & Condition</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <p class="mb-0 text-center">Offer valid for a limited time. Price is $40 per month, subject to
                        applicable taxes.
                        Additional charges may apply for international calls. Service availability may vary. Terms and
                        conditions apply. Please contact our customer support for more details.
                    </p>

                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <a href="#contact" class="btn btn-primary btn_offer d-lg-block w-mxc btn-sm fw-bold rounded-pill py-3 px-4 animated slideInRight">GET
                    OFFER</a>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <p class="mb-4">I've been with boltwireless for years, and their Diwali Offer made this season even
                        more special! The 40GB data, unlimited calling, and premium voicemail have kept me connected
                        with my family and friends. It's the perfect Diwali gift!</p>
                    <h5>Sarah K</h5>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <p class="mb-4">Unlimited calling and data for $40/month? This Diwali, I found the perfect gift for
                        my family! Thanks to boltwireless, I can share the joy of the festival without worrying about my
                        phone bill.</p>
                    <h5>Rajesh P</h5>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <p class="mb-4">The clarity and connectivity of boltwireless is unmatched. I recommend them to all
                        my friends! With the Diwali Offer, I'm enjoying seamless communication with loved ones across
                        Canada. It's a game-changer!</p>
                    <h5>Emily L</h5>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <p class="mb-4">As a small business owner, staying connected is crucial. boltwireless has been my
                        go-to choice, and their Diwali Offer has exceeded my expectations. The unlimited calling and
                        data have made my business run smoothly during the festive season.</p>
                    <h5>Rahul S</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <p class="mb-4">Being an international student, I value staying connected with my family back home. [Your Company Name]'s Diwali Offer with international SMS and premium voicemail has been a lifesaver. It's affordable and reliable, and I couldn't be happier!</p>
                    <h5> Aisha M.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Contact Us</p>
                <h1 class="display-5 mb-5">If You Have Any Query, Please Contact Us</h1>
            </div>
            <div class="row g-5" id="contact">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Exclusive Diwali Offer</h3>
                    <p class="mb-4">Fill out the form below to get started with our Diwali Offer Plan. Don't miss out on
                        this amazing deal! As a TELUS Authorized Dealer, we're committed to providing you with the best
                        service.</p>
                    <form action="index.php" method="post"> <!-- Specify the PHP script for form handling -->
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="number" name="number" placeholder="Your Number">
                                    <label for="number">Your Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select name="provider" class="form-control">
                                        <option disabled selected value="Koodo">--Select--</option>
                                        <option value="Koodo">Koodo</option>
                                        <option value="Other">Telus</option>
                                        <option value="None">Other</option>
                                    </select>
                                    <label for="provider">Current Provider</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select name="contactMethod" class="form-control">
                                        <option disabled selected value="Koodo">--Select--</option>
                                        <option value="Email">Email</option>
                                        <option value="Phone Call">Phone Call</option>
                                        <option value="Text Message">Text Message</option>
                                    </select>
                                    <label for="contactMethod">Preferred Contact Method</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Type anything..." id="message" style="height: 200px"></textarea>
                                    <label for="message">Questions/Comments</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" id="agree" name="agree">
                                    <label for="agree">I agree to your Terms and Conditions and Privacy Policy</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button name="submit" class="btn btn-primary btn_offer rounded-pill py-3 px-5" type="submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Contact Details</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                           
                            <span>8067 120th Street, Unit 110, Delta, BC V4C 6P7</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <span>778 957 8000</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <span>info@boltwireless.ca</span>
                        </div>
                    </div>

                    <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d334102.86063967197!2d-122.814304703125!3d49.140233359116664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d95033b78a47%3A0x4923a4cd893f86!2sTelus%20Store!5e0!3m2!1sen!2sus!4v1699257454997!5m2!1sen!2sus" frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 text-center">
                    <a href="index.html" class="nav-item nav-link active"><img src="img/telus.png" width="200px" alt="logo"></a>
                    <p>Stay connected this Diwali with our unbeatable offer. Contact us today to brighten up your
                        celebrations!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="https://boltwireless.ca">boltwireless</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>