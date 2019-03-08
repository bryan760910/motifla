<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="太研規劃設計顧問有限公司是專業的景觀規劃設計顧問公司,以Landscape Urbanism 的概念,反思傳統都市設計操作,探討未來都市紋理與都市景觀及其附加購件之演變消長,並試圖找出未來城市景觀發展的契機及可能。 公司總監吳書原畢業於英國倫敦AA建築聯盟學院,以在英國倫敦多年的工作經驗,豐富的國際背景為業主提供新的觀點及動力, 並具有能夠與國際團隊合作、溝通與協調之能力。">
		<meta name="keywords" content="太研,太研規劃, MOTIF, MOTIF LANDSCAPE, 太研規劃設計顧問有限公司, 景觀設計, 景觀, LANDSCAPE, 建築,設計,DESIGN,Iandscape architecture,景觀建築, 空間設計, 規劃, MOTIF DESIGN, 規劃設計, 景觀顧問, 都市設計, URBAN,URBANism,AA,建築學院聯盟 ">
		<meta http-equiv = "X-UA-Compatible" cotent = "IE=edge,chrome=1"/>
		<meta name="google-site-verification" content="CkNRz_UpXanklO9UZYgQabxQhXmWFawY2ofJqdi2_gs" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="author" content="太研規劃設計顧問有限公司">
		<meta name="copyright" CONTENT="太研規劃設計顧問有限公司所有">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="theme/js/plugin/jquery.bxslider/jquery.bxslider.js"></script>
		<link rel="icon" type="image/png" href="theme/images/metered-manual.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="theme/css/style.css" />
		<!-- TODO: 連結Bootstrap所需要的js -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<title>│  太研規劃設計顧問有限公司</title>
        <script>
            $(document).ready(function() {
                $(".pic_vis").hover(function() {
                    var pic_vis = $(this).siblings().children(".pic_vis_text2").text();
                    $(".pic_vis_text2:contains(" + pic_vis + ")").parent().css("visibility", "visible");
                }, function() {
                    var pic_vis = $(this).siblings().children(".pic_vis_text2").text();
                    $(".pic_vis_text2:contains(" + pic_vis + ")").parent().css("visibility", "hidden");
				});
				
				$('#gotop').click(function () {
				$('html,body').animate({
					scrollTop: 0
				}, 'slow'); /* 返回到最頂上 */
				return false;
				});
			

				$(window).scroll(function () {
				if ($(this).scrollTop() > 0)
					{
						var nWidth = $(window).width();//取得使用者螢幕寬
						/*$(window).resize(function() {*/
						if(nWidth>1140)
							{
							$('#gotop').fadeIn();
							}
						else 
							{
								$('#gotop').fadeOut();
							}
					}
				else
					{
						$('#gotop').fadeOut();
					}
				})
            });
        </script>
    </head>
    <body>
			<a href="#" id="gotop">
			</a>
        <div class="wrapper">
            <?php include 'header.php' ?>
            <div class="showcase_page content clearfix inner_wrapper">

				<!-- second menu -->
				<div class="showcase_second_menu clearfix">
					<ul>
						<li><a href="javascript:;">all</a></li>
						<li><a href="javascript:;">residence</a></li>
						<li><a href="javascript:;">culture</a></li>
						<li><a href="javascript:;">park</a></li>
						<li><a href="javascript:;">garden</a></li>
						<li><a href="javascript:;">education</a></li>
						<li><a href="javascript:;">healthcare</a></li>
						<li><a href="javascript:;">museum</a></li>
						<li><a href="javascript:;">sport</a></li>
						<li><a href="javascript:;">headquarter</a></li>
						<li><a href="javascript:;">social housing</a></li>
						<li><a href="javascript:;">master plan</a></li>
						<li><a href="javascript:;">land art & curation</a></li>
						<li><a href="javascript:;">london</a></li>
					</ul>
				</div>

				<!-- list -->
				<div>
					<a href="/casefile/30.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/30_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">馥華城安</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/31.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/31_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">芝蘭段</span><span> Zhilan Project</span></div>
						</div>
					</a>
					<a href="/casefile/32.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/32_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">創健建設月亮公園</span><span></span></div>
						</div>
					</a>
					<a href="/casefile/33.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/33_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">忠泰建設</span><span> Beian Project</span></div>
						</div>
					</a>
					<a href="/casefile/34.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/34_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">遠揚建設</span><span> T-Park Landscape Design</span></div>
						</div>
					</a>
					<a href="/casefile/35.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/35_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">麗源建設</span><span> Tamsui Project</span></div>
						</div>
					</a>
					<a href="/casefile/36.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/36_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">達麗建設</span><span> Shilin Project A</span></div>
						</div>
					</a>
					<a href="/casefile/37.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/37_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">明緯建設</span><span> Bali Project</span></div>
						</div>
					</a>
					<a href="/casefile/38.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/38_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">璞石麗緻溫泉會館</span><span> Pause Landis</span></div>
						</div>
					</a>
					<a href="/casefile/39.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/39_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">鑫怡建設 </span> Xindian Project<span></span></div>
						</div>
					</a>
					<a href="/casefile/40.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/40_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">國泰建設 </span><span> Xindian Project</span></div>
						</div>
					</a>
					<a href="/casefile/41.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/41_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">順天建設 </span><span> Dafeng Project</span></div>
						</div>
					</a>
					<a href="/casefile/42.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/42_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">長群建設</span><span> Xinzhuang Project</span></div>
						</div>
					</a>
					<a href="/casefile/43.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/43_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">淡江教會</span><span> Tamkang Church Landscape Design</span></div>
						</div>
					</a>
					<a href="/casefile/44.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/44_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">嘉義美術館</span><span> Chiayi Fine Arts Museum</span></div>
						</div>
					</a>
					<a href="/casefile/45.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/45_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">水交社文化園區</span><span> Shuijiaoshe Cultural Park</span></div>
						</div>
					</a>
					<a href="/casefile/46.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/46_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">菜寮化石館</span><span> Tsai-liao Fossil Museum</span></div>
						</div>
					</a>
					<a href="/casefile/47.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/47_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">大坪頂生命園區</span><span> DPD Life Memorial Park</span></div>
						</div>
					</a>
					<a href="/casefile/48.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/48_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">橫山書法公園</span><span> Hengshan Calligraphy Park</span></div>
						</div>
					</a>
					<a href="/casefile/49.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/49_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">旗山糖廠</span><span> Cishan Sugar Refinery</span></div>
						</div>
					</a>
					<a href="/casefile/50.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/50_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">新屋高中</span><span> Taoyuan Xinwu High School</span></div>
						</div>
					</a>
					<a href="/casefile/51.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/51_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">隆田考古園區</span><span> Longtian Cultural Park</span></div>
						</div>
					</a>
					<a href="/casefile/52.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/52_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">大雅汝鎏公園</span><span> 原民生活地景</span></div>
						</div>
					</a>
					<a href="/casefile/53.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/53_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">桃園美術館</span><span> Taoyuan City Museum of Modern Art</span></div>
						</div>
					</a>
					<a href="/casefile/54.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/54_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">中研院沙崙二期</span><span></span></div>
						</div>
					</a>
					<a href="/casefile/55.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/55_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">三興段公共住宅</span><span> San-Xing Sec. Social Housing</span></div>
						</div>
					</a>
					<a href="/casefile/56.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/56_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">興隆段公共住宅</span><span> Xing-long Sec. Social Housing</span></div>
						</div>
					</a>
					<a href="/casefile/57.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/57_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">同榮段公共住宅</span><span> Tong-Rong Sec. Social Housing</span></div>
						</div>
					</a>
					<a href="/casefile/58.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/58_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">霧峰園區整體規劃</span><span> Wufeng District</span></div>
						</div>
					</a>
					<a href="/casefile/59.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/59_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">臺中太平聯合辦公園</span><span></span></div>
						</div>
					</a>
				</div>
			</div>
			<?php include 'footer.php' ?>
        </div>
    </body>

</html>
