<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
<?php if (!defined("_INDEX_")) { ?>
    </div> 
   
    <div id="aside">
        <?include_once(G5_THEME_PATH.'/skin/nav/mysubmenu.php'); ?>
    </div>
      <?php } ?>
   
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
        <div id="ft_link">
            <img src="<?echo G5_THEME_IMG_URL?>/ft_logo.png" alt="logos">
            <!-- <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a> -->
        </div>
       <!--  <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div>
        <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div> -->
        <div class="ft_txt1">
            우:06653 서울특별시 서초구 반포대로 12길 41 (주) 아트박스<span>ㅣ</span>  
            대표이사: 조석현 사업자등록번호 214-81-06825 <span>ㅣ</span> 
            통신판매업신고 제 2011-서울서초-0404호 <span>ㅣ</span>
            개인 정보 책임자:정정설  <span>ㅣ</span>
            E-MAIL: customer@poom.co.kr</div>
        <div class="ft_txt2">COPYRIGHT © 2018 ARTBOX CO., LTD ALL RIGHTS RESERVED</div>

        <div class="artbox_box">
            <select name="name" id="artbox_box">
                <option value="">FAMILY SITE</option>
                <option value="아트박스 ">아트박스</option>
                <option value="폼">폼</option>
            </select>
        </div>
    </div>
    
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
        <script>
        
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>