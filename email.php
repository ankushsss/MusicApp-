<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>One Music - Modern Music HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    body{
	margin:0;
	padding:0;
}
/* .container{
	width:90%
	margin:10px auto;
} */
.portfolio-menu{
	text-align:center;
}
.portfolio-menu ul li{
	display:inline-block;
	margin:0;
	list-style:none;
	padding:10px 15px;
	cursor:pointer;
	-webkit-transition:all 05s ease;
	-moz-transition:all 05s ease;
	-ms-transition:all 05s ease;
	-o-transition:all 05s ease;
	transition:all .5s ease;
}

.portfolio-item{
	/*width:100%;*/
}
.portfolio-item .item{
	/*width:303px;*/
	float:left;
	margin-bottom:10px;
}

</style>
</head>

<body>
<div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                     <!-- Nav brand -->
                     <a href="index.html" class="nav-brand text-white">Zone Out</a>

                     <!-- Navbar Toggler -->
                     <div class="classy-navbar-toggler">
                         <span class="navbarToggler"><span></span><span></span><span></span></span>
                     </div>

                     <!-- Menu -->
                     <div class="classy-menu">

                         <!-- Close Button -->
                         <div class="classycloseIcon">
                             <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                         </div>

                         <!-- Nav Start -->
                         <div class="classynav">
                             <ul>
                                 <li><a href="./#home">Home</a></li>
                                 <li><a href="./#Albums">Albums</a></li>
                              
                                 <li><a href="./#events">Events</a></li>
                                 <li><a href="./#songs">Songs</a></li>
                                 <li><a href="./#contact">Contact</a></li>
                                 <li><a href="#">More</a>
                                     <ul class="dropdown">
                                         <li><a href="Gallery1.html">Gallery</a></li>
                                         <!-- <li><a href="albums-store.html">Albums</a></li> -->
                                         
                                      
                                     
                                         
                                        
                                         <!-- <li><a href="#">Dropdown</a>
                                             <ul class="dropdown">
                                                 <li><a href="#">Even Dropdown</a></li>
                                                 <li><a href="#">Even Dropdown</a></li>
                                                 <li><a href="#">Even Dropdown</a></li>
                                                 <li><a href="#">Even Dropdown</a>
                                                     <ul class="dropdown">
                                                         <li><a href="#">Deeply Dropdown</a></li>
                                                         <li><a href="#">Deeply Dropdown</a></li>
                                                         <li><a href="#">Deeply Dropdown</a></li>
                                                         <li><a href="#">Deeply Dropdown</a></li>
                                                         <li><a href="#">Deeply Dropdown</a></li>
                                                     </ul>
                                                 </li> -->
                                                
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>

                             <!-- Login/Register & Cart Button -->
                             <div class="login-register-cart-button d-flex align-items-center">
                                 <!-- Login/Register -->
                                 <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                                     <div class="col-md-12">
                                         <ul class="">
                                          <li><a href="https://music.youtube.com/watch?v=zDv830B6H3g&feature=share" class="icoYt" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                           <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                           <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                         </ul>
                                       </div>
                                 </div>
                             </div>
                         </div>
                         <!-- Nav End -->

                     </div>
                 </nav>
             </div>
         </div>
     </div>
 </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <!-- <p>Review</p> -->
            <h2>
  
   
 


<?php

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require 'PHPMailer/src/Exception.php';
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = $_POST["email"];
        $name = $_POST["name"];
        $message = $_POST["message"];
        $title = $_POST["title"];

        $to_email = "ankushsss99@gmail.com";
        $to_name = "ankush saxena";

        $smtp_email = "smtp.ayush@gmail.com";
        $smtp_password = "asfd1243";
        $smtp_name = "contact request";
        // ------------------------------------------------


        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = $smtp_email;
        $mail->Password   = $smtp_password;
        // $mail->IsHTML(true);
        $mail->AddAddress($to_email, $to_name);
        $mail->SetFrom($email, $name);
        $mail->AddReplyTo($email, $name);
        // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
        $mail->Subject = $title;
        $content = $message;
        $mail->MsgHTML($content);
        if(!$mail->Send()) {
        echo "Error while sending Email.";
        
            
        } else {
        // echo "<script>alert('Email sent successfully')</script>";
        // header('Location: '."./index.html");
        echo "Thankyou for review";
        }
    }

?>
</h2>
        </div>
    </section>

    
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>