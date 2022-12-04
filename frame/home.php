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

<body class="layout-v3">

    <!-- Start: Header Section -->
    <header id="header" class="navbar-wrapper">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="menu-wrap">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1>
                                    <a href="index-2.html">
                                        <img src="images/libraria-logo-v3.png" alt="LIBRARIA" />
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <!-- Navigation -->
                        <div class="navbar-collapse hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                               <?php include_once("desktop.navbar.php");?>
                            </ul>
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-md">
                                <div class="topbar-links">
                                    <a href="?page=signin"><i class="fa fa-lock"></i>Login / Register</a>
                                </div>
                            </div>
                            <!-- Header Topbar -->
                        </div>
                        <div class="header-socialbar hidden-sm hidden-xs">
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                            <ul class="share-links">
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <i class="fa fa-share"></i>
                                    </a>
                                    <div class="dropdown-menu social-dropdown">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-md hidden-lg">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                <?php include_once("mobile.navbar.php")?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Slider Section -->
    <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
        <!-- Carousel slides -->
        <div class="carousel-inner">
            <div class="item active">
                <figure>
                    <img alt="Home Slide" src="images/header-slider/home-v3/header-slide.jpg" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>What’s all the Libraria?</h2>
                        <p>Libraria gives you access to <strong>Audiobooks,</strong> <strong>eBooks,</strong>
                            <strong>Documentary,</strong> <strong>Journals and Magazine.</strong></p>
                        <div class="filter-box">
                            <form action="http://libraria.demo.presstigers.com/index.html" class="banner-filter-box"
                                method="get">
                                <div class="form-group">
                                    <label class="sr-only" for="keywords">Search by Keyword</label>
                                    <input class="form-control" placeholder="Search by Keyword" id="keywords"
                                        name="keywords" type="text">
                                </div>
                                <div class="form-group">
                                    <select name="catalog" id="catalog" class="form-control">
                                        <option>Search the Catalog</option>
                                        <option>Catalog 01</option>
                                        <option>Catalog 02</option>
                                        <option>Catalog 03</option>
                                        <option>Catalog 04</option>
                                        <option>Catalog 05</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="category" id="category" class="form-control">
                                        <option>All Categories</option>
                                        <option>Category 01</option>
                                        <option>Category 02</option>
                                        <option>Category 03</option>
                                        <option>Category 04</option>
                                        <option>Category 05</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                                <input class="form-control" type="submit" value="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Slider Section -->

    <!-- Start: Features -->
    <section class="features">
        <div class="container-fluid">
            <div class="row">
                <ul>
                    <li class="bg-yellow">
                        <div class="feature-box">
                            <i class="yellow"></i>
                            <h3>Books</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis,
                                pulvinar varius dui id.</p>
                            <a class="yellow" href="#">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-light-green">
                        <div class="feature-box">
                            <i class="light-green"></i>
                            <h3>eBooks</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis,
                                pulvinar varius dui id.</p>
                            <a class="light-green" href="#">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-blue">
                        <div class="feature-box">
                            <i class="blue"></i>
                            <h3>Course DVDs</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis,
                                pulvinar varius dui id.</p>
                            <a class="blue" href="#">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-red">
                        <div class="feature-box">
                            <i class="red"></i>
                            <h3>Magazines</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis,
                                pulvinar varius dui id.</p>
                            <a class="red" href="#">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-violet">
                        <div class="feature-box">
                            <i class="violet"></i>
                            <h3>Audio</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis,
                                pulvinar varius dui id.</p>
                            <a class="violet" href="#">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-green">
                        <div class="feature-box">
                            <i class="green"></i>
                            <h3>eAudio</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis,
                                pulvinar varius dui id.</p>
                            <a class="green" href="#">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Features -->

    <!-- Start: Welcome Section -->
    <section class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-wrap">
                        <div class="welcome-text">
                            <h2 class="section-title">Welcome to the libraria</h2>
                            <span class="underline left"></span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humor, or randomized words which don't
                                look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden in the middle of text. All the
                                Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200
                                Latin words, combined with a handful of model sentence structures, to generate Lorem
                                Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                repetition, injected humor, or non-characteristic words etc.</p>
                            <a class="btn btn-dark-gray" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-image"></div>
    </section>
    <!-- End: Welcome Section -->

    <!-- Start: Newsletter -->
    <section class="newsletter section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="center-content">
                        <h2 class="section-title">Subscribe to our Newsletters</h2>
                        <span class="underline center"></span>
                        <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                            those interested.</p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Enter your Email!" id="newsletter" name="newsletter"
                            type="email">
                        <input class="form-control" value="Subscribe" type="submit">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Newsletter -->

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

    <!-- Custom Scripts -->
    <script type="text/javascript" src="js/main.js"></script>

</body>


</html>