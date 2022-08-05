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
    <meta name="title" content="Growtopia Gemgenerator - Free gems! ">
    <meta name="description" content="Free Growtopia Gems Since 2021! ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gemgenerator.xyz/">
    <meta property="og:title" content="Growtopia Gem Generator - Free gems for everyone! ">
    <meta property="og:description" content="¨Gemgenerator.xyz - The best Growtopia gem generator. We have been up since 2021!">
    <meta property="og:image" content="https://gemgenerator.xyz/gt-header-title-logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gemgenerator.xyz/">
    <meta property="twitter:title" content="Growtopia Gem Generator - Free gems for everyone! ">
    <meta property="twitter:description" content="Gemgenerator.xyz - The best Growtopia gem generator. We have been up since 2021!">
    <meta property="twitter:image" content="https://gemgenerator.xyz/gt-header-title-logo.png">
    
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
                <div class="content">
                    <section class="common-box ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <form method="POST" action="generation.php" accept-charset="UTF-8" class="" role="form"><input name="_token" type="hidden" value="">
                                        <div class="row title-payment">
                                            <div class="col-md-12 col-sm-12">
                                                <p>Welcome! Choose an amount of gems to generate.<br />
                                                    This is the best free Gem Generator for Growtopia.</p>
                                            </div><br />
                                        </div>
                                        <div class="row">
                                            <div class="column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <ul class="product-list small">
                                                    <li dir="auto">
                                                        <input id="product-rt_grope_gem_bag" name="product" type="radio" value="=">

                                                        <label for="product-rt_grope_gem_bag" data-toggle="modal" data-target="#modal-rt_grope_gem_bag">
                                                            <span class="img-product">
                                                                <img src="rt_grope_gem_bag.png" alt="rt_grope_gem_bag" class="img-responsive" title=" Bag o&#039; Gems" />
                                                            </span>
                                                            <span class="text-capitalize text-center price">
                                                                <p>Free</p>
                                                            </span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="modal fade product-list-popup" id="modal-rt_grope_gem_bag" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h3> 500.000 Gems </h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <span class="get-title">You get:</span> 500.000 gems.
                                                            <br><br>
                                                            <span class="get-description">Description:</span> Get a lot of gems!

                                                        </div>
                                                        <div class="modal-footer center-align">
                                                            <button type="button" class="btn btn-primary grow-button-pay grow-button-popup-pay"><a style="color: white;" href="generation.php">Generate it!</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <ul class="product-list small">
                                                    <li dir="auto">
                                                        <input id="product-rt_grope_gem_chest" name="product" type="radio" value="">

                                                        <label for="product-rt_grope_gem_chest" data-toggle="modal" data-target="#modal-rt_grope_gem_chest">
                                                            <span class="img-product">
                                                                <img src="rt_grope_gem_chest.png" alt="rt_grope_gem_chest" class="img-responsive" title="Chest o&#039; Gems" />
                                                            </span>
                                                            <span class="text-capitalize text-center price">
                                                                <p>Free</p>
                                                            </span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="modal fade product-list-popup" id="modal-rt_grope_gem_chest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h3>1.000.000 Gems</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <span class="get-title">You get:</span> 1.000.000 Gems
                                                            <br><br>
                                                            <span class="get-description">Description:</span> Get a huge amount of gems!

                                                        </div>
                                                        <div class="modal-footer center-align">
                                                            <button type="button" class="btn btn-primary grow-button-pay grow-button-popup-pay"><a style="color:white;" href="generation.php">Generate it!</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <ul class="product-list small">
                                                    <li dir="auto">
                                                        <input id="product-rt_grope_gem_fountain" name="product" type="radio" value="">

                                                        <label for="product-rt_grope_gem_fountain" data-toggle="modal" data-target="#modal-rt_grope_gem_fountain">
                                                            <span class="img-product">
                                                                <img src="rt_grope_gem_fountain.png" alt="rt_grope_gem_fountain" class="img-responsive" title="Gems Fountain" />
                                                            </span>
                                                            <span class="text-capitalize text-center price">
                                                                <p>Free</p>
                                                            </span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="modal fade product-list-popup" id="modal-rt_grope_gem_fountain" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h3>2.000.000 Gems</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <span class="get-title">You get:</span> 2.000.000 Gems
                                                            <br><br>
                                                            <span class="get-description">Description:</span> Get an enormous pile of gems. This is way more than you'd ever need!

                                                        </div>
                                                        <div class="modal-footer center-align">
                                                            <button type="button" class="btn btn-primary grow-button-pay grow-button-popup-pay"><a style="color:white;" href="generation.php">Generate it!</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!--<input class="btn btn-lg btn-primary grow-button-pay" id="grow-button-pay" type="submit" value="Proceed to Generation">-->
                                        </div>
                                    </form>
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
<button type="button" class="btn btn-primary hidden" data-toggle="modal" id="consentPopup" data-target="#consentModal"></button>
<div class="modal fade" id="consentModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="panel-heading">
                    <h3 class="text-center text-info">Welcome!</h3>
                </div>
                <p class="text-muted">
                    We use cookies and technological tools to analyse the traffic of this website, enhance your
                    experience and offer you ads tailored to your interests.
                </p>
                <p class="text-muted">
                    Maintain control over your data by setting cookies, you can change or withdraw your consent at any
                    time.
                    If you refuse cookies, it does not affect the way our site operates, however you will not be able to
                    take full advantage of all our features. For more information, consult our
                    <a href="https://legal.ubi.com/privacypolicy/" title="Legal" target="_blank">privacy policy</a>.
                </p>
                <div class="h6"><small>
                        <table class="table">
                            <tr>
                                <th>Tracker</th>
                                <th>Description</th>
                                <th>Partner</th>
                                <th>Expiration</th>
                            </tr>
                            <tr>
                                <td>Google Analytics</td>
                                <td>Google Analytics is a web analytics service offered by Google that tracks and reports website traffic.</td>
                                <td>No</td>
                                <td>A Year</td>
                            </tr>
                        </table>
                    </small>
                </div>
                <div class="row center-align">
                    <div class="col-lg-3 col-sm-2"></div>
                    <div class="col-lg-3 col-sm-4">
                        <button id="refuse-consent" class="btn btn-primary grow-button">I refuse cookies</button>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <button id="accept-consent" class="btn btn-primary grow-button">I accept cookies</button>
                    </div>
                    <div class="col-lg-3 col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    $('document').ready(function() {
        gtConsentCookie = getCookie('gt_consent_status');

        if (gtConsentCookie === '') {
            $('#consentPopup').trigger('click');
        }

        $('#accept-consent').on('click', function() {
            setCookie('gt_consent_status', 1, 365);
            $('#consentPopup').trigger('click');
            window.location = window.location.href;
        });
        $('#refuse-consent').on('click', function() {
            setCookie('gt_consent_status', 0, 180);
            $('#consentPopup').trigger('click');
        });
        $('.withdraw-cookie-consent.show-accept a').on('click', function() {
            $('#consentPopup').trigger('click');
        });
        $('#manage-cookie-consent').on('click', () => {
            if (document.cookie.indexOf("gt_consent_status=1") >= 0) {
                if (!confirm("Are you sure you want to withdraw your consent for saving cookies?"))
                    return false;

                document.cookie.split(";").forEach(function(c) {
                    document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/");
                });
                var cookies = document.cookie.split("; ");
                for (var c = 0; c < cookies.length; c++) {
                    var d = window.location.hostname.split(".");
                    while (d.length > 0) {
                        var cookieBase = encodeURIComponent(cookies[c].split(";")[0].split("=")[0]) + '=; expires=Thu, 01-Jan-1970 00:00:01 GMT; domain=' + d.join('.') + ' ;path=';
                        var p = location.pathname.split('/');
                        document.cookie = cookieBase + '/';
                        while (p.length > 0) {
                            document.cookie = cookieBase + p.join('/');
                            p.pop();
                        }
                        d.shift();
                    }
                }
                $('#consentPopup').trigger('click');
            } else {
                $('#consentPopup').trigger('click');
            }
        });
    });
    
</script>

</html>
