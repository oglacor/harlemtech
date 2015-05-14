<?php get_header(); ?>
	<div class="container-fluid">
    	<div class="row newsfeed bg-solid-blue white">
            <div class="date col-xs-12 col-sm-6 col-md-6 col-lg-6">
            	<?php echo date('F M, d Y'); ?>
            </div>
            <div class="date col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right">
            	Entrepreneurship: Lorem Ipsum dolor sit amet
            </div>
        </div>
        <div class="row choose-path">
        	<h1 class="choose-your-path text-uppercase"><strong><?php _e('Choose your path'); ?></strong></h1>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 path-pull path">
            	<img src="<?php bloginfo('template_directory'); ?>/images/badge-pull.png">
                <p>
					Pull people together into Harlemtech by connecting investors with startups or helping mentors with their mentees or bringing them to the events
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 path-push path">
                <p>
					Pull people together into Harlemtech by connecting investors with startups or helping mentors with their mentees or bringing them to the events
                </p>
            	<img src="<?php bloginfo('template_directory'); ?>/images/badge-push.png">
            </div>
        </div>
        <div class="row profiles">
        	<div class="container">
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                	<div class="inner">
                    	<div class="sign-up-badge">
                   	    	<img src="<?php bloginfo('template_directory'); ?>/images/badge-entrepreneur.png" width="180" height="219" alt=""/>
                            <div class="sign-up-hover bg-solid-amber" onClick="getURL('<?php bloginfo('url');?>/signup/?type=e');">
                            	<h3><strong>SIGNUP AS</strong></h3>
                                <img src="<?php bloginfo('template_directory'); ?>/images/badge-entrepreneur-hover.png" width="180" height="219" alt=""/>
                                <p>Building a startup or already have one and want to connect?</p>
                            </div>
                        </div>
                        <div class="featured-story bg-solid-amber">
                        	<div class="featured-story-image"></div>
                            <div class="featured-story-content">
                            	<h3 class="white"><?php echo get_the_title($story->ID); ?></h3>
                                <div class="entry">
                                	<?php echo get_field('story_excerpt',$story->ID); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                	<div class="inner">
                    	<div class="sign-up-badge">
                   	    	<img src="<?php bloginfo('template_directory'); ?>/images/badge-mentor.png" width="180" height="219" alt=""/>
                            <div class="sign-up-hover bg-solid-blue" onClick="getURL('<?php bloginfo('url');?>/signup/?type=m');">
                            	<h3><strong>SIGNUP AS</strong></h3>
                                <img src="<?php bloginfo('template_directory'); ?>/images/badge-mentor-hover.png" width="180" height="219" alt=""/>
                                <p>Use your experience to help push the community forward</p>
                            </div>
                        </div>
                        <div class="featured-story bg-solid-blue">
                        	<div class="featured-story-image"></div>
                            <div class="featured-story-content">
                            	<h3 class="white"><?php echo get_the_title($story->ID); ?></h3>
                                <div class="entry">
                                	<?php echo get_field('story_excerpt',$story->ID); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                	<div class="inner">
                    	<div class="sign-up-badge">
                   	    	<img src="<?php bloginfo('template_directory'); ?>/images/badge-investor.png" width="180" height="219" alt=""/>
                            <div class="sign-up-hover bg-solid-green" onClick="getURL('<?php bloginfo('url');?>/signup/?type=i');">
                            	<h3><strong>SIGNUP AS</strong></h3>
                                <img src="<?php bloginfo('template_directory'); ?>/images/badge-investor-hover.png" width="180" height="219" alt=""/>
                                <p>Help promising entrepreneurs pull themselves into a better position and develop amazing technology</p>
                            </div>
                        </div>
                        <div class="featured-story bg-solid-green">
                        	<div class="featured-story-image"></div>
                            <div class="featured-story-content">
                            	<h3 class="white"><?php echo get_the_title($story->ID); ?></h3>
                                <div class="entry">
                                	<?php echo get_field('story_excerpt',$story->ID); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>