<?php

// Include Beans. Do not remove the line below.
require_once( get_template_directory() . '/lib/init.php' );

/* Helpers and utility functions */
require_once 'include/helpers.php';

// Remove Beans Default Styling
remove_theme_support( 'beans-default-styling' );

// Enqueue uikit assets
beans_add_smart_action( 'beans_uikit_enqueue_scripts', 'trurion_enqueue_assets', 5 );

function trurion_enqueue_assets() {
	//Enqueue fonts
	wp_enqueue_style( 'tm-google-fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web:400,700', false );
	
	// Enqueue uikit overwrite theme folder
	beans_uikit_enqueue_theme( 'trurion', get_stylesheet_directory_uri() . '/assets/less/uikit' );

	// Add the theme style as a uikit fragment to have access to all the variables
	beans_compiler_add_fragment( 'uikit', get_stylesheet_directory_uri() . '/assets/less/style.less', 'less' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
}


// Remove comment support
beans_add_smart_action( 'init', 'trurion_init' );

function trurion_init() {

	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );

}

// Setup document fragements, markups and attributes
beans_add_smart_action( 'wp', 'trurion_setup_document' );

function trurion_setup_document() {

	// Header and Primary Menu
	beans_remove_attribute( 'beans_site_branding', 'class', 'uk-float-left' );
	beans_remove_attribute( 'beans_primary_menu', 'class', 'uk-float-right' );

	// Layout
	if(beans_get_layout( ) != 'c') {
		beans_remove_attribute( 'beans_primary', 'class', 'uk-width-medium-7-10' );
		beans_add_attribute( 'beans_primary', 'class', 'uk-width-large-7-10' );
		beans_remove_attribute( 'beans_sidebar_primary', 'class', 'uk-width-medium-3-10' );
		beans_add_attribute( 'beans_sidebar_primary', 'class', 'uk-width-large-3-10' );
	}

	beans_remove_action( 'beans_breadcrumb' );

	// Navigation
	beans_add_attribute( 'beans_sub_menu_wrap', 'class', 'uk-dropdown-center' );
	beans_remove_attribute( 'beans_menu_item_child_indicator', 'class', 'uk-margin-small-left' );

	// Post content
	beans_add_attribute( 'beans_post_content', 'class', 'uk-text-large' );

	// Post meta
	beans_remove_action( 'beans_post_meta' );
	beans_remove_action( 'beans_post_meta_categories' );

	// Post embed
	beans_add_attribute( 'beans_embed_oembed', 'class', 'tm-cover-article' );

	// Search
	if ( is_search() )
		beans_remove_action( 'beans_post_image' );

	if ( is_page() )
		beans_remove_action( 'beans_post_title' );
	beans_remove_action( 'beans_post_archive_title' );

	show_admin_bar( false );
}

// Modify beans layout (filter)
beans_add_smart_action( 'beans_layout_grid_settings', 'trurion_layout_grid_settings' );

function trurion_layout_grid_settings( $layouts ) {

	return array_merge( $layouts, array(
		'grid' => 10,
		'sidebar_primary' => 3,
		'sidebar_secondary' => 3,
	) );

}

//Setup Widgets
beans_add_smart_action( 'widgets_init', 'trurion_register_widgets');
function trurion_register_widgets() {
			//Include widget classes
	 		require_once('widgets/posts.php');

	 		// Regidter widgets
			register_widget('Trurion_Posts_Widget');
}

//Display khoahoc category on home page
function my_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '3' );
    }
}
add_action( 'pre_get_posts', 'my_home_category' );

// Display login/register button
beans_add_smart_action('beans_site_branding_append_markup', 'trurion_login_button');
function trurion_login_button() {
	if ( !is_user_logged_in() ) {
	?>
		<div style="float: right;">
		<a href="<?php echo get_page_link(100); ?>" class="uk-button" style="font-size: 15px; line-height: 1.9; background-color: #dce6f2; box-shadow: 0.5px 0.5px 0.5px #888888;">Đăng nhập</a>
		<a href="<?php echo get_page_link(109); ?>" class="uk-button" style="font-size: 15px; line-height: 1.9; background-color: #dce6f2; box-shadow: 0.5px 0.5px 0.5px #888888;">Đăng ký</a>
		</div>

	<?php
	} else {
		$current_user = wp_get_current_user(); ?>

		<div style="float: right; font-size: 18px;"> 
			<?php echo $current_user->user_email; ?> <a class="uk-button" style="font-size: 12px; line-height: 2.4; background-color: #dce6f2; box-shadow: 0.5px 0.5px 0.5px #888888;" href="<?php echo wp_logout_url(home_url()); ?>">Đăng xuất</a>
		</div>

	<?php	
	}
}

