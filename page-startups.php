<?php get_header(); ?>
	<div class="container">
    	<div class="row">
        	<h1>Startups in HarlemTech</h1>
            <?php 
			$args = array(
				'post_type'=> 'startup',
				'posts_per_page' => '-1'
			);
			$startups = get_posts($args); 
			
			foreach ($startups as $startup){ ?>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                	
                </div>
			<?php } ?>
        </div>
    </div>
<?php get_footer(); ?>