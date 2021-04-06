<?php

//系統基本資料
define("_WEB_ROOT_URL","http://{$_SERVER['SERVER_NAME']}/user/");
define("_WEB_ROOT_PATH","{$_SERVER['DOCUMENT_ROOT']}/user/");
//系統變數
$title="客戶管理系統";
//資料庫連線
$db_id="********";//資料庫使用者//
$db_passwd="*******";//資料庫使用者密碼//
$db_name="*******";//資料庫名稱//
//連入資料庫
$link=mysqli_connect('db',$db_id,$db_passwd,$db_name) or die_content(mysqli_connect_errno().mysqli_connect_error()."資料庫無法連線");
mysqli_query($link,"SET NAMES 'utf8'");
//自定輸出錯誤訊息

function die_content($content=""){
    $main="
        <!DOCTYPE html>
        <html lang='zh-TW'>
        <head>
        <meta charset='utf-8'>
        <title>輸出錯誤訊息</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='description' content='輸出錯誤訊息'>
        <meta name='author' content='aandd'>
		<!-- 引入css檔案開始 -->
        <link rel='stylesheet' href='http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css'>
		<link rel='stylesheet' href='http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css'>
		<!-- 引入css檔案結束 -->
		<!-- 引入js檔案開始 -->
		<script src='http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js'></script>
		<script src='http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
        <!-- 引入js檔案結束 -->

        </head>
        <body>
        <!--放入網頁主體-->
        <div class='container' id='main_content'>
          <!-- 主要內容欄位開始 -->
            <div class='hero-unit'>
			<div  class='alert alert-warning alert-dismissible' role='alert'>
			<button type='button'  class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong>{$content}</strong>
			</div>
            </div>
          <!-- 主要內容欄位結束 -->
          <!-- 頁腳開始 -->
          <footer>
          </footer>
          <!-- 頁腳結束 -->
        </div> 
        <!-- 主要內容欄位結束 -->
        </body>
        </html>
    ";
    die($main);
}
session_start();
if(isset($_SESSION['room']))
$_SESSION['room']=empty($_GET['room'])?$_SESSION['room']:intval($_GET['room']);
else
$_SESSION['room']=1;
function bootstrap($content=""){
	$_SESSION['user_id']=empty($_SESSION['user_id'])?"":$_SESSION['user_id'];
	
    global $title;
    $main="<!DOCTYPE html>
<html lang='zh-Hant-tw'>
<head>
<meta charset='utf-8'>
<title>資料庫專題</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='資料庫專題'>
<meta name='author' content='aandd'>
<style type='text/css'>
  body {
    padding-top: 60px;
    padding-bottom: 20px;
  }
</style>
<!--引入JQuery CDN-->
<script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<!--引入Bootstrap 3 CDN---->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css' rel='stylesheet'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<!----圖表引入-----!>



<!----圖表引入-----!>

<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

<script>
	$(function () {
	  $('[data-toggle='popover']').popover()
	})
</script>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class='navbar navbar-default navbar-fixed-top'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='{$_SERVER["PHP_SELF"]}'><span class='glyphicon glyphicon-leaf' aria-hidden='true'>省電大作戰</a>
        </div>
        <div id='navbar' class='navbar-collapse collapse'>
          <ul class='nav navbar-nav navbar-right'>";
		  
		  if($_SESSION['user_id']==""){
			$main.="<li><a href='{$_SERVER["PHP_SELF"]}?op=user_login'><span class='glyphicon glyphicon-log-in'> 登入</span></a></li>
			        <li><a href='{$_SERVER["PHP_SELF"]}?op=register'><span class='glyphicon glyphicon-user'> 歡迎註冊</span><span class='sr-only'>(current)</span></a></li>";
		  }
		  else{
			$main.="<li><a href='{$_SERVER["PHP_SELF"]}?op=user_logout'><span class='glyphicon glyphicon-log-out'> 登出</span></a></li>
                    <li><a><span class='glyphicon glyphicon-user'>  Welcome! {$_SESSION['user_id']}~</span><span class='sr-only'>(current)</span></a></li>";
		  }
		$main.="
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>	


<!--放入網頁主體-->
<div class='container'>
  <!-- 主要內容欄位開始 -->
  <div class='row'>
	<div class='col-md-4 col-sm-12'>
        <h3>主選單</h3>	
        <div class='well'>
	    <!--使用者選單開始-->

		<ul class='nav nav-pills nav-stacked'>
		<li class='nav-header'></li>";
if($_SESSION['user_id']!=""){
	$main.="<li><a href='{$_SERVER["PHP_SELF"]}?op=user_list_login'><span class='glyphicon glyphicon-heart' aria-hidden='true'>&nbsp;首頁</a></li>";
}
else{
	$main.="<li><a href='{$_SERVER["PHP_SELF"]}?op=home'><span class='glyphicon glyphicon-heart' aria-hidden='true'>&nbsp;首頁</a></li>";	
}
	$main.="<li><a href='#demo' data-toggle='collapse' aria-expanded='false' aria-controls='collapseExample'><span class='glyphicon glyphicon-th-list' aria-hidden='true'>&nbsp;單一電器推薦</span></a>
                <ul id='demo' class='collapse nav nav-pills nav-stacked' style='font-color:black;'>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=acondition_list'><span class='glyphicon glyphicon-triangle-right' aria-hidden='true'>&nbsp;&nbsp;冷氣</span></a></li>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=fridge_list'><span class='glyphicon glyphicon-triangle-right' aria-hidden='true'>&nbsp;&nbsp;冰箱</span></a></li>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=tv_list'><span class='glyphicon glyphicon-triangle-right' aria-hidden='true'>&nbsp;&nbsp;電視機</span></a></li>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=dehum_list'><span class='glyphicon glyphicon-triangle-right' aria-hidden='true'>&nbsp;&nbsp;除濕機</span></a></li>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=washing_list'><span class='glyphicon glyphicon-triangle-right' aria-hidden='true'>&nbsp;&nbsp;洗衣機</span></a></li>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=pot_list'><span class='glyphicon glyphicon-triangle-right' aria-hidden='true'>&nbsp;&nbsp;電鍋&電子鍋</span></a></li>
                </ul>
                </li>";
				
				
	if($_SESSION['user_id']!=""){	
		$main.="<li><a href='#demo3' data-toggle='collapse' aria-expanded='false' aria-controls='collapseExample'><span class='glyphicon glyphicon-home' aria-hidden='true'>&nbsp;組合電器推薦</span></a>
		       <ul id='demo3' class='collapse nav nav-pills nav-stacked' style='font-color:black;'>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=search_main'><span class='fa fa-television' aria-hidden='true'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我的電器</span></a></li>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=search_sec'><span class='fa fa-building' aria-hidden='true'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我的房間</span></a></li>
				   <li><a href='{$_SERVER['PHP_SELF']}?op=search_final'><span class='fa fa-thumbs-o-up' aria-hidden='true'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;綜合推薦表</span></a></li>
                </ul>
		
		
		</li>
		<li><a href='{$_SERVER['PHP_SELF']}?op=add_user_form'><span class='glyphicon glyphicon-wrench' aria-hidden='true'> 用電表單</a></li>
		<li><a href='#demo2' data-toggle='collapse' aria-expanded='false' aria-controls='collapseExample'><span class='glyphicon glyphicon-signal' aria-hidden='true'>&nbsp;每月用電統計</span></a>
		       <ul id='demo2' class='collapse nav nav-pills nav-stacked' style='font-color:black;'>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=chart'><span class='fa fa-pie-chart' aria-hidden='true'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用電時數比例</span></a></li>
                   <li><a href='{$_SERVER['PHP_SELF']}?op=chart2'><span class='fa fa-bar-chart' aria-hidden='true'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;電費價格比例</span></a></li>
				   <li><a href='{$_SERVER['PHP_SELF']}?op=chart3'><span class='	fa fa-area-chart' aria-hidden='true'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年度用電表</span></a></li>
                </ul>
		
		</li>";
	}
		
		
		$main.="</ul>
		<!--使用者選單結束-->
	</div>
    
				<!--手風琴式的摺疊元件開始-->
		<div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>
		  <div class='panel panel-default'>
			<div class='panel-heading' role='tab' id='headingOne'>
			  <h4 class='panel-title'>
				<a  class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseOne' aria-expanded='false' aria-controls='collapseOne'>
				  有關冷氣的省電小知識
				</a>
			  </h4>
			</div>
			<div id='collapseOne' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOne'>
			  <div class='panel-body'>
				<ol><li>採用冷氣季節性能因數(CSPF)高的冷氣機。</li>
				<li>正確安裝在通風良好避免日光直射且裝設在高度<mark>75公分以上</mark>。</li>
				<li>冷氣設定以<mark>26-28°C</mark>為宜，設定溫度<mark>每提高1°C可省8-10%</mark>，配合電風扇使用，可使室內冷氣分布均勻並增加舒適感。</li>
				<li>空氣濾網每2周清潔一次，以保持冷氣機效率。</li>
				<li>入眠時宜啟動睡眠運轉。</li></ol>
			  </div>
			</div>
		  </div>
		  <div class='panel panel-default'>
			<div class='panel-heading' role='tab' id='headingTwo'>
			  <h4 class='panel-title'>
				<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>
				  有關冰箱的省電小知識
				</a>
			  </h4>
			</div>
			<div id='collapseTwo' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwo'>
			  <div class='panel-body'>
				<ol><li>食物應先冷卻降溫再放入冰箱。</li>
				<li>電冰箱的食物儲存量以<mark>八分滿為宜</mark>，以免阻礙冷氣流通。</li>
				<li>減少開門次數，冰箱門每開一次壓縮機需多運轉10分鐘才能恢復低溫狀態。</li>
				<li>電冰箱背面左右兩側至少<mark>10公分以上</mark>距離，頂部須留有<mark>30公分以上</mark>，以保持良好通風散熱。</li>
				<li>冰箱門縫橡皮圈損壞時，應立即修復。</li></ol>
			  </div>
			</div>
		  </div>
		  <div class='panel panel-default'>
			<div class='panel-heading' role='tab' id='headingThree'>
			  <h4 class='panel-title'>
				<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseThree' aria-expanded='false' aria-controls='collapseThree'>
				  有關電視的省電小知識
				</a>
			  </h4>
			</div>
			<div id='collapseThree' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThree'>
			  <div class='panel-body'>
				<ol><li>避免過度調高電視畫面亮度與音量可較省電。</li>
				<li>避免長時間使用電視，床前電視設定睡眠定時開關。</li>
				<li>多天不使用電視時應<mark>切離電源。</mark></li></ol>
			  </div>
			</div>
		  </div>
		  <div class='panel panel-default'>
			<div class='panel-heading' role='tab' id='headingFour'>
			  <h4 class='panel-title'>
				<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseFour' aria-expanded='false' aria-controls='collapseFour'>
				  有關除濕機的省電小知識
				</a>
			  </h4>
			</div>
			<div id='collapseFour' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingFour'>
			  <div class='panel-body'>
				<ol><li>選購適當除濕能力的除濕機，例如房間面積8坪大，可選用約6(公升/天)左右除濕能力的除濕機，選用太大的除濕機反而會浪費電力。</li>
				<li>選購效率高的除濕機：選用<mark>能源因數值大於1.00(公升/度)以上者</mark>較符合省電的要求。 </li>
				<li>將除濕機放置在空氣流通的地方，<mark>避免放在死角</mark>，造成氣流短路，達不到需要的除濕效果。</li>
				<li>除濕機應放置在堅固平坦的地板上，以免產生振動及噪音，同時<mark>避免日光直射或接近發熱器具</mark>。</li>
				<li>除濕機運轉前，先將門窗關好，以免潮濕的外氣進入室內，影響除濕效果。 </li>
				<li>除濕機由於經常搬動，較易發生冷媒洩漏，若壓縮機在運轉，但<mark>感覺出風及回風的溫度一樣，應停止使用，儘早送修</mark>，以免浪費能源而不知。 </li></ol>
			  </div>
			</div>
		  </div>
		  <div class='panel panel-default'>
			<div class='panel-heading' role='tab' id='headingFive'>
			  <h4 class='panel-title'>
				<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseFive' aria-expanded='false' aria-controls='collapseFive'>
				  有關洗衣機的省電小知識
				</a>
			  </h4>
			</div>
			<div id='collapseFive' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingFive'>
			  <div class='panel-body'>
				<ol><li>洗衣前衣物宜先浸泡<mark>20分鐘</mark>。</li>
				<li>累積一定數量衣物後，在使用洗衣機一次清洗。</li>
				<li><mark>自動洗衣模式</mark>應依清潔劑、衣物髒汙程度及布料種類選擇適當方式。</li>
				<li>脫水物超過<mark>3分鐘</mark>，尼龍化纖衣物<mark>一分鐘即可</mark>。</li></ol>
			  </div>
			</div>
		  </div>
		  <div class='panel panel-default'>
				<div class='panel-heading' role='tab' id='headingSix'>
				  <h4 class='panel-title'>
					<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseSix' aria-expanded='false' aria-controls='collapseSix'>
					  有關電鍋與電子鍋的省電小知識
					</a>
				  </h4>
				</div>
				<div id='collapseSix' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSix'>
				  <div class='panel-body'>
					<ol><li>請依照家庭人口數與食量，選擇是當容量之電鍋或電子鍋。</li>
					<li>米飯烹煮前先浸泡<mark>30分鐘</mark>，可縮短煮熟時間。</li></ol>
				  </div>
				</div>
		   </div>
		</div>
		<!--手風琴式的摺疊元件結束-->
		<!--照片輪撥開始-->
		
		<div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
		  <!-- Indicators -->
		  <ol class='carousel-indicators'>
			<li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
			<li data-target='#carousel-example-generic' data-slide-to='1'></li>
			<li data-target='#carousel-example-generic' data-slide-to='2'></li>
			<li data-target='#carousel-example-generic' data-slide-to='3'></li>
			<li data-target='#carousel-example-generic' data-slide-to='4'></li>
			<li data-target='#carousel-example-generic' data-slide-to='5'></li>
			<li data-target='#carousel-example-generic' data-slide-to='6'></li>
			<li data-target='#carousel-example-generic' data-slide-to='7'></li>
			<li data-target='#carousel-example-generic' data-slide-to='8'></li>
			<li data-target='#carousel-example-generic' data-slide-to='9'></li>
			<li data-target='#carousel-example-generic' data-slide-to='10'></li>
			<li data-target='#carousel-example-generic' data-slide-to='11'></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class='carousel-inner' role='listbox'>
			<div class='item active'>
			   <a href='https://24h.pchome.com.tw/prod/DPAF62-19008RXDU'><img src='01.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
				</div>
			</div>
			<div class='item'>
			   <a href='https://24h.pchome.com.tw/prod/DPAC95-A9008EKKF'><img src='02.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
				</div>
			</div>
			<div class='item'>
			  <a href='https://24h.pchome.com.tw/prod/DPADEW-A9008ZW7Y'><img src='03.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
				
			  </div>
			</div>
			
			<div class='item'>
			   <a href='https://24h.pchome.com.tw/prod/DMAU00-19007KLHL?q=/S/DMAU00'><img src='04.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
				</div>
			</div>
			
			<div class='item'>
			   <a href='https://24h.pchome.com.tw/prod/DPAI1M-A90080NUS'><img src='05.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
				</div>
			</div>
			
			<div class='item'>
			  <a href='https://24h.pchome.com.tw/store/DMBI11'><img src='06.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
			</div>
			</div>
			<div class='item'>
			  <a href='http://www.elifemall.com.tw/allnewweb/product_d.php?skuno=2079823&scheduleno=20180628-20180705-1&showlist=Y&page='><img src='09.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
			  </div>
			</div>
			<div class='item'>
			   <a href='http://www.elifemall.com.tw/allnewweb/product_d.php?skuno=2091039&scheduleno=20180628-20180705-1&showlist=Y&page='><img src='08.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
				</div>
			</div>
			<div class='item'>
			  <a href='http://www.elifemall.com.tw/allnewweb/product_d.php?skuno=2091286&scheduleno=20180628-20180705-1&showlist=Y&page='><img src='07.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
			  </div>
			</div>
			<div class='item'>
			  <a href='http://www.elifemall.com.tw/allnewweb/product_d.php?skuno=2096093&scheduleno=20180628-20180705-1&showlist=Y&page='><img src='11.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
			  </div>
			</div>
			<div class='item'>
			  <a href='http://www.elifemall.com.tw/allnewweb/product_d.php?skuno=2086719&scheduleno=20180628-20180705-1&showlist=Y&page='><img src='10.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
			  </div>
			</div>
			<div class='item'>
			  <a href='http://www.elifemall.com.tw/allnewweb/product_d.php?skuno=2090482&scheduleno=20180628-20180705-1&showlist=Y&page='><img src='12.jpg' width='500' height='700'></a>
			  <div class='carousel-caption'>
			  </div>
			</div>
			
		  </div>

		  <!-- Controls -->
		  <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
			<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
			<span class='sr-only'>上一張</span>
		  </a>
		  <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
			<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
			<span class='sr-only'>下一張</span>
		  </a>
		</div>		

		<!--照片輪撥結束-->	

		<!--照片輪撥結束-->
		
		
		
	
	
	
	</div>
        <div class='col-md-8 col-sm-12'>
          <!-- 主要內容欄位開始 -->
          {$content}
		</div>
          <!-- 主要內容欄位結束 -->
          <!-- 頁腳開始 -->
          <footer>
          </footer>
          <!-- 頁腳結束 -->
        </div> 
        <!-- 主要內容欄位結束 -->
        </body>
        </html>
    ";
    return $main;
}


