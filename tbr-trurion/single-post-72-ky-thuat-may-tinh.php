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
		<p style="font-weight: bold; font-size: 20px; display: inline-block;">72 Kỹ thuật máy tính CASIO thi THPT quốc gia 2017</p>
		<div style="float: right; display: inline-block;">
			<span style="font-weight:bold; font-size: 20px; color: #aa3734;">300.000<sup>đ</sup></span>
			<a href="<?php echo get_page_link(79); ?>" class="uk-button uk-button-primary uk-button-medium">Đăng ký học</a>
		</div>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">NGUYÊN HÀM – TÍCH PHÂN</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 200px; overflow-x:hidden; overflow-y:scroll;">
			<li><a target="_blank" href="<?php echo home_url(); ?>/72-ky-thuat-cd1-kt1">KT1. Test nguyên hàm bằng CASIO</a></li>
			<li>KT2. Test nguyên hàm lượng giác bằng CASIO</li>
			<li>KT3. CASIO tích phân cơ bản</li>
			<li>KT4. CASIO Tích phân nâng cao 1</li> 
			<li>KT5. CASIO tích phân nâng cao 2</li>
			<li>KT6. CASIO hỗ trợ tính nguyên hàm và tích phân hữu tỉ</li>
			<li>KT7. CASIO và bài toán chuyển động</li>
			<li>KT8. CASIO tính diện tích hình phẳng 1</li>
			<li>KT9. CASIO tính diện tích hình phẳng 2</li>
			<li>KT10. CASIO tính thể tích khối tròn xoay 1</li>
			<li>KT11. CASIO tính thể tích khối tròn xoay 2</li>
		</ul>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">SỐ PHỨC</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 200px; overflow-x:hidden; overflow-y:scroll;">
			<li>KT12</li>
			<li>KT13</li>
			<li>KT14</li>
			<li>KT15</li>
			<li>KT16</li>
			<li>KT17</li>
			<li>KT18</li>
		</ul>
	</div>	

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">HÀM SỐ</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 200px; overflow-x:hidden; overflow-y:scroll;">
			<li>KT19</li>
			<li>KT20</li>
			<li>KT21</li>
			<li>KT22</li>
			<li>KT23</li>
			<li>KT24</li>
			<li>KT25</li>
			<li>KT26</li>
			<li>KT27</li>
			<li>KT28</li>
			<li>KT29</li>
			<li>KT30</li>
			<li>KT31</li>
			<li>KT32</li>
			<li>KT33</li>
			<li>KT34</li>
			<li>KT35</li>
		</ul>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">MŨ – LOGARIT</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 200px; overflow-x:hidden; overflow-y:scroll;">
			<li>KT36</li>
			<li>KT37</li>
			<li>KT38</li>
			<li>KT39</li>
			<li>KT40</li>
			<li>KT41</li>
			<li>KT42</li>
			<li>KT43</li>
			<li>KT44</li>
			<li>KT45</li>
			<li>KT46</li>
			<li>KT47</li>
			<li>KT48</li>
			<li>KT49</li>
			<li>KT50</li>
			<li>KT51</li>
			<li>KT52</li>
			<li>KT53</li>
			<li>KT54</li>
			<li>KT55</li>
			<li>KT56</li>
		</ul>
	</div>

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">HÌNH HỌC</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 200px; overflow-x:hidden; overflow-y:scroll;">
			<li>KT57</li>
			<li>KT58</li>
			<li>KT59</li>
			<li>KT60</li>
			<li>KT61</li>
		</ul>
	</div>	

	<div class="uk-width-medium-1-3 uk-width-small-1-2">
		<h3 style="background-color: #dce6f2; border-radius: 5px; box-shadow: 0.5px 0.5px 0.5px #888888; text-align: center; padding: 5px 0px 5px 0px;">NÂNG CAO & ĐẶC BIỆT</h3>
		<ul style="list-style:none; line-height: 1.5; padding: 0px; height: 200px; overflow-x:hidden; overflow-y:scroll;">
			<li>KT62</li>
			<li>KT63</li>
			<li>KT64</li>
			<li>KT65</li>
			<li>KT66</li>
			<li>KT67</li>
			<li>KT68</li>
			<li>KT69</li>
			<li>KT70</li>
			<li>KT71</li>
			<li>KT72</li>
		</ul>
	</div>

<?php	
}

beans_load_document();