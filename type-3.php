<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/slide-muti.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-3.less', 'css/type-3.css');
    ?>
    <link href="css/type-3.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="type-3">
        <div id="wrap">
            <div class="btt">
                <div class="bttop" style="display: block;"></div>
            </div>
            <!-- header top -->
            <header class="masthead header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="logo">
                                <a href="type-3.php"><img height="200" src="images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="pull-left  hidden-xs">    
                                <h3 class="slogan-text padtop-10">Đánh thức vẻ đẹp Làn da</h3>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                            <div class="pull-right martop-25 line3">
                                <span class="padright-10 text-gray contact-us">Call us: +15557200314</span>
                                <div class="icon-circle pull-right">
                                    <a href="#" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="icon-circle pull-right">
                                    <a href="#" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icon-circle pull-right">
                                    <a href="#" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
                                </div>
                                <div class="icon-circle pull-right">
                                    <a href="#" class="iLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="clearfix"></div>
            <!-- end header top -->
            <div class="container">
                <nav id="navbar-main" class="bg-header navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle nav-custom collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand menu-title" href="#">TRANG CHỦ</a>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse nav-custom">
                            <ul class="nav navbar-nav navbar-right margin-0 marright-10 mb-0">
                                <li class="dropdown">
                                    <a class="menu-title dropdown-toggle" data-toggle="dropdown" href="#">GIỚI THIỆU</a>
                                    <ul class="dropdown-menu" style="display: none;">
                                        <li><a href="#">Không gian spa</a></li>
                                        <li><a href="#">Đội ngũ nhân viên</a></li>
                                        <li><a href="#">Tuyển dụng</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="menu-title dropdown-toggle" data-toggle="dropdown" href="type-dichvu.php">DỊCH VỤ</a>
                                    <ul class="dropdown-menu" style="display: none;">
                                        <li><a href="#">Body</a></li>
                                        <li><a href="#">Skin</a></li>
                                        <li><a href="#">Wellness</a></li>
                                    </ul>
                                </li>
                                <li><a class="menu-title" href="#">SẢN PHẨM</a></li>
                                <li><a class="menu-title" href="#">TIN TỨC VÀ KHUYẾN MÃI</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="content-slider">
                    <div id="main-slider">
                        <div class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active" style="background-image: url(images/home1_slider1.jpg)">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-1">Essence of Natural Beauty</h1>
                                        <h2 class="animation animated-item-2">A simple web based flaform focused on improving the travel in dustry</h2>
                                        <p><a class="btn-slide animation animated-item-3" href="#">PURCHASE NOW</a></p>
                                    </div>
                                </div>
                                <!--/.item-->
                                <div class="item" style="background-image: url(images/home1_slider2.jpg)">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-1">Essence of Natural Beauty</h1>
                                        <h2 class="animation animated-item-2">A simple web based flaform focused on improving the travel in dustry</h2>
                                        <p><a class="btn-slide animation animated-item-3" href="#">PURCHASE NOW</a></p>
                                    </div>
                                </div>
                                <!--/.item-->
                            </div>
                            <!--/.carousel-inner-->
                        </div>
                        <!--/.carousel-->
                        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                        </a>
                        <a class="next hidden-xs" href="#main-slider" data-slide="next">
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="container">
                <div class="text-center">
                    <h1 class="service-title">Experience The Spa!</h1>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa perferendis earum, saepe blanditiis voluptatibus excepturi possimus, nulla ut necessitatibus vel iusto a reiciendis sint distinctio fuga, sit deleniti illo est?</p>
                    <div class="row-custom">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                            <div class="media">
                                <a href="#">
                                    <img class="media__image" src="images/Picture1.png">
                                </a>
                                <div class="media__body">
                                    <h2>BODY</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-sx-12">
                            <div class="media">
                                <a href="#">
                                    <img class="media__image" src="images/Picture2.png">
                                </a>
                                <div class="media__body">
                                    <h2>SKIN</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-sx-12">
                            <div class="media">
                                <a href="#">
                                    <img class="media__image" src="images/Picture3.png">
                                </a>
                                <div class="media__body">
                                    <h2>WELLNESS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="clearfix"></div>
            <br><br>
            <div class="container">
                <div class="row-custom">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li><span class="product-title">CHĂM SÓC DA.......</span></li>
                            <li class="pull-right mb-product">
                                <a id="tab-title" href="#vesinhtoanthan" data-toggle="tab">
                                    <span class="top-left pull-left"></span>VỆ SINH TOÀN THÂN
                                </a>
                            </li>
                            <li class="pull-right mb-product">
                                <a id="tab-title" href="#vesinhdavatoc" data-toggle="tab">
                                    <span class="top-left pull-left"></span>VỆ SINH DA VÀ TÓC
                                </a>
                            </li>
                            <li class="pull-right mb-product">
                                <a id="tab-title" href="#daugoi" data-toggle="tab">
                                    <span class="top-left pull-left"></span>DẦU GỘI
                                </a>
                            </li>
                            <li class="pull-right mb-product">
                                <a id="tab-title" href="#dauduongtoc" data-toggle="tab">
                                    <span class="top-left pull-left"></span>DẦU DƯỠNG TÓC
                                </a>
                            </li>
                            <li class="pull-right mb-product">
                                <a id="tab-title" href="#chamsocsuckhoe" data-toggle="tab">
                                    <span class="top-left pull-left"></span>CHĂM SÓC SỨC KHOẺ
                                </a>
                            </li>
                            <li class="pull-right mb-product">
                                <a id="tab-title" href="#chamsocmoi" data-toggle="tab">
                                    <span class="top-left pull-left"></span>CHĂM SÓC MÔI
                                </a>
                            </li>
                            <li class="active pull-right mb-product">
                                <a id="tab-title" href="#chamsocda" data-toggle="tab">
                                    <span class="top-left pull-left"></span>CHĂM SÓC DA
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tabs">
                            <div class="tab-pane active" id="chamsocda">

                                <div class="woocat-resp-listing">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12 first-product pull-left">
                                            <div class="item-img">
                                                <span class="onsale">Sale!</span>
                                                <img width="600" height="600" class="size-full" src="images/9-3.jpg" alt="">                   
                                            </div>
                                            <div class="item-content">  
                                                <h4><a href="#">Kem dưỡng da MarioBadescu</a></h4>                                                                               
                                                <!-- rating  -->
                                                <div class="reviews-content">
                                                    <div class="star">
                                                        <span style="width:65px"></span>
                                                    </div>
                                                    <div class="item-number-rating">
                                                        1 Review(s)                                 
                                                    </div>
                                                </div>  
                                                <!-- end rating  -->
                                                <div class="item-price">
                                                    <span>
                                                        <span class="woocommerce-Price-amount amount">920,000
                                                            &nbsp;
                                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                                        </span>                                   
                                                    </span>
                                                </div>
                                                <!-- add to cart, wishlist, compare -->

                                            </div>
                                        </div>
                                        <div class="resp-content-product clearfix col-md-8 col-sm-8 col-xs-12">


                                            <div class="item pull-left">
                                                <div class="item-wrap">
                                                    <div class="item-detail">                                       
                                                        <div class="item-img products-thumb">                                           
                                                            <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            <img width="300" height="300" src="images/10-3-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="">                                        
                                                        </div>                                      
                                                        <div class="item-content">
                                                            <h4><a href="#">Máy massage mặt cầm tay</a></h4>                                                                               
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                            </div>  
                                                            <!-- end rating  -->
                                                            <div class="item-price">
                                                                <span>
                                                                    <span class="woocommerce-Price-amount amount">820,000
                                                                        &nbsp;
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                    </span>                                               
                                                                </span>
                                                            </div>
                                                            <div class="add-info">

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" data-product-id="8361" data-product-type="simple" class="add_to_wishlist">
                                                                        Add to Wishlist</a>
                                                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                </div>
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                                                <div class="woocommerce product compare-button">
                                                                    <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
                                                                </div>                                           
                                                            </div>
                                                        </div>                                          
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item pull-left">
                                                <div class="item-wrap">
                                                    <div class="item-detail">                                       
                                                        <div class="item-img products-thumb">                                           
                                                            <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            <img width="300" height="300" src="images/10-3-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="">                                        
                                                        </div>                                      
                                                        <div class="item-content">
                                                            <h4><a href="#">Máy massage mặt cầm tay</a></h4>                                                                               
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                            </div>  
                                                            <!-- end rating  -->
                                                            <div class="item-price">
                                                                <span>
                                                                    <span class="woocommerce-Price-amount amount">820,000
                                                                        &nbsp;
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                    </span>                                               
                                                                </span>
                                                            </div>
                                                            <div class="add-info">

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" data-product-id="8361" data-product-type="simple" class="add_to_wishlist">
                                                                        Add to Wishlist</a>
                                                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                </div>
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                                                <div class="woocommerce product compare-button">
                                                                    <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
                                                                </div>                                           
                                                            </div>
                                                        </div>                                          
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item pull-left">
                                                <div class="item-wrap">
                                                    <div class="item-detail">                                       
                                                        <div class="item-img products-thumb">                                           
                                                            <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            <img width="300" height="300" src="images/10-3-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="">                                        
                                                        </div>                                      
                                                        <div class="item-content">
                                                            <h4><a href="#">Máy massage mặt cầm tay</a></h4>                                                                               
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                            </div>  
                                                            <!-- end rating  -->
                                                            <div class="item-price">
                                                                <span>
                                                                    <span class="woocommerce-Price-amount amount">820,000
                                                                        &nbsp;
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                    </span>                                               
                                                                </span>
                                                            </div>
                                                            <div class="add-info">

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" data-product-id="8361" data-product-type="simple" class="add_to_wishlist">
                                                                        Add to Wishlist</a>
                                                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                </div>
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                                                <div class="woocommerce product compare-button">
                                                                    <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
                                                                </div>                                           
                                                            </div>
                                                        </div>                                          
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item pull-left">
                                                <div class="item-wrap">
                                                    <div class="item-detail">                                       
                                                        <div class="item-img products-thumb">                                           
                                                            <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            <img width="300" height="300" src="images/10-3-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="">                                        
                                                        </div>                                      
                                                        <div class="item-content">
                                                            <h4><a href="#">Máy massage mặt cầm tay</a></h4>                                                                               
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                            </div>  
                                                            <!-- end rating  -->
                                                            <div class="item-price">
                                                                <span>
                                                                    <span class="woocommerce-Price-amount amount">820,000
                                                                        &nbsp;
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                    </span>                                               
                                                                </span>
                                                            </div>
                                                            <div class="add-info">

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" data-product-id="8361" data-product-type="simple" class="add_to_wishlist">
                                                                        Add to Wishlist</a>
                                                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                </div>
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                                                <div class="woocommerce product compare-button">
                                                                    <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
                                                                </div>                                           
                                                            </div>
                                                        </div>                                          
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item pull-left">
                                                <div class="item-wrap">
                                                    <div class="item-detail">                                       
                                                        <div class="item-img products-thumb">                                           
                                                            <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            <img width="300" height="300" src="images/10-3-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="">                                        
                                                        </div>                                      
                                                        <div class="item-content">
                                                            <h4><a href="#">Máy massage mặt cầm tay</a></h4>                                                                               
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                            </div>  
                                                            <!-- end rating  -->
                                                            <div class="item-price">
                                                                <span>
                                                                    <span class="woocommerce-Price-amount amount">820,000
                                                                        &nbsp;
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                    </span>                                               
                                                                </span>
                                                            </div>
                                                            <div class="add-info">

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" data-product-id="8361" data-product-type="simple" class="add_to_wishlist">
                                                                        Add to Wishlist</a>
                                                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                </div>
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                                                <div class="woocommerce product compare-button">
                                                                    <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
                                                                </div>                                           
                                                            </div>
                                                        </div>                                          
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item pull-left">
                                                <div class="item-wrap">
                                                    <div class="item-detail">                                       
                                                        <div class="item-img products-thumb">                                           
                                                            <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            <img width="300" height="300" src="images/10-3-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="">                                        
                                                        </div>                                      
                                                        <div class="item-content">
                                                            <h4><a href="#">Máy massage mặt cầm tay</a></h4>                                                                               
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                            </div>  
                                                            <!-- end rating  -->
                                                            <div class="item-price">
                                                                <span>
                                                                    <span class="woocommerce-Price-amount amount">820,000
                                                                        &nbsp;
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                    </span>                                               
                                                                </span>
                                                            </div>
                                                            <div class="add-info">

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" data-product-id="8361" data-product-type="simple" class="add_to_wishlist">
                                                                        Add to Wishlist</a>
                                                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                </div>
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                                                <div class="woocommerce product compare-button">
                                                                    <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
                                                                </div>                                           
                                                            </div>
                                                        </div>                                          
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item pull-left">
                                                <div class="item-wrap">
                                                    <div class="item-detail">                                       
                                                        <div class="item-img products-thumb">                                           
                                                            <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            <img width="300" height="300" src="images/10-3-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="">                                        
                                                        </div>                                      
                                                        <div class="item-content">
                                                            <h4><a href="#">Máy massage mặt cầm tay</a></h4>                                                                               
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                            </div>  
                                                            <!-- end rating  -->
                                                            <div class="item-price">
                                                                <span>
                                                                    <span class="woocommerce-Price-amount amount">820,000
                                                                        &nbsp;
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                    </span>                                               
                                                                </span>
                                                            </div>
                                                            <div class="add-info">

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" data-product-id="8361" data-product-type="simple" class="add_to_wishlist">
                                                                        Add to Wishlist</a>
                                                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                </div>
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                                                <div class="woocommerce product compare-button">
                                                                    <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
                                                                </div>                                           
                                                            </div>
                                                        </div>                                          
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item pull-left">
                                                <div class="item-wrap">
                                                    <div class="item-detail">                                       
                                                        <div class="item-img products-thumb">                                           
                                                            <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            <img width="300" height="300" src="images/10-3-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="">                                        
                                                        </div>                                      
                                                        <div class="item-content">
                                                            <h4><a href="#">Máy massage mặt cầm tay</a></h4>                                                                               
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                            </div>  
                                                            <!-- end rating  -->
                                                            <div class="item-price">
                                                                <span>
                                                                    <span class="woocommerce-Price-amount amount">820,000
                                                                        &nbsp;
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                    </span>                                               
                                                                </span>
                                                            </div>
                                                            <div class="add-info">

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" data-product-id="8361" data-product-type="simple" class="add_to_wishlist">
                                                                        Add to Wishlist</a>
                                                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">
                                                                            Browse Wishlist         
                                                                        </a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                </div>
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                                                <div class="woocommerce product compare-button">
                                                                    <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
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
                            <div class="tab-pane" id="chamsocmoi">...Content2...</div>
                            <div class="tab-pane" id="chamsocsuckhoe">...Content3...</div>
                            <div class="tab-pane" id="dauduongtoc">...Content4...</div>
                            <div class="tab-pane" id="daugoi">...Content5...</div>
                            <div class="tab-pane" id="vesinhdavatoc">...Content6...</div>
                            <div class="tab-pane" id="vesinhtoanthan">...Content7...</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="container">
                <div class="main-box-contact">
                    <div class="row-custom">
                        <div class="my-container marleft-10 marright-10">
                        <h1 class="service-title text-center schedule-text">Đặt lịch hẹn</h1>
                            <div class="row-custom">
                                <div class="col-sm-8 col-md-8 contact-form">
                                    <form id="contact" method="post" class="form" role="form">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                                <input class="form-control form-width input-newslatter" id="name" name="name" placeholder="YOUR NAME" type="text" required autofocus />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                                <input class="form-control form-width input-newslatter" id="email" name="email" placeholder="YOUR PHONE" type="email" required />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                                <input class="form-control form-width input-newslatter" id="name" name="name" placeholder="YOUR EMAIL" type="text" required autofocus />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                                <input class="form-control form-width input-newslatter" id="email" name="email" placeholder="PREFFERED DATE AND TIME" type="email" required />
                                            </div>
                                        </div>
                                        <textarea class="form-control form-width input-newslatter" id="message" name="message" placeholder="Write your comment here" rows="5"></textarea>
                                        <button type="submit" class="btn-contact">Gửi</button>
                                    </form>
                                </div>
                                <div class="col-xs-12 col-md-4 col-sm-4">
                                    <div class="schedule-text">
                                        <h3>Thời gian làm việc</h3>
                                        <div class="schedule-box padbottom-10">
                                            <p class="marbottom-0"><i class="fa fa-clock-o marright-10" aria-hidden="true"></i>Monday-Friday</p>
                                            <span class="marleft-20">9:00 sáng - 6:00 tối</span>
                                        </div>
                                        <div class="schedule-box padbottom-10">
                                            <p class="marbottom-0"><i class="fa fa-map-marker marright-10" aria-hidden="true"></i></i>Monday-Friday</p>
                                            <span class="marleft-20">9:00 sáng - 6:00 tối</span>
                                        </div>
                                        <div class="padbottom-10">
                                            <p class="marbottom-0"><i class="fa fa-phone marright-10" aria-hidden="true"></i>Monday-Friday</p>
                                            <span class="marleft-20">9:00 sáng - 6:00 tối</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>

            <div class="container">
                <h2 class="text-center">Tin tức và ưu đãi mới nhất</h2>
                <div class="row-custom">

                    <div class="col-sm-6">
                        <div class="main-news">
                            <div class="news-left2">
                                <a href="#"><img src="images/Picture2.png"></a> 
                            </div>
                            <div class="news-right2">
                                <h2><a href="#">Huấn luyện và chyển giao công nghệ làm đẹp Green Peel từ Đức</a> </h2>
                                <p><span><i class="fa fa-calendar"></i>20/03/2017.</span></p>
                            </div>
                        </div>
                        <div class="main-news">
                            <div class="news-left2">
                                <a href="#"><img src="images/Picture2.png"></a> 
                            </div>
                            <div class="news-right2">
                                <h2><a href="#">Huấn luyện và chyển giao công nghệ làm đẹp Green Peel từ Đức</a> </h2>
                                <p><span><i class="fa fa-calendar"></i>20/03/2017.</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="main-news">
                            <div class="news-left2">
                                <a href="#"><img src="images/Picture2.png"></a> 
                            </div>
                            <div class="news-right2">
                                <h2><a href="#">Huấn luyện và chyển giao công nghệ làm đẹp Green Peel từ Đức</a> </h2>
                                <p><span><i class="fa fa-calendar"></i>20/03/2017.</span></p>
                            </div>
                        </div>
                        <div class="main-news">
                            <div class="news-left2">
                                <a href="#"><img src="images/Picture2.png"></a> 
                            </div>
                            <div class="news-right2">
                                <h2><a href="#">Huấn luyện và chyển giao công nghệ làm đẹp Green Peel từ Đức</a> </h2>
                                <p><span><i class="fa fa-calendar"></i>20/03/2017.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="button" class="btn btn-primary form-control text-center" value="Xem thêm tin tức và ưu đãi">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <footer id="footer" class="footer">
            <div class="footer-background">
                <div class="container">
                    <div class="row">    
                        <div class="col-xs-12 col-sm-4 col-md-4 column logo-fnone">          
                            <h2 class="footer-title">liên Hệ</h2>
                            <p>Lorem ipsum dolor sit amet, vix sumo modus diceret ex, meis feugait te his. Etiam moderatius necessitatibus no usu. Eu pro solet graeco suscipit, nostrud eleifend iracundia pro ea.</p>
                            <div class="padbottom-10">
                                <p class="marbottom-0"><i class="fa fa-map-marker marright-10 icon-right" aria-hidden="true"></i> Số 39, Nguyễn Bỉnh Khiêm, Phường 1, Quận Gò Vấp, TP.HCM</p>
                            </div>
                            <div class="padbottom-10">
                                <p class="marbottom-0"><i class="fa fa-phone marright-10 icon-right" aria-hidden="true"></i>Inquiry - 0123456789</p>
                            </div>
                            <div class="padbottom-10">
                                <p class="marbottom-0 icon-right"><i class="fa fa-globe marright-10 icon-right" aria-hidden="true"></i>www.domain.com</p>
                            </div>
                            <div class="padbottom-10">
                                <p class="marbottom-0 icon-right"><i class="fa fa-envelope-o marright-10 icon-right" aria-hidden="true"></i>info@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 column">          
                            <h2 class="footer-title">DỊCH VỤ</h2>
                            <div class="col-xs-12 col-md-6 column">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right icon-right"></i>Trang chủ</a></li>
                                </ul> 
                            </div>
                            <div class="col-xs-12 col-md-6 column">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right icon-right"></i>Trang chủ</a></li>
                                </ul> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 column">          
                            <h2 class="footer-title">NEWLETTER</h2>
                            <ul>
                                <li>
                                    <p>Nhận thông tin khuyến mãi từ chúng tôi:</p>
                                    <p>  <input type="text" name="email" class="input-newslatter" placeholder="Email của bạn..." >
                                        <button type="submit" class="btn-newslatter "><i class="glyphicon glyphicon-envelope"></i></button>
                                    </p>
                                    <div class="martop-25 line3">
                                        <div class="icon-circle pull-left">
                                            <a href="#" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                                        </div>
                                        <div class="icon-circle pull-left">
                                            <a href="#" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
                                        </div>
                                        <div class="icon-circle pull-left">
                                            <a href="#" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                        <div class="icon-circle pull-left">
                                            <a href="#" class="iLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul> 
                            
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center copy">&copyCopyright 2017</p>
        </footer><!-- Footer-->
    </div>
</body>
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/menubt.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>

var affixElement = '#navbar-main';
$(affixElement).affix({
  offset: {
    // Distance of between element and top page
    top: function () {
      return (this.top = $(affixElement).offset().top)
    },
    // when start #footer 
    bottom: function () { 
      return (this.bottom = $('#footer').outerHeight(true))
    }
  }
});

function activaTab(tab){
    $('.tab-pane a[href="#' + tab + '"]').tab('show');
};
$(document).ready(function(){
    activaTab('chamsocda');
});
</script>
</html>