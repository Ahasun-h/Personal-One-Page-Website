<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" rel="stylesheet" media="all">

    <!-- ===== Bootstrap ===== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font/flaticon.css">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/prettyPhoto.css">


    <title>Ahasun_H</title>
</head>

<body id="body-pd" onload="screenLoad()" style="scroll-behavior: smooth;">

    <!--====== Loading Screen ====== -->
    <div id="Loading" class="loading__backround">
        <div class="loading">
            <span>Loading...</span>
        </div>
    </div>

    <!--====== Nav Menu ====== -->
    <header>
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="list-outline" class="nav__toggle" id="nav-toggle"></ion-icon>

                        <a href="#" class="nav__logo" style="text-decoration: none;"> Ahasun_H <img class="my_image_logo" src="assets\images\MY_IMAGE.png" /></a>
                    </div>
                    <div class="nav__list">
                        <ul id="nav_ul">
                            <li class="active">
                                <a href="#Home" class="nav__link  active" style="text-decoration: none;">
                                    <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Home</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#services" class="nav__link" style="text-decoration: none;">
                                    <ion-icon name="build-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Services</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#Experience" class="nav__link" style="text-decoration: none;">
                                    <ion-icon name="briefcase-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Experience</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#Projects" class="nav__link" style="text-decoration: none;">
                                    <ion-icon name="newspaper-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Projects</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#ACHIEVEMENT" class="nav__link" style="text-decoration: none;">
                                    <ion-icon name="images-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Achievements</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#HIRE_ME" class="nav__link" style="text-decoration: none;">
                                    <ion-icon name="magnet-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Hire Me</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#TESTIMONIALS" class="nav__link" style="text-decoration: none;">
                                    <ion-icon name="reader-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Testimonial</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#CONTACT" class="nav__link" style="text-decoration: none;">
                                    <ion-icon name="mail-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Contact</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!--====== First Content ====== -->
    <div class="main-container bg-color-one" id="Home">
        <div class="container">
            <div class="row">
                <div class="div__content col">
                    <h3 class="wow animate__bounceInDown" data-wow-duration="1s" data-wow-delay="0s">Hi<br>I am <samp>Md.Ahasun Habib</samp></h3>
                    <p class="animate__animated animate__bounceInLeft">Web designer</p>
                    <button class="animate__animated animate__bounceInLeft">Hire Me</button>
                </div>
            </div>
        </div>
    </div>

    <!--====== Services Content ====== -->
    <div class="services__content bg-color-two" id="services">
        <div class="container">


            <div class="row">
                <div class="col-sm-12 col-md-4 Service_Content_one">
                    <h3>Services</h3>
                </div>

                <div class="services__items">
                    <div class="row">

                        <div class="services__items_inner col-12 col-sm-6 col-md-3 wow animate__animated animate__bounceInLeft" data-wow-duration="2s" >
                            <div class="services__items_content">
                                <div class="icon">
                                    <span class="flaticon-web-page"></span>
                                </div>
                                <h4>web design</h4>
                            </div>
                        </div>

                        <div class="services__items_inner col-12 col-sm-6 col-md-3 wow animate__animated animate__bounceInLeft" data-wow-duration="2s" >
                            <div class="services__items_content">
                                <div class="icon">
                                    <span class="flaticon-wordpress"></span>
                                </div>
                                <h4>Wordpress customization</h4>
                            </div>
                        </div>

                        <div class="services__items_inner col-12 col-sm-6 col-md-3 wow animate__animated animate__bounceInLeft" data-wow-duration="2s" >
                            <div class="services__items_content">
                                <div class="icon">
                                    <span class="flaticon-theme"></span>
                                </div>
                                <h4>PSD To HTML</h4>
                            </div>
                        </div>

                        <div class="services__items_inner col-12 col-sm-6 col-md-3 wow animate__animated animate__bounceInLeft" data-wow-duration="2s" >
                            <div class="services__items_content">
                                <div class="icon">
                                    <span class="flaticon-template"></span>
                                </div>
                                <h4>PSD To Wordpress</h4>
                            </div>
                        </div>

                        <div class="services__items_inner col-12 col-sm-6 col-md-4 wow animate__animated animate__bounceInLeft" data-wow-duration="2s" >
                            <div class="services__items_content">
                                <div class="icon">
                                    <span class="flaticon-video"></span>
                                </div>
                                <h4>Video Editing</h4>
                            </div>
                        </div>

                        <div class="services__items_inner col-12 col-sm-6 col-md-4 wow animate__animated animate__bounceInLeft" data-wow-duration="2s" >
                            <div class="services__items_content">
                                <div class="icon">
                                    <span class="flaticon-app"></span>
                                </div>
                                <h4>Andoid App Development</h4>
                            </div>
                        </div>

                        <div class="services__items_inner col-12 col-sm-6 col-md-4 wow animate__animated animate__bounceInLeft" data-wow-duration="2s" >
                            <div class="services__items_content">
                                <div class="icon">
                                    <span class="flaticon-cog"></span>
                                </div>
                                <h4>Email Signature</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== Experience Content ====== -->
    <div class="Experience bg-color-one" id="Experience">
        <div class="container">
            <div class="Experience_Content_header">
                <h3>Experience</h3>
            </div>
            <div class="container">
                <ul>
                    <div class="Experience__item wow animate__animated animate__bounceInRight" data-wow-duration="2s" data-wow-delay="0s">
                        <p>2019-2020</p>
                        <h4>Android Developer</h4>
                        <h5>Advance Android Apps for game development (LICT)</h5>
                        <p class="Experience__paragraph">Company Name : BCIIT Duration<br>Area : 1/2 Asad Gate Road, North Side of Sonar<br>Bangla Petrol Pump Dhaka-1207, Bangladesh.
                            <p>
                    </div>
                    <div class="Experience__item wow animate__animated animate__bounceInRight" data-wow-duration="2s" data-wow-delay="0.5s">
                        <p>2018-2019</p>
                        <h4>IOS Developer</h4>
                        <h5>IOS Apps for game development (LICT)</h5>
                        <p class="Experience__paragraph">Company Name : Digicon Technologies Ltd<br>Duration Area : 242, Tejgaon I/A, Gulshan Link Road,<br>Dhaka 1208.
                            <p>
                    </div>
                    <div class="Experience__item wow animate__animated animate__bounceInRight" data-wow-duration="2s" data-wow-delay="1s">
                        <p>2017-2018</p>
                        <h4>Web Designer</h4>
                        <h5>S R Institute of Design</h5>
                        <p class="Experience__paragraph">Area : MohammadiaSuper Market,2nd<br>floor,(opposite of A.R Plaza),<br>Dhanmondi,Dhaka- 1207.
                            <p>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <!--====== My Work ====== -->
    <div class="My_Work__content bg-color-two" id="Projects">
        <div class="container">
            <div class="My_Work__content_header col-md-12 col-lg-12 col-xl-12 col-sm-12">
                <h3>Projects</h3>
            </div>

            <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 My__work_menu wow animate__bounceInUp" data-wow-duration="2s">
                <ul>
                    <li class="control mixitup-control-active" data-filter="all">
                        <a class="mix_itup_menu nActive">All</a>
                    </li>
                    <li class="control" data-filter=".Web_Desine">
                        <a class="mix_itup_menu">Web Desine</a>
                    </li>
                    <li class="control" data-filter=".App_Development">
                        <a class="mix_itup_menu">App Development</a>
                    </li>
                    <li class="control" data-filter=".Wordpress">
                        <a class="mix_itup_menu">Wordpress</a>
                    </li>
                    <li class="control" data-filter=".Video_Editing">
                        <a class="mix_itup_menu">Video Editing</a>
                    </li>
                </ul>
            </div>
            <div class="gallery" data-ref="mixitup-container">
                <div class="row col-md-12 col-lg-12 col-xl-12 col-sm-12">
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix App_Development" data-ref="mixitup-target">
                        <img class="images" src="assets\images\property_Rental.png">
                        <div class="images__Shadow">
                            <a href="https://github.com/Ahasun-h/PropertyRental">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix App_Development" data-ref="mixitup-target">
                        <img class="images" src="assets\images\Karigor.png">
                        <div class="images__Shadow">
                            <a href="https://github.com/Ahasun-h/KarigorBangla">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Web_Desine" data-ref="mixitup-target">
                        <img class="images" src="assets\images\Mnstex.png">
                        <div class="images__Shadow">
                            <a href="#">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Web_Desine" data-ref="mixitup-target">
                        <img class=" images " src="assets\images\project_4.png ">
                        <div class="images__Shadow ">
                            <a href="# ">See More</a>
                        </div>
                    </div>

                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix App_Development" data-ref="mixitup-target">
                        <img class="images " src="assets\images\lets_chat.png ">
                        <div class="images__Shadow ">
                            <a href="https://github.com/Ahasun-h/Lets_Chat">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Web_Desine" data-ref="mixitup-target">
                        <img class="images " src="assets\images\B-site.png ">
                        <div class="images__Shadow ">
                            <a href="# ">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Web_Desine" data-ref="mixitup-target">
                        <img class="images " src="assets\images\project_7.png ">
                        <div class="images__Shadow ">
                            <a href="# ">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix App_Development" data-ref="mixitup-target">
                        <img class="images " src="assets\images\corona_update.png ">
                        <div class="images__Shadow ">
                            <a href="https://github.com/Ahasun-h/CoronaUpdateToday">See More</a>
                        </div>
                    </div>

                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Video_Editing" data-ref="mixitup-target">
                        <img class="images " src="assets\images\youtubeOne.png ">
                        <div class="images__Shadow ">
                            <a href="https://www.youtube.com/watch?v=q2OEcWt2OZs">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Video_Editing" data-ref="mixitup-target">
                        <img class="images " src="assets\images\youtubeTwo.png ">
                        <div class="images__Shadow ">
                            <a href="# ">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Web_Desine" data-ref="mixitup-target">
                        <img class="images " src="assets\images\project_8.png ">
                        <div class="images__Shadow ">
                            <a href="# ">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Video_Editing" data-ref="mixitup-target">
                        <img class="images " src="assets\images\youtubeThree.png ">
                        <div class="images__Shadow ">
                            <a href="https://www.youtube.com/watch?v=bDy5_R8YIYk&t=6s">See More</a>
                        </div>
                    </div>

                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Video_Editing" data-ref="mixitup-target">
                        <img class="images " src="assets\images\youtubeFoure.png ">
                        <div class="images__Shadow ">
                            <a href="https://www.youtube.com/watch?v=XcOwzoUpbWs">See More</a>
                        </div>
                    </div>
                    <div class="item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mix Web_Desine" data-ref="mixitup-target">
                        <img class="images " src="assets\images\project_9.png ">
                        <div class="images__Shadow ">
                            <a href="# ">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--====== My Achievement ====== -->
    <div class="Achievement__content bg-color-one" id="ACHIEVEMENT">
        <div class="container ">
            <div class="Achievement__content_header col-md-12 col-lg-12 col-xl-12 col-sm-12 ">
                <h3>Achievement</h3>
            </div>

            <div class="row col-md-12 col-lg-12 col-xl-12 col-sm-12 ">
                <div class="Achievement_item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 ">
                    <img class="Achievement_images " src="assets\images\Achievement_one.png ">
                    <div class="Achievement__Shadow ">
                        <a href="https://www.facebook.com/techBCD">Visit</a>
                    </div>
                </div>
                <div class="Achievement_item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 ">
                    <img class="Achievement_images " src="assets\images\Achievement_two.png ">
                    <div class="Achievement__Shadow ">
                        <a href="# ">Visit</a>
                    </div>
                </div>
                <div class="Achievement_item__image col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 ">
                    <img class="Achievement_images " src="assets\images\Achievement_three.png ">
                    <div class="Achievement__Shadow ">
                        <a href="https://www.facebook.com/groups/717774468734102">Visit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== Hire Me ====== -->
    <div class="Hire_Me__content bg-color-two" id="HIRE_ME">
        <div class="container ">
            <div class="Achievement__content_header col-md-12 col-lg-12 col-xl-12 col-sm-12 ">
                <h3>Hire Me</h3>
            </div>
            <div class="row col-md-12 col-lg-12 col-xl-12 col-sm-12 " style="margin-top: 26px; ">
                <div class="item__image col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                    <div class="card mb-3 wow animate__bounceInLeft " data-wow-duration="2s " style="max-width: 540px; ">
                        <div class="row no-gutters ">

                            <div class="col-md-8 col-sm-6 ">
                                <div class="card-body ">
                                    <h5 class="card-title ">Hire me from <a href="# ">Fiverr</a></h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 ">
                                <img src="assets\images\fiverr-og-logo.png " class="card-img " alt="... ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item__image col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                    <div class="card mb-3 wow animate__bounceInRight " data-wow-duration="2s " style="max-width: 540px; ">
                        <div class="row no-gutters ">

                            <div class="col-md-8 col-sm-6 ">
                                <div class="card-body ">
                                    <h5 class="card-title ">Hire me from <a href="# ">UpWork</a></h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 ">
                                <img src="assets\images\upwork_logo.png " class="card-img " alt="... ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== My Testimonials ====== -->
    <div class="Testimonials__contents bg-color-one" id="TESTIMONIALS">
        <div class="container ">
            <div class="Testimonials__content_header col-md-12 col-lg-12 col-xl-12 col-sm-12 ">
                <h3>Testimonials</h3>
            </div>

            <div id="carouselExampleInterval " class="carousel slide " data-ride="carousel ">
                <div class="carousel-inner ">
                    <div class="carousel-item active " data-interval="10000 ">
                        <img src="assets\images\upwork_logo.png " class="slider_image " alt=" ">
                        <div class="Testimonials_content ">
                            <h4 class="carousel-item-title ">Rocey Hasan</h4>
                            <p class="carousel-item-text ">Working with Atiqur has been an incredible experience. He listens, and provide his insights. Not just a regular UI/UX Designer, but one that really cares about the success of the project at hand and the experience he wants
                                users of the product to have. Will definitely work with him again.</p>
                        </div>
                    </div>
                    <div class="carousel-item " data-interval="2000 ">
                        <img src="assets\images\upwork_logo.png " class="slider_image " alt=" ">
                        <div class="Testimonials_content ">
                            <h4 class="carousel-item-title ">Rocey Hasan</h4>
                            <p class="carousel-item-text ">Working with Atiqur has been an incredible experience. He listens, and provide his insights. Not just a regular UI/UX Designer, but one that really cares about the success of the project at hand and the experience he wants
                                users of the product to have. Will definitely work with him again.</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="assets\images\upwork_logo.png " class="slider_image " alt=" ">
                        <div class="Testimonials_content ">
                            <h4 class="carousel-item-title ">Rocey Hasan</h4>
                            <p class="carousel-item-text ">Working with Atiqur has been an incredible experience. He listens, and provide his insights. Not just a regular UI/UX Designer, but one that really cares about the success of the project at hand and the experience he wants
                                users of the product to have. Will definitely work with him again.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev " href="#carouselExampleInterval " role="button " data-slide="prev ">
                    <span class="carousel-control-prev-icon " aria-hidden="true "></span>
                    <span class="sr-only ">Previous</span>
                </a>
                <a class="carousel-control-next " href="#carouselExampleInterval " role="button " data-slide="next ">
                    <span class="carousel-control-next-icon " aria-hidden="true "></span>
                    <span class="sr-only ">Next</span>
                </a>
            </div>

        </div>
    </div>

    <!--====== Contact ====== -->
    <div class="Contact__contents bg-color-two" id="CONTACT">
        <div class="container ">
            <div class="Contact__content_header col-md-12 col-lg-12 col-xl-12 col-sm-12 ">
                <h3>Contact With Me</h3>
            </div>
            <div class="row ">
                <div class="contact_icon_scetion col wow animate__bounceInLeft " data-wow-duration="1s ">
                    <div class="contact_icon ">
                        <span class="flaticon-location "></span>
                    </div>
                    <div class="contact_information ">
                        <h5>Visit</h5>
                        <p>House No: 319, Road No: 13/A -Haji Ismail Dewan Road, Azampur, Dhaka, 1230</p>
                    </div>
                </div>

                <div class="contact_icon_scetion col wow animate__bounceInDown " data-wow-duration="1s ">
                    <div class="contact_icon ">
                        <span class="flaticon-envelope "></span>
                    </div>

                    <div class="contact_information ">
                        <h5>Email</h5>
                        <p>habibahasun019@gmail.com</p>
                    </div>
                </div>

                <div class="contact_icon_scetion col wow animate__bounceInRight " data-wow-duration="1s ">
                    <div class="contact_icon ">
                        <span class="flaticon-phone "></span>
                    </div>

                    <div class="contact_information ">
                        <h5>Call</h5>
                        <p>+8801966205647,+8801687700203</p>
                    </div>
                </div>

            </div>


            <form style="margin-top: 18px; ">
                <div class="form-row ">
                    <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12">
                        <input type="text " class="form-control contact_form_input" placeholder="Name ">
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12">
                        <input type="text " class="form-control contact_form_input" placeholder="Email ">
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12">
                        <input type="text " class="form-control contact_form_input" placeholder="Subject ">
                    </div>
                </div>
                <textarea class="form-control contact_form_input" id="exampleFormControlTextarea1 " rows="3 " placeholder="Message " style="margin-top: 10px; "></textarea>
                <button name="submit" type="button" class="btn btn-primary btn-lg btn-block col" style="margin-top: 10px; ">Send</button>
                <div class="g-recaptcha col" data-siteKey="6LclWs8ZAAAAAAWKDi0v7nKtW_5Ph-pWYRb5eo0C"></div>

            </form>

        </div>
    </div>

    <!--====== Socila Icon ====== -->
    <div class="My_socil_icon ">
        <div class="container ">
            <ul>
                <li>
                    <a href="https://www.facebook.com/ahasun.h/" style="text-decoration: none; "><span class="flaticon-facebook-circular-logo facebook "></span></a>
                    <a href="https://twitter.com/md_ahasun" style="text-decoration: none; "><span class="flaticon-twitter twitter "></span></a>
                    <a href="https://www.linkedin.com/in/ahasu-h/" style="text-decoration: none; "><span class="flaticon-linkedin linkedin "></span></a>
                    <a href="https://www.instagram.com/ahasun_habib/" style="text-decoration: none; "><span class="flaticon-instagram instagram " ></span></a>
                    <a href="https://github.com/Ahasun-h" style="text-decoration: none; "><span class="flaticon-github github "></span></a>
                </li>
            </ul>
        </div>
    </div>


    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="toast" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
                <?php 
                ?>
            </div>
        </div>
    </div>








    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <!-- ===== Bootstrap ===== -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js "></script>

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- ===== Extra ===== -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!-- ===== wow ===== -->
    <script src="assets/js/wow.min.js"></script>
    <!-- ===== mixitup ===== -->
    <script src="assets/js/mixitup.min.js" type="text/javascript"></script>

    <!-- ===== One Page Nave ===== -->
    <script src="assets/js/jquery.nav.js" type="text/javascript"></script>


    <!-- ===== MAIN JS ===== -->
    <script src="assets/js/main.js"></script>
</body>

</html>