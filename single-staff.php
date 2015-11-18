<?php get_header()?>
<?php $qs = get_post(6)?>
<?php $tbid = get_post_thumbnail_id(6)?>
<?php $bgid = wp_get_attachment_image_src($tbid , 'full')?>
<style>
	body{background-image:url(<?php echo $bgid[0]?>)}
</style>
<section id="head">
	<div class="container">
    	<div class="row">
           <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                <div id="slidecaption">
                	<h2>Quienes Somos</h2>
                    <p class="subtitle"><?php echo $qs->post_excerpt;?></p>
                </div>
           </div>
        </div>
    </div>
</section>

<section id="que-hacemos">
	<div class="container">
    	<div class="row supersection">
        	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <h2 class="small-title">Quiénes Somos</h2>
                <h2>El Staff</h2>
                <p><?php echo get_field('staff' , 6)?></p>
            </div>
        </div>
        <div class="row">
            <div class="bordery clear"></div>
            <div class="clear separator"></div>
            <div class="clear separator"></div>
        </div>
    </div>
</section>

<main>
	<div class="container">
		<div class="row">
        	<div class="col-xs-10 col-sm-4 col-md-3 col-lg-3">
            	<?php echo get_the_post_thumbnail($post->ID , 'staff' , array('class' => 'img-responsive'))?>
                <div class="emailinfo">
                	<a href="mailto:<?php echo get_field('email')?>"><span class="fa fa-envelope fa-fw"></span> <?php echo get_field('email')?></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            	<h3><?php echo get_field('cargo' , $post->ID)?></h3>
                <h2><?php echo $post->post_title?></h2>
                
                
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            	<ul class="sociales">
                	<?php if(get_field('email')){?><li><a href="mailto:<?php echo get_field('email')?>" target="_blank"><span class="fa fa-envelope fa-fw"></span></a></li><?php }?>
                    <?php if(get_field('facebook')){?><li><a href="<?php echo get_field('facebook')?>" target="_blank"><span class="fa fa-facebook fa-fw"></span></a></li><?php }?>
                    <?php if(get_field('twitter')){?><li><a href="<?php echo get_field('twitter')?>" target="_blank"><span class="fa fa-twitter fa-fw"></span></a></li><?php }?>
                    <?php if(get_field('youtube')){?><li><a href="<?php echo get_field('youtube')?>" target="_blank"><span class="fa fa-youtube fa-fw"></span></a></li><?php }?>
                    <?php if(get_field('google_plus')){?><li><a href="<?php echo get_field('google_plus')?>" target="_blank"><span class="fa fa-google-plus fa-fw"></span></a></li><?php }?>
                    <?php if(get_field('linkedin')){?><li><a href="<?php echo get_field('linkedin')?>" target="_blank"><span class="fa fa-linkedin fa-fw"></span></a></li><?php }?>
            	</ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            	<div class="clear separator"></div>
                <?php echo apply_filters('the_content' , $post->post_content)?>
            </div>
            
            
        </div>
	</div>
</main>


<?php $agid = get_post_thumbnail_id(10);?>
<?php $agim = wp_get_attachment_image_src($agid , 'full')?>
<section id="agencia" style="background-image:url(<?php echo $agim[0]?>)">
	<div class="container">
		<div class="row supersection">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            	<h2>Land Agencia</h2>
                <p class="subtitle"><?php echo get_field('la_agencia' , 6)?></p>
            </div>
        </div>
	</div>
</section>

<section id="features">
	<div class="container">
		<div class="row supersection">
            <div class="insider">
                <?php $features = get_field('agencia_features' , 6 )?>
                <?php foreach($features as $f):?>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                	<?php $fimg = wp_get_attachment_image_src($f['icon'] , 'full')?>
                    <img src="<?php echo $fimg[0]?>" class="img-responsive alignleft iconfeature" alt="">
                    <h3><?php echo $f['feature']?></h3>
                    <p><?php echo $f['descripcion']?></p>
                    
                </div>
                <?php endforeach;?>
            </div>
        </div>
	</div>
</section>

<?php get_footer()?>