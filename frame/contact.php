<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>..:: LIBRARIA ::..</title>

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link href="style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>


<body>

    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index-2.html">
                                            <img src="images/libraria-logo-v1.png" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                            <span>/</span>
                                            <a href="mailto:support@libraria.com"><i
                                                    class="fa fa-envelope"></i>support@libraria.com</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="topbar-links">
                                            <a href="?page=signin"><i class="fa fa-lock"></i>Login / Register</a>
                                            <span>|</span>
                                            <div class="header-cart dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <small>0</small>
                                                </a>
                                                <div class="dropdown-menu cart-dropdown">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <img src="images/header-cart-image-01.jpg"
                                                                alt="cart item" />
                                                            <div class="item-info">
                                                                <div class="name">
                                                                    <a href="#">The Great Gatsby</a>
                                                                </div>
                                                                <div class="author"><strong>Author:</strong> F. Scott
                                                                    Fitzgerald</div>
                                                                <div class="price">1 X $10.00</div>
                                                            </div>
                                                            <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                        <li class="clearfix">
                                                            <img src="images/header-cart-image-02.jpg"
                                                                alt="cart item" />
                                                            <div class="item-info">
                                                                <div class="name">
                                                                    <a href="#">The Great Gatsby</a>
                                                                </div>
                                                                <div class="author"><strong>Author:</strong> F. Scott
                                                                    Fitzgerald</div>
                                                                <div class="price">1 X $10.00</div>
                                                            </div>
                                                            <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                        <li class="clearfix">
                                                            <img src="images/header-cart-image-03.jpg"
                                                                alt="cart item" />
                                                            <div class="item-info">
                                                                <div class="name">
                                                                    <a href="#">The Great Gatsby</a>
                                                                </div>
                                                                <div class="author"><strong>Author:</strong> F. Scott
                                                                    Fitzgerald</div>
                                                                <div class="price">1 X $10.00</div>
                                                            </div>
                                                            <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="cart-total">
                                                        <div class="title">SubTotal</div>
                                                        <div class="price">$30.00</div>
                                                    </div>
                                                    <div class="cart-buttons">
                                                        <a href="cart.html" class="btn btn-dark-gray">View Cart</a>
                                                        <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                <?php include_once("desktop.navbar.php");?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Contact Us</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Contact Us Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="contact-main">
                    <div class="contact-us">
                        <div class="container">
                            <div class="contact-location">
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office
                                                Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>121 King Street, Melbourne </li>
                                                <li>Victoria 3000 Australia</li>
                                                <li>PO Box 16122</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li>121 King Street, Melbourne </li>
                                                <li>Victoria 3000 Australia</li>
                                                <li>PO Box 16122</li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office
                                                Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>www.libraria.com</li>
                                                <li>support@libraria.com</li>
                                                <li>info@libraria.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="http://www.libraria.com/">www.libraria.com </a></li>
                                                <li><a href="mailto:support@libraria.com">support@libraria.com</a></li>
                                                <li><a href="mailto:info@libraria.com">info@libraria.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="contact-area">
                                    <div class="container">
                                        <div class="col-md-5 col-md-offset-1 border-gray-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-map bg-light margin-left">
                                                        <div class="company-map" id="map"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-gray-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form bg-light margin-right">
                                                        <h2>Send us a message</h2>
                                                        <span class="underline left"></span>
                                                        <div class="contact-fields">
                                                            <form id="contact" name="contact"
                                                                action="http://libraria.demo.presstigers.com/contact.html"
                                                                method="post">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text"
                                                                                placeholder="First Name"
                                                                                name="first-name" id="first-name"
                                                                                size="30" value=""
                                                                                aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text"
                                                                                placeholder="Last Name" name="last-name"
                                                                                id="last-name" size="30" value=""
                                                                                aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="email"
                                                                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                                                placeholder="Email" name="email"
                                                                                id="email" size="30" value=""
                                                                                aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text"
                                                                                placeholder="Phone Number" name="phone"
                                                                                id="phone" size="30" value=""
                                                                                aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control"
                                                                                placeholder="Your message" id="message"
                                                                                aria-required="true"></textarea>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-submit">
                                                                            <input class="btn btn-default"
                                                                                id="submit-contact-form" type="button"
                                                                                name="submit" value="Send Message" />
                                                                        </div>
                                                                    </div>
                                                                    <div id="success">
                                                                        <span>Your message was sent successfully! Our
                                                                            team will contact you soon.</span>
                                                                    </div>

                                                                    <div id="error">
                                                                        <span>Something went wrong, try refreshing and
                                                                            submitting the form again.</span>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Contact Us Section -->

    <!-- Start: Social Network -->
    <section class="social-network section-padding">
        <div class="container">
            <div class="center-content">
                <h2 class="section-title">Follow Us</h2>
                <span class="underline center"></span>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <ul>
                <li>
                    <a class="facebook" href="#" target="_blank">
                        <span>
                            <i class="fa fa-facebook-f"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="#" target="_blank">
                        <span>
                            <i class="fa fa-twitter"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="google" href="#" target="_blank">
                        <span>
                            <i class="fa fa-google-plus"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="rss" href="#" target="_blank">
                        <span>
                            <i class="fa fa-rss"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="#" target="_blank">
                        <span>
                            <i class="fa fa-linkedin"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="#" target="_blank">
                        <span>
                            <i class="fa fa-youtube"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Social Network -->

     <!-- Start: Footer -->
     <footer class="site-footer">
        <?php include_once("footer.php")?>
    </footer>
    <!-- End: Footer -->

    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>

    <!-- jQuery Easing -->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="js/mmenu.min.js"></script>

    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="js/harvey.min.js"></script>

    <!-- Waypoints - Load Elements on View -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- Facts Counter -->
    <script type="text/javascript" src="js/facts.counter.min.js"></script>

    <!-- MixItUp - Category Filter -->
    <script type="text/javascript" src="js/mixitup.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <!-- Accordion -->
    <script type="text/javascript" src="js/accordion.min.js"></script>

    <!-- Responsive Tabs -->
    <script type="text/javascript" src="js/responsive.tabs.min.js"></script>

    <!-- Responsive Table -->
    <script type="text/javascript" src="js/responsive.table.min.js"></script>

    <!-- Masonry -->
    <script type="text/javascript" src="js/masonry.min.js"></script>

    <!-- Carousel Swipe -->
    <script type="text/javascript" src="js/carousel.swipe.min.js"></script>

    <!-- bxSlider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>

    <!-- Google Map API -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT5k-RhvFSVIuCALkpHhKgQx6SJUd9gpI"></script>

    <!-- Google Map (Custom Style) -->
    <script type="text/javascript" src="js/google.map.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="js/main.js"></script>

</body>


</html>