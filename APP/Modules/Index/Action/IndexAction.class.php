<?php
	/*
	 * Description:
	 * User: zhaoyiming
	 * Date: ${Date}
	*/
	header('Content-type:text/html;charset="utf8"');

	class IndexAction extends Action {
		public function index(){
			$country_id = $_POST['countryId'];

			if ($country_id == 1) {
				$banner_data = M('banner')->query('select banner_path from tour_banner limit 0, 4');
			} else {
				$banner_data = M('banner')->query('select banner_path from tour_banner where banner_belong_country = "'. $country_id .'" limit 0, 4');
			}

			if ($country_id == 1) {
				$hot_coupon = M('coupon')->query('select coupon_name, coupon_explain, coupon_ico_path from tour_coupon limit 0, 4');
			} else {
				$hot_coupon = M('coupon')->query('select coupon_name, coupon_explain, coupon_ico_path from tour_coupon where coupon_belong_country ="'. $country_id .'" limit 0, 4');
			}

			if ($country_id == 1) {
				$feature_article = M('feature')->query('select feature_title, feature_ico_path, feature_url, feature_classify from tour_feature limit 0, 4');
			} else {
				$feature_article = M('feature')->query('select feature_title, feature_ico_path, feature_url, feature_classify from tour_feature where feature_belong_country="'. $country_id .'" limit 0, 4');
			}
			
			echo json_encode(
				array(
					'bannerData' => $banner_data,
					'hotCoupon' => $hot_coupon,
					'featureArticle' => $feature_article,
					'aaaaa' => 12344
				)
			);
        }
	}