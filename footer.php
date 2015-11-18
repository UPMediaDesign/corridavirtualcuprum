<section id="getintouch">
    <div class="container">
        <div class="row supersection">
    		<h2>Get in touch</h2>
        	<p><a href="mailto:<?php echo get_field('mail' , 'options')?>" class="btn-btn-link"><?php echo get_field('mail' , 'options')?></a></p>
        	<p><a href="callto:<?php echo get_field('fono' , 'options')?>" class="btn-btn-link"><?php echo get_field('fono' , 'options')?></a></p>
        	<p><strong><?php echo get_field('direccion' , 'options')?></strong></p>
        	<div class="clear separator"></div>
        	<div class="sociales">
                <ul>
                    <li><a href="<?php echo get_field('instagram','options')?>"><span class="fa fa-fw fa-instagram"></span></a></li>
                    <li><a href="<?php echo get_field('twitter','options')?>"><span class="fa fa-fw fa-twitter"></span></a></li>
                    <li><a href="<?php echo get_field('facebook','options')?>"><span class="fa fa-fw fa-facebook"></span></a></li>
                    <li><a href="<?php echo get_field('youtube','options')?>"><span class="fa fa-fw fa-youtube"></span></a></li>
                </ul>
            </div>
    	</div>
	</div>            
</section>

<footer>
	<div class="container">
		<div class="row">
                    
		<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav' , 'theme_location' => 'secondary' ) ); ?>
        
        </div>
	</div>
</footer>

</body>
<?php wp_footer()?>

</html>