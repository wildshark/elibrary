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

    <!-- Responsive Table -->
    <link rel="stylesheet" type="text/css" href="css/responsivetable.css" />

    <!-- Accordion Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/jquery.accordion.css">

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
                                            <a href="signin.html"><i class="fa fa-lock"></i>Login / Register</a>
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
                                    <?php include_once("desktop.navbar.php")?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md">
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

    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Books & Media Listing</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li>Books & Media</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="booksmedia-detail-main">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                                <div class="container">
                                    <div class="filter-box">
                                        <h3>What are you looking for at the library?</h3>
                                        <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="form-group">
                                                    <label class="sr-only" for="keywords">Search by Keyword</label>
                                                    <input class="form-control" placeholder="Search by Keyword"
                                                        id="keywords" name="keywords" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
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
                                            </div>
                                            <div class="col-md-3 col-sm-6">
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
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <!-- End: Search Section -->
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-md-push-3">
                                <div class="booksmedia-detail-box">
                                    <!--div class="single-book-box">
                                        <div class="post-thumbnail">
                                            <div class="book-list-icon yellow-icon"></div>
                                            <img alt="Book" src="images/books-media/list-view/book-media-01.jpg" />
                                        </div>
                                        <div class="post-detail">
                                            <div class="books-social-sharing">
                                                <ul>
                                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="optional-links">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Add To Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Mail"><i
                                                                class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <header class="entry-header">
                                                <h2 class="entry-title">The Great Gatsby</h2>
                                                <ul>
                                                    <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                    <li>
                                                        <div class="rating">
                                                            <strong>Rating:</strong>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                        </div>
                                                    </li>
                                                    <li><strong>Edition:</strong> First edition</li>
                                                    <li><strong>Publisher:</strong> New York : Shaye Areheart Books,
                                                        c2008</li>
                                                </ul>
                                            </header>
                                            <div class="entry-content post-buttons">
                                                <a href="#." class="btn btn-dark-gray">Place a Hold</a>
                                                <a href="#." class="btn btn-dark-gray">View sample</a>
                                                <a href="#." class="btn btn-dark-gray">Find Similar Titles</a>
                                            </div>
                                        </div>
                                    </div!-->
                                    <!--p><strong>Summary:</strong> There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                        anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                        generators on the Internet tend to repeat predefined chunks as necessary, making
                                        this the first true generator on the Internet. </p>
                                    <ul class="detail-page-listing">
                                        <li><strong>Length:</strong> 518 pages.</li>
                                        <li><strong>Format:</strong> DVD</li>
                                        <li><strong>Language Note:</strong> Icelandic dialogue; English subtitles.</li>
                                        <li><strong>Genre :</strong> Feature films, Fiction films, Drama</li>
                                        <li><strong>Topics:</strong> Friendship, Bullies, Pranks, School</li>
                                        <li><strong>Time Period:</strong> 2000s -- 21st century</li>
                                    </ul-->
                                    <div class="table-tabs" id="responsiveTabs">
                                        <!--ul class="nav nav-tabs">
                                            <li class="active"><b class="arrow-up"></b><a data-toggle="tab"
                                                    href="#sectionA">Copies: 05</a></li>
                                            <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Reviews
                                                    (12)</a></li>
                                            <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Table of
                                                    Contents</a></li>
                                            <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">Novelist
                                                    Recommendations</a></li>
                                        </ul-->
                                        <div class="tab-content">
                                            <div id="sectionA" class="tab-pane fade in active">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Title</th>
                                                            <th>Type</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?=table_fomrat($collection['books'])?>                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--div id="sectionB" class="tab-pane fade in">
                                                <h5>Lorem Ipsum Dolor</h5>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable. If you are going to use a passage of Lorem Ipsum, you
                                                    need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text. All the Lorem Ipsum generators on the Internet tend
                                                    to repeat predefined chunks as necessary, making this the first true
                                                    generator.</p>
                                            </div>
                                            <div id="sectionC" class="tab-pane fade in">
                                                <h5>Lorem Ipsum Dolor</h5>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable. If you are going to use a passage of Lorem Ipsum, you
                                                    need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text. All the Lorem Ipsum generators on the Internet tend
                                                    to repeat predefined chunks as necessary, making this the first true
                                                    generator.</p>
                                            </div>
                                            <div id="sectionD" class="tab-pane fade in">
                                                <h5>Lorem Ipsum Dolor</h5>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable. If you are going to use a passage of Lorem Ipsum, you
                                                    need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text. All the Lorem Ipsum generators on the Internet tend
                                                    to repeat predefined chunks as necessary, making this the first true
                                                    generator.</p>
                                            </div>
                                            <div id="sectionE" class="tab-pane fade in">
                                                <h5>Lorem Ipsum Dolor</h5>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable. If you are going to use a passage of Lorem Ipsum, you
                                                    need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text. All the Lorem Ipsum generators on the Internet tend
                                                    to repeat predefined chunks as necessary, making this the first true
                                                    generator.</p>
                                            </div>
                                            <div id="sectionF" class="tab-pane fade in">
                                                <h5>Lorem Ipsum Dolor</h5>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable. If you are going to use a passage of Lorem Ipsum, you
                                                    need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text. All the Lorem Ipsum generators on the Internet tend
                                                    to repeat predefined chunks as necessary, making this the first true
                                                    generator.</p>
                                            </div-->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-md-pull-9">
                                <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                    <div class="widget widget_related_search open" data-accordion>
                                        <h4 class="widget-title" data-control>Related Searches</h4>
                                        <div data-content>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Subject</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Authors</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Series</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Other Searches</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_narrow_search" data-accordion>
                                        <h4 class="widget-title" data-control>Narrow your search</h4>
                                        <div data-content>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Type of Material</h5>
                                                <div class="widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books">
                                                            Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic"
                                                                checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks">
                                                            ebooks</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Publishing Date </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books">
                                                            Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic"
                                                                checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks">
                                                            ebooks</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Popularity </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books">
                                                            Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic"
                                                                checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks">
                                                            ebooks</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Language </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books">
                                                            Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic"
                                                                checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks">
                                                            ebooks</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material"
                                                                value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_recent_releases">
                                        <h4 class="widget-title">New Releases</h4>
                                        <ul>
                                            <li><a href="#">Books</a></li>
                                            <li><a href="#">eBooks</a></li>
                                            <li><a href="#">DVDS</a></li>
                                            <li><a href="#">Magazines</a></li>
                                            <li><a href="#">Audio</a></li>
                                            <li><a href="#">eAudio</a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_recent_entries">
                                        <h4 class="widget-title">On-Order Items</h4>
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="images/order-item-01.jpg" alt="product" />
                                                </figure>
                                                <a href="#">The Sonic Boom</a>
                                                <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                <span><strong>ISBN:</strong> 978158157</span>
                                                <div class="rating">
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/order-item-02.jpg" alt="product" />
                                                </figure>
                                                <a href="#">The Sonic Boom</a>
                                                <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                <span><strong>ISBN:</strong> 978158157</span>
                                                <div class="rating">
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/order-item-03.jpg" alt="product" />
                                                </figure>
                                                <a href="#">The Sonic Boom</a>
                                                <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                <span><strong>ISBN:</strong> 978158157</span>
                                                <div class="rating">
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                    <span>☆</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->

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