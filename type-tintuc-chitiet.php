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
                            <a class="navbar-brand menu-title" href="type-3.php">TRANG CHỦ</a>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse nav-custom">
                            <ul class="nav navbar-nav navbar-right margin-0 marright-10">
                                <li><a class="menu-title" href="#">GIỚI THIỆU</a></li>
                                <li><a class="menu-title" href="type-dichvu.php">DỊCH VỤ</a></li>
                                <li><a class="menu-title" href="#contact">SẢN PHẨM</a></li>
                                <li><a class="menu-title" href="#contact">TIN TỨC VÀ KHUYẾN MÃI</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </nav>
            </div>
            <!-- end navbar top -->
            
            <!--service-->
            <div class="container">
                <h2 class="box-heading text-uppercase text-center">TIN TỨC & KHUYẾN MÃI</h2>
                <div class="box-content">
                    <h3>LÀM ĐẸP LÀ ĐẶC QUYỀN CỦA PHÁI ĐẸP</h3>
                    <p>
                    Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh.
                    Theo đó, khách hàng trị liệu trong dịp này sẽ được:
                    -Giảm đến 50% dịch vụ tắm trắng yến mạch sữa tươi
                    -Giảm đến 60% dịch vụ triệt lông công nghệ mới NewIPL phiên bản 2015
                    -Giảm đến 45% các dịch vụ đặc trị & chăm sóc da
                    -Giảm đến 15% và tặng dịch vụ phun mí vi điểm cho dịch vụ phun thêu thẩm mỹ Hàn Quốc.</p>
                    <div class="clear"></div>
                </div>
            </div>
            <!--end service-->
            
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