<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metal library - metal music encyclopedia - android app</title>
    <meta name="description" content="Metal library, Metal music encyclopedia, Metal music android application">
    <meta name="keywords" content="meta library, metal archive, metal music, metal music android application">
    <meta name="author" content="vortgo">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">

    <!-- ==============================================
    CSS VENDOR
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/css/vendor/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="/css/vendor/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/css/vendor/animate.min.css">

    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <script src="js/vendor/modernizr.min.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar-main">

<!-- LOAD PAGE -->
<div class="animationload">
    <div class="loader"></div>
</div>

<!-- BACK TO TOP SECTION -->
<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

<!-- HEADER -->
<div class="header header-1">
    <!-- NAVBAR SECTION -->
    <div class="navbar-main">
        <div class="container">
            <nav id="navbar-main" class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#home">
                    <img src="/images/my/logo.png" alt="" height="50px" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#develop">Develop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#screenshot">Screenshot</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#support">Support</a>
                        </li>
                    </ul>
{{--                    <div class="sosmed-icon no-bg-hover float-right d-inline-flex">--}}
{{--                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                    </div>--}}
                </div>
            </nav> <!-- -->
        </div>
    </div>
</div>

<!-- BANNER -->
<div id="home" class="banner">
    <div class="owl-carousel owl-theme full-screen">
        <!-- Item 1 -->
        <div class="item">
            <!-- <div class="overlay-bg"></div> -->
            <img src="/images/my/s2.jpg" alt="Slider" class="img-slider">
            <div class="container d-flex align-items-center h-center banner-item">
                <div class="wrap-caption">
                    <h1 class="caption-heading text-shadowed">The Metal Library<br>in your phone</h1>
                    <p class="uk18 text-shadowed">Unofficial app of www.metal-archives.com</p>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.hma"><img src="/images/app-android.jpg" alt="app android" class="app-android mx-1 mb-2 img-slider-item"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-nav owl-nav"></div>
</div>

<!-- ABOUT -->
<div id="about" class="section bg-secondary">
    <div class="content-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div id="whoweare" class="whoweare owl-carousel owl-theme" data-background="">
                        <!-- Item 1 -->
                        <div class="item">
                            <img src="/images/my/screenshots/main.jpg" alt="main_screen_application">
                        </div>
                        <!-- Item 2 -->
                        <div class="item">
                            <img src="/images/my/screenshots/album.jpg" alt="album_screen_application">
                        </div>
                        <!-- Item 3 -->
                        <div class="item">
                            <img src="/images/my/screenshots/band-info.jpg" alt="band_info_screen_application">
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h2 class="section-heading text-left text-primary">
                        ALL YOU NEED IS HERE
                    </h2>
                    <p class="subheading text-left text-white">All metal music world in your phone</p>
                    <p class="text-white">Groups, albums, lyrics, latest releases and updates. Ability to listen to songs for review. Tons of information about your favorite bands. Constant updates from www.metal-archives.com</p>
                    <div class="spacer-30"></div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="box-icon-2">
                                <div class="icon">
                                    <i class="fa fa-music"></i>
                                </div>
                                <div class="body-content">
                                    <h4>Awesome metal archive</h4>
                                    <p class="text-white">Information about millions of songs, albums, groups in one place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="box-icon-2">
                                <div class="icon">
                                    <i class="fa fa-video-camera"></i>
                                </div>
                                <div class="body-content">
                                    <h4>Youtube integration</h4>
                                    <p class="text-white">Integration with Youtube allows you to listen to songs directly in the application</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="box-icon-2">
                                <div class="icon">
                                    <i class="fa fa-camera"></i>
                                </div>
                                <div class="body-content">
                                    <h4>New releases</h4>
                                    <p class="text-white">List of upcoming albums always fresh. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="box-icon-2">
                                <div class="icon">
                                    <i class="fa fa-volume-up"></i>
                                </div>
                                <div class="body-content">
                                    <h4>Lyrics</h4>
                                    <p class="text-white">Lyrics with constant updates</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FUN FACT -->
<div class="section bg-secondary-dark">
    <div class="content-wrap">
        <div class="container">

            <div class="row">

                <!-- Item 1 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="rs-icon-funfact text-white">
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="body-content">
                            <h2>132152</h2>
                            <p class="uk16">Bands</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="rs-icon-funfact text-white">
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="body-content">
                            <h2>380496</h2>
                            <p class="uk16">Albums</p>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="rs-icon-funfact text-white">
                        <div class="icon">
                            <i class="fa fa-music"></i>
                        </div>
                        <div class="body-content">
                            <h2>2709463</h2>
                            <p class="uk16">Songs</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- FEATURE -->
