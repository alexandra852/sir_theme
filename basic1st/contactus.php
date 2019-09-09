<?php

include_once('./_common.php');


	$co_id = "testPage";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "4";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "1";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "CONTACTUS";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>
<style>
	li{list-style: none;}
	.title{display:none;}
	.sub3_wrap{width: 1200px;height: 1500px;background-color:#cdcdcd;padding-top: 3%;}
	.sub3_wrap .box1{padding-bottom: 15px;position: relative;font-size: 18px;color: #3b4d5a;letter-spacing: -1px;line-height: 35px;margin: 0 auto;width: 1200px;height: 548px;}
	.box1>b{font-weight: bold;font-size: 35px;letter-spacing: -2px;margin-right: 15px;}
	.box1>span{color: #989898;letter-spacing: 0;}
	.box1>a>img{display:block;width: 97px;height: 97px;position: absolute;right: 20px;top: 8px;}
	.box1>.sub3_02{display:block;width: 1200px;height: 417px;border: 1px solid #b8b8b8;}
	.box1>h2{width: 400px;position: absolute;font-size: 2em;right: 20%;padding-top: 11px; color:#989898;;}
	.box1>p{width: 220px;font-size: 0.8em;text-align: center;position: absolute;right: 0;}
	.box1_txt1{font-size: 0.8em;text-align: left;position: absolute;right: 20px;color:#989898;}
	.box1_txt2{font-size: 0.8em;text-align: left;position: absolute;right:96px;bottom:34px;color:#989898;}


	.sub3_box2{height:850px;}
	.sub3_title>b{color: #5c5c5c;font-size: 30px;letter-spacing: -1px;padding-bottom: 20px;}
	.sub3_title{font-weight: bold;font-size: 20px;letter-spacing: 0;color: #80afb5;padding-bottom: 15px;}
	.sub3_box3{height: 640px;background-color:#f3f3f3;padding:40px;position: relative;margin-bottom: 80px;}
	.sub3_box3>.box3_li1{width: 48%;height: 139px;line-height: 28px;letter-spacing: -1px;color: #989898;font-size: 16px;position: absolute;left: 0;font-weight:none;padding-left:40px;}
	.sub3_box3>.box3_li2{width: 52%;height: 139px;line-height: 28px;letter-spacing: -1px;color: #989898;font-size: 16px;padding-left:96px;border-left: 1px solid #d3d3d3;position: absolute;right: 0;top: 40px; margin-right:20px;}
	.sub3_box3 b{display: block;font-size: 18px;line-height: 18px;color: #989898;font-weight: bold;letter-spacing: -1px;margin-bottom: 9px;}

	.sub3_box3>ul{width: 1200px;height: 460px;bottom:-162px;left: 0;padding:25px;position: relative;margin-left:-41px;}
	.sub3_box3>ul>h2{font-size: 18px;line-height: 18px;color: #989898;font-weight: bold;letter-spacing: -1px;margin-bottom:16px;}
	.sub3_box3>ul>.td1{width: 123px;height: 123px;vertical-align: middle;color: #7c7c7c;font-size: 16px;line-height:22px;letter-spacing: -1px;text-align: center;background-color: #ffffff;border-radius: 50%;position: absolute;padding-top:49px;}
	.sub3_box3>ul>.td2{width: 87px;height: 64px;border-bottom: 4px solid #ffffff;position: absolute;}
	.sub3_box3>ul .sub3_textbox{position: absolute;bottom:45px;right: 43px;}
	.sub3_box3>ul .sub3_textbox p{float: left;text-align: center;margin-left:83px;}



</style>
<div>
	<div class="sub3_wrap">
		<div class="box1_wrap">
			<div class="box1">
				<b>아트박스</b>
				"서울특별시 서초구 반포대로 12길 41 (주)아트박스 "
				<span>/ T.02-5200-200, F.02-522-8968</span>
				<a href="https://map.naver.com/?edid=32284551&elng=4a277e50d781e943d4f3c9336d0d4b59&elat=5c12bae99d386434252682d3fb96a9c2&eText=%EC%95%84%ED%8A%B8%EB%B0%95%EC%8A%A4+%EB%B3%B8%EC%82%AC&eType=SITE_1">
					<img src="<?echo G5_THEME_IMG_URL?>/sub3_01.png" alt="">
				</a>					
				<img src="<?echo G5_THEME_IMG_URL?>/sub3_02.png" alt="" class="sub3_02">
				<h2>고객감동센터 1577-9081</h2>
				<li class="box1_txt1">평일09:00~18:00 / 점심 12:30~13:30</li>
				<li class="box1_txt2">customer@artbox.co.kr</li>
			</div>
			<div class="box2_wrap">
				<div class="sub3_box2">
					<div class="sub3_title">
						<b>가맹점 문의</b>
						<br>
						국내 - Domestic Franchise (T.02-520-0232)
					</div>
					<div class="sub3_box3">
						<li class="box3_li1">
							<b>• 개설 안내</b>
							점포 condition:핵심 상권 내 전용면적40평 이상,전면 5m 이상<br>
							인테리어 비용 : 평당 약250만원<br>
							가맹비 : 1,100만원 (VAT포함)/ 보증금:1,000만원<br>
							초도 물품 : 평당 약300만 원 /POS: 300만원
						</li>
						<li class="box3_li2">
							<b>• 창업 대상</b>
							라이프스타일 제품에 관심이 있으신 분<br>
							긍정적이고,적극적인 서비스 마인드를 갖추신 분<br>
							점포 개설 요건에 해당되는 매장을 소유하고 있거나,임차 가능하신 분<br>
							점포 개설에 소요되는 비용에 대해 자금 동원이 가능하신 분 
						</li>
						<ul>
							<h2>• 개설 절차</h2>
							<dd class="td1" style="left:150px">개설 상담</dd>
							<dd class="td2" style="left:273px"></dd>
							<dd class="td1" style="left:360px;padding-top:40px">시장조사 및<br>상권 분석</dd>
							<dd class="td2" style="left:483px"></dd>
							<dd class="td1" style="left:570px">계약 체결</dd>
							<br>
							<dd class="td1" style="left:360px;bottom:100px;">인테리어</dd>
							<dd class="td2" style="left:482px;bottom:162px;"></dd>
							<dd class="td1" style="left:569px;bottom:100px;padding-top:40px;">가맹점주<br>본사 교육</dd>
							<dd class="td2" style="left:691px;bottom:162px;"></dd>
							<dd class="td1" style="left:777px;bottom:100px;">오픈</dd>
							<dd class="td2" style="left:899px;bottom:162px;"></dd>
							<dd class="td1" style="left:985px;bottom:100px;">사후관리</dd>

							<li class="sub3_textbox">
								<p>본사와 시설 및 집기 협의<br>가맹점주와 인테리어 업체<br>직접 계약</p>
								<p>직영점 실습<br>상품 관리 및 진열 방법,<br>인력 운영 방법 교육</p>
								<p >본사 직원을 파견하여<br>현장 교육 및 DP 진행</p>
								<p style="margin-left:73px;">자동 주문 시스템을 통해 매장 운영<br>본사 직원의 정기적인 <br> 방문을 통한 지속적인 관리</p>
							</li>
						</ul>
					</div>
						<h2 style="margin-bottom: 11px;font-weight: bold;font-size: 20px;letter-spacing: 0;color: #80afb5;padding-bottom: 20px;">
						국외 - Overseas Franchise (export@artbox.co.kr /T.82-2-520-0288 /F.82-2-522-8967)</h2>
						<p style="p">Plese feel free to contact us if you are interesred</p>
				</div>
				
			</div>
			
		</div>
	</div>

</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>