// Display section right before post content
beans_add_smart_action('beans_primary_prepend_markup', 'trurion_section_right_before_post_content');
function trurion_section_right_before_post_content() {
	if (is_home()) {
	?>
		<ul class="right-before-post-content uk-grid uk-hidden-small" style="margin-left:0px;">
		    <li class="uk-width-medium-1-4 .uk-hidden-medium" style="padding-top: 9px; padding-bottom: 9px; text-align:center; padding-left:0px; background: transparent; background-image: url(http://127.0.0.1/dethitracnghiem.vn/wp-content/themes/tbr-trurion/assets/images/label.png); background-repeat: no-repeat; background-position: center;">Lớp 12</li>
		    <li class="uk-width-medium-1-4" style="padding-top: 9px; padding-bottom: 9px; text-align:center; padding-left:0px; background: transparent; background-image: url(http://127.0.0.1/dethitracnghiem.vn/wp-content/themes/tbr-trurion/assets/images/label.png); background-repeat: no-repeat; background-position: center; margin-left: 20px;">Thi THPT Quốc Gia</li>
			<li class="uk-width-medium-1-4" style="padding-top: 9px; padding-bottom: 9px; text-align:center; padding-left:0px; background: transparent; background-image: url(http://127.0.0.1/dethitracnghiem.vn/wp-content/themes/tbr-trurion/assets/images/label.png); background-repeat: no-repeat; background-position: center; margin-left: 20px;">Ôn thi ĐH Quốc Gia</li>
		</ul>
	<?php
	}
}

// Display section right after post content
beans_add_smart_action('beans_primary_append_markup', 'trurion_section_right_after_post_content');
function trurion_section_right_after_post_content() {
	if (is_home()) {
	?>
		<ul class="right-after-post-content uk-grid uk-hidden-small" style="margin-left:0px;">
		    <li class="uk-width-medium-1-4" style="padding-top: 9px; padding-bottom: 9px; text-align:center; padding-left:0px; background: transparent; background-image: url(http://127.0.0.1/dethitracnghiem.vn/wp-content/themes/tbr-trurion/assets/images/label.png); background-repeat: no-repeat; background-position: center;">Lớp 11</li>
		    <li class="uk-width-medium-1-4" style="padding-top: 9px; padding-bottom: 9px; text-align:center; padding-left:0px; background: transparent; background-image: url(http://127.0.0.1/dethitracnghiem.vn/wp-content/themes/tbr-trurion/assets/images/label.png); background-repeat: no-repeat; background-position: center; margin-left: 20px;">Lớp 10</li>
			<li class="uk-width-medium-1-4" style="padding-top: 9px; padding-bottom: 9px; text-align:center; padding-left:0px; background: transparent; background-image: url(http://127.0.0.1/dethitracnghiem.vn/wp-content/themes/tbr-trurion/assets/images/label.png); background-repeat: no-repeat; background-position: center; margin-left: 20px;">Ôn thi vào lớp 10</li>
		</ul>
	<?php
	}
}



// Overwrite the footer content.
beans_modify_action_callback( 'beans_footer_content', 'example_footer_content' );

