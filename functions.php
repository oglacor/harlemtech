<?php 
function theme_core_setup(){
	remove_role( 'entrepreneur' ); 
	remove_role( 'mentor' ); 
	remove_role( 'investor' ); 
	$capabilities = array(
		'activate_plugins' => false,
		'delete_others_pages' => false,
		'delete_others_posts' => false,
		'delete_pages' => false,
		'delete_posts' => true,
		'delete_private_pages' => false,
		'delete_private_posts' => false,
		'delete_published_pages' => false,
		'delete_published_posts' => true,
		'edit_dashboard' => false,
		'edit_others_pages' => false,
		'edit_others_posts' => false,
		'edit_pages' => false,
		'edit_posts' => true,
		'edit_private_pages' => false,
		'edit_private_posts' => false,
		'edit_published_pages' => false,
		'edit_published_posts' => true,
		'edit_theme_options' => false,
		'export' => false,
		'import' => false,
		'list_users' => false,
		'manage_categories' => false,
		'manage_links' => false,
		'manage_options' => false,
		'moderate_comments' => false,
		'promote_users' => false,
		'publish_pages' => false,
		'publish_posts' => true,
		'read_private_pages' => false,
		'read_private_posts' => false,
		'read' => true,
		'remove_users' => false,
		'switch_themes' => false,
		'upload_files' => true,			
		'update_core' => false,	
		'update_plugins' => false,	
		'update_themes' => false,	
		'install_plugins' => false,	
		'install_themes' => false,	
		'delete_themes' => false,	
		'delete_plugins' => false,	
		'edit_plugins' => false,	
		'edit_themes' => false,	
		'edit_files' => false,	
		'edit_users' => false,	
		'create_users' => false,	
		'delete_users' => false,	
		'unfiltered_html' => false
	);
	$entrepreneur = add_role(
		'entrepreneur',
		__('Entrepreneur'),
		$capabilities
	);
	$mentor = add_role(
		'mentor',
		__('Mentor'),
		$capabilities
	);
	$investor = add_role(
		'investor',
		__('Investor'),
		$capabilities
	);
	
	add_action( 'admin_notices', 'install_notices' );
}

function delete_roles () {
	remove_role( 'entrepreneur' ); 
	remove_role( 'mentor' ); 
	remove_role( 'investor' ); 
}

function install_notices(){
	?>
    <div class="wrap">
	<?php if (null !== $entrepreneur ) { ?>
    	<div class="updated notice is-dismissible below-h2">
        	<p>Entrerpeneur Role Created</p>
        </div>
	<?php }else{ ?>
    	<div class="warning notice is-dismissible below-h2">
        	<p>Entrerpeneur Role not created. Already exists.</p>
        </div>
	<?php }
	if (null !== $mentor ) { ?>
    	<div class="updated notice is-dismissible below-h2">
        	<p>Mentor Role Created</p>
        </div>  
	<?php }else{ ?>
    	<div class="warning notice is-dismissible below-h2">
        	<p>Mentor Role not created. Already exists.</p>
        </div>
	<?php }
	if (null !== $investor ) { ?>
    	<div class="updated notice is-dismissible below-h2">
        	<p>Investor Role Created</p>
        </div>
	<?php }else{ ?>
    	<div class="warning notice is-dismissible below-h2">
        	<p>Investor Role not created. Already exists.</p>
        </div>
	<?php } ?>
    </div>
    <?php
}
function remove_menus(){
	if(!current_user_can('update_core')){
		remove_menu_page( 'index.php' );    //Post
		remove_menu_page( 'edit.php' );    //Post
		remove_menu_page( 'edit.php?post_type=page' );    //Pages
		remove_menu_page( 'users.php' );                  //Users
		remove_menu_page( 'upload.php' );                  //Media
		remove_menu_page( 'edit-comments.php' );          //Comments
		remove_menu_page( 'tools.php' );                  //Tools
		remove_menu_page( 'options-general.php' );        //Settings
		remove_menu_page( 'admin.php?page=acf-options' ); //Settings
	}
}


function post_type_register() {
	$ruta = get_bloginfo('template_directory');  

	$l_events = array(
		'name' => _x('Events', 'events'),
		'singular_name' => _x('Event', 'event'),
		'add_new' => _x('Add Event', 'new-event'),
		'add_new_item' => __('Add New Event'),
		'edit_item' => __('Edit Event'),
		'new_item' => __('New Event'),
		'view_item' => __('See Event'), 
		'search_items' => __('Search Events'),
		'not_found' =>  __('No events found'),
		'not_found_in_trash' => __('No events found in trash'),
		'parent_item_colon' => ''
	);
	
	$a_events = array(
		'labels' => $l_events,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => $ruta.'/images/config-event.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	); 
	$l_startup = array(
		'name' => _x('Startups', 'startups'),
		'singular_name' => _x('Startup', 'startup'),
		'add_new' => _x('Add Startup', 'new-startup'),
		'add_new_item' => __('Add New Startup'),
		'edit_item' => __('Edit Startup'),
		'new_item' => __('New Startup'),
		'view_item' => __('See Startup'), 
		'search_items' => __('Search Startups'),
		'not_found' =>  __('No startups found'),
		'not_found_in_trash' => __('No startups found in trash'),
		'parent_item_colon' => ''
	);
	
	$a_startup = array(
		'labels' => $l_startup,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => $ruta.'/images/config-startup.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	); 

	register_post_type( 'event' , $a_events );
	register_post_type( 'startup' , $a_startup );
	
}


add_action('after_switch_theme', 'theme_core_setup');
add_action('switch_theme', 'delete_roles');
add_action('admin_menu', 'remove_menus');
add_filter('show_admin_bar', '__return_false');
add_action('init', 'post_type_register');

?>