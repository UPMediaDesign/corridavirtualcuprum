<?php get_header()?>

<section id="head">
	<div class="container">
    	<div class="row">
        	<div id="slidecaption"></div>
        </div>
    </div>
</section>
<section id="quienes-somos">
	<div class="container">
		<div class="row supersection">
        	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                <h2 class="small-title">Quienes Somos</h2>
                <?php $qs = get_post(6)?>
                <h2><?php echo get_field('subtitulo' , 6)?></h2>
                <p><?php echo $qs->post_excerpt;?></p>
            </div>
        </div>
	</div>
</section>

<section id="que-hacemos">
	<div class="container">
    	<div class="row supersection">
        	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                <?php $hc = get_post(8)?>
                <h2 class="small-title">Qué Hacemos</h2>
                <p><?php echo $hc->post_excerpt;?></p>
            </div>
        </div>
    </div>
    <div class="megacontainer">
    	
        <?php $servicios = get_posts(array('post_parent' => 8 , 'post_type' => 'page' , 'numberposts' => -1 , 'order' => 'ASC'))?>
        
        <div class="row servicio">
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 col-esp"><?php echo get_the_post_thumbnail(8 , 'squared' , array('class' => 'img-responsive'))?></div>
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 col-esp">
            	
                <div class="insider">
                    <h2><?php echo $servicios[0]->post_title?></h2>
                    <p class="subtitle"><?php echo get_field('subtitulo' , $servicios[0])?></p>
                    <p><?php echo $servicios[0]->post_excerpt?></p>
                    <a href="<?php echo get_permalink($servicios[0]->ID)?>" class="btn btn-primary btn-secondary">Ver más</a>
                </div>
            	
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 col-esp">
				<?php echo get_the_post_thumbnail($servicios[0]->ID , 'squared' , array('class' => 'img-responsive'))?>
            </div>
        </div>
        
        <div class="row servicio">
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 col-esp">
            	<div class="insider">
                    <h2><?php echo $servicios[1]->post_title?></h2>
                    <p class="subtitle"><?php echo get_field('subtitulo' , $servicios[0])?></p>
                    <p><?php echo $servicios[1]->post_excerpt?></p>
                    <a href="<?php echo get_permalink($servicios[1]->ID)?>" class="btn btn-primary btn-secondary">Ver más</a>
                </div>
            </div>
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 col-esp"><?php echo get_the_post_thumbnail($servicios[1]->ID , 'squared' , array('class' => 'img-responsive'))?></div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 col-esp">
            	<div class="insider">
                    <h2><?php echo $servicios[2]->post_title?></h2>
                    <p class="subtitle"><?php echo get_field('subtitulo' , $servicios[2])?></p>
                    <p><?php echo $servicios[2]->post_excerpt?></p>
                    <a href="<?php echo get_permalink($servicios[2]->ID)?>" class="btn btn-primary btn-secondary">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="row servicio">
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 col-esp"><?php echo get_the_post_thumbnail($servicios[3]->ID , 'squared' , array('class' => 'img-responsive'))?></div>
        	<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12 col-esp">
            	<div class="insider">
                    <h2><?php echo $servicios[3]->post_title?></h2>
                    <p class="subtitle"><?php echo get_field('subtitulo' , $servicios[3])?></p>
                    <p><?php echo $servicios[3]->post_excerpt?></p>
                    <a href="<?php echo get_permalink($servicios[3]->ID)?>" class="btn btn-primary btn-secondary">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="row servicio">
        	<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12 col-esp">
            	<div class="insider">
                    <h2><?php echo $servicios[4]->post_title?></h2>
                    <p class="subtitle"><?php echo get_field('subtitulo' , $servicios[0])?></p>
                    <p><?php echo $servicios[4]->post_excerpt?></p>
                    <a href="<?php echo get_permalink($servicios[4]->ID)?>" class="btn btn-primary btn-secondary">Ver más</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 col-esp"><?php echo get_the_post_thumbnail($servicios[4]->ID , 'squared' , array('class' => 'img-responsive'))?></div>
        </div>
        
    </div>
</section>
<section id="portfoliolnk" class="servicio">
	<div class="container">
		<div class="row">
        	<div>Quieres ver más? <strong>Mira nuestro portfolio aquí</strong> <span class="fa fa-arrow-circle-o-right fa-fw"></span></div>
        </div>
	</div>
</section>

<section id="clientes">
	<div class="container">
		<div class="row">
        	<div class="carousel">
            	<ul class="bxslider">
					<?php $c = get_posts(array('post_type' => 'clientes' , 'numberposts' => -1))?>
                    <?php foreach($c as $cliente){?>
                        <li><?php echo get_the_post_thumbnail($cliente->ID , 'full' , array('class' => 'img-responsive'))?></li>
                    <?php }?>
                </ul>
            </div>
        </div>
	</div>
</section>

<?php $ctid = get_post_thumbnail_id(10);?>
<?php $ctimg = wp_get_attachment_image_src($ctid , 'full')?>
<section id="contactus" style="background-image:url(<?php echo $ctimg[0]?>)">
	<div class="container">
		<div class="row">
        	<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
            	<div class="insider">
					<?php $ct = get_post(10)?>
                    <h2 class="small-title"><?php echo get_field('subtitulo' , 10)?></h2>
                    <p><?php echo $ct->post_excerpt;?></p>
                    <a href="<?php echo get_page_link(10)?>" class="btn btn-primary btn-lg">Contáctanos</a>
                </div>
            </div>
        </div>
	</div>
</section>

<?php get_footer()?>