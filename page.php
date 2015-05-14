<?php get_header(); ?>
	<div class="container">
    	<div class="row">
        	<?php if(have_posts()){ while (have_posts()){ the_post(); ?>
            	<h1><?php the_title(); ?></h1>
            	<div class="entry col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php the_content(); ?></div>
        	<?php }}?>
        </div>
    </div>
<?php get_footer(); ?>