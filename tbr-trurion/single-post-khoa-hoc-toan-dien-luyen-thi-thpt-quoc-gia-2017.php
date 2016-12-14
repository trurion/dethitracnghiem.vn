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
	<!-- Title -->
	<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1">
	<p style="font-weight: bold; font-size: 20px; display: inline-block;">Khóa học toàn diện luyện thi THPT Quốc gia 2017</p>
		<div style="float: right; display: inline-block;">
		<span style="font-weight:bold; font-size: 20px; color: #aa3734;">540.000<sup>đ</sup></span>
		<a href="<?php echo get_page_link(79); ?>" class="uk-button uk-button-primary uk-button-medium">Đăng ký học</a>
		</div>
	</div>


	<!-- Round 1 -->
	<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1" style="margin: 0px;">
	<p style="font-size: 15px; color: red;">Vòng 1 - Round 1</p>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">KHẢO SÁT HÀM SỐ</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li><a target="_blank" href="<?php echo home_url(); ?>/khao-sat-ham-so-cd1">CĐ 1. Sự đồng biến – Nghịch biến của hàm số</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/khao-sat-ham-so-cd2">CĐ 2. Cực trị</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/khao-sat-ham-so-cd3">CĐ 3. Giá trị lớn nhất – Giá trị nhỏ nhất</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/khao-sat-ham-so-cd4">CĐ 4. Đồ thị hàm số</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/khao-sat-ham-so-cd5">CĐ 5. Tiếp tuyến</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/khao-sat-ham-so-cd6">CĐ 6. Tương giao giữa các đồ thị</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/khao-sat-ham-so-cd7">CĐ 7. Biện luận số nghiệm – Tìm điểm thuộc đồ thị</a></li>
		</ul>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">PHƯƠNG TRÌNH MŨ – LOGARIT</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li><a target="_blank" href="<?php echo home_url(); ?>/mu-logarit-cd1">CĐ 1. Lũy thừa</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/mu-logarit-cd2">CĐ 2. Logarit</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/mu-logarit-cd3">CĐ 3. Hàm số lũy thừa – Hàm số mũ – Hàm số logarit</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/mu-logarit-cd4">CĐ 4. Phương trình mũ</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/mu-logarit-cd5">CĐ 5. Phương trình Logarit</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/mu-logarit-cd6">CĐ 6. Bất phương trình Mũ – Logarit</a></li>
		</ul>
	</div>	

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">NGUYÊN HÀM – TÍCH PHÂN</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li><a target="_blank" href="<?php echo home_url(); ?>/tich-phan-cd1">CĐ 1. Nguyên hàm</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/tich-phan-cd2">CĐ 2. Biến đổi nguyên hàm</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/tich-phan-cd3">CĐ 3. Tích phân</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/tich-phan-cd4">CĐ 4. Ứng dụng tích phân</a></li>
		</ul>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">SỐ PHỨC</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li><a target="_blank" href="<?php echo home_url(); ?>/so-phuc-cd1">CĐ 1. Những vấn đề trọng tâm của số phức</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/so-phuc-cd2">CĐ 2. Tìm số phức – Tập hợp điểm</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/so-phuc-cd3">CĐ 3. Căn bậc hai – Phương trình bậc hai</a></li>
			<li>CĐ 4. Dạng lượng giác của số phức</li>
		</ul>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">THỂ TÍCH KHỐI ĐA DIỆN</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li><a target="_blank" href="<?php echo home_url(); ?>/the-tich-khoi-da-dien-cd1">CĐ 1. Thể tích hình chóp</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/the-tich-khoi-da-dien-cd2">CĐ 2. Góc</li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/the-tich-khoi-da-dien-cd3">CĐ 3. Lăng trụ đứng</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/the-tich-khoi-da-dien-cd4">CĐ 4. Lăng trụ xiên</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/the-tich-khoi-da-dien-cd5">CĐ 5. Thể tích kết hợp và các vấn đề tổng hợp</a></li>
		</ul>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">KHỐI TRÒN XOAY</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li><a target="_blank" href="<?php echo home_url(); ?>/khoi-tron-xoay-cd1">CĐ 1. Hình trụ</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/khoi-tron-xoay-cd2">CĐ 2. Hình nón</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/khoi-tron-xoay-cd3">CĐ 3. Hình cầu</a></li>
		</ul>
	</div>	

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">TỌA ĐỘ KHÔNG GIAN OXYZ</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li><a target="_blank" href="<?php echo home_url(); ?>/toa-do-khong-gian-oxyz-cd1">CĐ 1. Hệ trục tọa độ và các vấn đề cơ bản</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/toa-do-khong-gian-oxyz-cd2">CĐ 2. Phương trình mặt phẳng</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/toa-do-khong-gian-oxyz-cd3">CĐ 3. Phương trình đường thẳng</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/toa-do-khong-gian-oxyz-cd4">CĐ 4. Mặt phẳng kết hợp</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/toa-do-khong-gian-oxyz-cd5">CĐ 5. Tìm điểm</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/toa-do-khong-gian-oxyz-cd6">CĐ 6. Mặt cầu kết hợp</a></li>
		</ul>
	</div>	

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">CÁC CHUYÊN ĐỀ BỔ SUNG 10 & 11</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li>CĐ 1.</li>
			<li>CĐ 2.</li>
			<li>CĐ 3.</li>
			<li>CĐ 4.</li>
			<li>CĐ 5.</li>
		</ul>
	</div>	

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">LUYỆN ĐỀ TRẮC NGHIỆM 2017</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li><a target="_blank" href="<?php echo home_url(); ?>/luyen-de-thi-trac-nghiem-2017-de1">Đề số 1. Chu Văn An – Hà Nội</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/luyen-de-thi-trac-nghiem-2017-de2">Đề số 2. THPT Nhã Nam</a></li>
			<li><a target="_blank" href="<?php echo home_url(); ?>/luyen-de-thi-trac-nghiem-2017-de3">Đề số 3. THPT Nguyễn Gia Thiều</a></li>
			<li>Đề số 4.</li>
			<li>Đề số 5.</li>
			<li>Đề số 6.</li>
			<li>Đề số 7.</li>
			<li>Đề số 8.</li>
			<li>Đề số 9.</li>
			<li>Đề số 10.</li>
			<li>Đề số 11.</li>
			<li>Đề số 12.</li>
			<li>Đề số 13.</li>
			<li>Đề số 14.</li>
			<li>Đề số 15.</li>
			<li>Đề số 16.</li>
			<li>Đề số 17.</li>
			<li>Đề số 18.</li>
			<li>Đề số 19.</li>
			<li>Đề số 20.</li>
			<li>Đề số 21.</li>
			<li>Đề số 22.</li>
			<li>Đề số 23.</li>
			<li>Đề số 24.</li>
			<li>Đề số 25.</li>
			<li>Đề số 26.</li>
			<li>Đề số 27.</li>
			<li>Đề số 28.</li>
			<li>Đề số 29.</li>
			<li>Đề số 30.</li>
		</ul>
	</div>	

	<!-- Round 2 -->
	<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1" style="margin: 0px;">
	<hr />
	<p style="font-size: 15px; color: red;">Vòng 2 - Round 2</p>
	</div>	

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">ĐẠI SỐ - GIẢI TÍCH</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li>CĐ 1.</li>
			<li>CĐ 2.</li>
			<li>CĐ 3.</li>
			<li>CĐ 4.</li>
			<li>CĐ 5.</li>
			<li>CĐ 6.</li>
			<li>CĐ 7.</li>
		</ul>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">HÌNH HỌC</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li>CĐ 1.</li>
			<li>CĐ 2.</li>
			<li>CĐ 3.</li>
			<li>CĐ 4.</li>
			<li>CĐ 5.</li>
			<li>CĐ 6.</li>
		</ul>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">LUYỆN ĐỀ TRẮC NGHIỆM 2017</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 170px; overflow-x:hidden; overflow-y:scroll;">
			<li>Đề số 31.</li>
			<li>Đề số 32.</li>
			<li>Đề số 33.</li>
			<li>Đề số 34.</li>
			<li>Đề số 35.</li>
			<li>Đề số 36.</li>
		</ul>
	</div>

<?php	
}

beans_load_document();