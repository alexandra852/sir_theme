<?php

include_once('./_common.php');


	$co_id = "testPage";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "2";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "1";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "BRAND";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>
<style>
	.sub01_wrapper{position: relative;height: 2100px;}

	.artbox{width:520px;height: 978px;padding-top:50px;position: absolute;left:2%;margin-bottom: 50px}
	.poom{width:520px;height: 978px;padding-top:50px;position: absolute;right:2%;margin-bottom: 50px;}
	.sysmax{width:520px;height: 978px;padding-top:50px;position: absolute;left:2%;bottom:70px;margin-bottom: 50px;}
	.blot{width:520px;height: 978px;padding-top:50px;position: absolute;right:2%;bottom:70px;margin-bottom: 50px;}

	.bar{width: 100%;height: 1px;background-color: #cecece;position: absolute;top: 45%;}

	.logo{display:block;margin-bottom:15px;}
	.img{display:block;margin-bottom:26px;}
	h2{line-height: 54px;color: #3b4d5a;font-size: 23px;font-weight: bold;letter-spacing: -1px;}
	p{padding: 10px 0;text-align: left;font-size: 15px;color: #808080;line-height: 28px;letter-spacing: -1px;}
	.sns:after{content:"";clear: both;display: block;}
	.sns img{display:block;width:70px;float: left;padding-top: 20px;margin-left: 10px;}
	.sns .sns1{margin-left:0}


</style>

<div class="sub01_wrapper">
	<div class="artbox">

		<a href="http://www.artboxmall.com/Home/"><img class="logo"src="<?echo G5_THEME_IMG_URL?>/sub_logo_1.png" alt="logo1"></a>
		<img class="img"src="<?echo G5_THEME_IMG_URL?>/sub_logo1_1.jpg" alt="img1">
		<h2>언제나 유쾌하고 새로운 모두의 행복충전소</h2>
		<p>문구,팬시,패션,소품,리빙 아이템까지-<br>아트박스는 톡톡 튀는 감각과 새로운 사고로 무궁무진한 상상의 세계를 펼쳐갑니다.<br>매일 보아도 새로운, 누구와 들러도 즐거운- 대한민국 대표 행복충선소!<br>
		다양한 아이템들을 원스톱 쇼핑할 수 있는 편리하고 유쾌한 공간을 만들어 갑니다.</p>
		<div class="sns">
			<img  class="sns1"src="<?echo G5_THEME_IMG_URL?>/sub_icon_1.png" alt="">
			<img src="<?echo G5_THEME_IMG_URL?>/sub_icon_2.png" alt="">
		</div>
	</div>
	<div class="poom">
		<a href="http://www.poom.co.kr/Home/"><img class="logo"src="<?echo G5_THEME_IMG_URL?>/sub_logo_2.png" alt="logo1"></a>
		<img class="img"src="<?echo G5_THEME_IMG_URL?>/sub_logo2_1.jpg" alt="img1">
		<h2>감각적인 디자인 제품들을 선보이는 라이프스타일샵</h2>
		<p>국내의 디자인 제품은 물론 해외 유명 브랜드까지-<br>품은 온ㆍ오프라인의 다양한 채널을 통해 다양한 디자인 제품들을 선보이는<br>라이프스타일 브랜드 입니다. 세상의 모든 디자인을 품는 넉넉함과 신선함으로<br>
		보다 감각적인 생활,특별한 일상을 선사합니다.</p>
		<div class="sns">
			<img  class="sns1"src="<?echo G5_THEME_IMG_URL?>/sub_icon_1.png" alt="">
			<img src="<?echo G5_THEME_IMG_URL?>/sub_icon_2.png" alt="">
		</div>
	</div>
	<div class="bar"></div>
	<div class="sysmax">
		<a href="http://www.poom.co.kr/Home/Shop/BrandShopList.asp?Brandidx=2917"><img class="logo"src="<?echo G5_THEME_IMG_URL?>/sub_logo_3.png" alt="logo1"></a>
		<img class="img"src="<?echo G5_THEME_IMG_URL?>/sub_logo3_1.jpg" alt="img1">
		<h2>스마트한 생활환경을 설계하는 공간전문가</h2>
		<p>사무공간은 물론 일상의 생활공간까지-<br>국내최고의 사무용품 브랜드 시스맥스와 프리미엄 생활용품 브랜드 마이룸은<br>사용자와 공간을 생각합니다. 사소한 불편함까지도 놓치지 않는 디자인,<br>
		일상을 더욱 행복하게 만드는 디자인-공간이 달라지면 삶이 달라집니다.</p>

	</div>
	<div class="blot">
		<a href=""><img class="logo"src="<?echo G5_THEME_IMG_URL?>/sub_logo_4.png" alt="logo1"></a>
		<img class="img"src="<?echo G5_THEME_IMG_URL?>/sub_logo4_1.jpg" alt="img1">
		<h2>세상 예쁜 매일을 만들어줄 생기발랄 코스메틱</h2>
		<p>걸그룹보다~ 여배우보다~ 세상 누구보다 예쁜 나만의 개성 찾기.<br>비롯은 모든 여성들이 자신만의 아름다움을 찾을 수 있기를 바랍니다.<br>다채로운 컬러,믿을 수 있는 품질,사랑스러운 디자인,<br>
		합리적인 가격으로 매일의 예쁨을 담당할 비롯을 만나보세요.</p>
		<div class="sns">
			<img  class="sns1"src="<?echo G5_THEME_IMG_URL?>/sub_icon_1.png" alt="">
			<img src="<?echo G5_THEME_IMG_URL?>/sub_icon_2.png" alt="">
		</div>
	</div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>