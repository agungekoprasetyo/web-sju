<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>JELAS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="JELAS" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

    <!-- CSS Files
    ================================================== -->
    <!-- <link href="assets/css/jpreloader.css" rel="stylesheet" type="text/css"> -->
    <link id="bootstrap" href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="assets/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/css/jquery.countdown.css" rel="stylesheet" type="text/css" /> -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link id="colors" href="assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/coloring.css" rel="stylesheet" type="text/css" />

    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="assets/revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="assets/revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="assets/revolution/css/navigation.css" type="text/css">
    @yield('custom-css')


</head>

<body class="hide-rtl">
    <div id="wrapper">
        <div id="topbar" class="text-light">
        </div>

        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex">
                            <div class="de-flex-col">
                                <h2 style="color: white;">JELAS</h2>
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="index.html">
                                        <img alt="" class="logo" src="images/logo-light.png" />
                                        <img alt="" class="logo-2" src="images/logo.png" />
                                    </a>
                                </div>

                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="{{url ('/produk')}}">Produk<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{url ('/klaimproduk')}}">Klaim Produk<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{url ('/artikel')}}">Artikel<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{url ('/tentangkami')}}">Tentang Kami<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{url ('/faq')}}">FAQ<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{route ('login')}}">Login<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{route ('register')}}">Daftar<span></span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            @yield('content')

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>JELAJAH ASURANSI</h5>
                            <ul>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>OUR CAPABILITY</h5>
                            <ul>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>
                                <li><a href="about.html">Lorem ipsum</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>OUR NEWS/TREND ISSUES</h5>
                            <div class="f-box f-border f-icon-left f-icon-circle">
                                <i class="icofont-news text-light"></i>
                                <div class="fb-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div class="f-box f-border f-icon-left f-icon-circle">
                                <i class="icofont-news text-light"></i>
                                <div class="fb-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>OUR PARTNER</h5>
                            <li><a href="about.html">Lorem ipsum</a></li>
                            <li><a href="about.html">Lorem ipsum</a></li>
                            <li><a href="about.html">Lorem ipsum</a></li>
                            <li><a href="about.html">Lorem ipsum</a></li>
                            <li><a href="about.html">Lorem ipsum</a></li>
                            <li><a href="about.html">Lorem ipsum</a></li>


                        </div>
                    </div>
                </div>
            </div>


        </footer>
        <!-- footer close -->


    </div>



    <!-- Javascript Files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jpreLoader.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/easing.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/enquire.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/jquery.plugin.js"></script>
    <script src="assets/js/typed.js"></script>
    <!-- <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/jquery.countdown.js"></script> -->
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/designesia.js"></script>

    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <!-- RS5.0 Extensions Files -->
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    @yield('custom-js')

    <script>
        jQuery(document).ready(function() {
            // revolution slider
            jQuery("#slider-revolution").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 5000,
                navigation: {
                    arrows: {
                        enable: true
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "hermes",
                        hide_onleave: true,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 20,
                        v_offset: 30,
                        space: 5,
                    },

                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                responsiveLevels: [1920, 1380, 1240],
                gridwidth: [1200, 1200, 940],
                spinner: "off",
                gridheight: 700,
                disableProgressBar: "on"
            });
        });
    </script>

</body>

</html>