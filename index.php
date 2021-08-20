 <?php
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email_address = $_POST['email_address'];
    $feedback = $_POST['feedback'];
    function filter_email_header($form_field)
    {
        return preg_replace('/[nr|!/<>^$%*&]+/', '', $form_field);
    }
    $email_address  = filter_email_header($email_address);
    $headers = "From: $email_addressn";
    $sent = mail('you@domain.com', 'Feedback Form Submission', $message, $subject, $name, $feedback, $headers);
    if ($sent) {
    ?><html>

     <head>
         <title>Thank You</title>
     </head>

     <body>
         <h1>Thank You</h1>
         <p>Thank you for contacting us.</p>
     </body>

     </html>
 <?php

    } else {

    ?><html>

     <head>
         <title>Something went wrong</title>
     </head>

     <body>
         <h1>Something went wrong</h1>
         <p>We could not send your feedback. Please try again.</p>
     </body>

     </html>
 <?php
    }
    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <title>Anjola's Resume</title>
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
     <link rel="stylesheet" type="text/css" href="assets/css/main.css">
     <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

 </head>

 <body>

     <header id="header-wrap">
         <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
             <div class="container">
                 <div class="navbar-header">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                         <span class="icon-menu"></span>
                         <span class="icon-menu"></span>
                         <span class="icon-menu"></span>
                     </button>
                     <a href="index.html" class="navbar-brand"><img src="assets/images/brand-logo.png" width="50%" height="50%" alt=""></a>
                 </div>
                 <div class="collapse navbar-collapse" id="main-navbar">
                     <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
                         <li class="nav-item active">
                             <a class="nav-link" href="#hero-area">
                                 Home
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#about">
                                 About
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#services">
                                 Services
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#resume">
                                 Resume
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#contact">
                                 Contact
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>

             <ul class="onepage-nev mobile-menu">
                 <li>
                     <a href="#home">Home</a>
                 </li>
                 <li>
                     <a href="#about">About</a>
                 </li>
                 <li>
                     <a href="#services">Services</a>
                 </li>
                 <li>
                     <a href="#resume">Resume</a>
                 </li>
                 <li>
                     <a href="#contact">Contact</a>
                 </li>
             </ul>
         </nav>


         <div id="hero-area" class="hero-area-bg">
             <div class="overlay"></div>
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-sm-12 text-center">
                         <div class="contents">
                             <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">Anjolaoluwa Olutomilayo</h2>
                             <p class="script-font wow fadeInUp" data-wow-delay="0.6s">Full Stack Web Developer</p>
                             <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                                 <li>
                                     <a class="github" href="https://github.com/anjielayo"><i class="icon-social-github"></i></a>
                                 </li>
                                 <li>
                                     <a class="linkedin" href=" https://www.linkedin.com/in/anjolaoluwa-olutomilayo-2384b3201/"><i class="icon-social-linkedin"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


     </header>

     <section id="about" class="section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                         <img class="img-fluid" src="assets/images/about1.png" alt="" width="90%" height="100%" style="border: 1px solid brown">
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
                         <h3>Hi Guys!</h3>
                         <p>I started my web development journey from a young age. Now I currently work with the ReactJS
                             framework and Django. I am open to any job opportunities and learning other frameworks as well.</p>
                         <div class="about-profile">
                             <ul class="admin-profile">
                                 <li><span class="pro-title"> Name </span> <span class="pro-detail">Anjolaoluwa
                                         Olutomilayo</span></li>
                                 <li><span class="pro-title"> Country </span> <span class="pro-detail">Nigeria</span>
                                 </li>
                                 <li><span class="pro-title"> Location </span> <span class="pro-detail">Lagos</span></li>
                                 <li><span class="pro-title"> Email </span> <span class="pro-detail">anjolaolutomilayo@gmail.com</span></li>
                                 <li><span class="pro-title"> Phone </span> <span class="pro-detail">+2348033592299</span></li>

                             </ul>
                         </div>
                         <a href="#" class="btn btn-common"><i class="icon-paper-clip"></i> Download Resume</a>
                         <a href="#contact" class="btn btn-danger"><i class="icon-speech"></i> Contact Me</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>


     <section id="services" class="services section-padding">
         <h2 class="section-title wow flipInX" data-wow-delay="0.4s">What I do</h2>
         <div class="container">
             <div class="row">

                 <div class="col-md-6 col-lg-6 col-xs-12">
                     <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
                         <div class="icon">
                             <i class="icon-people"></i>
                         </div>
                         <div class="services-content">
                             <h3><a href="#">Front-end Web Development</a></h3>
                             <p>I design the front-end for webpages. My main frameworks are ReactJS and Bootstrap.</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-6 col-xs-12">
                     <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
                         <div class="icon">
                             <i class="icon-link"></i>
                         </div>
                         <div class="services-content">
                             <h3><a href="#">Back-end Web Development</a></h3>
                             <p>I work on the back-end of web pages to ensure that all functions work.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>



     <div id="resume" class="section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="education wow fadeInRight" data-wow-delay="0.3s">
                         <ul class="timeline">
                             <li>
                                 <i class="icon-graduation"></i>
                                 <h2 class="timelin-title">Education</h2>
                             </li>
                             <li>
                                 <div class="content-text">
                                     <h3 class="line-title">Bsc In Computer Engineering - Covenant University</h3>
                                     <span>2017 - 2022</span>
                                 </div>
                             </li>
                             <li>
                                 <div class="content-text">
                                     <h3 class="line-title">Secondary School - The Lagoon School</h3>
                                     <span>2011 - 2017</span>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="experience wow fadeInRight" data-wow-delay="0.6s">
                         <ul class="timeline">
                             <li>
                                 <i class="icon-briefcase"></i>
                                 <h2 class="timelin-title">Experience</h2>
                             </li>
                             <li>
                                 <div class="content-text">
                                     <h3 class="line-title">Student Intern</h3>
                                     <span>New Horizons</span>
                                 </div>
                             </li>
                             <li>
                                 <div class="content-text">
                                     <h3 class="line-title">Public Relations Officer (SWEP Edition)</h3>
                                     <span>GRACIT Technological Foundation</span>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>




     <section id="contact" class="section-padding">
         <div class="contact-form">
             <div class="container">
                 <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
                     <div class="col-md-6 col-lg-12 col-sm-12">
                         <div class="contact-block">
                             <h2>Contact Form</h2>
                             <form id="contactForm" method="POST" action="/index.php">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="text" placeholder="Email" id="email" class="form-control" name="email_address" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <input type="text" placeholder="Subject" id="msg_subject" class="form-control" name="subject" required data-error="Please enter your subject">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <textarea class="form-control" id="message" placeholder="Your Message" rows="5" name="message" data-error="Write your message" required></textarea>
                                             <div class="help-block with-errors"></div>
                                         </div>
                                         <div class="submit-button">
                                             <button class="btn btn-common" id="submit" type="submit">Send
                                                 Message</button>
                                             <div id="msgSubmit" class="h3 text-center hidden"></div>
                                             <div class="clearfix"></div>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>




     <script src="assets/js/jquery-min.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/jquery.mixitup.js"></script>
     <script src="assets/js/jquery.counterup.min.js"></script>
     <script src="assets/js/jquery.nav.js"></script>
     <script src="assets/js/jquery.easing.min.js"></script>
     <script src="assets/js/jquery.slicknav.js"></script>



 </body>

 </html>