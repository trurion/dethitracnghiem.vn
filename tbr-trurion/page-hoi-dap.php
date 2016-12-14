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
		<h4 style="color:#008000;">Câu hỏi 1: Để học online các khóa học trên <a href="http://www.dethitracnghiem.vn">dethitracnghiem.vn</a> em cần những điều kiện gì ?</h4>
		<p>Để học online các khóa học em cần có:</p>
			<ul>
				<li>Máy tính có kết nối internet.</li>  
				<li>Laptop/máy tính bảng/điện thoại có kết nối wifi.</li>
			</ul>
		<hr />

		<h4 style="color:#008000;">Câu hỏi 2: Cho em xin lịch học online để em sắp xếp thời gian ?</h4>
		<p>Em chú ý đây là khóa học online, không giống như các em đi học thêm hay học trên trường nên không có lịch học. Em tự sắp xếp thời gian cá nhân của em để học. Em có thể học bất cứ lúc nào rảnh mà em muốn theo lịch của em. </p>
		<hr />

		<h4 style="color:#008000;">Câu hỏi 3: Em học sau có theo kịp chương trình hay không ?</h4>
		<p>Bài giảng luôn sẵn sàng trên hệ thống, việc học của em hoàn toàn độc lập và không liên quan đến các bạn khác. Nên không có chuyện kịp hay không theo kịp các bạn như lớp học thêm truyền thống.</p>
		<hr />

		<h4 style="color:#008000;">Câu hỏi 4: Tại sao em đóng tiền bằng thẻ cào lại bị mất phí 25% ?</h4>
		<p>Đây là phí do các nhà mạng thu để bù đắp chi phí phát hành thẻ và thầy nhắc lại là do các nhà mạng thu. Phí đóng tiền bằng thẻ cào hiện nay là 25%. Ví dụ em nạp thẻ 100K thì thầy chỉ nhận được 75K do đã bị trừ phí 25%. Cách này chỉ áp dụng với các bạn giao thông khó khăn, thầy không khuyến khích.<br />
		Em nên đóng học phí qua ngân hàng. Chỉ cần đến ngân hàng bất kì, ưu tiên VietinBank (phí chuyển sẽ rẻ hơn và đến nhanh hơn), xin 1 tờ giấy chuyển tiền và viết là xong, chưa biết điền thì nhờ nhân viên ngân hàng hướng dẫn.</p>
		<hr />

		<h4 style="color:#008000;">Câu hỏi 5:  Đóng học phí xong em vào học như thế nào ?</h4>
		<p>Sau khi đóng học phí xong. Team kĩ thuật sẽ setup tài khoản học cho em. Nếu đăng nhập mà không học được có thể do 2 nguyên nhân:</p>
			<ul>
				<li>Em chuyển khác ngân hàng với tài khoản của thầy. Thời gian chuyển tiền sẽ chậm hơn từ 1 đến 2 tiếng.</li>  
				<li>Em chuyển tiền sau 4h, hệ thống ngân hàng sẽ chuyển học phí tới thầy vào ngày hôm sau (không kể thứ Bảy và Chủ nhật).</li>
			</ul>
		<hr />

		<h4 style="color:#008000;">Câu hỏi 6: Trong quá trình học em sẽ hỏi ai những chỗ mà em chưa hiểu ?</h4>
		<p>Về cơ bản, bài giảng trong các khóa học rất dễ hiểu nên rất ít bạn thắc mắc. Nếu em muốn giải đáp có thể lập topic trong Group Facebook của mỗi bài giảng hoặc inbox trực tiếp đến thầy Đào Trọng Anh.</p>
		<hr />
	</div>

<?php
}

beans_load_document();