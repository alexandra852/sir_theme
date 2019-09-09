<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    
    <div id="hd_wrapper">
        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?echo G5_THEME_IMG_URL?>/logo.gif" alt="<?php echo $config['cf_title']; ?>"></a> 
        </div> 




    
    <nav id="gnb">
        <div class="gnb_wrap">
            <ul id="gnb_1dul">
                
                <?php
                $sql = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '2'
                            order by me_order, me_id ";
                $result = sql_query($sql, false);
                $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $menu_datas = array();

                for ($i=0; $row=sql_fetch_array($result); $i++) {
                    $menu_datas[$i] = $row;

                    $sql2 = " select *
                                from {$g5['menu_table']}
                                where me_use = '1'
                                  and length(me_code) = '4'
                                  and substring(me_code, 1, 2) = '{$row['me_code']}'
                                order by me_order, me_id ";
                    $result2 = sql_query($sql2);
                    for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                        $menu_datas[$i]['sub'][$k] = $row2;
                    }

                }

                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue; 
                ?>
                <li class="gnb_1dli" style="z-index:<?php echo $gnb_zindex--; ?>"   >
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                   
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    </div>
</div>
<!-- } 상단 끝 -->
 <? if(defined("_INDEX_")){ ?>
<script>
   $("#gnb_1dul>li").eq(0).addClass("on");
</script>

    <?}?>

