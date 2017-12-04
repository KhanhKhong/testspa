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
    <link rel="stylesheet" type="text/css" href="css/slider.css">
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
                <div class="title-product3">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></a></li>
                        <li><a href="product.html">Sản phẩm</a></li>
                        <li><a href="product.html">body</a></li>
                        <li>Gucci</li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="single-product-top row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="product-images">
                                <div class="product-images-container thumbnail-left">
                                    <div id="slider" class="product-responsive-thumbnail">
                                        <div class="item-thumbnail-product">
                                            <div class="thumbnail-wrapper">
                                                <img src="images/pd1.jpg" alt="description" class="thumbs-img" />
                                            </div>
                                        </div>
                                        <div class="item-thumbnail-product">
                                            <div class="thumbnail-wrapper">
                                                <img src="images/pd2.jpg" alt="description" class="thumbs-img" />
                                            </div>
                                        </div>
                                        <div class="item-thumbnail-product">
                                            <div class="thumbnail-wrapper">
                                                <img src="images/pd3.jpg" alt="description" class="thumbs-img" />
                                            </div>
                                        </div>
                                        <div class="item-thumbnail-product">
                                            <div class="thumbnail-wrapper">
                                                <img src="images/pd4.jpg" alt="description" class="thumbs-img" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Image Slider -->
                                    <div class="product-responsive slick-slider">
                                        <div class="item-img-slider">
                                            <div class="images">
                                                <span class="onsale">Sale!</span>
                                                <a href="#" class="zoom">
                                                    <img id="largeImage" src="images/pd4.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-summary col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h1 itemprop="name" class="product_title">Nước hoa nam Extreme Power Adidas</h1>
                            <div class="reviews-content">
                                <div class="star"></div>
                                <a href="#reviews" class="woocommerce-review-link" rel="nofollow">
                                    <span class="count">0</span> Review(s)
                                </a>
                            </div>
                            <div class="product-stock in-stock">
                                Availability: 
                                <span>In stock</span>
                            </div>
                            <div itemprop="description" class="product-description">
                                <h2 class="quick-overview">Mô tả nhanh</h2>
                                <p>
                                    <strong>Extreme Power Adidas</strong> 
                                    là một dòng sản phẩm trong bộ sưu tập nước hoa của
                                    <strong>Adidas</strong>. 
                                    Với thành phần chủ yếu là hỗ, phiên&nbsp; bản này như một khúc dạo đầu của một trận bóng đá tràn đầy năng lượng cùng thiết kế đơn giản nhưng trẻ trung và hiện đại. Sự lựa chọn hoàn hảo cho các chàng trai.
                                </p>
                            </div>
                            <div>
                                <p class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">345,000&nbsp;
                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                        </span>
                                    </del> 
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">332,000&nbsp;
                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                        </span>
                                    </ins>
                                </p>
                            </div>
                            <div class="product-summary-bottom clearfix">
                                <form action="" enctype="multipart/form-data" class="cart">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" id="qty" step="1" min="1" max="" name="quantity" value="1" title="SL" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                    <button type="submit" class="single_add_to_cart_button button alt marright-10">Thêm vào giỏ</button>
                                    <div class="woocommerce product compare-button marright-10">
                                        <a href="javascript:void(0)" class="compare button" data-product_id="7383" rel="nofollow">Đặt hàng</a>
                                    </div>
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361 marright-10">
                                        <div class="yith-wcwl-add-button show" style="display:block">
                                            <a href="#" class="add_to_wishlist">
                                            Add to Wishlist</a>
                                            <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                        </div>

                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <span class="feedback">Product added!</span>
                                            <a href="#">
                                                Browse Wishlist         
                                            </a>
                                        </div>

                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                            <span class="feedback">The product is already in the wishlist!</span>
                                            <a href="#">
                                                Browse Wishlist         
                                            </a>
                                        </div>

                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="martop-25"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 tab-col-3">
                            <div class="sw-related-product">
                                <div class="block-title title1">
                                    <h2>
                                        <span>Related Products</span>
                                    </h2>
                                </div>
                                <div class="carousel-inner">
                                    <div class="active">
                                        <div class="bs-item cf">
                                            <div class="bs-item-inner">
                                                <div class="item-img">
                                                    <a href="#">
                                                        <img src="images/7.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="star"></div>
                                                    <h4><a href="#" title="Nước hoa Chanel">Nước hoa Chanel</a></h4>
                                                    <p>
                                                        <span class="woocommerce-Price-amount amount">4,800,000&nbsp;
                                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-item cf">
                                            <div class="bs-item-inner">
                                                <div class="item-img">
                                                    <a href="#">
                                                        <img src="images/7.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="star"></div>
                                                    <h4><a href="#" title="Nước hoa Chanel">Nước hoa Chanel</a></h4>
                                                    <p>
                                                        <span class="woocommerce-Price-amount amount">4,800,000&nbsp;
                                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 tab-col-9 description">
                            <div class="sw-related-product">
                                <div class="block-title title1">
                                    <h2>
                                        <span>Mô tả</span>
                                    </h2>
                                </div>
                                <div class="bs-item cf">
                                    <div class="bs-item-inner">
                                        ádasd
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
<script type="text/javascript" src="js/slick.min.js"></script>
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
 $('#slider').slick({
    dots: true,
    slidesToShow: 3,
    centerMode: true,
    vertical: true,
  });  
 $('.thumbs-img').click(function(){
    $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
    $('#description').html($(this).attr('alt'));
});

$('.plus').click(function() {
    var value = document.getElementById("qty").value;
    var oldValue = parseFloat(value);
    var newVal = oldValue + 1;
    document.getElementById("qty").value = newVal;
  });
$('.minus').click(function() {
    var min = $('.qty').attr('min');
    var value = document.getElementById("qty").value;
    var oldValue = parseFloat(value);
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    document.getElementById("qty").value = newVal;
  });
</script>
</html>