function example_footer_content() {
	?>

	<div class="uk-container uk-container-center" style="margin-top: 17px;">
		<div class="uk-grid" style="margin: auto;">

			<div class="uk-width-large-3-10 uk-width-medium-3-10" style="margin: auto auto 6px auto; height: 140px; border-radius: 10px; box-shadow: 3px 3px 3px #888888; background-color: #ffffff;">
		    		<div style="margin-right: 40px; margin-top: 10px; text-align:center;">			
				    	<h4 style=" border-bottom:1px solid #000000; padding-bottom:7px; color:#8c8c8c;">Hotline tư vấn</h4>
				    	Thầy Đào Trọng Anh<br /> 
			    		<i class="uk-icon-small uk-icon-phone"></i>: <strong style="font-size: 20px;">0973038256</strong>
			    	</div>
		    </div>

		    <div class="uk-width-large-3-10 uk-width-medium-3-10" style="margin: auto auto 6px auto; height: 140px; border-radius: 10px; box-shadow: 3px 3px 3px #888888; background-color: #ffffff;">
		    		<div style="margin-right: 40px; margin-top: 10px;">			
				    	<h4 style="text-align:center; border-bottom:1px solid #000000; padding-bottom:7px; color:#8c8c8c;">Thư điện tử và liên hệ</h4>
				    	<i class="uk-icon-small uk-icon-envelope-o"></i>: <span style="color: red;"> thaydaotronganh@gmail.com</span><br />
				    	<i class="uk-icon-small uk-icon-home"></i> 178, Xuân Đỗ, P. Cự Khối, Q. Long Biên, Hà Nội
			    	</div>
		    </div>

			<div class="uk-width-large-3-10 uk-width-medium-3-10" style="margin: auto auto 6px auto; height: 140px; border-radius: 10px; box-shadow: 3px 3px 3px #888888; background-color: #ffffff;">
		    		<div style="margin-right: 40px; margin-top: 10px;">			
				    	<h4 style="text-align:center; border-bottom:1px solid #000000; padding-bottom:7px; color:#8c8c8c;">Tìm chúng tôi trên Facebook</h4>
						<span style="font-size:13px;">Group: <a target="_blank" href="https://www.fb.com/groups/1732391470308252">fb.com/groups/1732391470308252</a></span><br>
						<span style="font-size:13px;">Fanpage: <a target="_blank" href="https://www.fb.com/dethitracnghiem">fb.com/dethitracnghiem</a></span>
			    	</div>
		    </div>
		</div>

		<div class="uk-grid uk-text-bold">
			<div class="uk-width-medium-1-1" style="color: #ffffff; text-align: center">
			Copyright © <?php echo date('Y'); ?> <a style="color: #EC614F;" href="http://www.dethitracnghiem.vn">Dethitracnghiem.vn</a><br />
			Chịu trách nhiệm nội dung: Đào Trọng Anh.
			<br />
			<br />
			<em style="color: #8c8c8c;">Website đang chờ cấp phép từ Bộ Công Thương.</em>
			</div>
		</div>
	</div>

	<?php
}

remove_filter('authenticate', 'wp_authenticate_username_password', 20);

add_filter('authenticate', function($user, $email, $password){

    //Check for empty fields
    if(empty($email) || empty ($password)){        
        //create new error object and add errors to it.
        $error = new WP_Error();

        if(empty($email)){ //No email
            $error->add('empty_username', __('<strong>ERROR</strong>: Email field is empty.'));
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Invalid Email
            $error->add('invalid_username', __('<strong>ERROR</strong>: Email is invalid.'));
        }

        if(empty($password)){ //No password
            $error->add('empty_password', __('<strong>ERROR</strong>: Password field is empty.'));
        }

        return $error;
    }

    //Check if user exists in WordPress database
    $user = get_user_by('email', $email);

    //bad email
    if(!$user){
        $error = new WP_Error();
        $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
        return $error;
    }
    else{ //check password
        if(!wp_check_password($password, $user->user_pass, $user->ID)){ //bad password
            $error = new WP_Error();
            $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
            return $error;
        }else{
            return $user; //passed
        }
    }
}, 20, 3);

add_filter('gettext', function($text){
    if(in_array($GLOBALS['pagenow'], array('wp-login.php'))){
        if('Username' == $text){
            return 'Email';
        }
    }
    return $text;
}, 20);

// Remove default user info field rows.
add_action('admin_head','hide_personal_options');
function hide_personal_options() { ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) { 
    	$("#first_name").remove();
    	$(".first_name").remove();
    	$(".column-first_name").remove();

    	$("#posts").remove();
    	$(".posts").remove();
    	$(".column-posts").remove();

    	$("#role").remove();
    	$(".role").remove();
    	$(".column-role").remove();
    });
    </script>
<?php
}