<?php

include_once('./_common.php');


	$co_id = "testPage";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "1";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "3";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "비젼";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam obcaecati, officia laudantium odio sapiente animi quisquam tempore ducimus et fugit facere, reiciendis, repellendus nihil alias molestiae laborum voluptatem provident soluta. Sequi ab, minima placeat repudiandae necessitatibus architecto a unde. Quas expedita maxime distinctio quam voluptates debitis quos, nostrum minima eaque ullam adipisci, recusandae dignissimos rerum. Harum laudantium molestias neque deleniti, eius ducimus fugit aliquam numquam magni amet temporibus modi repellendus rem cumque doloremque, fuga ab eligendi. Sint aliquam iste officia, ex quis quam ipsum sit in sapiente at quasi asperiores quidem ipsam nam soluta iusto voluptatum, enim cumque rerum temporibus?</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>