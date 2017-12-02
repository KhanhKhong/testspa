// JavaScript Document
//----Sroll to top
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() != 0) {
            $('.bttop').fadeIn();
        } else {
            $('.bttop').fadeOut();
        }
    });
    $('.bttop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    });
}); //----Sroll to top
// Menu
(function($) {

	// init ondomready
	$(function() {

		// init all menus
		$('ul.navbar-nav').each(function() {
				var $this = $(this);
				$this.addClass('sm').smartmenus({

						// these are some good default options that should work for all
						// you can, of course, tweak these as you like
						subMenusSubOffsetX: 2,
						subMenusSubOffsetY: -6,
						subIndicatorsPos: 'append',
						subIndicatorsText: '...',
						collapsibleShowFunction: null,
						collapsibleHideFunction: null,
						rightToLeftSubMenus: $this.hasClass('navbar-right'),
						bottomToTopSubMenus: $this.closest('.navbar').hasClass('navbar-fixed-bottom')
					})
					// set Bootstrap's "active" class to SmartMenus "current" items (should someone decide to enable markCurrentItem: true)
					.find('a.current').parent().addClass('active');
			})
			.bind({
				// set/unset proper Bootstrap classes for some menu elements
				'show.smapi': function(e, menu) {
					var $menu = $(menu),
						$scrollArrows = $menu.dataSM('scroll-arrows'),
						obj = $(this).data('smartmenus');
					if ($scrollArrows) {
						// they inherit border-color from body, so we can use its background-color too
						$scrollArrows.css('background-color', $(document.body).css('background-color'));
					}
					$menu.parent().addClass('open' + (obj.isCollapsible() ? ' collapsible' : ''));
				},
				'hide.smapi': function(e, menu) {
					$(menu).parent().removeClass('open collapsible');
				},
				// click the parent item to toggle the sub menus (and reset deeper levels and other branches on click)
				'click.smapi': function(e, item) {
					var obj = $(this).data('smartmenus');
					if (obj.isCollapsible()) {
						var $item = $(item),
							$sub = $item.parent().dataSM('sub');
						if ($sub && $sub.dataSM('shown-before') && $sub.is(':visible')) {
							obj.itemActivate($item);
							obj.menuHide($sub);
							return false;
						}
					}
				}
			});

	});

	// fix collapsible menu detection for Bootstrap 3
	$.SmartMenus.prototype.isCollapsible = function() {
		return this.$firstLink.parent().css('float') != 'left';
	};

})(jQuery);


// Sidebar
(function($){
$(document).ready(function(){

$('#side-menu li.active').addClass('open').children('ul').show();
	$('#side-menu li.has-sub>a').on('click', function(){
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp(200);
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown(200);
			element.siblings('li').children('ul').slideUp(200);
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp(200);
		}
	});

});
})(jQuery);

//Footer
$("#footer h2").click(function () {
			$screensize = $(window).width();
			if ($screensize < 720) {
				$(this).toggleClass("active");  
				$(this).parent().find("ul").slideToggle('medium');
			}
		});
//Facebook
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



    /// ======= Zoom product
    jQuery(document).ready(function() {
        jQuery('#mycarousel').jcarousel({
            start: 3
        });
    });
    $("#zoom_03").elevateZoom({constrainType:"height", constrainSize:370, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"});
	$("#zoom_03").bind("click", function(e) { var ez = $('#zoom_03').data('elevateZoom');	$.fancybox(ez.getGalleryList()); return false; });

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});

