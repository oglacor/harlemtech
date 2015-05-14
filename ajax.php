<?php 
function store_results(){
	$testingEmail = $_GET['testingEmail']; 
	$answers = $_GET['answers'];
	$args = array(
		'post_type' => 'progress-test-entry',
		'numberposts' => '-1'
	);
	$testResults = get_posts($args);
	foreach ($testResults as $test){
		$email = get_field('tester_email', $test->ID);
		if($testingEmail == $email){
			update_field('field_5541717cb1c3f', $answers, $test->ID);
			echo 'update';
		}else{
			$new_post = array(
				'post_title'    =>   $testingEmail,
				'post_status'   =>   'publish', 
				'post_type' =>   'progress-test-entry'  //'post',page' or use a custom post type if you want to
			);
			$pid = wp_insert_post($new_post);
			update_field('field_55417155b1c3e', $testingEmail, $pid);
			update_field('field_5541717cb1c3f', $answers, $pid);
			echo 'new';
		}
	}
	die(); 
}
?>