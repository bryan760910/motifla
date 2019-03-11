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
				});



				// 
				// $(".abc").on("click", function(){
				// 	var type = $(this).attr("data-type");
				// 	var list = $(".list > a").hasClass(type).css("display", "inline-block")
				// })
				
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
						<li><a class="abc" href="javascript:;">all</a></li>
						<li><a class="abc" href="javascript:;" data-type="residence">residence</a></li>
						<li><a class="abc" href="javascript:;" data-type="culture">culture</a></li>
						<li><a href="javascript:;" data-type="park">park</a></li>
						<li><a href="javascript:;" data-type="garden">garden</a></li>
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
				<div class="case_list">
					<a href="/casefile/1.php" class="park">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/01_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">陽明山美軍基地</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/2.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/02_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">宏濟醫院</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/3.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/03_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">三井倉庫</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/4.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/04_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">臺中花博</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/5.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/05_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">臺中高鐵站前廣場</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/6.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/06_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">花博指標統包工程</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/60.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/07_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Ilife</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/14.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/08_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">龍巖企業總部</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/15.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/09_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">僑昱水交社段</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/16.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/10_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">馥華浮洲</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/17.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/11_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">屋久紀露臺</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/61.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/12_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">璞園春生生</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/7.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/13_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">LEICESTER SQUARE REDESIGN</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/8.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/14_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Melody Lane</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/9.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/15_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Aldgate Place Park</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/63.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/16_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">Motif Tainan</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/20.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/17_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">璞園林友寒</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/21.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/18_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">璞園平田晃久</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/22.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/19_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">忠泰廖國誠</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/23.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/20_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">久泰永和</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/24.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/21_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">久泰中和</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/25.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/22_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">馥華中和 + 大洋中和</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/26.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/23_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">富邦建設D1集合住宅</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/27.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/24_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">國泰新竹</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/28.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/25_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">璞園天母西路都更</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/29.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/26_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">馥華土城明德段</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/30.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/27_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">璞元誠寬芝蘭段</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/31.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/28_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">創健建設月亮公園</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/32.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/29_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">忠泰大直北安段</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/33.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/30_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">遠揚 T-Park C</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/34.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/31_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">大尺淡水建案</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/64.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/32_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">達麗士林陽明段</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/36.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/33_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">明緯八里大崁段</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/37.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/34_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">璞石麗緻</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/38.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/35_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">鑫怡新店央北</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/39.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/36_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">國泰央二</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/40.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/37_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">順天建設大豐段</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/41.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/38_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">新莊青山段</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/19.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/39_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">板橋遠揚建設</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/42.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/40_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">淡江教會</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/43.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/41_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">嘉義美術館</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/44.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/42_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">水交社文化園區</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/45.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/43_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">臺南左鎮菜寮化石文化園區二期</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/46.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/44_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">新竹納骨塔</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/47.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/45_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">桃園大園橫山書道館</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/48.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/46_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">旗山糖廠</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/49.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/47_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">新屋高中</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/50.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/48_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">隆田考古</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/51.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/49_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">大雅汝鎏公園</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/52.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/50_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">桃園美術館</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/53.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/51_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">中研院沙崙二期</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/54.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/52_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">信義區三興段公益住宅</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/55.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/53_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">興隆段公共住宅E</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/62.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/54_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">台中同榮段社會住宅</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/57.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/55_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">霧峰園區</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/58.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/56_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">烏日第四墓園</span><span> Tucheng Project</span></div>
						</div>
					</a>
					<a href="/casefile/59.php">
						<div>
							<div class="pic_vis"><img src="theme/images/listImg/57_293x200.jpg" /></div>
							<div class="pic_vis_text"><span class="pic_vis_text2">太平聯合辦公園</span><span> Tucheng Project</span></div>
						</div>
					</a>
				</div>
			</div>
			<?php include 'footer.php' ?>
        </div>
    </body>

</html>