function log_in_home(){
	
	global $title;
	$main="<!DOCTYPE html>
<html lang='zh-Hant-tw'>
<head>
<meta charset='utf-8'>
<title>$title</title>
<meta name='viewport' content='width=device-width,initial-scale=1.0'>
<meta name='description' content='$title'>
<meta name='author' content='aandd'>
<style type='text/css'>

  .jumbotron{
    background:url('login_bg.png');
	background-size: cover;
	background-position: bottom right;
	margin-bottom: 0px;
	
  }
</style>
<!--引入JQuery CDN-->
<script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<!--引入Bootstrap 3 CDN---->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css' rel='stylesheet'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>

<script>
	$(function () {
	  $('[data-toggle='popover']').popover()
	})
</script>
</head>
<body class='jumbotron jumbotron-fluid'>";

$main.="
<div>
<div class='container'>
<br>
<br>
<br>
    <div class='row'>
	    <div class='col-md-7'>
		    <div class='col-sm-12 col-lg-12'>
                <br>
				<br>
				<br>
				<h1 style='color:white;'>
                    Welcome User ! <br>
					<small>Back to the home, click <a class='btn btn-danger btn-lg' href='{$_SERVER["PHP_SELF"]}?op=home' role='button'>here  !     </a></small></h1>
            </div>
		</div>
        <div class='col-md-5'>
	
            <div class='panel panel-default'>

                <div class='panel-heading'>
                    <span class='glyphicon glyphicon-lock'></span> Login
				</div><br>
				
				<div class='panel-body'>
                    <form class='form-horizontal' role='form' method='post' action='{$_SERVER["PHP_SELF"]}'>
                    <div class='form-group'>
                        <label for='inputEmail3' class='col-sm-3 control-label'>
                            User&nbsp;&nbsp;&nbsp;&nbsp;ID&nbsp;</label>
                        <div class='col-sm-9'>
                            <input type='text' class='form-control' name='user_id' placeholder='user ID' MAXLENGTH=15 required>
                        </div>
                    </div>
					
                    <div class='form-group'>
                        <label for='inputPassword3' class='col-sm-3 control-label'>
                            Password</label>
                        <div class='col-sm-9'>
                            <input type='password' class='form-control' name='user_password' placeholder='Password' MAXLENGTH=12 required>
                        </div>
                    </div>
                    <div class='form-group pull-righ'>
					<br>
                        <div class='col-sm-offset-8 col-sm-10'>
                            <div class='checkbox'>
                                <label>
                                    <input type='checkbox'/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class='form-group last '>
                        <div class='col-sm-4 pull-right'>
						    <input type='hidden' name='op' value='user_startlog'>
                            <button type='submit' class='btn btn-success btn-sm'>
                                Sign in</button>
                                 <button type='reset' class='btn btn-default btn-sm'>
                                Reset</button>
                        </div>
                    </div>
					<br>
					<br>
                    </form>
                </div>
                <div class='panel-footer'>
                    Not Registred? <a href='{$_SERVER["PHP_SELF"]}?op=register'>Register here</a>
					</div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
    
    </div>

</div>

        <!-- 主要內容欄位結束 -->
        </body>
        </html>
    ";
	
	
	return $main;
	
	
	
}
function register(){
	
	global $title;
	$main="<!DOCTYPE html>
<html lang='zh-Hant-tw'>
<head>
<meta charset='utf-8'>
<title>$title</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='$title'>
<meta name='author' content='aandd'>
<style type='text/css'>
  body {
    padding-top: 50px;
    padding-bottom: 20px;
  }
  .jumbotron{
    background:url('register_bg.png');
  }
</style>
<!--引入JQuery CDN-->
<script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<!--引入Bootstrap 3 CDN---->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css' rel='stylesheet'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>

<script>
	$(function () {
	  $('[data-toggle='popover']').popover()
	})
</script>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class='navbar navbar-default navbar-fixed-top'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='{$_SERVER["PHP_SELF"]}'><span class='glyphicon glyphicon-leaf' aria-hidden='true'>省電大作戰</a>
        </div>
        <div id='navbar' class='navbar-collapse collapse'>
          <ul class='nav navbar-nav navbar-right'>
            <li><a href='{$_SERVER["PHP_SELF"]}?op=user_login'><span class='glyphicon glyphicon-log-in'> 登入</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>	


<!--放入網頁主體-->
<div class='jumbotron jumbotron-sm'>
    <div class='container'>
        <div class='row'  >
            <div class='col-sm-12 col-lg-12'  >
                <h1 class='h1'>
                    Welcome User ! <small>Please enter the basic information.</small></h1>
            </div>
        </div>
    </div>
</div>
<div class='container'>
    <div class='row'>
        <div class='col-md-6'>
            <div class='well well-sm'>
                <form method='post' action='{$_SERVER["PHP_SELF"]}'>
				
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='form-group'>
						    <br>
						    <legend><span class='glyphicon glyphicon-user'></span>&nbsp;&nbsp;&nbsp;註冊基本資料</legend>
                            <label for='name'>
                                Your ID Name :</label>
							<div class='input-group'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-pencil'></span>
                                </span>
                            <input type='text' class='form-control' name='user_id2' placeholder='Enter ID' required='required' MAXLENGTH=15/></div>
                        </div>
                        <div class='form-group'>
                            <label for='password'>
                                Your Password:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-eye-open'></span>
                                </span>
                                <input type='password' name='user_password' class='form-control' placeholder='Enter password' required='required' MAXLENGTH=12/></div>
                        </div>
						<div class='form-group'>
                            <label for='password_con'>
                                Confirm Password:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-hand-right'></span>
                                </span>
                                <input type='password' name='user_pwd_con' class='form-control' placeholder='Reenter Password' required='required' MAXLENGTH=12/></div>
                        </div>
                        <div class='form-group'>
                            <br>
                            <br>
                        </div>
						<div class='form-group'>
						    <input type='hidden' name='op' value='register_user'>
						    <button type='submit' class='btn btn-primary pull-right'>
                            &nbsp;&nbsp;註冊&nbsp;&nbsp;</button>
						</div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class='col-md-4'>
            <form>
            <legend><span class='glyphicon glyphicon-globe'></span>&nbsp;省電大作戰網站</legend>
            <address>
                <strong>Making for.</strong>
				<br>2018 CGU-CSIE 
				<br>106_2 Database System Design
				<br>
                2018/6/25 final-proposal Demo<br>
            </address>
            <address>
                <strong>Adviser</strong>
				<br>
				<mark>Mr.Yi-Ping Chao</mark>
				<br>
                <a href='https://sites.google.com/site/catpin/home'>https://sites.google.com/site/catpin/home</a><br>
				Phone:03-211-8800 #5469
            </address>
            </form>
        </div>
    </div>
</div>


<!-- 主要內容欄位結束 -->
        </body>
        </html>";
	
return $main;
	
}
?>