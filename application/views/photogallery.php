<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Yogathon 2013</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yoga,SunSalutes,Artofliving, Yogathon,melbourne yogathon 2013">
    <meta name="author" content="Art of living">
    <!-- Le styles -->
   <link href= "<?=base_url('css/bootstrap.css');?>" rel="stylesheet">
   <link href="<?=base_url('css/style.css');?>" rel="stylesheet">
   <link href="<?=base_url('css/bootstrap-responsive.css');?>" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.4" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});
		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
	
</head>
<body>
	<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          <a class="brand" href="<?base_url('index');?>">Yogathon 2013</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><?=anchor('site/home','Home');?></li>
               <li><?=anchor('site/about','About');?></li>
               <li><?=anchor('site/rules','Rules');?></li>
               <li><?=anchor('site/contact','Contact US');?></li>
			        <li><?=anchor('site/photogallery','Photo Gallery');?></li>
            </ul>
         </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><!--/end of top nav bar-->
	<div class="container">
	<div class="row">
        <div class="span8">
		<h1>fancyBox</h1>
		<h3>Simple image gallery</h3>
	<p>
		<a class="fancybox" href="../img/examples/sn_large1.jpg" data-fancybox-group="gallery" title="Doing Sun Salutes"><img src="../img/examples/sn_small1.jpg" alt="" /></a>

		<a class="fancybox" href="../img/2_b.jpg" data-fancybox-group="gallery" title="Devyani rocks"><img src="../img/2_s.jpg" alt="" /></a>

		<a class="fancybox" href="../img/3_b.jpg" data-fancybox-group="gallery" title="The IT Man"><img src="../img/3_s.jpg" alt="" /></a>

		<a class="fancybox" href="../img/4_b.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="../img/4_s.jpg" alt="" /></a>
	</p>

	<h3>Different effects</h3>
	<p>
		<a class="fancybox-effects-a" href="../img/5_b.jpg" title="doing sun salutes"><img src="../img/5_s.jpg" alt="" /></a>

		<a class="fancybox-effects-b" href="../img/5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="../img/5_s.jpg" alt="" /></a>

		<a class="fancybox-effects-c" href="../img/5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="../img/5_s.jpg" alt="" /></a>

		<a class="fancybox-effects-c" href="../img/5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="../img/5_s.jpg" alt="" /></a>
	</p>
</div><!--/end of span8-->
</div><!--/end of row-->
	
	

 <?php $this->load->view('includes/footer');?>
