
<header class="header clearfix">
	<div class="header-logo">
		<a class="motif_logo_img" href="/index.php" style="display:none;"><img src="/theme/images/logo001.jpg" width='140' height='30'/></a>
		<a class="motif_logo_img" href="/index.php"><img src="/theme/images/logo02.jpg" width='140' height='30'/></a>
		太研規劃設計顧問有限公司 Motif Planning & Design Consultants
	</div>
	<ul class="header_menu clearfix">
		<li class="header_menu_li"><a href="/member.php" class="header_menu_item" data-name="About" data-zhname="公司簡介">About</a></li>
		<li class="header_menu_li">
			<a href="/showcase.php" class="header_menu_item" data-name="Projects" data-zhname="案例實績">Projects</a>
		</li>
		<li class="header_menu_li"><a href="/concept.php" class="header_menu_item" data-name="Concept" data-zhname="作品思想">Concept</a></li>
		<li class="header_menu_li" onmouseover="showlist(this)" onmouseout="hidelist(this)">
			<a onmouseover="showlist(this)" onmouseout="hidelist(this)" href="javascript:;" class="header_menu_item" data-name="News" data-zhname="最新消息">News</a>
			<div onmouseover="showlist(this)" onmouseout="hidelist(this)" class="header_menu_item_cont">
				<div onmouseover="showlist(this)" onmouseout="hidelist(this)" class="header_menu_item_list">
					<a class="header_menu_item_list_a" href="/awards.php"> Awards </a>
					<a class="header_menu_item_list_a" href="/Publications.php"> Publications </a>
				</div>
			</div>
		</li>
		<li class="header_menu_li"><a href="/contact.php" class="header_menu_item" data-name="Contact" data-zhname="聯絡我們">Contact</a></li>
	</ul>
</header>

<script>
function showlist(dom){
	var $dom = $(dom);
	var $this;
	if ($dom.parents(".header_menu_li")){
		$this = $dom.parents(".header_menu_li");
	} else {
		$this = $dom
	}
	$this.find(".header_menu_item_cont").css("display", "block");
}

function hidelist(dom){
	var $dom = $(dom);
	var $this;
	if ($dom.parents(".header_menu_li")){
		$this = $dom.parents(".header_menu_li");
	} else {
		$this = $dom
	}
	$this.find(".header_menu_item_cont").css("display", "none");
}


$(function(){	
	
	$(".header_menu_item").mouseenter(function(){
		var text = $(this).attr("data-zhname");

		var liwidth = $(this).width();
		var lipaddingright = parseInt($(this).parent("li").css("paddingRight"));
		var lipaddingleft = parseInt($(this).parent("li").css("paddingLeft"));
		var all = liwidth + lipaddingright + lipaddingleft;
		$(this).width(50);
		$(this).parent("li").css("paddingLeft", all - (50 + lipaddingright));
		$(this).html(text);
		
	}).mouseleave(function(){
		var text = $(this).attr("data-name");
		$(this).html(text);
		$(this).width("auto");
		$(this).parent("li").css("paddingLeft", "40px");	});

	$(".motif_logo_img").mouseenter(function(){
		$(".motif_logo_img").eq(0).css("display", "inline-block");
		$(".motif_logo_img").eq(1).css("display", "none");
	}).mouseleave(function(){
		$(".motif_logo_img").eq(0).css("display", "none");
		$(".motif_logo_img").eq(1).css("display", "inline-block");
	});

});
</script>