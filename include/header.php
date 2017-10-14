<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Life Line</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Fonts -->
<link href="http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700" rel="stylesheet" type="text/css">
<!-- Styles -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/icons.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/sea-green.css" title="sea-green" />
<link rel="alternate stylesheet" type="text/css" href="css/brown.css" title="brown" />
<link rel="alternate stylesheet" type="text/css" href="css/bright-red.css" title="bright-red" />
<link rel="alternate stylesheet" type="text/css" href="css/yellow.css" title="yellow" />
<link rel="alternate stylesheet" type="text/css" href="css/green.css" title="green" />
<link rel="alternate stylesheet" type="text/css" href="css/hunter-green.css" title="hunter-green" />
<link rel="alternate stylesheet" type="text/css" href="css/light-pink.css" title="light-pink" />
<link rel="alternate stylesheet" type="text/css" href="css/orange.css" title="orange" />
<link rel="alternate stylesheet" type="text/css" href="css/pink.css" title="pink" />
<link rel="alternate stylesheet" type="text/css" href="css/red.css" title="red" />
<link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->
<!-- Scripts -->
<script src="js/jquery-2.2.2.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script src="js/html5lightbox.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
<script src="js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.js" type="text/javascript"></script>
<script src="js/script.js"></script>		
<script src="js/styleswitcher.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script defer src="js/jquery.mousewheel.js"></script>
	
<script>
$(window).load(function(){
  $(".our-causes").flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $("body").removeClass("loading");
	}
	});
	
	
  $(".slideshow").flexslider({
	animation: "fade",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $("body").removeClass("loading");
	}
	});
	
  $(".footer_carousel").flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $("body").removeClass("loading");
	}
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$(function() {
		$("#carousel").carouFredSel({
			responsive: true,
			circular: false,
			auto: false,
			items: {
				visible: 1,
				width: 20,
			},
			scroll: {
				fx: "directscroll"
			}
		});
		$("#thumbs").carouFredSel({
			responsive: true,
			circular: false,
			infinite: false,
			auto: false,
			prev: "#prev",
			next: "#next",
			items: {
				visible: {
					min: 1,
					max: 6
				},
				width: 200,
				height: "80%"
			}
		});
		$("#thumbs a").click(function() {
			$("#carousel").trigger("slideTo", "#" + this.href.split("#").pop() );
			$("#thumbs a").removeClass("selected");
			$(this).addClass("selected");
			return false;
		});			
	});
});		
</script>	
<!-- Scripts For Layer Slider  -->
<script src="layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
jQuery("#layerslider").layerSlider({
	responsive: true,
	responsiveUnder: 1280,
	layersContainer: 1170,
	skin: "fullwidth",
	hoverPrevNext: true,
	skinsPath: "layerslider/skins/"
});
});
</script>
</head>