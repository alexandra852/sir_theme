<?php

include_once('./_common.php');


	$co_id = "testPage";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "3";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "1";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "CONTRIBUTION";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>
<style>
	#wrapper{width: 100%;background-color:#d7e0e7;}
	.sbtImg{padding-left:20%;}
	#wrapper .sub02_wrap{width:1200px;height:1266px;margin:0 auto;padding-top:3%;}
	.sub02_wrap>ul{padding-top: 30px;width: 1200px;padding-bottom: 40px;}
	.sub02_wrap>ul:after{content:"";clear: both;display: block;}
	.sub02_wrap img{display:block;height: 124px;width:1200px;}
	.left{width: 550px;border-right: 1px solid #ffff;float: left;margin-left:4%;}
	.right{width: 550px;float: right;}
	h3{font-size: 26px;color: #3b4d5a;text-align: left;line-height: 26px;letter-spacing: -2px;padding-bottom: 15px;}
	p{font-size: 15px;color: #808080;text-align: left;line-height: 25px;letter-spacing: -1px;}

	.slide_wrap{width: 100%;height: 814px;background: url(img/sub2bgi.png);position: relative;}
	.sub02_slide{width: 1200px;margin: 0 auto;padding-top:4%;}
	.slide{width: 1200px;height: 683px;margin: 0 auto;background-color:gray;overflow:hidden;}
	.slide:after{content:"";clear: both;display: block;}
	.slide>li{float:left;}
	.slide>li>img{display:block;width: 1200px;height: 683px;}
	.bx-controls{display:none;}
	.but_left{position: absolute;top: 50%;left: 14%;transform:translate(-14%,-50%);}
	.but_right{position: absolute;top: 50%;right: 14%;transform:translate(-14%,-50%);}
	#wrapper #container{width: 100%;margin-bottom:0;padding:0;}
</style>
<div>

	<div id="wrapper">
		<div class="sub02_wrap">
			<img src="<?echo G5_THEME_IMG_URL?>/sub2_01.png" alt="sub2_01">
			<ul>
				<div class="left">
					<h3>아이들의 울타리 후원</h3>
					<p>경제적인 이유로 문화적인 혜택을 받지 못하는어린이와 청소년들의<br> 정서적 안정을 위해,두 달에 한 번씩 서울 동작구에 있는 '아이들의 울타리'를 방문하여<br>다양한 문화 교육 활동 및 후원을 진행하고 있습니다. </p>
				</div>
				<div class="right">
					<h3>성가원 복지관 후원</h3>
					<p>중증 장애인의 건강관리, 사회/심리 재활훈련,여가활동,시설 안정 관련 교육,<br>위생관리 등을 진행하는 사회복지 기관인'성가원'을 후원하며<br>장애우들의 자립과 복지를 위해 노력하고 있습니다.</p>
				</div>
			</ul>
			<img src="<?echo G5_THEME_IMG_URL?>/sub2_02.png" alt="sub2_02">
			<ul>
				<div class="left">
					<h3>사랑의 식당 봉사</h3>
					<p>아트박스의 임직원들은 두 달에 한번씩 '까리따스 방배종합사회복지관'에 있는<br>'사랑의 식당'에 방문하여 결석에 처해 있는 소외 이웃을 위한<br>봉사활동을 진행하며 이웃 사랑을 신천하고 있습니다. </p>
				</div>
				<div class="right">
					<h3>새 생명 장애인의 집 후원</h3>
					<p>충북 음성의 직원들은 매월'새 생명 장애인의 집'에 방문하여 사회적 가치를<br>실천하는 사회적 기업 상품의 판매 및 홍보활동에 적극적으로 참여,<br>지역사회와 함께 지속 가능한 성장을 도모합니다.</p>
				</div>
			</ul>
			<img src="<?echo G5_THEME_IMG_URL?>/sub2_03.png" alt="sub2_03">
			<ul>
				<div class="left">
					<h3>사랑의 연탄 나눔 봉사</h3>
					<p>매해 연말 아트박스는'사랑의 연탄 나눔 운동 본부'를 통해 연탄을 우원하고,<br>연탄이 필요한 가정에 모든 임직원들이 직접 연탄을 나르며<br>소외된 이웃을 위한 따듯한 나눔을 실천하고 있습니다.</p>
				</div>
				<div class="right">
					<h3>아침머꼬 결식 청소년 후원</h3>
					<p>'아침머꼬'는 경제적인 어려움으로 인해 끼니를 거르는 청소년들을<br>대상으로 하는 '월드비전'의 조식 지원 사업으로,청소년들의 건강한 성장과<br>정서적 안정,학업을 위한 후원 활동을 진행하고 있습니다.</p>
				</div>
			</ul>
			<img src="<?echo G5_THEME_IMG_URL?>/sub2_04.png" alt="sub2_04">
			<ul>
				<div class="left" style="width:1000px;border-right:0">
					<h3>캄보디아 타팡초등학교 후원</h3>
					<p>캄보디아 지역의 교육 및 생활환경 개선을 위한 캠페인으로,'월드비전'과 함께 캄보디아 씨엠립 주 푸옥 지역의 학교 건설을 후원하며<br>2년에 한 번씩 임직원들이 직접 방문하여 시설 정비,벽화 그리기 등의 재능기부 및 봉사활동에 참여합니다.</p>
				</div>
			</ul>
		</div>


		<script>
			$(document).ready(function(){
				var mainstyle = $('.slide').bxSlider({
					auto:true
				});
				$('.but_left').click(function(){
					mainstyle.goToPrevSlide();
					return false;
				});

				$('.but_right').click(function(){
					mainstyle.goToNextSlide();
					return false;		
				});
			});
		</script>
		
		<div class="slide_wrap">
			<div class="sub02_slide">
				<ul class="slide">
					<li>
						<img src="<?echo G5_THEME_IMG_URL?>/sub_slid_01.jpg" alt="">
					</li>
					<li>
						<img src="<?echo G5_THEME_IMG_URL?>/sub_slid_02.jpg" alt="">
					</li>
					<li>
						<img src="<?echo G5_THEME_IMG_URL?>/sub_slid_03.jpg" alt="">
					</li>
					<li>
						<img src="<?echo G5_THEME_IMG_URL?>/sub_slid_04.jpg" alt="">
					</li>
					<li>
						<img src="<?echo G5_THEME_IMG_URL?>/sub_slid_05.jpg" alt="">
					</li>
					<li>
						<img src="<?echo G5_THEME_IMG_URL?>/sub_slid_06.jpg" alt="">
					</li>
					<li>
						<img src="<?echo G5_THEME_IMG_URL?>/sub_slid_07.jpg" alt="">
					</li>
				</ul>
			</div>
			<div class="but_left">
				<img src="<?echo G5_THEME_IMG_URL?>/arrow_left.png" alt="">
			</div>
			<div class="but_right">
				<img src="<?echo G5_THEME_IMG_URL?>/arrow_right.png" alt="">
			</div>
		</div>
	</div>

</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>ㄴㄴ