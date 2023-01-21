<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Payment | Rootguard Technologies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rootguard Technologies" name="Rootguard Technologies, it-consultation, managed-services, cloud-computing, cybersecurity">
    <meta content="Rootguard Technologies" name="Startup based on the providing services related to Rootguard Technologies including (it-consultation, managed-services, cloud-computing, cybersecurity)">

    <!-- Favicon -->
    <link href="logo/jpeg-01.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <img src="logo/png transperant.png" alt="" width="100px">
                    <!-- <h1 class="m-0 text-secondary"><span class="text-primary">ROOT</span>GAURD</h1> -->
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About Us</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Services</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="it-consultation.php" class="dropdown-item ">IT Consultation</a>
                                <a href="business-transformation.html" class="dropdown-item">Business Transformation</a>
                                <a href="managed-services.html" class="dropdown-item">Managed Services</a>
                                <a href="cybersecurity.html" class="dropdown-item">Cybersecurity</a>
                                <a href="cloud-computing.html" class="dropdown-item ">Cloud Computing</a>
                                <a href="service.html" class="dropdown-item">All Services</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle active" data-toggle="dropdown">Resources</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="paybill.php" class="dropdown-item active">Pay Bill</a>
                                <a href="blog.html" class="dropdown-item">Blog</a>
                                <a href="refer-form.html" class="dropdown-item">Refer a Company</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Customer Access</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="http://portal.rootguardtechnologies.com" class="dropdown-item">Customer
                                    Portal</a>
                                <a href="contact-technician.html" class="dropdown-item">Contact Technician</a>
                                <a href="remote-support.html" class="dropdown-item">Remote Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="page-header container-fluid pt-2 pt-lg-5">
        <div class="container">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0">Payment</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn" href="">Pay Bill</a>
                        <i class="fas fa-angle-right"></i>
                        <a class="btn disabled" href="">Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['btn-300'])) {
        $hours = 1;
        $payment = 300;
    }
    elseif(isset($_POST['btn-600'])){
        $hours = 2;
        $payment = 600;
    }

    else{
        $hours = 3;
        $payment = 900;
    }
}
    ?>
    <div class="container ">
        <div class="row " style="padding-right: 15px; padding-left: 15px;">
            <p style=" text-align: justify;">We help improve the
                This service should allow
                users to reserve 1 hour @
                $300 per hour. If they select
                more than 1 hour, that
                multiplier should take effect. Example:
                1 hour = $300
                3 hours = $900
            </p>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">1</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Consultation</h6>
                            </div>
                            <span class="text-muted"><?php echo "$".$payment ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>STARTUP</small>
                            </div>
                            <span class="text-success">-$0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong><?php echo "$".($payment) ?></strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8 " style="min-width: 40rem;">
                    <form class="needs-validation" novalidate="novalidate" action="paybill.php" method="post">
                        <h4 class="mb-3">Payment</h4>
                        <div class="col-md-10">
                            <?php
                                echo '<p>'.$hours.' Hours</p>';
                                echo '<p>IT-Consultation</p>';
                                echo '<p>Cybersecurity</p>';
                                echo '<p>Business Transformation</p>';
                                echo '<p>Cloud Computing</p>';
                            ?>
                        </div>
                        <!-- PayPal Script Start -->
                        <div class="col-lg-13 " style="margin: 0 auto;">
                            <div id="smart-button-container">
                                <div style="text-align: center;">
                                    <div id="paypal-button-container"></div>
                                </div>
                            </div>

                            <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD"
                                data-sdk-integration-source="button-factory"></script>
                            <script>
                                function initPayPalButton() {
                                    paypal.Buttons({
                                        style: {
                                            shape: 'rect',
                                            color: 'gold',
                                            layout: 'vertical',
                                            label: 'paypal',
                                        },

                                        createOrder: function (data, actions) {
                                            return actions.order.create({
                                                purchase_units: [{ "description": "Consultation Fee", "amount": { "currency_code": "USD", "value": <?php echo $payment ?> } }]
                                            });
                                        },

                                        onApprove: function (data, actions) {
                                            return actions.order.capture().then(function (orderData) {

                                                // Full available details
                                                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                                // Show a success message within this page, e.g.
                                                const element = document.getElementById('paypal-button-container');
                                                element.innerHTML = '';
                                                element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                                // Or go to another URL:  actions.redirect('thank_you.html');

                                            });
                                        },

                                        onError: function (err) {
                                            console.log(err);
                                        }
                                    }).render('#paypal-button-container');
                                }
                                initPayPalButton();
                            </script>
                        </div>
                        <!-- PayPal Script End -->

                            <hr class="my-4">

                        <input class="w-100 btn btn-primary btn-lg" type="submit" name="submit-payment" value="Submit Payment">
                    <!-- </form>
                    <form method="post" action="paybill.php">
                    </form> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <div style="background-color:white; padding-left: 10px; width: 120px; padding-right: 10px;">
                    <img src="logo/png transperant.png" alt="" width="100%">
                </div>
                <!-- <a href=""><h1 class="text-secondary mb-3"><span class="text-white">ROOt</span>GAURD</h1></a> -->
                <p style="font-size:15px ;">ROOTGUARD® technology has well proven itself in Sub-Surface Drip Irrigation
                    (SDI), preventing root intrusion for over 25 years in a very wide range of applications world-wide.
                </p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Get In Touch</h4>
                <!-- <p>Dolor clita stet nonumy clita diam vero, et et ipsum diam labore</p> -->
                <p><i class="fa fa-map-marker-alt mr-2"></i>Syracuse, New York, 13090, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+315-338-3592 / +215-595-623-6326</p>
                <p><i class="fa fa-envelope mr-2"></i>leads@rootguardtechs.com</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Services</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="it-consultation.php"><i class="fa fa-angle-right mr-2"></i>IT Consultation</a>
                    <a class="text-white mb-2" href="business-transformation.html"><i class="fa fa-angle-right mr-2"></i>Business
                        Transformation</a>
                    <a class="text-white mb-2" href="cybersecurity.html"><i class="fa fa-angle-right mr-2"></i>Cybersecurity</a>
                    <a class="text-white mb-2" href="managed-services.html"><i class="fa fa-angle-right mr-2"></i>Managed Services</a>
                    <a class="text-white" href="cloud-computing.html"><i class="fa fa-angle-right mr-2"></i>Cloud Computing</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>AWS Login Portal</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Microsoft Azure Portal</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Google Cloud Portal</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Cisco Login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">2021-2022 Rootguard Technologies</a>. All Rights Reserved.
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <!-- <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script> -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>