<hr>
<? if(defined("_INDEX_")){ ?>

<div id="slide_wrap"style="height:975px;background-color:#0ff;">
   <ul class="slide2">
       <li>
        <h2>당신의 오늘을<br>디자인합니다</h2>
            <p>     
                아침에 눈을 뜨는 순간,<br>
                노트를 펼치는 순간,<br>
                마음을 전하는 순간...<br>
                아트박스는,당신의 모든 순간을 생각합니다,<br>
                <br>
                반족되는 일상이지만,조금 더 새롭게..<br>
                흔한 선물이라도,조금 더 특별하게..<br>
                <br>    
                대단하지는 않지만<br>
                일상이 행복해지는 것.<br>
                <br>
                아트박사가 선사하는 작은 행복들이 모여<br>
                당신의 지금이,내일이,매일이,<br>
                풍요로울 수 있도록-<br>
                <br>
            </p>
            <h3>오늘을 디자인합니다</h3>
        </li>
   </ul>
</div>
<div class="box2">
    <div class="text1">
        <div class="bar"></div>
        <h2>오늘,더 새롭게</h2>
        <p>
            단순한 기능 중심의'학용품'이었던 문구에<br>
            디자인을 입힌 최초의 회사-<br>
            끊임없이 진화하는 대한민국 대표<br>
            디자인 리테일 그룹-<br>
        </p>
        <h3>
            아트박스는 누구도 상상하지 못했던<br>
            새로운라이프 스타일을 만들어 갑니다.
        </h3>
    </div>
    <div class="text2">
        <div class="bar"></div>
         <h2>오늘, 더 행복하게 </h2>
        <p>
            아트박스는 당신의 모든순간이<br>
            특별하기를 바랍니다.<br>
            우산 하나도 조금 더 예쁜걸로-<br>
            카드 한 장도 조금더 유쾌하게-<br>
        </p>
        <h3>
            아트박스는 작은 변화를 통해<br>
            당신의 삶이 더욱 행복하게를 바랍니다.
        </h3>
    </div>
    <div class="text3">
        <div class="bar"></div>
         <h2>오늘, 더 가치있게</h2>
        <p>
            화려한 겉치레보다는<br>
            좀 더 좋은 제품으로 보답하는-<br>
            언제 만나도 기분 좋은,매일 보아도 새로운,<br>
            누구와 함께해도 즐거운<br>
        </p>
        <h3>
        아트박스는 바로 열정과 앞선 감각으로<br>
        더욱 가치있는 시간을 만들어갑니다.
        </h3>
    </div>
</div>
<div class="box3">
    <img src="<?echo G5_THEME_IMG_URL?>/img_03.png" alt="00">
    <div class="textBox1">
        <ul>
            <h2>HISTORY</h2>
            <b>1984</b>
            (주) 삼성출판사 내 아트박스 사업부 발족,8월 아트박스 1호점 개점
            <br>
            <b>1986</b>
            (주)아트박스 분리 독립
            <br>
            <b>1988</b>
            (주)아트박스 사옥 건립,충청북도 음성군 여면적 3,000평 규모 생산공장 준공
            <br>
            <b>2001</b>
            (주) 시스맥스와 합병,물류창고 신축(충청북도 음성군)
            <br>
            <b>2010</b>
            품사업부 신설
            <br>
            <b>2011</b>
            품사업부 쇼핑몰(www.poom,co.kr)오픈,아트박스 부설 디자인 연구소 설립
            <br>
            <b>2016</b>
            화장춤 브랜드 비롯 런칭
            <br>
            <b>2018</b>
            아트박스몰(www.artboxmall.com)오픈
            
        </ul>
    </div>
    <div class="textBox2">
        <ul>
            <h2>AWARDS</h2>
            <b>1997</b>
            납세자의 날 표창(국세청)
            <br>
            <b>2002</b>
            대한민국 캐릭터 대상 (문화관광부)
            <br>
            <b>2003</b>
            한국 산업 디자인 대상 수상(한국산업디자인),대한민국 디자인 경영부문 우수상 수상(산업자원부)
            <br>
            <b>2005</b>
            서울 국제 문구 전시회 신제품 경진대회 우수제품(중소기업창)
            <br>
            <b>2006</b>
            한국 산업 디자인 대상 수상 (한국 산업 디자인)
            <br>
            <b>2007</b>
            대한민국 캐릭터 대상(문화관광부)
            <br>
            <b>2009</b>
            납세자의 날 표창(국세청),수출의 날 백만불 수출의 탑 수상
            <br>
            <b>2014</b>
            고용창출 우수 기업 선정(대통령 표창)
            <br>
            <b>2015</b>
            납세자의 날 표창 (기횔재정부장관)
            
        </ul>
    </div>   
</div>
<div class="box4">
    <div class="box4_1">
        <div class="box4_textBox1">
            <h2>매장안내</h2>
            <img src="<?echo G5_THEME_IMG_URL?>/img_05.png" alt="00">
        </div>
    </div>
    <div class="box4_2">
        <h2>인재채용</h2>  
       
    </div>
</div>

<?}else{?>


<div id="subBg">
    <div id="page_title" class="sbtImg">
        <div class="title">
            <h2 class="loc1D"><!-- 1차메뉴 --></h2>
            <div class="text"></div>
        </div>
    </div>
</div>

<script>
    // $(document).ready(function(){});문서을 읽고나서 하는거라서 없어도된다
    window.onload = function(){
        var menuDep = $("#subBg .loc1D").html();
        console.log("현재위치 :"+ menuDep );
        if(menuDep == "BRANDS"){
            $("#subBg .text").html("당신이 있는 곳 어디든,당신의 모든 순간, 당신이 원하는 무엇이든-"+"<br>"+"아트박스와 함께라면 더욱 특별해집니다."+"<br>"+"문구,팬시는 물론 뷰티,푸드,리빙 아이템까지-"+"<br>"+"늘 새로운 경험을 선사할 아트박스의 브랜드를 만나보세요.");
        }else if(menuDep == "CONTRIBUTION"){
            $("#subBg .text").html("아트박스의 임직원이라면 누구나 자원봉사와 기부에 참여합니다."+"<br>"+"전임직원들은 2003년도부터'아사모(아트박스의 사랑을 나누는 모임)'를 "+"<br>"+" 설립하여 소외된 이웃을 위한 기부 및 교육,봉사 활동을 통해 "+"<br>"+" 나눔의 가치를 신천하고 있습니다.");
     }
    }
</script>
<?}?>


<!-- 콘텐츠 시작 { -->
<?php if (!defined("_INDEX_")) { ?>
<div id="wrapper">

    
  <div id="container">

            <style>
               
            </style>
            <div id="page_title" class="sbtImg">
               
            <span class="locationBar" title="현재위치"><span> 
                <em class="fa fa-home" aria-hidden="true"></em> HOME 
                <i class="fa fa-angle-right" aria-hidden="true"></i> 
            </span> 
            <span class="loc1D"><!-- 1차메뉴 --></span> 
             <span class="loc2D"><!-- 2차메뉴 --></span></span>
            </div>

             <h2 id="container_title" style="text-align:center;font-size:2em;">
                     <?php echo get_head_title($g5['title']); ?><br>

            </h2>                    
            <div class="subTitle">
                <?
                $subTitle = get_head_title($g5['title']);    
                if($subTitle == "BRANDS"){
                    ?>
                    <img src="<?echo G5_THEME_IMG_URL?>/pc01.jpg" alt="">
                    <?
                }else if($subTitle == "contribution"){
                    echo "글로벌 기업 객실안내";
                    echo "<img src ='";
                    echo G5_THEME_IMG_URL;
                    echo "/pc01.jpg'>";
                }
                ?>
                            
                </div>
        <?php } ?>

