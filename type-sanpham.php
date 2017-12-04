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
            <!-- navbar -->
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
                            <ul class="nav navbar-nav navbar-right margin-0 marright-10">
                                <li><a class="menu-title" href="#">GIỚI THIỆU</a></li>
                                <li><a class="menu-title" href="#about">DỊCH VỤ</a></li>
                                <li><a class="menu-title" href="#contact">SẢN PHẨM</a></li>
                                <li><a class="menu-title" href="#contact">TIN TỨC VÀ KHUYẾN MÃI</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </nav>
            </div>
            <!-- end navbar top -->
            
            <!--product-->
            <div class="container">
                <h2 class="box-heading text-uppercase text-center">SẢN PHẨM</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="item product-marbottom50">
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
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="item product-marbottom50">
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
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="item product-marbottom50">
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
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="item product-marbottom50">
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
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="item product-marbottom50">
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
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="item product-marbottom50">
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
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="item product-marbottom50">
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
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="item product-marbottom50">
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
            <!--end product-->
        </div>
        <!--footer-->
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