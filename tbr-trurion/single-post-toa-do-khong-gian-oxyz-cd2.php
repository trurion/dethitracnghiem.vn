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
		<a class="uk-button uk-button-danger uk-button-large uk-margin-small-top" href="https://drive.google.com/open?id=0B1p82VMGk6dzWmVDcEtUb3IxVFE" target="_blank">Bài tập</a>
		<a class="uk-button uk-button-primary uk-button-large uk-margin-small-top" href="" target="_blank">Đáp án</a>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">PT Mặt phẳng</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzSlVuM2dqN0pXZHc/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">MP song song và khoảng cách</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzU081T2ZUMUZWaWM/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">Các dạng toán 1-2</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzU1RFZWpTZDlCRUE/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">Các dạng toán 3</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzSTN4eDBkYXkxdlE/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

	<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
		<h4 style="text-align: center;">Các dạng toán 4-5</h4>
		<iframe style="box-shadow: 3px 3px 3px #888888; border-radius: 10px;" width="100%" height="315" src="https://drive.google.com/file/d/0B1p82VMGk6dzY3Z3ZmNBcEFJa00/preview?autoplay=0" frameborder="1" allowfullscreen="0"></iframe>
	</div>

<?php	
}

beans_load_document();

