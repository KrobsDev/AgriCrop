<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/homepage.css">
    <title>AgriCrop</title>
</head>
<body>
    <!-- navigation bar -->
    <div class="navbar">
        <!-- navbar content -->
        <div class="container">
            <!-- navbar brand -->
            <a href="index.html" class="navbar-brand">
                <!-- logo -->
                <img src="../assets/img/logo/Layer 2.svg" alt="" width="50">
                <!-- company name -->
                <p class="brand">AgriCrop</p>
            </a>
            <!-- end of navbar brand -->

            <!-- hamburger menu -->
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

            <!-- nav links -->
            <nav>
                <ul class="navlinks">
                    <li><a href="#home" class="links">Home</a></li>
                    <li><a href="#about" class="links">About Us</a></li>
                    <li><a href="#services" class="links">Services</a></li>
                    <li><a href="contact.php" class="links">Contact Us</a></li>
                    <li><a href="login.php" class="links">Login</a></li>
                    <li id="createacc"><a href="signup.php" class="links">Create account</a></li>
                </ul>
            </nav>
            <!-- end of nav links -->
        </div>
        <!-- end of navbar content -->
    </div>
    <!-- end of navigation bar -->

    <!-- main content -->
    <main>
        <section class="presentation" id="home">
            <!-- intro text -->
            <div class="intro-header">
                <p class="large">A Way of Revolutionizing Agriculture</p>
            </div>

            <!-- illustration -->
            <div class="illustration">
                <img src="../assets/img/illustration/h3.svg" alt="" width="620" >
            </div>

            <!-- closing text -->
            <div class="c-text">
                <p class="medium medium-left">Farm the revolutionized way and make profit from the comfort of your home.</p>
                <input type="button" value="Login" onclick="document.location.href='login.php'" id="login">
            </div>
        </section>

        <!-- section 2 About section-->
        <section class="mb-content" id="about">
            <!-- heading -->
            <div class="ab-content">
                <p class="heading ab-heading">About AgriCrop</p>

                <p class="medium medium-left">Farm digitally and monitor your farm activities from your mobile devices. Choose a buyer of your choice from a selection of vetted buyers to sell your harvested crops, and receive insights and real-time monitoring of your farm processes from land preparation to post-harvest results.</p> 
            </div>

            <!-- illustration -->
            <div class="illustration-2">
                <img src="../assets/img/illustration/plant.svg" alt="">
            </div>
            
        </section>
        <!-- end of section 2 -->


        <!-- start of values section -->
        <section class="v-values" id="values"> 
            <!-- heading -->
            <p class="heading">Our values</p>

            <!-- container -->

            <div class="v-container">
                <!-- content -->
                <div class="values">
                    <!-- value item -->
                    <div class="value">
                        <!-- icon -->
                        <img src="../assets/img/icons/Icon awesome-lightbulb.svg" alt="" width="70">
                        <!-- text -->
                        <div class="text-content">
                            <p class="medium">INNOVATION</p>
                            <p >We foster a work environment where creative thinking is encouraged and rewarded in order to create opportunities for process improvement and more cost-effective sustainable products and services, providing value to the Company and our customers.</p>
                        </div>
                        
                    </div>
                    
                    <!-- value item -->
                    <div class="value">
                        <!-- icon -->
                        <img src="../assets/img/icons/Icon material-high-quality.svg" alt="" width="70">
                        <!-- text -->
                        <div class="text-content">
                            <p class="medium">QUALITY</p>
                            <p >We foster a work environment where creative thinking is encouraged and rewarded in order to create opportunities for process improvement and more cost-effective sustainable products and services, providing value to the Company and our customers.</p>
                        </div>
                    </div>

                    <!-- value item -->
                    <div class="value">
                        <!-- icon -->
                        <img src="../assets/img/icons/Icon awesome-connectdevelop.svg" alt="" width="70">
                        <!-- text -->
                        <div class="text-content">
                            <p class="medium">CUSTOMER</p>
                            <p >We foster a work environment where creative thinking is encouraged and rewarded in order to create opportunities for process improvement and more cost-effective sustainable products and services, providing value to the Company and our customers.</p>
                        </div>
                    </div>

                    
                </div>
                <!-- end of content -->

                <!-- illustrations -->
                <img src="../assets/img/illustration/Layer -1.svg" alt="" class="bulb1">
                <img src="../assets/img/illustration/Layer -1.svg" alt="" class="bulb2">

            </div>

        </section>

        <!-- services section -->
        <section class="sc-content" id="services">
            <!-- heading -->
            <p class="heading">What we offer?</p>

            <!-- intro text -->
            <p class="medium">We strive to provide exceptional customer service through flexible scheduling, quality products, efficient services, and innovative solutions resulting in value to the customer and company.</p>

            <div class="sc-container">
                <div class="service">
                    <!-- icon -->
                    <img src="../assets/img/icons/icons8-raspberry-200.svg" alt="">
                    <!-- text -->
                    <div class="text-content tx">
                        <p class="medium">FARM PRODUCE</p>
                        <p>We strive to provide exceptional customer service through flexible scheduling, quality products, efficient services, and innovative solutions resulting in value to the customer and company.</p>
                    </div>
                    
                </div>

                <div class="service">
                    <!-- icon -->
                    <img src="../assets/img/icons/icons8-raspberry-200.svg" alt="">
                    <!-- text -->
                    <div class="text-content tx">
                        <p class="medium">ONLINE SHOPPING</p>
                        <p>We strive to provide exceptional customer service through flexible scheduling, quality products, efficient services, and innovative solutions resulting in value to the customer and company.</p>
                    </div>
                </div>

                <div class="service">
                    <!-- icon -->
                    <img src="../assets/img/icons/icons8-raspberry-200.svg" alt="">
                    <!-- text -->
                    <div class="text-content tx">
                        <p class="medium">CUSTOMER CARE</p>
                        <p>We strive to provide exceptional customer service through flexible scheduling, quality products, efficient services, and innovative solutions resulting in value to the customer and company.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- Additional services -->
        <section class="as-content" id="ad-services">
            <!-- heading -->
            <p class="heading">Additional Services</p>

            <div class="as-section">
                <!-- illustration -->
                <div class="illustration-2">
                    <img src="../assets/img/illustration/basket.svg" alt="">
                </div>

                <!-- content -->
                <div class="text-content">
                    <p class="large">Support our local farmers</p>
                    <p class="medium-left">We take pride in providing high value products and services that we stand behind, which ensures customer satisfaction, profitability and the future of our employees and our growth. profitability and the future of our employees and our growth.</p>
                    <input type="button" class="b-icon" value="Make a donation" id="donate">
                </div>
            </div>
            
        </section>
        <!-- end additional services -->


        <!-- join us section -->
        <section class="join-us" id="joinus">
            <div class="inner">
                <!-- intro text -->
                <div class="intro-header">
                    <p class="large">Join us and let’s end hunger together!</p>
                </div>

                <!-- illustration -->
                <div class="illustration">
                    <img src="../assets/img/illustration/Layer -2.svg" alt="" width="620" >
                </div>

                <!-- closing text -->
                <div class="c-text">
                    <p class="medium medium-left">Get access to proprietary cultivation protocols developed by Complete Farmer, and farm with precision through the use of satellite and IoT technologies that collect crop insights that are used in optimizing crop growth, supply chains, and farm management, to meet export market demands.</p>
                    <input type="button" value="Sign Up now!" onclick="document.location.href='signup.php'">
                </div>
            </div>
        </section>
        <!-- end of join us section -->

        <!-- footer -->
        <footer>
            <div class="f-heading">
                <div class="left-content">
                    <p class="medium medium-left">AgriCrop</p>

                    <p class="hide">Join the fight against hunger</p>
                </div>

                <!-- social media links -->
                <div class="socials">
                    <img src="../assets/img/icons/Icon awesome-facebook.svg" alt="">
                    <img src="../assets/img/icons/Icon awesome-instagram.svg" alt="">
                    <img src="../assets/img/icons/Icon awesome-twitter.svg" alt="">
                    <img src="../assets/img/icons/Icon awesome-linkedin.svg" alt="">
                </div>

                
            </div>

            <!-- other links -->
            <div class="f-links">
                <div class="left-links">
                    <p><a href="#">Contacts</a></p>
                    <p><a href="#">FAQ</a></p>
                    <p><a href="#">Donation</a></p>
                    <p><a href="#">Terms of Service</a></p>
                    <p><a href="#">Privacy policy</a></p>
                </div>

                <div class="right-links">
                    <p><a href="#">AgriCrop</a></p>
                    <p><a href="#">Services</a></p>
                    <p><a href="#">News</a></p>
                    <p><a href="#">Shopping</a></p>
                    <p><a href="#">Additional features</a></p>
                </div>
            </div>

            <!-- subscription -->
            <div class="subscription">
                <div class="msg">
                    <img src="../assets/img/icons/Icon feather-mail.svg" alt="">
                    <p>Stay up to date on the latest from AgriCrop</p>
                </div>

                <!-- input box -->
                <input type="text" name="" id="" placeholder="Enter email address">

                <input type="button" value="Subscribe">
            </div>
        </footer>
        <hr>
        <div class="copyright">
            <img src="../assets/img/icons/Icon awesome-copyright.svg" alt="">
            <p>2021 AgriCrop</p>
        </div>
    </main>

<script src="../js/index.js"></script>
</body>
</html>