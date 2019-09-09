<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<!-- <script>
   	$(document).ready(function(){
   	var i = $(".slider").bxSlider({
		auto:true,
		controls:false
			});
		$(".btn_prev").click(function(){
			i.goToPrevSlide();
			return false;
		});
		$(".btn_next").click(function(){
			i.goToNextSlide();
			return false;
		});
		});
</script> -->

<!-- <style>
.bx-wrapper {
    -moz-box-shadow: none;
    -webkit-box-shadow:none;
    box-shadow: none;
    border:none;
    background:none;
}
.bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto {
    position: absolute;
    top: 300px;
    width: 100%;
}
.bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active, .bx-wrapper .bx-pager.bx-default-pager a:focus {
    background: blue;
}
.wrap{position: relative;}
.btn_next{
position: absolute;
top: 120px;
right: 10px;
}
.btn_prev{
position: absolute;
top: 120px;
left: 10px;
}
</style> -->
<!-- <div class="wrap">
	<div class="slider">
		<img src="<?echo G5_THEME_IMG_URL?>/pc01.jpg" alt="" style ="width:100%">
		<img src="<?echo G5_THEME_IMG_URL?>/pc02.jpg" alt="" style ="width:100%">
		<img src="<?echo G5_THEME_IMG_URL?>/pc03.jpg" alt="" style ="width:100%">
	</div>
	<div class="btn_next">
		<img src="<?echo G5_THEME_IMG_URL?>/btn_next.png" alt="">
	</div>
	<div class="btn_prev">
		<img src="<?echo G5_THEME_IMG_URL?>/btn_prev.png" alt="00">
	</div>
</div> -->
<!-- <ul class="slider">
	<li></li>
</ul> -->

<!-- <div class="slider">
	<div></div>
</div>
 -->
<!-- <div class="slider"><img src="" alt=""></div>	 -->


<h2 class="sound_only">최신글</h2>

<!-- <div class="latest_wr"> -->
<!-- 최신글 시작 { -->

    <!-- <div style="float:left;<?php echo $lt_style ?>" class="lt_wr"> -->
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        // echo latest('theme/myNew','freeboard', 3, 24);
        // latest("","",2,1)
        ?>
    <!-- </div> -->

    <!-- } 최신글 끝 -->


    <!-- } 사진 최신글2 끝 -->
<!-- </div> -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>