<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">

<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/favicon.ico?ver=3.8.1">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css?ver=3.8.1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?ver=3.8.1" rel="stylesheet">

<!-- Fonts -->

<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
jQuery(window).load(function() {
	jQuery("#loader-wrapper").fadeOut("slow");
})

var he = $( window ).height();
jQuery( document ).ready(function() {
	jQuery('#head').css('height' , he);
	//jQuery('main').css('margin-top' , he);
});

</script>

<?php if(is_home()){?>
<?php $slides = get_posts(array('post_type' => 'slides'))?>
<?php $c = 0; $t = count($slides)?>
<script type="text/javascript">

jQuery(document).ready(function(){
	$('.bxslider').bxSlider({
		pager : false,
		minSlides : 6,
		maxSlides : 6,
		moveSlides : 1,
		slideWidth : 1800,
		nextText : '<span class="fa fa-chevron-right fa-fw"></span>',
		prevText : '<span class="fa fa-chevron-left fa-fw"></span>'
	});
});

jQuery(function($){
	$.supersized({
		slideshow : 1,
		autoplay : 1,
		start_slide: 1,
		random : 0,
		slide_interval : 10000,
		transition : 1, 
		transition_speed : 1000,
		new_window : 1,	
		pause_hover : 0,
		keyboard_nav : 0,	
		performance : 1,	
		image_protect :	1,	
		image_path : 'img/', 
		min_width : 0,	
		min_height : 0,
		vertical_center : 0,	
		horizontal_center : 1,	
		fit_portrait : 1,
		fit_landscape : 0,
		navigation : 1,	
		thumbnail_navigation : 0,	
		slide_counter : 0,	
		slide_captions : 1,
		slides :  	
			[
			<?php foreach($slides as $slide):?>
				<?php $slid = get_post_thumbnail_id($slide->ID);?>
				<?php $bgid = wp_get_attachment_image_src($slid , 'full')?>
				<?php $c++;?>
				{
					image : '<?php echo $bgid[0]?>',
					<?php $al = get_field('ubicacion_texto' , $slide->ID);?>
					<?php if($al == 'der'){?>
					title : '<div class="al-der col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-4 col-md-offset-4 col-lg-offset-4"><h2><?php echo $slide->post_title ?></h2><p><?php echo $slide->post_content?></p></div>'
					<?php }elseif($al == 'izq'){?>
					title : '<div class="al-izq col-xs-12 col-sm-8 col-md-8 col-lg-8"><h2><?php echo $slide->post_title ?></h2><p><?php echo $slide->post_content?></p></div>'
					<?php }else{?>
					title : '<div class="al-tit col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2"><h2><?php echo $slide->post_title ?></h2><p><?php echo $slide->post_content?></p></div>'
					<?php }?>
					 
					
				}<?php if($c != $t){echo ',';}?>
			<?php endforeach;?>
			]
	}); 
});
</script>
<?php }?>

<script>
    jQuery(document).ready(function(){												
       
       //Navigation Menu Slider
        $('#nav-expander').on('click',function(e){
      		e.preventDefault();
      		$('body').toggleClass('nav-expanded');
      	});
      	$('#nav-close').on('click',function(e){
      		e.preventDefault();
      		$('body').removeClass('nav-expanded');
      	});
      	
        $(".main-menu").navgoco({
            caret: '<span class="caret"></span>',
            accordion: false,
            openClass: 'open',
            save: true,
            cookie: {
                name: 'navgoco',
                expires: false,
                path: '/'
            },
            slide: {
                duration: 300,
                easing: 'swing'
            }
        });
  
        	
      });
      </script>

</head>

<body <?php body_class()?>>

<div id="fb-root"></div>
<div id="loader-wrapper">
	<img src="<?php echo get_bloginfo('template_directory')?>/images/logo.png" alt="">
    <div id="loader"></div>
</div>
<nav>
	<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'list-unstyled main-menu' , 'theme_location' => 'primary' ) ); ?>
	<img src="<?php echo get_bloginfo('template_url')?>/images/logo-inv.png" class="img-responsive logomenu" alt="">
</nav>


<div class="navbar-fixed-top topbar">
	
    <div class="container">
        <div class="row">
        <?php if(is_home()){?>
        	<img src="<?php bloginfo('template_directory')?>/images/logo.png" class="logo totop" alt="">
        <?php }else{?>
        	<a href="<?php echo get_bloginfo('url')?>"><img src="<?php bloginfo('template_directory')?>/images/logo.png" class="logo" alt=""></a>
        <?php }?>
        </div>
    </div>
   	
    <div class="pull-right">
      <a id="nav-expander" class="nav-expander fixed">
          <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar icn1"></span>
            <span class="icon-bar icn2"></span>
            <span class="icon-bar icn3"></span>
          </button>
      </a>
    </div>
</div>