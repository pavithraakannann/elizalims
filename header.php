<!DOCTYPE html>
<html lang="en">

<head>
    <title> ElizaLIMS - AI Powered Laboratory Automation Platform </title>
    <link rel="icon" href="images/logo/logo-icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ElizaLIMS - AI Powered Laboratory Automation Platform " name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        rel="stylesheet">
 
  
</head>

<body>
    <div id="wrapper">

        <header class="transparent scroll-light has-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="index.php">
                                        <img class="logo-main" src="images/logo/logo.webp" alt="" loading="lazy">
                                        <img class="logo-scroll" src="images/logo/logo.webp" alt="" loading="lazy">
                                        <img class="logo-mobile" src="images/logo/logo.webp" alt="" loading="lazy">
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <?php $current_page = basename($_SERVER['PHP_SELF']); ?>

                                    <li><a class="menu-item <?= $current_page == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a></li>

                                    <li><a class="menu-item <?= $current_page == 'about.php' ? 'active' : '' ?>" href="about.php">About</a></li>

                                    <li>
                                        <a class="menu-item <?= in_array($current_page, ['elizalims-lims.php', 'elizalimsconnect.php']) ? 'active' : '' ?>" href="#">Products</a>
                                        <ul>
                                            <li><a class="menu-item <?= $current_page == 'elizalims-lims.php' ? 'active' : '' ?>" href="elizalims-lims.php">ElizaLIMS LIMS</a></li>
                                            <li><a class="menu-item <?= $current_page == 'elizalimsconnect.php' ? 'active' : '' ?>" href="elizalimsconnect.php">ElizaLIMS Connect</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="menu-item <?= $current_page == 'industries.php' ? 'active' : '' ?>" href="industries.php">Industries</a></li>

                                    <li><a class="menu-item <?= $current_page == 'pricing.php' ? 'active' : '' ?>" href="pricing.php">Pricing</a></li>

                                    <li>
                                        <a class="menu-item <?= in_array($current_page, ['blog.php', 'news.php']) ? 'active' : '' ?>" href="#">Resources</a>
                                        <ul>
                                            <li><a class="menu-item <?= $current_page == 'blog.php' ? 'active' : '' ?>" href="blog.php">Blogs</a></li>
                                            <li><a class="menu-item <?= $current_page == 'news.php' ? 'active' : '' ?>" href="news.php">News</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="menu-item <?= $current_page == 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact Us</a></li>
                                    <li class="mobile-book-demo d-lg-none">
                                        <a href="book-demo.php" class="btn-main text-white w-50 bg-color-2 mt-3">Book a Demo</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="book-demo.php" class="btn-main bg-color-2 ">Book a Demo</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>