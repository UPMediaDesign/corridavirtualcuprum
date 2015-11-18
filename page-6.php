<?php get_header()?>
<?php $bgid = wp_get_attachment_image_src(get_field('header_image') , 'full')?>
<style>
	body{background-image:url(<?php echo $bgid[0]?>)}
</style>
<section id="head">
	<div class="container">
    	<div class="row">
           <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                <div id="slidecaption">
                	<h2>Quienes Somos</h2>
                    <p class="subtitle"><?php echo $post->post_excerpt;?></p>
                </div>
           </div>
        </div>
    </div>
</section>

<section id="que-hacemos">
	<div class="container">
    	<div class="row supersection">
        	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <?php $hc = get_post(8)?>
                <h2 class="small-title">Quiénes Somos</h2>
                <h2>El Staff</h2>
                <p><?php echo get_field('staff')?></p>
            </div>
        </div>
        
        <div class="bordery"></div>
        <div class="clear separator"></div>
        <div class="clear separator"></div>
    </div>
    <div id="staff" class="nocontainer">
    	<div class="row">
        	
            <?php $staff = get_posts(array('post_type' => 'staff' , 'numberposts' => '-1'))?>
            <?php foreach($staff as $persona):?>
            	<div class="col-md-20 col-xs-2 col-sm-4 col-lg 20 col-esp">
                	<figure class="persona">
                    	<?php echo get_the_post_thumbnail($persona->ID , 'staff' , array('class' => 'img-responsive'))?>
                        <figcaption>
                        	<div class="infostaff">
                                <h3><?php echo get_field('cargo' , $persona->ID)?></h3>
                                <h2><?php echo $persona->post_title?></h2>
                                <div class="more"><a href="<?php echo get_permalink($persona->ID)?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/cross.png" alt=""></a></div>
                            </div>
                        </figcaption>
                    </figure>
                	
                </div>
            <?php endforeach?>
            
        </div>
    </div>
</section>

<?php $agid = get_post_thumbnail_id(10);?>
<?php $agim = wp_get_attachment_image_src($agid , 'full')?>
<section id="agencia" style="background-image:url(<?php echo $agim[0]?>)">
	<div class="container">
		<div class="row supersection">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            	<h2>Land Agencia</h2>
                <p class="subtitle"><?php echo get_field('la_agencia')?></p>
            </div>
        </div>
	</div>
</section>

<section id="features">
	<div class="container">
		<div class="row supersection">
            <div class="insider">
                <?php $features = get_field('agencia_features')?>
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