<div id="develop" class="section bgi-cover-fixed" data-background="/images/my/bg1.jpg">
    <div class="content-wrap pb-0" style="background-color: #0000008c;">
        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-6">

                    <img src="https://download-telegram.ru/wp-content/uploads/2015/10/Telegram-Channels.png" alt="" class="img-fluid d-none d-lg-block">

                </div>

                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="text-white text-shadowed">
                        Influence application development.
                    </h2>

                    <p class="text-white text-shadowed">You can directly influence the further development of the application. To do this, I opened a separate channel in a telegram for everyone.</p>
                    <p class="text-white text-shadowed">Feel free to suggest your ideas. Vote for new features. If possible, offer development assistance application.</p>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.hma"><img src="/images/app-android.jpg" alt="app android" class="app-android mx-1 mb-2 img-slider-item"></a>
                    <div class="spacer-content"></div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- SCREENSHOT -->
<div id="screenshot" class="section bg-secondary">
    <div class="content-wrap">
        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="section-heading text-center text-primary">
                        SCREENSHOT
                    </h2>
                    <p class="subheading text-center text-white">- A little more about the application -</p>
                </div>

            </div>

            <div class="row mt-4">

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div id="car_item_4" class="owl-carousel owl-theme popup-gallery">
                        <!-- Item 1 -->
                        <div class="item">
                            <a href="/images/my/screenshots/main.jpg" title="Gallery 1"><img src="/images/my/screenshots/main.jpg" alt="screenshot" class="sc-border img-fluid"></a>
                        </div>
                        <!-- Item 2 -->
                        <div class="item">
                            <a href="/images/my/screenshots/album.jpg" title="Gallery 1"><img src="/images/my/screenshots/album.jpg" alt="screenshot" class="sc-border img-fluid"></a>
                        </div>
                        <!-- Item 3 -->
                        <div class="item">
                            <a href="/images/my/screenshots/band-info.jpg" title="Gallery 1"><img src="/images/my/screenshots/band-info.jpg" alt="screenshot" class="sc-border img-fluid"></a>
                        </div>
                        <!-- Item 4 -->
                        <div class="item">
                            <a href="/images/my/screenshots/band-release.jpg" title="Gallery 1"><img src="/images/my/screenshots/band-release.jpg" alt="screenshot" class="sc-border img-fluid"></a>
                        </div>
                        <!-- Item 5 -->
                        <div class="item">
                            <a href="/images/my/screenshots/song.jpg" title="Gallery 1"><img src="/images/my/screenshots/song.jpg" alt="screenshot" class="sc-border img-fluid"></a>
                        </div>
                        <!-- Item 6 -->
                        <div class="item">
                            <a href="/images/my/screenshots/song1.jpg" title="Gallery 1"><img src="/images/my/screenshots/song1.jpg" alt="screenshot" class="sc-border img-fluid"></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<!-- CTA -->
<div id="support" class="section bgi-cover-center bg-primary" data-background="/images/my/bg2.jpg">
    <div class="content-wrap">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading text-center text-white">
                        SUPPORTS
                    </h2>
                    <p class="subheading text-center text-white">- and our contacts -</p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-12 col-md-12 col-lg-6 p-30">
                    <p class="text-white text-shadowed">Telegram: @vortgo</p>
                    <p class="text-white text-shadowed" >Telegram-dev-channel: @metallibrary-dev</p>
                    <p class="text-white text-shadowed">Email: vortgo@gmail.com</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 p-30">

                    <form class="form-contact form-contact-dark" id="contactForm" method="POST">
                       {{csrf_field()}}
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="p_email" placeholder="Your email to reply">
                                    <div class="help-block with-errors"></div>
                                </div>
                        <div class="form-group">
                            <textarea name="text" id="p_message" class="form-control" rows="6" placeholder="Enter your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-secondary">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- FOOTER SECTION -->
<div class="footer">
    <div class="fcopy">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="mt-3 text-center text-white">Copyright <script>new Date().getFullYear()>document.write(new Date().getFullYear());</script> © <span class="text-primary">Metal library</span> by vortgo. </p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- JS VENDOR -->
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/owl.carousel.js"></script>
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/imagesloaded.pkgd.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>
