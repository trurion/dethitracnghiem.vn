<?php

// Setup post view
add_action( 'beans_before_load_document', 'trurion_page_setup' );

function trurion_page_setup() {

	beans_remove_action( 'beans_post_title' );
	beans_remove_action( 'beans_post_content' );
	beans_remove_action( 'beans_post_navigation' );

	beans_remove_markup('beans_content');
	beans_remove_markup('beans_post');
	beans_remove_markup('beans_post_header');
	beans_remove_markup('beans_post_body');

}

beans_add_smart_action('beans_primary_prepend_markup', 'trurion_khoahoc');
function trurion_khoahoc() {
	?>
	<div class="uk-panel uk-panel-box" style="border: 1px solid #EDEDED;">
		<h5>ĐỂ HỌC CÁC KHÓA HỌC TẠI <a href="<?php echo get_home_url(); ?>">DETHITRACNGHIEM.VN</a> CÁC EM THỰC HIỆN CÁC BƯỚC SAU:</h5>
		<ul style="list-style:none;">	
			<li><h4>BƯỚC 1. Đăng kí thông tin cá nhân tại: <a href="<?php echo get_page_link(79); ?>">http://dethitracnghiem.vn/dang-ky/</a></h4></li>
			<li><h4>BƯỚC 2. Chọn khóa học và đóng học phí theo một trong hai cách sau:</h4></li> 
				<ul> 
			  		<li><strong>Đóng học phí qua ngân hàng:</strong> Để học khóa học bạn đóng học phí qua tài khoản sau:</li> 
			    		<ul>
			    			<li>Số tài khoản: <strong>101010010562375</strong></li>
			    			<li>Tên tài khoản: Đào Trọng Anh</li> 
			    			<li>Vietinbank - Chi nhánh Bắc Hà Nội</li>
			    			<li>Nội dung chuyển tiền: Tên em - Số điện thoại – Gmail - Tên khóa học (ngắn gọn)</li>
			    		</ul> 
			    		<em>VD: Nguyễn Thùy Linh - 0973037234 – nguyenthuylinh@gmail.com – 72 kĩ thuật CASIO</em><br /> 
						Chú ý ghi đầy đủ thông tin như trên và giữ lại giấy chuyển tiền cho đến khi vào học.<br /><br />
					<li><strong>Đóng học phí qua thẻ điện thoại.</strong> (Không khuyến khích). Các em chịu phí 25%, phí này do nhà mạng thu.</li>  
						<ul>
							<li>Công thức: Cần nạp = Học phí : 0,75</li> 
							<li>Điền các thông tin thẻ nạp vào phiếu sau: <a href="http://tinyurl.com/napthe-dta2017" target="_blank">http://tinyurl.com/napthe-dta2017</a></li>
						</ul> 
				</ul>
				<hr />


			<li><h4>BƯỚC 3. Team kĩ thuật setup tài khoản.</h4></li>
			<li><h4>BƯỚC 4. Vào website: dethitracnghiem.vn học bình thường.</h4></li>
		</ul>
	</div>

<?php
}

beans_load_document();