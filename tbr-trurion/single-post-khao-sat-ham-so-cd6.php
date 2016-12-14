<?php

// Set the default layout
add_filter( 'beans_default_layout', 'banks_index_default_layout' );

function banks_index_default_layout() {

	return 'c';

}

// Setup post view
add_action( 'beans_before_load_document', 'trurion_post_setup' );

function trurion_post_setup() {

	beans_remove_action( 'beans_post_title' );
	beans_remove_action( 'beans_post_content' );
	beans_remove_action( 'beans_post_navigation' );

	beans_remove_markup('beans_primary');
	beans_remove_markup('beans_content');
	beans_remove_markup('beans_post');
	beans_remove_markup('beans_post_header');
	beans_remove_markup('beans_post_body');

}


beans_add_smart_action('beans_main_grid_prepend_markup', 'trurion_khoahoc');
function trurion_khoahoc() {
	?>

	<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1">
		<a class="uk-button uk-button-danger uk-button-large uk-margin-small-top" href="" target="_blank">Bài tập</a>
		<a class="uk-button uk-button-primary uk-button-large uk-margin-small-top" href="" target="_blank">Đáp án</a>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">Lý thuyết</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzYmZmRFRrOFk3c2c/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">Hàm B3 - Đường thẳng P1</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzQnI2LUtVVy1fSjA/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">Hàm B3 - Đường thẳng P2</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzMFM0U2R4MW81ZWc/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">Hàm B4 - Đường thẳng</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzOFJ4MUxmZW1MQzA/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">Hàm B1-B1 cắt đường thẳng</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzdzIxSDhPYVU3OVk/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

<?php	
}

beans_load_document();

