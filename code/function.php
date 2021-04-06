<?php
function user_list(){
    global $link;
    $main="
	    <br>
		<br>
		<br>
		<!--頁籤開始
		只需要在加上tabs-left可將標籤放在左邊，tabs-below標籤在底下，tabs-right標籤在右邊-->
		
		<!--頁籤結束-->
		<!---加入各種通知開始-->

		  <!-- Nav tabs -->

		  <!-- Tab panes -->
		  <div>
				<div class='alert alert-success' role='alert'>
					<h2 class='alert-heading' style='text-align:center' ><span style='font-family:Microsoft JhengHei;'><b>Welcome to <span style='font-family:Microsoft JhengHei;'>省電大作戰&nbsp!</span></b></span></h2>
					<br><br>
					
						<ol>
							<li type=none>
								<span style='font-size:26px'><span style='font-family:Microsoft JhengHei;'><span class='glyphicon glyphicon-arrow-left' aria-hidden='true'></span>&nbsp;點選左方<b>『單一推薦電器』</b><br>選擇想要的電器開始推薦 !</span></span>
							</li>
							<br>
							<li type=none >
								<span style='font-size:26px'><span style='font-family:Microsoft JhengHei;'>想要體驗更多功能?<br><span class='glyphicon glyphicon-arrow-right' aria-hidden='true'></span><b><a href='{$_SERVER["PHP_SELF"]}?op=register'>&nbsp;點我註冊</a></b><br>
								                                                                                                <span class='glyphicon glyphicon-arrow-right' aria-hidden='true'></span><b><a href='{$_SERVER["PHP_SELF"]}?op=user_login'>&nbsp;點我登入</a></b><br>登入後開始體驗更多功能 !</span></span>
							</li>
						</ol>
					
					<hr>
				</div>
	     </div>

		";
    return $main;
}
function user_list_login(){
    global $link;
    $main="
	    <br>

		<!--頁籤開始
		只需要在加上tabs-left可將標籤放在左邊，tabs-below標籤在底下，tabs-right標籤在右邊-->
		
		<!--頁籤結束-->
		<!---加入各種通知開始-->

		  <!-- Nav tabs -->
		  <ul class='nav nav-tabs' role='tablist'>
			<li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>首頁</a></li>
			<li role='presentation'><a href='#profile' aria-controls='profile' role='tab' data-toggle='tab'>Q&A</a></li>
		  </ul>
		  <!-- Tab panes -->
		  <div class='tab-content'>
			<div role='tabpanel' class='tab-pane active' id='home'>

			<br>
				<div class='alert alert-success' role='alert'>
					<h2 class='alert-heading' style='text-align:center' ><span style='font-family:Microsoft JhengHei;'><b>Welcome to <span style='font-family:Microsoft JhengHei;'>省電大作戰&nbsp!</span></b></span></h2>
					<br><br>
					
						<ol>
							<li type=none>
								<span style='font-size:26px'><span style='font-family:Microsoft JhengHei;'><span class='glyphicon glyphicon-arrow-left' aria-hidden='true'></span>&nbsp;點選左方<b>『單一推薦電器』</b><br>選擇想要的電器開始推薦 !</span></span>
							</li>
							<br>
							<li type=none >
								<span style='font-size:26px'><span style='font-family:Microsoft JhengHei;'><span class='glyphicon glyphicon-arrow-left' aria-hidden='true'></span>&nbsp;點選左方<b>『組合電器推薦』</b><br>一次給您統整性的組合推薦 !<br></span></span>
							</li>
							<br>
							<li type=none >
								<span style='font-size:26px'><span style='font-family:Microsoft JhengHei;'>想要了解每月您使用的用電量嗎?<br><span class='glyphicon glyphicon-arrow-right' aria-hidden='true'></span>&nbsp;<b><a href='{$_SERVER["PHP_SELF"]}?op=add_user_form'>點選我開始填寫表單</a></b><br><br>填完表單後就可以開始使用圖表分析的功能啦 !<br>
								                                                                            <span class='glyphicon glyphicon-arrow-left' aria-hidden='true'></span>&nbsp;點選左方<b>『每月用電統計』</b><br>
																											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-hand-right' aria-hidden='true'></span>&nbsp;點選<b>『<a href='{$_SERVER["PHP_SELF"]}?op=chart''>用電時數比例</a>』</b>/ 查看每月電器使用時數<br>
																											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-hand-right' aria-hidden='true'></span>&nbsp;點選<b>『<a href='{$_SERVER["PHP_SELF"]}?op=chart2''>電費價格比例</a>』</b>/ 查看每月電器使用電費<br>
																											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-hand-right' aria-hidden='true'></span>&nbsp;點選<b>『<a href='{$_SERVER["PHP_SELF"]}?op=chart3''>年度用電表</a>』</b>/ 查看年度統整表<br>
																											
																											</span></span>
							</li>
						</ol>
					
					<hr>
				</div>
		        
				
			</div>
            <div role='tabpanel' class='tab-pane' id='profile'>
			<br>
				<div class='alert alert-info' role='alert'>
					<h2 class='alert-heading' style='text-align:center'><span style='font-family:Microsoft JhengHei;'><b>Q1: 想省電卻不知道從何下手?</b></span></h2>
					<br><br>
					<h4 style='margin-left:23px' ><span style='font-family:Microsoft JhengHei;'>每月用電統計</span></h4>
						<ol style='font-size:18px' >
							<span style='font-family:Microsoft JhengHei;'>
							<li type=disc>
								填寫用電基本資料
								<ul>
								
									了解當月用電統計
								</ul>
								<ul>
									電費價格
								
								</ul>
								<ul>
									從用電量百分比中控管相應電器使用量
								</ul>
							</li>
							<li type=disc>
								經年累月
								<ul>
									了解整年月用電分布
								</ul>
								<ul>
									夏月即非夏月的差別
								</ul>
								<ul>
									以年為單位做到更精密的分析
								</ul>
							</li>
							
							</span>
						</ol>
					<hr>
				</div>
				<div class='alert alert-danger' role='alert'>
					<h2 class='alert-heading' style='text-align:center'><span style='font-family:Microsoft JhengHei;'><b>Q2: 想省荷包或為家裡的電費感到頭痛?</b></span></h2>
					<br><br>
					<h4 style='margin-left:23px' ><span style='font-family:Microsoft JhengHei;'>組合電器推薦</span></h4>
						<span style='font-family:Microsoft JhengHei;'>
						<ol style='font-size:18px'>
							
							<li type=disc>
								勾選需要的電器項目
								<ul>
									因應電器選擇需要的條件
								</ul>
								<ul>
									推薦你完美的省電家具組合
								</ul>
							</li>
							<br>
						</ol><h4 style='margin-left:23px' ><span style='font-family:Microsoft JhengHei;'>單一電器推建<span></h4>
						<ol style='font-size:18px'>
								<li type=disc>
								勾選需要的電器項目
								<ul>
									因應電器選擇需要的條件
								</ul>
								<ul>
									推薦符合使用者需求且性價比較高者
								</ul>
								</li>
						</ol>
						</span>
					<hr>
				</div>
			</div>
		</div>

		";
    return $main;
}
function user_login(){
	global $link;
	$sql3="select * from `user_idpw` where user_id='{$_POST['user_id']}' and user_password='{$_POST['user_password']}'";
	$result=mysqli_query($link,$sql3)or die_content(mysql_error($link)."檢索資料失敗");
	$num=mysqli_num_rows($result);
	if($num==0)
	{
		die_content("此ID未被註冊,快來註冊吧~   <a href='{$_SERVER["PHP_SELF"]}?op=register'>Register here!</a>");
	}
	else
	{
		
		$_SESSION['user_id']=$_POST['user_id'];
	}	
}
function register_user(){
	global $link;
	if($_POST['user_pwd_con']==$_POST['user_password']){
		$sql3="select `user_id` from `user_idpw` where user_id='{$_POST['user_id2']}'";
		$result=mysqli_query($link,$sql3)or die_content(mysql_error($link)."檢索資料失敗");
		$num=mysqli_num_rows($result);
		if($num>0)
		{
			$main="<script>alert('此ID已被註冊,請重新填寫');location.href='{$_SERVER["PHP_SELF"]}?op=register';</script>";
		    echo $main;
		}
		else
		{
			$sql2="insert into `user_idpw`(
			`user_id`,`user_password`) 
			values('{$_POST['user_id2']}','{$_POST['user_password']}')";
			mysqli_query($link,$sql2)or die_content(mysql_error($link)."註冊失敗");
			$_SESSION['user_id']=$_POST['user_id2'];
			//die_content("註冊成功,歡迎來到<a href='{$_SERVER["PHP_SELF"]}'><span class='glyphicon glyphicon-leaf' aria-hidden='true'>省電大作戰</a>");
			$main="<script>alert('註冊成功,歡迎來到省電大作戰');location.href='{$_SERVER["PHP_SELF"]}';</script>";
		    echo $main;
			
		}
	}
	else{
		$main="<script>alert('密碼輸入有誤,請重新輸入');location.href='{$_SERVER["PHP_SELF"]}?op=register';</script>";
		echo $main;
	}

}
function search_main(){
	global $link;
	$main="
		<div>
		  <!-- Nav tabs -->
		  <ul class='nav nav-tabs' role='tablist'>
			<li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>我的單一家用電器</a></li>
		  </ul>
		  <!-- Tab panes -->
		  <div class='tab-content'>
		  
			<div role='tabpanel' class='tab-pane active' id='home'>
			<form class='form-horizontal' role='form' action ='{$_SERVER['PHP_SELF']}' method='post'  >
				<fieldset data-role='controlgroup' >

				  <!-- Form Name -->
				<h3>請輸入所需電器:</h3> 
				
				<label for='electricAppliances' ></label>
				<input type='hidden'  name='op' value='search_main'>
				  <!-- Text input-->
				  <br>
				  <div class='form-group' >
					<label class='col-sm-1 control-label' for='textinput'>            </label>
					<div class='col-sm-1'>
					
					  <input type='checkbox' style='zoom:250%' id='refrigerator' name='electricAppliances[]' value='refrigerator'>
					  
					</div>
					
					<p  style='font-size:20px' style='vertical-align:baseline' class='col-sm-2 control-label'  ><strong> 冰&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp箱</strong> </p>
					<label class='col-sm-1 control-label' for='textinput'>                </label>
					<div class='col-sm-1'>
					  <input type='checkbox' style='zoom:250%' id='washer' name='electricAppliances[]' value='washer'>
					</div>
					
					<p  style='font-size:20px' style='vertical-align:baseline' class='col-sm-2 control-label'  ><strong> 洗&nbsp衣&nbsp機</strong></p>
				  </div>

				  <!-- Text input-->
				  <div class='form-group'>
					
				  </div>

				  <!-- Text input-->
				  <div class='form-group'>
					<label class='col-sm-1 control-label' for='textinput'>             </label>
					<div class='col-sm-1'>
					  <input type='checkbox'style='zoom:250%'  id='dehumidifier' name='electricAppliances[]' value='dehumidifier'>
					</div>
					<p  style='font-size:20px' style='vertical-align:baseline' class='col-sm-2 control-label'  ><strong> 除&nbsp濕&nbsp機</strong> </p>
					<label class='col-sm-1 control-label' for='textinput'>              </label>
					<div class='col-sm-1'>
					  <input type='checkbox' style='zoom:250%' id='electric_pot' name='electricAppliances[]' value='electric_pot'>
					</div>
					<p  style='font-size:20px' style='vertical-align:bottom' class='col-sm-3 control-label'  ><strong> 電&nbsp鍋&nbsp/&nbsp電子&nbsp鍋</strong> </p>
			  
				  </div>

				  <!-- Text input-->
				  <div class='form-group'>
					<label class='col-sm-1 control-label' for='textinput'>       </label>
				  </div>

				  <div class='form-group'>
					<div class='col-sm-offset-2 col-sm-10'>
					  <div class='pull-right'>
						<button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
					  </div>
					</div>
				  </div>
		    </form>
		<hr>
			";
	$main.=cho();
	$main.=sql();		
	$main.="</div></div>";

	return $main;
	
}
function search_sec(){
	global $link;
	$main="
		<div>
		  <!-- Nav tabs -->
		  <ul class='nav nav-tabs' role='tablist'>
			<li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>我的房間電器</a></li>
			
		  </ul>
		  <!-- Tab panes -->
		  <div class='tab-content'>
		  
			<div role='tabpanel' class='tab-pane active' id='home'>
				<div><br><label class='col-sm-3 control-label' for='extinput'></label></div>
				<div class='form-group'>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=search_sec2&room=1'>room1</a>&nbsp;&nbsp;&nbsp;&nbsp;</b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=search_sec2&room=2'>room2</a>&nbsp;&nbsp;&nbsp;&nbsp;</b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=search_sec2&room=3'>room3</a>&nbsp;&nbsp;&nbsp;&nbsp;</b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=search_sec2&room=4'>room4</a>&nbsp;&nbsp;&nbsp;&nbsp;</b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=search_sec2&room=5'>room5</a>&nbsp;&nbsp;&nbsp;&nbsp;</b>
			    </div>
			
			
			
			<form class='form-horizontal' role='form' action ='{$_SERVER['PHP_SELF']}' method='post'  >
				<fieldset data-role='controlgroup' >

				  <!-- Form Name -->
				<h3>請輸入&nbsp;room".$_SESSION['room']."&nbsp;所需電器:</h3> 
				
				<label for='electricAppliances' ></label>
				<input type='hidden'  name='op' value='search_sec2'>
				  <!-- Text input-->
				  <br>
				  <div class='form-group' >
					<label class='col-sm-1 control-label' for='textinput'>            </label>
					<div class='col-sm-1'>
					
					  <input type='checkbox' style='zoom:250%' id='tv' name='electricAppliances[]' value='tv'>
					  
					</div>
					
					<p  style='font-size:20px' style='vertical-align:baseline' class='col-sm-2 control-label'  ><strong> 電&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp視</strong> </p>
					<label class='col-sm-1 control-label' for='textinput'>                </label>
					<div class='col-sm-1'>
					  <input type='checkbox' style='zoom:250%' id='airConditioner' name='electricAppliances[]' value='airConditioner'>
					</div>
					
					<p  style='font-size:20px' style='vertical-align:baseline' class='col-sm-2 control-label'  ><strong> 冷&nbsp;&nbsp;氣&nbsp;&nbsp;機</strong></p>
				  </div>
				  
				  <!-- Text input-->
				  <div class='form-group'>
					<label class='col-sm-1 control-label' for='textinput'>       </label>
				  </div>

				  <div class='form-group'>
					<div class='col-sm-offset-2 col-sm-10'>
					  <div class='pull-right'>
						<button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
					  </div>
					</div>
				  </div>
		    </form>
		<hr>
			";
	$main.=inputCondition();
	$main.=sqlA();		
	$main.="</div></div>";

	return $main;

	
}
function search_final(){
	global $link;
	$main="
		<div>
		  <!-- Nav tabs -->
		  <ul class='nav nav-tabs' role='tablist'>
			<li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>綜合電器列表</a></li>
			<li role='presentation'><a href='#profile' aria-controls='home' role='tab' data-toggle='tab'>我的房間電器列表</a></li>
			<li role='presentation'><a href='#last' aria-controls='home' role='tab' data-toggle='tab'>我的單一家用電器列表</a></li>
		  </ul>
		  <!-- Tab panes -->
		  <div class='tab-content'>
		  
			<div role='tabpanel' class='tab-pane active' id='home'>";
			//room0
			    $main.= "<br><div class='alert alert-info' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>我的電器</b></span></h2><hr>";
				$sql="Select `washerCapacityName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='0'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$washerCapacityName=$row['washerCapacityName'];
				
				if($washerCapacityName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `washer` where `容量`<$washerCapacityName && `容量`>=($washerCapacityName-2) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的洗衣機:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['商品型號']}'>";
							$main.= "商品型號: ". $row["商品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  容量: ". $row["容量"]."</a><br> "; 
						} $main.= "</div>";
					}
					
				}
				$sql="Select `refrigeratorCapacityName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='0'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$refrigeratorCapacityName=$row['refrigeratorCapacityName'];
				if($refrigeratorCapacityName!=NULL){
				$refrigeratorCapacityName=intval($refrigeratorCapacityName);
				$sql="select * from `新冰箱` where `容量`<$refrigeratorCapacityName && `容量`>=($refrigeratorCapacityName-100) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冰箱:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  容量: ". $row["容量"]."</a><br> "; 
						} $main.= "</div>";
					}
			        
				}
				$sql="Select `areaName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='0'";
					$result=mysqli_query($link,$sql);
					$row=mysqli_fetch_assoc($result);
					$areaName=$row['areaName'];
					//die_content($areaName);
					if($areaName!=NULL){
					$sql="select * from `dehumidifier` where `除濕機等級`=$areaName order by `能源效率` DESC limit 0,5";
						$result = mysqli_query($link,$sql);
						if ($result->num_rows > 0) 
						{ 
						// 輸出每行數據 
							$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的除濕機:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
							while($row = mysqli_fetch_assoc($result)) 
							{ 
								$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
								$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  能源等級: ". $row["能源等級"]."  除濕能力: ". $row["除濕能力"]."  除濕機等級: ". $row["除濕機等級"]."</a><br> "; 
							} $main.= "</div>";
							
						}
						
					}
					
					$sql="Select `needName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='0'";
					$result=mysqli_query($link,$sql);
					$row=mysqli_fetch_assoc($result);
					$needName=$row['needName'];
					if($needName!=NULL&&$needName!=0){
					$needName=intval($needName);
					$sql="select * from `電鍋` order by `能源等級` DESC limit 0,5";
						$result = mysqli_query($link,$sql);
						if ($result->num_rows > 0) 
						{ 
						// 輸出每行數據 
							$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電鍋電子鍋:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
							while($row = mysqli_fetch_assoc($result)) 
							{ 
								$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
								$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["耗電量"]."  能源等級: ". $row["能源等級"]."</a><br> "; 
							} $main.= "</div>";
							
						}
						
					}
				  
			
				$main.="</div>";
				$main.= "<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 1</b></span></h2><hr>";
         //room1
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='1'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='1'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				
				
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='1'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}
				//room2
				$main.="</div>";
				$main.= "<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 2</b></span></h2><hr>";
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='2'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='2'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='2'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}
				
				//room3
				$main.="</div>";
				$main.= "<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 3</b></span></h2><hr>";
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='3'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='3'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='3'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}
				
				
				//room4
				$main.="</div>";
				$main.= "<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 4</b></span></h2><hr>";
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='4'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='4'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='4'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}
				
				//room5
				$main.="</div>";
				$main.= "<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 5</b></span></h2><hr>";
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='5'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='5'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:</b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='5'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}		
                $main.="</div>";				
	$main.="<hr>";
			
	$main.="</div>
	<div role='tabpanel' class='tab-pane' id='profile'>
	<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 1</b></span></h2><hr>";
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='1'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='1'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				
				
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='1'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}
				//room2
				$main.="</div>";
				$main.= "<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 2</b></span></h2><hr>";
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='2'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='2'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='2'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}
				
				//room3
				$main.="</div>";
				$main.= "<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 3</b></span></h2><hr>";
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='3'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='3'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='3'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}
				
				
				//room4
				$main.="</div>";
				$main.= "<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 4</b></span></h2><hr>";
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='4'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='4'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a  target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='4'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}
				
				//room5
				$main.="</div>";
				$main.= "<br><div class='alert alert-warning' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>Room 5</b></span></h2><hr>";
				$sql="Select `sun` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='5'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$sun=$row['sun'];
				$sql="Select `roomSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='5'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$roomSizeName=$row['roomSizeName'];
				
				if($sun!=NULL&&$roomSizeName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
				$result = mysqli_query($link,$sql);
				if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> ";
						} $main.="</div>";
					}
				}
				$sql="Select `tvSizeName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='5'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$tvSizeName=$row['tvSizeName'];
				if($tvSizeName!=NULL){
				$tvSizeName=intval($tvSizeName);
				$sql="select * from `tv` where `尺寸`<=$tvSizeName && `尺寸`>($tvSizeName-10) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
							
						}$main.="</div>";
								
					}
				}		
                $main.="</div>";	
	$main.="</div>
	
	<div role='tabpanel' class='tab-pane' id='last'>";
			//room0
			    $main.= "<br><div class='alert alert-info' role='alert'>
				        <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>我的電器</b></span></h2><hr>";
				$sql="Select `washerCapacityName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='0'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$washerCapacityName=$row['washerCapacityName'];
				
				if($washerCapacityName!=NULL){
				//$sun=intval($sun);
				//$roomSizeName=intval($roomSizeName);
				$sql="select * from `washer` where `容量`<$washerCapacityName && `容量`>=($washerCapacityName-2) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據 
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的洗衣機:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['商品型號']}'>";
							$main.= "商品型號: ". $row["商品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  容量: ". $row["容量"]."</a><br> "; 
						} $main.= "</div>";
					}
					
				}
				$sql="Select `refrigeratorCapacityName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='0'";
				$result=mysqli_query($link,$sql);
				$row=mysqli_fetch_assoc($result);
				$refrigeratorCapacityName=$row['refrigeratorCapacityName'];
				if($refrigeratorCapacityName!=NULL){
				$refrigeratorCapacityName=intval($refrigeratorCapacityName);
				$sql="select * from `新冰箱` where `容量`<$refrigeratorCapacityName && `容量`>=($refrigeratorCapacityName-100) order by `能源效率` DESC limit 0,5";
					$result = mysqli_query($link,$sql);
					if ($result->num_rows > 0) 
					{ 
					// 輸出每行數據
						$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的冰箱:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
							$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  容量: ". $row["容量"]."</a><br> "; 
						} $main.= "</div>";
					}
			        
				}
				$sql="Select `areaName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='0'";
					$result=mysqli_query($link,$sql);
					$row=mysqli_fetch_assoc($result);
					$areaName=$row['areaName'];
					//die_content($areaName);
					if($areaName!=NULL){
					$sql="select * from `dehumidifier` where `除濕機等級`=$areaName order by `能源等級` DESC limit 0,5";
						$result = mysqli_query($link,$sql);
						if ($result->num_rows > 0) 
						{ 
						// 輸出每行數據 
							$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的除濕機:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b><hr>";
							while($row = mysqli_fetch_assoc($result)) 
							{ 
								$main.= "<a target='_new'  style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
								$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  能源等級: ". $row["能源等級"]."  除濕能力: ". $row["除濕能力"]."  除濕機等級: ". $row["除濕機等級"]."</a><br> "; 
							} $main.= "</div>";
							
						}
						
					}
					
					$sql="Select `needName` from `records` where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='0'";
					$result=mysqli_query($link,$sql);
					$row=mysqli_fetch_assoc($result);
					$needName=$row['needName'];
					if($needName!=NULL&&$needName!=0){
					$needName=intval($needName);
					$sql="select * from `電鍋` order by `能源等級` DESC limit 0,5";
						$result = mysqli_query($link,$sql);
						if ($result->num_rows > 0) 
						{ 
						// 輸出每行數據 
							$main.= "<div class='alert' role='alert' style='background-color:white; color:black;'><b>以下為推薦您的電鍋電子鍋:<h5 style='font-family:Microsoft JhengHei;'>(能源等級數值越小表示越省電喔!)</h5></b><hr>";
							while($row = mysqli_fetch_assoc($result)) 
							{ 
								$main.= "<a target='_new' style='color:black;' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
								$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["耗電量"]."  能源等級: ". $row["能源等級"]."</a><br> "; 
							} $main.= "</div>";
							
						}
						
					}
				  
			
				$main.="</div></div>";

	return $main;
}




function inputCondition(){
	if(isset($_POST['electricAppliances'])){
	$output="<h3>請輸入所需電器條件:</h3>
			 <form action ='{$_SERVER['PHP_SELF']}' method='post' >
			 <fieldset data-role='controlgroup' >
			 <input type='hidden' name='op' value='search_sec2'>";
			 //<label for='brand'>電視尺寸:</label>
			 //<select id='brand' name='tvSizeName' size='1'>
	foreach($_POST['electricAppliances'] as $electricAppliances){
		if($electricAppliances=="tv"){
			$output.="<br>
			         <label for='tvSize' style='font-size:20px' class='col-sm-3'>電視尺寸:</label>
					 <select id='tvSize' name='tvSizeName' style='zoom:125%' size='1'>
					 <option value='30'>小於30吋
					 <option value='40'>30~40吋
					 <option value='50'>40~50吋
					 <option value='60'>50~60吋
					 <option value='70'>60~70吋
					 <option value='80'>70~80吋
					 <option value='110'>大於100吋
					 </select><br>";
		}
		if($electricAppliances=="airConditioner"){
			$output.="<br>
					 <label for='roomSize' style='font-size:20px' class='col-sm-3'>房間坪數</label>
					 <select id='roomSize' name='roomSizeName' style='zoom:125%' size='1'>// onchange='changeroomSize();'
					 <option value='1.4'>1~3.0坪
					 <option value='2.33'>3~5.0坪
					 <option value='3.26'>5~7.0坪
					 <option value='4.19'>7~9.0坪
					 <option value='5.12'>9~11.0坪
					 <option value='6.05'>11~13.0坪
					 <option value='6.98'>13~15.0坪
					 <option value='7.91'>15~17.0坪
					 <option value='8.84'>17~19.0坪
					 <option value='9.77'>19~21.0坪
					 <option value='10.7'>21~23.0坪
					 <option value='11.63'>23~25.0坪
					 <option value='12.56'>25~27.0坪
					 <option value='13.95'>27~30.0坪
					 <option value='16.28'>30~35.0坪
					 <option value='18.6'>35~40.0坪
					 <option value='23.26'>40~50.0坪
					 <option value='27.91'>50~60坪
					 </select>
					 <br>
					 <br>
					 <label for='sun' style='font-size:20px' class='col-sm-4'>房間是否西曬</label>
					 <input id='sun' type='radio' name='sun' style='zoom:200%' value='1.25'>&nbsp;&nbsp;&nbsp;&nbsp;是&nbsp;&nbsp;&nbsp;&nbsp;
					 <input id='sun' type='radio' name='sun' style='zoom:200%' value='1' checked>&nbsp;&nbsp;&nbsp;&nbsp;否&nbsp;&nbsp;&nbsp;&nbsp;
					 <br>";
		}
	}
	$output.="<div class='form-group'>
            <div class='col-sm-offset-2 col-sm-10'>
              <div class='pull-right'>
                <button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
              </div>
            </div>
          </div></form>";
	return $output;	
	}
}
function sqlA(){
	global $link;
	
	$main="";
	if(isset($_POST['tvSizeName'])||isset($_POST['sun'])||isset($_POST['roomSizeName']))
	{
		//die_content($_SESSION['room']); 
		$tvSize="";
		$sun="";
		$roomSizeName="";
		if(isset($_POST['tvSizeName']))//電視
		{
			$tvSize=intval($_POST['tvSizeName']);
			$sql="select * from `tv` where `尺寸`<=$tvSize && `尺寸`>($tvSize-10) order by `能源效率` DESC limit 0,5";
			$result = mysqli_query($link,$sql);
			if ($result->num_rows > 0) 
			{ 
			// 輸出每行數據 
				$main.="<div class='alert alert-info' role='alert'>
				<h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的電視:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
				while($row = mysqli_fetch_assoc($result)) 
				{ 
					$main.="<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
					$main.="商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."<br> "; 
					
				}
						
			}
			$main.="</div>";
		}
		if(isset($_POST['sun'])&&isset($_POST['roomSizeName']))//冷氣
		{
			$sun=intval($_POST['sun']);
			$roomSizeName=intval($_POST['roomSizeName']);
			$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC limit 0,5";
			$result = mysqli_query($link,$sql);
			if ($result->num_rows > 0) 
			{ 
			// 輸出每行數據 
				$main.="<div class='alert alert-warning' role='alert'>
				<h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的冷氣:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
				while($row = mysqli_fetch_assoc($result)) 
				{ 
					$main.="<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
					$main.="商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."<br> "; 
				} 
			}
			
			$main.="</div>";
		}
			//新增房間
        if($_SESSION['user_id']=="")
		{
			
		}
		else{
	    //die_content($_SESSION['room']); 
		$sql="Select `user_id`,`roomtype` from `records` where `user_id` like '{$_SESSION['user_id']}' &&`roomtype`='{$_SESSION['room']}'";
			$result=mysqli_query($link,$sql);
			if($result->num_rows > 0){
				$sql="update `records` set `tvSizeName`='$tvSize', `sun`='$sun', `roomSizeName`='$roomSizeName' where `user_id` like '{$_SESSION['user_id']}'&&`roomtype`='{$_SESSION['room']}'";
				  mysqli_query($link,$sql) or die_content(mysqli_error($link)."已經設定過此筆資料");   
			}else{
			$sql="insert into `records` (`user_id`,`tvSizeName`, `sun`, `roomSizeName`,`roomtype`) values ('{$_SESSION['user_id']}','$tvSize','$sun','$roomSizeName','{$_SESSION['room']}')";
			mysqli_query($link,$sql) or die_content(mysqli_error($link)."已經設定過此筆資料");   
			}
		}
		return $main;
	}
}
function cho(){
	if(isset($_POST['electricAppliances'])){
		$output="<form class='form-horizontal' role='form' action ='{$_SERVER['PHP_SELF']}' method='post' >
                 <fieldset data-role='controlgroup' >
		         <h3>請輸入所需電器條件:</h3>
				 <input type='hidden' name='op' value='search_main'>";
		foreach($_POST['electricAppliances'] as $electricAppliances){
		
			if($electricAppliances=="washer"){
				$output.="<br>
				         <label for='washerCapacity' style='font-size:20px' class='col-sm-3'>洗衣機容量:</label>
						 <select id='washerCapacity' name='washerCapacityName' style='zoom:125%'  size='1'>
						 <option value='5'>小於5公升(L)
						 <option value='8'>6~8公升(L)
						 <option value='10'>8~10公升(L)
						 <option value='12'>10~12公升(L)
						 <option value='14'>12~14公升(L)
						 <option value='16'>14~16公升(L)
						 <option value='18'>16~18公升(L)
						 <option value='20'>18~20公升(L)
						 <option value='22'>20~22公升(L)
						 <option value='24'>22~24公升(L)
						 </select><br>";
			}
			if($electricAppliances=="refrigerator"){
				$output.="<br>
				         <label for='refrigeratorCapacity' style='font-size:20px' class='col-sm-3'>冰箱容量:</label>
						 <select id='refrigeratorCapacity' name='refrigeratorCapacityName' style='zoom:125%' size='1'>
						 <option value='100'>小於100公升(L)
						 <option value='200'>100~200公升(L)
						 <option value='300'>200~300公升(L)
						 <option value='400'>300~400公升(L)
						 <option value='500'>400~500公升(L)
						 <option value='600'>500~600公升(L)
						 <option value='700'>600~700公升(L)
						 </select>
						 <br>";
			}
			if($electricAppliances=="dehumidifier"){
				$output.="<br>
				         <label for='area' style='font-size:20px' class='col-sm-3'>地區:</label>
						 <select id='area' name='areaName' style='zoom:125%' size='1'>//onchange='changeArea();'
						 <option value='3'>基隆
						 <option value='3'>台北
						 <option value='3'>新北
						 <option value='3'>桃園
						 <option value='2'>新竹
						 <option value='1'>苗栗
						 <option value='2'>台中
						 <option value='1'>彰化
						 <option value='3'>南投
						 <option value='1'>雲林
						 <option value='2'>嘉義
						 <option value='1'>台南
						 <option value='2'>高雄
						 <option value='3'>屏東
						 <option value='3'>宜蘭
						 <option value='3'>花蓮
						 <option value='2'>台東
						 <option value='1'>澎湖
						 <option value='1'>金門
						 <option value='1'>連江
						 </select><br>";
			}
			if($electricAppliances=="electric_pot"){
				$output.="<br>
				         <label for='need' style='font-size:20px' class='col-sm-4'>需要推薦電子鍋嗎?</label>
						 <input id='need' name='needName' type='radio' style='zoom:200%' value='1'><span style='font-size:20px'>&nbsp;&nbsp;&nbsp;&nbsp;要&nbsp;&nbsp;&nbsp;&nbsp</span>
						 <input id='need' name='needName' type='radio' style='zoom:200%' value='0'><span style='font-size:20px'>&nbsp;&nbsp;&nbsp;&nbsp;不要&nbsp;&nbsp;&nbsp;&nbsp</span>
						 <br>";
			}
		}
		$output.="<div class='form-group'>
            <div class='col-sm-offset-2 col-sm-10'>
              <div class='pull-right'>
                <button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
              </div>
            </div>
          </div></form>";
		return $output;
	}
	
	
}

function sql(){
	global $link;
	$main="";
	if(isset($_POST['washerCapacityName'])||isset($_POST['refrigeratorCapacityName'])||isset($_POST['areaName'])||isset($_POST['needName'])){
	
	$washerCapacityName="";
	$refrigeratorCapacityName="";
	$areaName="";
	$needName="";
	
	if(isset($_POST['washerCapacityName']))//洗衣機
	{
		$washerCapacityName=intval($_POST['washerCapacityName']);
		$sql="select * from `washer` where `容量`<$washerCapacityName && `容量`>=($washerCapacityName-2) order by `能源效率` DESC limit 0,5";
		$result = mysqli_query($link,$sql);
		if ($result->num_rows > 0) 
		{ 
		// 輸出每行數據 
			 $main.="<div class='alert alert-info' role='alert'>
			<h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的洗衣機:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
			while($row = mysqli_fetch_assoc($result)) 
			{ 
				$main.="<a target='_new' href='https://feebee.com.tw/s/?q={$row['商品型號']}'>";
				$main.="商品型號: ". $row["商品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  容量: ". $row["容量"]."</a><br>"; 
			} 
			$main.="</div>";
		}
	}
	if(isset($_POST['refrigeratorCapacityName']))//冰箱
	{
		$refrigeratorCapacityName=intval($_POST['refrigeratorCapacityName']);
		$sql="select * from `新冰箱` where `容量`<$refrigeratorCapacityName && `容量`>=($refrigeratorCapacityName-100) order by `能源效率` DESC limit 0,5";
		$result = mysqli_query($link,$sql);
		if ($result->num_rows > 0) 
		{ 
		// 輸出每行數據
			$main.="<div class='alert alert-warning' role='alert'>
			<h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的冰箱:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
			while($row = mysqli_fetch_assoc($result)) 
			{ 
				$main.="<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
				$main.="商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  容量: ". $row["容量"]."</a><br> "; 
			} 
			$main.="</div>";
		}
	}
	if(isset($_POST['areaName']))//除濕機
	{
		$areaName=intval($_POST['areaName']);
		$sql="select * from `dehumidifier` where `除濕機等級`=$areaName order by `能源效率` DESC limit 0,5";
		$result = mysqli_query($link,$sql);
		if ($result->num_rows > 0) 
		{ 
		// 輸出每行數據 
			$main.="<div class='alert alert-success' role='alert'>
			<h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的除濕機:<h5 style='font-family:Microsoft JhengHei;'>(能源等級數值越小表示越省電喔!)</h5></b></span></h2><hr>";
			while($row = mysqli_fetch_assoc($result)) 
			{ 
				$main.="<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
				$main.="商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  能源等級: ". $row["能源等級"]."  除濕能力: ". $row["除濕能力"]."  除濕機等級: ". $row["除濕機等級"]."</a><br> "; 
			} 
			$main.="</div>";
		}
	}
	if(isset($_POST['needName']))//電鍋電子鍋
	{
		$needName=$_POST['needName'];
		$sql="select * from `電鍋` order by `能源等級` DESC limit 0,5";
		$result = mysqli_query($link,$sql);
		if ($result->num_rows > 0) 
		{ 
		// 輸出每行數據 
			$main.="<div class='alert alert-danger' role='alert'>
			<h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的電鍋電子鍋:<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
			while($row = mysqli_fetch_assoc($result)) 
			{ 
				$main.="<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
				$main.="商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["耗電量"]."</a><br> "; 
			} 
			$main.="</div>";
		}
	}
    //我的電器
	if($_SESSION['user_id']=="")
	{
		
		
	}
	else{
		
		//die_content($_SESSION['user_id']);
		$sql="Select `user_id`,`roomtype` from `records` where `user_id` like '{$_SESSION['user_id']}'&& `roomtype`='0'";
		$result=mysqli_query($link,$sql);
		if($result->num_rows > 0){
			$sql="update `records` set `washerCapacityName`='$washerCapacityName', `refrigeratorCapacityName`='$refrigeratorCapacityName', `areaName`='$areaName', `needName`='$needName' where `user_id` like '{$_SESSION['user_id']}' && `roomtype`='0'";
			mysqli_query($link,$sql) or die_content(mysqli_error($link)."已經設定過此筆資料");   
			}
		else{
			$sql="insert into `records` (`user_id`,`washerCapacityName`, `refrigeratorCapacityName`, `areaName`, `needName`,`roomtype`) values ('{$_SESSION['user_id']}','$washerCapacityName','$refrigeratorCapacityName','$areaName','$needName',0)";
			 mysqli_query($link,$sql) or die_content(mysqli_error($link)."已經設定過此筆資料");   
			}
    }
	return $main;
	}
}
function tv_list(){
    global $link;
    $main="
	<br>
    <div>
      <!-- Nav tabs -->
        <ul class='nav nav-tabs ' role='tablist'>
			<li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>電視機推薦</a></li>
		</ul>
		<br>
		<div style='border-width:3px;border-style:groove;border-color:#FFAC55;padding:5px;border-radius:20px;'>
			<h1>&nbsp&nbsp請輸入所需電器條件</h1><br><br><br>
			<div class='tab-content'>
				<div role='tabpanel' class='tab-pane active' id='home' >
					<form class='form-horizontal' role='form' method='post' action='{$_SERVER['PHP_SELF']}'>
					<fieldset data-role='controlgroup' >

          <!-- Form Name -->
          

          <!-- Text input-->
      
						<label for='refrigeratorCapacity' style='font-size:20px' class='col-sm-3'>電視尺寸</label>
						<input type='hidden' name='op' value='tv_list'>
						<select id='tvSize' name='tvSizeName' style='zoom:125%'  size='1'>
						<option value='30'>小於30吋
						<option value='40'>30~40吋
						<option value='50'>40~50吋
						<option value='60'>50~60吋
						<option value='70'>60~70吋
						<option value='80'>70~80吋
						<option value='110'>大於100吋
						</select><br><br><br>
						<label for='brand' style='font-size:20px' class='col-sm-3'>品牌偏好:</label>
						<select id='brand' name='brand' style='zoom:125%' size='1'>
						<option value='無'>無
						<option value='三星(SAMSUNG)'>三星(SAMSUNG)       
						<option value='夏普(SHARP)'>夏普(SHARP)
						<option value='索尼(SONY)'>索尼(SONY)
						<option value='國際(PANASONIC)'>國際(PANASONIC)
						<option value='樂金(LG)'>樂金(LG)
						</select><br>
				</div>
			</div>

			   <div class='form-group'>
				  <label class='col-sm-1 control-label' for='textinput'>       </label>
				  </div>

			<div class='form-group'>
				  <div class='col-sm-offset-2 col-sm-10'>
					<div class='pull-right'>
						<button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
					</div>
				  </div>
			</div>
<br><br><br>
			</fieldset>
			</form>
	  </div>
	 </div>
    <hr>
	<br>
    ";
    $main.=connectTv();
    return $main;
}
function connectTv(){
  global $link;
  $main="";
  if(isset($_POST['tvSizeName'])&&isset($_POST['brand']))//電視
  {
    $tvSize=intval($_POST['tvSizeName']);
    $brand=$_POST['brand'];
    if($brand=="無")
      $sql="select * from `tv` where `尺寸`<=$tvSize && `尺寸`>($tvSize-10) order by `能源效率` DESC";
    else
      $sql="select * from `tv` where `尺寸`<=$tvSize && `尺寸`>($tvSize-10) && `商標名稱`like '$brand' order by `能源效率` DESC";
    $result = mysqli_query($link,$sql);
    if ($result->num_rows > 0) 
    { 
    // 輸出每行數據 
      $main.= "<div class='alert alert-warning' role='alert'>
      <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的電視<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
      while($row = mysqli_fetch_assoc($result)) 
      { 
        $main.= "<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
        $main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  尺寸: ". $row["尺寸"]."</a><br> "; 
      } 
    }
    else
      $main.= "<div class='alert alert-info' role='alert'>
		  <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>抱歉並無符合條件的產品</b></span></h2><hr>";
		  
  }
  return $main;
  
}
function acondition_list(){
    global $link;
    $main="
  
    <div>
	<br>
      <!-- Nav tabs -->
      <ul class='nav nav-tabs' role='tablist'>
      <li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>冷氣推薦
      </a></li>
      </ul>
	  <br>
      <!-- Tab panes -->
	  <div style='border-width:3px;border-style:groove;border-color:#FFAC55;padding:5px;border-radius:20px;'>
	  <h1>&nbsp&nbsp請輸入所需電器條件</h1><br><br>
      <div class='tab-content'>
     <div role='tabpanel' class='tab-pane active' id='home' ><br>
    <form class='form-horizontal' role='form' method='post' action='{$_SERVER['PHP_SELF']}'>
        <fieldset data-role='controlgroup'>

          <!-- Form Name -->
          <label for='sun' style='font-size:20px' class='col-sm-3'>房間是否西曬:</label>
        <input id='sun' type='radio' name='sun' value='1.25' style='zoom:200%'><span style='font-size:20px'>是</span>
        <input id='sun' type='radio' name='sun' value='1'  style='zoom:200%' checked><span style='font-size:20px'>否</span>
        <br><br>
        <label for='roomSize' style='font-size:20px' class='col-sm-3'>房間坪數:</label>
        <input type='hidden' name='op' value='acondition_list'>
        <select id='roomSize' name='roomSizeName' style='zoom:125%'  size='1'>
        <option value='1.4'>1~3.0坪
        <option value='2.33'>3~5.0坪
        <option value='3.26'>5~7.0坪
        <option value='4.19'>7~9.0坪
        <option value='5.12'>9~11.0坪
        <option value='6.05'>11~13.0坪
        <option value='6.98'>13~15.0坪
        <option value='7.91'>15~17.0坪
        <option value='8.84'>17~19.0坪
        <option value='9.77'>19~21.0坪
        <option value='10.7'>21~23.0坪
        <option value='11.63'>23~25.0坪
        <option value='12.56'>25~27.0坪
        <option value='13.95'>27~30.0坪
        <option value='16.28'>30~35.0坪
        <option value='18.6'>35~40.0坪
        <option value='23.26'>40~50.0坪
        <option value='27.91'>50~60坪
        </select><br><br><br>
        <label for='brand' style='font-size:20px' class='col-sm-3'>品牌偏好:</label>
        <select id='brand' name='brand' style='zoom:125%' size='1'>
       <option value='無'>無
				<option value='三洋(SANLUX)'>三洋(SANLUX)
				<option value='三菱(MITSUBISHI)'>三菱(MITSUBISHI)
				<option value='三葉(MITSUBA)'>三葉(MITSUBA)
				<option value='大同(TATUNG)'>大同(TATUNG)
				<option value='大欣(TAIXIN)'>大欣(TAIXIN)
				<option value='大金(DAIKIN)'>大金(DAIKIN)
				<option value='太一(TAIITSU)'>太一(TAIITSU)
				<option value='日立(HITACHI)'>日立(HITACHI)
				<option value='北鄉(NORTH)'>北鄉(NORTH)
				<option value='台光電(ATR)'>台光電(ATR)
				<option value='禾聯(HERAN)'>禾聯(HERAN)
				<option value='冰點(BD)'>冰點(BD)
				<option value='艾普頓(APTON)'>艾普頓(APTON)
				<option value='良峰(RENFOSS)'>良峰(RENFOSS)
				<option value='奇美(CHIMEI)'>奇美(CHIMEI)
				<option value='東元(TECO)'>東元(TECO)
				<option value='松林夏(SUMMER)'>松林夏(SUMMER)
				<option value='松格(SONKOR)'>松格(SONKOR)
				<option value='金大阪(GOSAKA)'>金大阪(GOSAKA)
				<option value='金菱(KINLIN)'>金菱(KINLIN)
				<option value='金鼎(JINTING)'>金鼎(JINTING)
				<option value='阿瑪迪斯(AMADUS)'>阿瑪迪斯(AMADUS)
				<option value='品冠'>品冠
				<option value='皇家冷氣(ROYAL)'>皇家冷氣(ROYAL)
				<option value='美的(MIDEA)'>美的(MIDEA)
				<option value='格力(GREE)'>格力(GREE)
				<option value='泰陽(TAIYO)'>泰陽(TAIYO)
				<option value='海力(HI-LI)'>海力(HI-LI)
				<option value='特菱(TORUS)'>特菱(TORUS)
				<option value='國際(PANASONIC)'>國際(PANASONIC)
				<option value='富士丸(FUJIMARU)'>富士丸(FUJIMARU)
				<option value='富士通(FUJITSU)'>富士通(FUJITSU)
				<option value='惠而浦(WHIRLPOOL)'>惠而浦(WHIRLPOOL)
				<option value='華菱(HAWRIN)'>華菱(HAWRIN)
				<option value='萬士益(MAXE)'>萬士益(MAXE)
				<option value='詮寶(CHENBO)'>詮寶(CHENBO)
				<option value='資訊家'>資訊家
				<option value='歌林(KOLIN)'>歌林(KOLIN)
				<option value='樂金(LG)'>樂金(LG)
				<option value='優力(UNEED)'>優力(UNEED)
				<option value='聲寶(SAMPO)'>聲寶(SAMPO)
				<option value='寶島(FORMOSA)'>寶島(FORMOSA)
				</select><br>
      </div>
    </div>

          <!-- Text input-->
    

      <div class='form-group'>
          <label class='col-sm-1 control-label' for='textinput'>       </label>
          </div>

          <div class='form-group'>
          <div class='col-sm-offset-2 col-sm-10'>
            <div class='pull-right'>
            <button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
            </div>
          </div>
          </div>
<br><br><br>
        </fieldset>
      </form>
    </div>
		</div>	
    <hr>
<br>

    ";
    $main.=connectAircon();
    return $main;
}
function connectAircon(){
	global $link;
	$main="";
	if(isset($_POST['sun'])&&isset($_POST['roomSizeName'])&&isset($_POST['brand']))//冷氣
	{
		$sun=intval($_POST['sun']);
		$roomSizeName=intval($_POST['roomSizeName']);
		$brand=$_POST['brand'];
		if($brand=="無")
			$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) order by `能源效率` DESC ";
		else
			$sql="select * from `冷氣` where `冷氣能力`>=($roomSizeName*$sun) && `冷氣能力`>=(($roomSizeName-1)*$sun) && `商標名稱` like '$brand' order by `能源效率` DESC";
		$result = mysqli_query($link,$sql);
		if ($result->num_rows > 0) 
		{ 
		// 輸出每行數據 
			$main.= "<div class='alert alert-warning' role='alert'>
      <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的冷氣<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
			while($row = mysqli_fetch_assoc($result)) 
			{ 
				$main.= "<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
				$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  冷氣能力: ". $row["冷氣能力"]."</a><br> "; 
			} 
		}
		else
		$main.= "<div class='alert alert-info' role='alert'>
		  <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>抱歉並無符合條件的產品</b></span></h2><hr>";
	}
	return $main;
}
function pot_list(){
    global $link;
    $main="
  
    <div>
	<br>
      <!-- Nav tabs -->
      <ul class='nav nav-tabs' role='tablist'>
      <li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>電鍋推薦
      </a></li>
      </ul>
	  <br>
      <!-- Tab panes -->
	   <div style='border-width:3px;border-style:groove;border-color:#FFAC55;padding:5px;border-radius:20px;'>
	  <h1>&nbsp&nbsp請輸入所需電器條件</h1><br><br>
      <div class='tab-content'>
     <div role='tabpanel' class='tab-pane active' id='home' >
    <form class='form-horizontal' role='form' method='post' action='{$_SERVER['PHP_SELF']}'>
    <input type='hidden' name='op' value='pot_list'>
        <fieldset data-role='controlgroup'>

          <!-- Form Name -->
          <br>
        <label for='brand' style='font-size:20px' class='col-sm-3'>品牌偏好:</label>
        <select id='brand' name='brand' style='zoom:125%' size='1'>
        <option value='無'>無
				<option value='EUPA'>EUPA
				<option value='上裕'>上裕
				<option value='上豪(SUNHOW)'>上豪(SUNHOW)
				<option value='大家源'>大家源
				<option value='小太陽'>小太陽
				<option value='元山'>元山			
				<option value='日象'>日象
				<option value='永新'>永新
				<option value='禾聯(HERAN)'>禾聯(HERAN)
				<option value='佳工坊'>佳工坊
				<option value='尚朋堂'>尚朋堂
				<option value='東元(TECO)'>東元(TECO)
				<option value='皇瑩'>皇瑩
				<option value='捷寶'>捷寶
				<option value='歌林(KOLIN)'>歌林(KOLIN)
				<option value='優田(ULTEC)'>優田(ULTEC)
				<option value='優美'>優美
				<option value='聲寶(SAMPO)'>聲寶(SAMPO)
				<option value='鍋寶'>鍋寶
			</select><br>
      </div>
    </div>

          <!-- Text input-->
    

      <div class='form-group'>
          <label class='col-sm-1 control-label' for='textinput'>       </label>
          </div>

          <div class='form-group'>
          <div class='col-sm-offset-2 col-sm-10'>
            <div class='pull-right'>
            <button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
            </div>
          </div>
          </div>
<br><br><br>
        </fieldset>
      </form>
</div>
		</div>	
    <hr>
<br>

    ";
    $main.=connectPot();
    return $main;
}
function connectPot(){
	global $link;
	$main="";
	if(isset($_POST['brand']))//電鍋電子鍋
	{
		$brand=$_POST['brand'];
		if($brand=="無")
			$sql="select * from `電鍋` order by `能源等級` DESC ";
		else
			$sql="select * from `電鍋` where `商標名稱` like '$brand' order by `能源等級` DESC ";
		$result = mysqli_query($link,$sql);
		if ($result->num_rows > 0) 
		{ 
		// 輸出每行數據 
			 $main.= "<div class='alert alert-warning' role='alert'>
      <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的電鍋/電子鍋<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
			while($row = mysqli_fetch_assoc($result)) 
			{ 
				$main.= "<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
				$main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["耗電量"]."</a><br>"; 
			} 
		}
	
	else 
			$main.= "<div class='alert alert-info' role='alert'>
		  <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>抱歉並無符合條件的產品</b></span></h2><hr>";
	}
	return $main;
}
function dehum_list(){
    global $link;
    $main="
  
    <div>
	<br>
      <!-- Nav tabs -->
      <ul class='nav nav-tabs' role='tablist'>
      <li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>除濕機推薦
      </a></li>
      </ul>
	  <br>
      <!-- Tab panes -->
	   <div style='border-width:3px;border-style:groove;border-color:#FFAC55;padding:5px;border-radius:20px;'>
	  <h1>&nbsp&nbsp請輸入所需電器條件</h1><br><br><br>
      <div class='tab-content'>
     <div role='tabpanel' class='tab-pane active' id='home' >
    <form class='form-horizontal' role='form' method='post' action='{$_SERVER['PHP_SELF']}'>
        <fieldset data-role='controlgroup'>

          <!-- Form Name -->
        <label for='refrigeratorCapacity' style='font-size:20px' class='col-sm-3'>地區:</label>
        <input type='hidden' name='op' value='dehum_list'>
        <select id='area' name='areaName' style='zoom:125%'  size='1'>
        <option value='3'>基隆
        <option value='3'>台北
        <option value='3'>新北
        <option value='3'>桃園
        <option value='2'>新竹
        <option value='1'>苗栗
        <option value='2'>台中
        <option value='1'>彰化
        <option value='3'>南投
        <option value='1'>雲林
        <option value='2'>嘉義
        <option value='1'>台南
        <option value='2'>高雄
        <option value='3'>屏東
        <option value='3'>宜蘭
        <option value='3'>花蓮
        <option value='2'>台東
        <option value='1'>澎湖
        <option value='1'>金門
        <option value='1'>連江
        </select><br><br><br>
        <label for='brand' style='font-size:20px' class='col-sm-3'>品牌偏好:</label>
        <select id='brand' name='brand' style='zoom:125%' size='1'>
        <option value='無'>無
				<option value='3M'>3M
				<option value='三洋(SANLUX)'>三洋(SANLUX)
				<option value='三菱(MITSUBISHI)'>三菱(MITSUBISHI)
				<option value='大同(TATUNG)'>大同(TATUNG)
				<option value='山水(SANSUI)'>山水(SANSUI)
				<option value='元山(YENSUN)'>元山(YENSUN)
				<option value='太一(TAIITSU)'>太一(TAIITSU)
				<option value='日立(HITACHI)'>日立(HITACHI)
				<option value='仙鵝(CYGNUS)'>仙鵝(CYGNUS)
				<option value='台朔(TAISO)'>台朔(TAISO)
				<option value='禾聯(HERAN)'>禾聯(HERAN)
				<option value='米多力(MEDOLE)'>米多力(MEDOLE)
				<option value='艾美特(AIRMATE)'>艾美特(AIRMATE)
				<option value='克立淨'>克立淨
				<option value='佳醫超淨'>佳醫超淨
				<option value='奇美(CHIMEI)'>奇美(CHIMEI)
				<option value='東元(TECO)'>東元(TECO)
				<option value='威技(NEW WIDETECH)'>威技(NEW WIDETECH)
				<option value='美寧(MISTRO)'>美寧(MISTRO)
				<option value='飛利浦(PHILIPS)'>飛利浦(PHILIPS)
				<option value='夏普(SHARP)'>夏普(SHARP)
				<option value='格力(GREE)'>格力(GREE)
				<option value='國際(PANASONIC)'>國際(PANASONIC)
				<option value='富及第(FRIGIDAIRE)'>富及第(FRIGIDAIRE)
				<option value='惠而浦(WHIRLPOOL)'>惠而浦(WHIRLPOOL)
				<option value='華菱(HAWRIN)'>華菱(HAWRIN)
				<option value='瑞士時尚家電(STADLER FORM)'>瑞士時尚家電(STADLER FORM)
				<option value='詮恩(TRANE)'>詮恩(TRANE)
				<option value='嘉儀(HELLER)'>嘉儀(HELLER)
				<option value='歌林(KOLIN)'>歌林(KOLIN)
				<option value='樂金(LG)'>樂金(LG)
				<option value='聲寶(SAMPO)'>聲寶(SAMPO)
				</select><br>
      </div>
    </div>

          <!-- Text input-->
    

      <div class='form-group'>
          <label class='col-sm-1 control-label' for='textinput'>       </label>
          </div>

          <div class='form-group'>
          <div class='col-sm-offset-2 col-sm-10'>
            <div class='pull-right'>
            <button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
            </div>
          </div>
          </div>
<br><br><br>
        </fieldset>
      </form>
</div>
		</div>	
    <hr>
<br>

    ";
    $main.=connectDehumid();
    return $main;
}
function connectDehumid(){
  global $link;
  $main="";
  if(isset($_POST['areaName'])&&isset($_POST['brand']))//除濕機
  {
    $areaName=intval($_POST['areaName']);
    $brand=$_POST['brand'];
    if($brand=="無")
      $sql="select * from `dehumidifier` where `除濕機等級`=$areaName order by `能源等級` DESC ";
    else
      $sql="select * from `dehumidifier` where `除濕機等級`=$areaName && `商標名稱`like '$brand' order by `能源等級` DESC ";
    $result = mysqli_query($link,$sql);
    
    if ($result->num_rows > 0) 
    { 
    // 輸出每行數據 
       $main.= "<div class='alert alert-warning' role='alert'>
      <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的除濕機<h5 style='font-family:Microsoft JhengHei;'>(能源等級數值越小表示越省電喔!)</h5></b></span></h2><hr>";
      while($row = mysqli_fetch_assoc($result)) 
      { 
        $main.= "<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
        $main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  能源等級: ". $row["能源等級"]."  除濕能力: ". $row["除濕能力"]."  除濕機等級: ". $row["除濕機等級"]."</a><br> "; 
      } 
    }
  
  else 
  	$main.= "<div class='alert alert-info' role='alert'>
		  <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>抱歉並無符合條件的產品</b></span></h2><hr>";
  }
			
  return $main;
}
function fridge_list(){
    global $link;
    $main="
  
    <div >
	<br>
	
      <!-- Nav tabs -->
	  
      <ul class='nav nav-tabs' role='tablist'>
      <li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>冰箱推薦
      </a></li>
      </ul>
	  <br>
      <!-- Tab panes -->
	  <div style='border-width:3px;border-style:groove;border-color:#FFAC55;padding:5px;border-radius:20px;'>
	  <h1>&nbsp&nbsp請輸入所需電器條件</h1><br><br>
      <div class='tab-content'>
		<div role='tabpanel' class='tab-pane active' id='home' >
			<form class='form-horizontal' role='form' method='post' action='{$_SERVER['PHP_SELF']}'>
			<fieldset data-role='controlgroup'>

          <!-- Form Name -->
			<br>
			<label for='refrigeratorCapacity' style='font-size:20px' class='col-sm-3'>冰箱容量</label>
			<input type='hidden' name='op' value='fridge_list'>
			<select id='refrigeratorCapacity' name='refrigeratorCapacityName' style='zoom:125%'  size='1'>
				<option value='100'>小於100公升(L)
				<option value='200'>100~200公升(L)
				<option value='300'>200~300公升(L)
				<option value='400'>300~400公升(L)
				<option value='500'>400~500公升(L)
				<option value='600'>500~600公升(L)
				<option value='700'>600~700公升(L)
				</select><br><br><br>
			<label for='brand' style='font-size:20px' class='col-sm-3'>品牌偏好</label>
			<select id='brand' name='brand' style='zoom:125%' size='1'>
				<option value='無'>無
				<option value='三星(SAMSUNG)'>三星(SAMSUNG)
				<option value='三洋(SANLUX)'>三洋(SANLUX)			
				<option value='三菱(MITSUBISHI)'>三菱(MITSUBISHI)
				<option value='大同(TATUNG)'>大同(TATUNG)
				<option value='日立(HITACHI)'>日立(HITACHI)
				<option value='禾聯(HERAN)'>禾聯(HERAN)
				<option value='伊萊克斯(ELECTROLUX)'>伊萊克斯(ELECTROLUX)
				<option value='利勃(LIEBHERR)'>利勃(LIEBHERR)
				<option value='奇美(CHIMEI)'>奇美(CHIMEI)
				<option value='東元(TECO)'>東元(TECO)
				<option value='東芝(TOSHIBA)'>東芝(TOSHIBA)
				<option value='品硯(PINYAN)'>品硯(PINYAN)
				<option value='夏普(SHARP)'>夏普(SHARP)
				<option value='國際(PANASONIC)'>國際(PANASONIC)
				<option value='勝利牌(VICTOR)'>勝利牌(VICTOR)
				<option value='博世(BOSCH)'>博世(BOSCH)
				<option value='博朗格(BLOMBERG)'>博朗格(BLOMBERG)
				<option value='富及第(FRIGIDAIRE)'>富及第(FRIGIDAIRE)
				<option value='惠而浦(WHIRLPOOL)'>惠而浦(WHIRLPOOL)
				<option value='華菱(HAWRIN)'>華菱(HAWRIN)
				<option value='歌林(KOLIN)'>歌林(KOLIN)
				<option value='樂金(LG)'>樂金(LG)
				<option value='聲寶(SAMPO)'>聲寶(SAMPO)
				<option value='賽寧(ASKO)'>
				</select><br>
		</div>
	   </div>

					<!-- Text input-->
		<div class='form-group'>
			<label class='col-sm-1 control-label' for='textinput'>       </label>
		</div>
		<div class='form-group'>
			<div class='col-sm-offset-2 col-sm-10'>
				<div class='pull-right'>
					<button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
				</div>
			</div>
		</div>
		<br><br><br>

				</fieldset>
				</form>
		</div>
		</div>	
    <hr>
<br>
    ";
    $main.=connectFridge();
    return $main;
}
function connectFridge(){
  global $link;
  $main="";
  if(isset($_POST['refrigeratorCapacityName'])&&isset($_POST['brand']))//冰箱
  {
    $brand=$_POST['brand'];
    $refrigeratorCapacityName=intval($_POST['refrigeratorCapacityName']);
    if($brand=="無")
      $sql="select * from `新冰箱` where `容量`<$refrigeratorCapacityName && `容量`>=($refrigeratorCapacityName-100) order by `能源效率` DESC ";
    else
      $sql="select * from `新冰箱` where `容量`<$refrigeratorCapacityName && `容量`>=($refrigeratorCapacityName-100) && `商標名稱`like '$brand' order by `能源效率` DESC ";
    $result = mysqli_query($link,$sql);
    if ($result->num_rows > 0) 
    { 
    // 輸出每行數據 
      $main.= "<div class='alert alert-warning' role='alert'>
      <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的冰箱<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
      while($row = mysqli_fetch_assoc($result)) 
      { 
        $main.= "<a target='_new' href='https://feebee.com.tw/s/?q={$row['產品型號']}'>";
        $main.= "商品型號: ". $row["產品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  能源等級: ". $row["能源效率等級"]."  容量: ". $row["容量"]."</a><br> "; 
      } 
    }
    else
		$main.= "<div class='alert alert-info' role='alert'>
		  <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>抱歉並無符合條件的產品</b></span></h2><hr>";
		  
  }
  return $main;
  
}

function washing_list(){
    global $link;
    $main="
  
    <div>
	<br>
      <!-- Nav tabs -->
      <ul class='nav nav-tabs' role='tablist'>
      <li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>洗衣機推薦
      </a></li>
      </ul>
	  <br>
      <!-- Tab panes -->
	  <div style='border-width:3px;border-style:groove;border-color:#FFAC55;padding:5px;border-radius:20px;'>
	  <h1>&nbsp&nbsp請輸入所需電器條件</h1><br><br>
      <div class='tab-content'>
     <div role='tabpanel' class='tab-pane active' id='home' >
    <form class='form-horizontal' role='form' method='post' action='{$_SERVER['PHP_SELF']}'>
        <fieldset data-role='controlgroup'>
<br>
          <!-- Form Name -->
        <label for='washerCapacity' style='font-size:20px' class='col-sm-3'>洗衣機容量:</label>
        <input type='hidden' name='op' value='washing_list'>
        <select id='washerCapacity' name='washerCapacityName' style='zoom:125%'  size='1'>
        <option value='5'>小於5公升(L)
        <option value='8'>6~8公升(L)
        <option value='10'>8~10公升(L)
        <option value='12'>10~12公升(L)
        <option value='14'>12~14公升(L)
        <option value='16'>14~16公升(L)
        <option value='18'>16~18公升(L)
        <option value='20'>18~20公升(L)
        <option value='22'>20~22公升(L)
        <option value='24'>22~24公升(L)
        </select><br><br><br>
        <label for='brand' style='font-size:20px' class='col-sm-3'>品牌偏好:</label>
        <select id='brand' name='brand' style='zoom:125%' size='1'>
        <option value='無'>無
				<option value='三星(SAMSUNG)'>三星(SAMSUNG)
				<option value='三洋(SANLUX)'>三洋(SANLUX)			
				<option value='大同(TATUNG)'>大同(TATUNG)
				<option value='日立(HITACHI)'>日立(HITACHI)
				<option value='禾聯(HERAN)'>禾聯(HERAN)
				<option value='東元(TECO)'>東元(TECO)
				<option value='東芝(TOSHIBA)'>東芝(TOSHIBA)
				<option value='美泰克(MAYTAG)'>美泰克(MAYTAG)
				<option value='夏普(SHARP)'>夏普(SHARP)
				<option value='國際(PANASONIC)'>國際(PANASONIC)
				<option value='富及第(FRIGIDAIRE)'>富及第(FRIGIDAIRE)
				<option value='惠而浦(WHIRLPOOL)'>惠而浦(WHIRLPOOL)
				<option value='歌林(KOLIN)'>歌林(KOLIN)
				<option value='樂金(LG)'>樂金(LG)
				<option value='聲寶(SAMPO)'>聲寶(SAMPO)
				</select><br>
      </div>
    </div>

          <!-- Text input-->
    

      <div class='form-group'>
          <label class='col-sm-1 control-label' for='textinput'>       </label>
          </div>

          <div class='form-group'>
          <div class='col-sm-offset-2 col-sm-10'>
            <div class='pull-right'>
            <button type='submit'  name='submit'  style='zoom:125%' class='btn btn-primary'>確認</button>
            </div>
          </div>
          </div>
<br><br><br>
        </fieldset>
      </form>
</div>
		</div>	
    <hr>
<br>

    ";
    $main.=connectWasher();
    return $main;
}
function connectWasher(){
	global $link;
	$main="";
	if(isset($_POST['washerCapacityName'])&&isset($_POST['brand']))//洗衣機
	{
		$brand=$_POST['brand'];
		$washerCapacityName=intval($_POST['washerCapacityName']);
		if($brand=="無")
			$sql="select * from `washer` where `容量`<$washerCapacityName && `容量`>=($washerCapacityName-2) order by `能源效率` DESC";
		else
			$sql="select * from `washer` where `容量`<$washerCapacityName && `容量`>=($washerCapacityName-2) && `商標名稱` like '$brand' order by `能源效率` DESC";
		$result = mysqli_query($link,$sql);
		if ($result->num_rows > 0) 
		{ 
		// 輸出每行數據 
			 $main.= "<div class='alert alert-warning' role='alert'>
             <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>以下為推薦您的洗衣機<h5 style='font-family:Microsoft JhengHei;'>(能源效率數值越大表示越省電喔!)</h5></b></span></h2><hr>";
			while($row = mysqli_fetch_assoc($result)) 
			{ 
				$main.= "<a target='_new' href='https://feebee.com.tw/s/?q={$row['商品型號']}'>";
				$main.= "商品型號: ". $row["商品型號"]. "  商標名稱: ". $row["商標名稱"]."  能源效率: ". $row["能源效率"]."  年耗電量: ". $row["年耗電量"]."  容量: ". $row["容量"]."</a><br> "; 
			} 
		}
		else
		$main.= "<div class='alert alert-info' role='alert'>
		  <h2 class='alert-heading' style='text-align:left'><span style='font-family:Microsoft JhengHei;'><b>抱歉並無符合條件的產品</b></span></h2>";
		  
	}
	return $main;
	
}
function chart($month_value=""){
    global $link;
	
    $main="
	       <br>
		   <div>
		   <!-- Nav tabs -->
		   <ul class='nav nav-tabs' role='tablist'>
			 <li role='presentation' class='active'><a href='#profile' aria-controls='profile' role='tab' data-toggle='tab'>每月電器時數比例</a></li>
			
		   </ul>
		   <!-- Tab panes -->
		   <div class='tab-content'>
		   <div role='tabpanel' class='tab-pane active' id='profile' aria-labelledby='profile-tab'>
		   <br>
		   <div><br><label class='col-sm-2 control-label' for='extinput'></label></div>
			  <div class='form-group'>
				  <b>月&nbsp;&nbsp;份：&nbsp;&nbsp;</b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=1'>1月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=2'>2月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=3'>3月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=4'>4月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=5'>5月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=6'>6月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=7'>7月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=8'>8月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=9'>9月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=10'>10月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=11'>11月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart&month_value=12'>12月&nbsp;&nbsp;</a></b>
			  </div><br><br>";
    $main.=plotPie($month_value);
	//$main.="</div><div role='tabpanel' class='tab-pane' id='home' aria-labelledby='home-tab'>";
    //$main.=plotBar();
	$main.="</div></div></div>";
    return $main;
}
function chart2($month_value=""){
    global $link;
    $main="<br>
	       <div>
		   <!-- Nav tabs -->
		   <ul class='nav nav-tabs' role='tablist'>
			 <li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>每月電器電費比例</a></li>
			
		   </ul>
		   <!-- Tab panes -->
		   <div class='tab-content'>
	<div role='tabpanel' class='tab-pane active' id='home' aria-labelledby='home-tab'>
	<br>
		   <div><br><label class='col-sm-2 control-label' for='extinput'></label></div>
			  <div class='form-group'>
				  <b>月&nbsp;&nbsp;份：&nbsp;&nbsp;</b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=1'>1月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=2'>2月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=3'>3月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=4'>4月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=5'>5月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=6'>6月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=7'>7月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=8'>8月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=9'>9月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=10'>10月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=11'>11月&nbsp;&nbsp;</a></b>
				  <b><a href='{$_SERVER['PHP_SELF']}?op=chart2&month_value=12'>12月&nbsp;&nbsp;</a></b>
			  </div><hr><br><br>";
    $main.=plotBar($month_value);
	$main.="</div></div></div>";
    return $main;
}
function chart3($month_value=""){
    global $link;
    $main="<br>
	       <div>
		   <!-- Nav tabs -->
		   <ul class='nav nav-tabs' role='tablist'>
			 <li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>年度用電量</a></li>
			
		   </ul>
		   <!-- Tab panes -->
		   <div class='tab-content'>
	<div role='tabpanel' class='tab-pane active' id='home' aria-labelledby='home-tab'>
	<br><br>";
    $main.=plotColumn($month_value);
	$main.="</div></div></div>";
    return $main;
}
function plotPie($month_value=""){
    global $link;
    //連線資料庫
	
  $main="";
  $sql="select * from `user_info` where user_id='{$_SESSION['user_id']}' and month='$month_value'";
  $result=mysqli_query($link,$sql) or die_content(mysqli_error($link)."查詢資料失敗");
  $num=mysqli_num_rows($result);
  if($num==0)
  { 
    $aircon_time=0;
	$tv_time=0;
	$washer_time=0;
	$pot_time=0;
	$fridge_time=0;
	$dehumid_time=0;
	if($_SESSION['user_id']=="")
	{
		$main.="<script>alert('未登入,無法使用此功能,請先登入');</script>";
	}
	else{
		$main.="<script>alert('本月未填寫資料');</script>";
	}
	
	
  }
  else
  {
	  while($row=mysqli_fetch_array($result)) {
		$aircon_time=$row['aircon_time'];
		$tv_time=$row['tv_time'];
		$washer_time=$row['washer_time'];
		$pot_time=$row['pot_time'];
		$fridge_time=$row['fridge_time'];
		$dehumid_time=$row['dehumid_time'];
	  }
  }
  //連線完畢
  $washer_time=$washer_time*0.67;
  $pot_time=$pot_time*0.2;
    $main.="
    <!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Highchart 測試</title>
   <script src='https://code.highcharts.com/highcharts.js'></script>
   <script src='https://code.highcharts.com/highcharts-3d.js'></script>
   <script src='https://code.highcharts.com/modules/exporting.js'></script>
   <script src='https://code.highcharts.com/modules/export-data.js'></script>
</head>
<body>
  <div id='container' style='min-width: 310px; height: 400px; margin: 0 auto'>
  </div>
  <br>
  <div class='alert alert-info' role='alert'>
					<h2 class='alert-heading' style='text-align:center'><span style='font-family:Microsoft JhengHei;'><b>用電時數百分比</b></span></h2>
					<br><br>
						<ol style='font-size:20px' >
							<span style='font-family:Microsoft JhengHei;'>
								
								<ul>
								<li type=disc>
									能因應月份用圓餅圖清晰呈現該月份各電器所使用時數的比例
								</li>
								<li type=disc>
									若是需要節電能明白該從哪個使用量較大的電器下手
								</li>
								<li type=disc>
									嚴格控管電器使用量以達到省電的效果
								</li>
								</ul>
							
							</span>
						</ol>
					<hr>
			    </div>
  <script>
    var chart2; // 這是一個全域變數
$(document).ready(function() {//頁面載入後立刻執行，可以替換成需要的條件
      chart2 = new Highcharts.chart('container', {
    chart: {
        
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: '電器使用時數比例'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
              enabled: true,
              format: '{point.name}'
            },
            showInLegend: true
        }
    },
     series: [{
        name: '使用比例',
        colorByPoint: true,
        data: [
        {name: '冷氣', y: {$aircon_time}, sliced: true, selected: true}, 
        {name: '電視', y: {$tv_time}}, 
        {name: '洗衣機',y: {$washer_time}}, 
        {name: '電鍋', y: {$pot_time}}, 
        {name: '冰箱', y: {$fridge_time}}, 
        {name: '除濕機', y: {$dehumid_time}}
        ]
    }]
});
});
  </script>
</body>
</html>

    ";
    return $main;
}
function plotBar($month_value=""){
    global $link;
    //連線資料庫
	//die_content($month_value);
	$main="";
    $sql="select * from `user_info` where month='$month_value' and user_id='{$_SESSION['user_id']}'";
    $result=mysqli_query($link,$sql) or die_content(mysqli_error($link)."查詢資料失敗");
	$num=mysqli_num_rows($result);
  if($num==0)
  { 
    
    $month=$month_value;
    $aircon_ele=0;
    $aircon_time=0;
    $tv_ele=0;
    $tv_time=0;
    $washer_ele=0;
    $washer_time=0;
    $pot_ele=0;
    $pot_time=0;
    $fridge_ele=0;
    $fridge_time=0;
    $dehumid_ele=0;
    $dehumid_time=0;
	if($_SESSION['user_id']=="")
	{
		$main.="<script>alert('未登入,無法使用此功能,請先登入');</script>";
	}
	else{
		$main.="<script>alert('本月未填寫資料,請到用表單填寫資料');</script>";
	}
  }
  else
  {
    while($row=mysqli_fetch_array($result)) {
    $month=$row['month'];
    $aircon_ele=$row['aircon_ele'];
    $aircon_time=$row['aircon_time'];
    $tv_ele=$row['tv_ele'];
    $tv_time=$row['tv_time'];
    $washer_ele=$row['washer_ele'];
    $washer_time=$row['washer_time'];
    $pot_ele=$row['pot_ele'];
    $pot_time=$row['pot_time'];
    $fridge_ele=$row['fridge_ele'];
    $fridge_time=$row['fridge_time'];
    $dehumid_ele=$row['dehumid_ele'];
    $dehumid_time=$row['dehumid_time'];
  }
  }
  //連線完畢
    $categorieArr=array('冷氣', '電視', '洗衣機', '電鍋', '冰箱', '除濕機');

  //計算電費
    $washer_time=$washer_time*0.67;
    $pot_time=$pot_time*0.2;

    $airconTotal=($aircon_ele/1000)*$aircon_time*30;
    $tvTotal=($tv_ele/1000)*$tv_time*30;
    $washerTotal=($washer_ele/1000)*$washer_time*30;
    $potTotal=($pot_ele/1000)*$pot_time*30;
    $fridgeTotal=($fridge_ele/1000)*$fridge_time*30;
    $dehumidTotal=($dehumid_ele/1000)*$dehumid_time*30; 
    $total=$airconTotal+$tvTotal+$washerTotal+$potTotal+$fridgeTotal+$dehumidTotal;
    $total=round($total,2);
    if( $month<6 || $month>9 ) {
      //非夏月電價
      if($total<=120) {
        $airconTotal=$airconTotal*1.63;
        $tvTotal=$tvTotal*1.63;
        $washerTotal=$washerTotal*1.63;
        $potTotal=$potTotal*1.63;
        $fridgeTotal=$fridgeTotal*1.63;
        $dehumidTotal=$dehumidTotal*1.63;
      }
      else if($total<=330) {
        $airconTotal=$airconTotal*2.10;
        $tvTotal=$tvTotal*2.10;
        $washerTotal=$washerTotal*2.10;
        $potTotal=$potTotal*2.10;
        $fridgeTotal=$fridgeTotal*2.10;
        $dehumidTotal=$dehumidTotal*2.10;

      }
      else if($total<=500) {
        $airconTotal=$airconTotal*2.89;
        $tvTotal=$tvTotal*2.89;
        $washerTotal=$washerTotal*2.89;
        $potTotal=$potTotal*2.89;
        $fridgeTotal=$fridgeTotal*2.89;
        $dehumidTotal=$dehumidTotal*2.89;
      }
      else if($total<=700) {
        $airconTotal=$airconTotal*3.79;
        $tvTotal=$tvTotal*3.79;
        $washerTotal=$washerTotal*3.79;
        $potTotal=$potTotal*3.79;
        $fridgeTotal=$fridgeTotal*3.79;
        $dehumidTotal=$dehumidTotal*3.79;
      }
      else if($total<=1000) {
        $airconTotal=$airconTotal*4.42;
        $tvTotal=$tvTotal*4.42;
        $washerTotal=$washerTotal*4.42;
        $potTotal=$potTotal*4.42;
        $fridgeTotal=$fridgeTotal*4.42;
        $dehumidTotal=$dehumidTotal*4.42;
      }
      else {
        $airconTotal=$airconTotal*4.83;
        $tvTotal=$tvTotal*4.83;
        $washerTotal=$washerTotal*4.83;
        $potTotal=$potTotal*4.83;
        $fridgeTotal=$fridgeTotal*4.83;
        $dehumidTotal=$dehumidTotal*4.83;
      }
    }
    else {
      //夏月電價
      if($total<=120) {
        $airconTotal=$airconTotal*1.63;
        $tvTotal=$tvTotal*1.63;
        $washerTotal=$washerTotal*1.63;
        $potTotal=$potTotal*1.63;
        $fridgeTotal=$fridgeTotal*1.63;
        $dehumidTotal=$dehumidTotal*1.63;
      }
      else if($total<=330) {
        $airconTotal=$airconTotal*2.38;
        $tvTotal=$tvTotal*2.38;
        $washerTotal=$washerTotal*2.38;
        $potTotal=$potTotal*2.38;
        $fridgeTotal=$fridgeTotal*2.38;
        $dehumidTotal=$dehumidTotal*2.38;
      }
      else if($total<=500) {
        $airconTotal=$airconTotal*3.52;
        $tvTotal=$tvTotal*3.52;
        $washerTotal=$washerTotal*3.52;
        $potTotal=$potTotal*3.52;
        $fridgeTotal=$fridgeTotal*3.52;
        $dehumidTotal=$dehumidTotal*3.52;
      }
      else if($total<=700) {
        $airconTotal=$airconTotal*4.61;
        $tvTotal=$tvTotal*4.61;
        $washerTotal=$washerTotal*4.61;
        $potTotal=$potTotal*4.61;
        $fridgeTotal=$fridgeTotal*4.61;
        $dehumidTotal=$dehumidTotal*4.61;
      }
      else if($total<=1000) {
        $airconTotal=$airconTotal*5.42;
        $tvTotal=$tvTotal*5.42;
        $washerTotal=$washerTotal*5.42;
        $potTotal=$potTotal*5.42;
        $fridgeTotal=$fridgeTotal*5.42;
        $dehumidTotal=$dehumidTotal*5.42;
      }
      else {
        $airconTotal=$airconTotal*6.13;
        $tvTotal=$tvTotal*6.13;
        $washerTotal=$washerTotal*6.13;
        $potTotal=$potTotal*6.13;
        $fridgeTotal=$fridgeTotal*6.13;
        $dehumidTotal=$dehumidTotal*6.13;
      }

    }
  //計算完畢  
    $airconTotal=round($airconTotal,2);
    $tvTotal=round($tvTotal,2);
    $washerTotal=round($washerTotal,2);
    $potTotal=round($potTotal,2);
    $fridgeTotal=round($fridgeTotal,2);
    $dehumidTotal=round($dehumidTotal,2);
    $totalMoney=$airconTotal+$tvTotal+$washerTotal+$potTotal+$fridgeTotal+$dehumidTotal;
    $val = array($airconTotal, $tvTotal, $washerTotal, $potTotal, $fridgeTotal, $dehumidTotal);
    $val_json = json_encode($val);
    $main.="
    <!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Highchart 測試</title>
   <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
  <script src='http://code.highcharts.com/highcharts.js'></script>
</head>
<body>
  <div id='container' style='min-width: 310px; height: 400px; margin: 0 auto'>
  </div>
  <script>
    var chart1; // 這是一個全域變數
$(document).ready(function() {//頁面載入後立刻執行，可以替換成需要的條件
      chart1 = new Highcharts.Chart({//chart1就是這個圖表本身，可以在建立完成後操作
         chart: {
            renderTo: 'container',//目標的div
            type: 'bar'//圖表的種類
         },
         title: {
            text: '電費直條圖'//標題
         },
         xAxis: {//x軸
            categories: ".json_encode($categorieArr)."
         },
         yAxis: {//y軸
            min:0,
            title: {
               text: '電費價格'
            },
            labels: {
                overflow: 'justify'
            }
         },
         plotOption: {
          bar: {
              dataLabels: {
                  enabled: true
              }
          }
         },
         legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'bottom',
            x: 0,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: '#FFFFFF',
            shadow: true
          },
         series: [{//這裡是圖表的資料
            name: '$',
            data: {$val_json}
         }]
      });

   });
  
  document.write('總耗電：'+'{$total}'+'度</br>');
  document.write('總電費：'+'{$totalMoney}'+'元');
  </script><br><br><br>
  <div class='alert alert-info' role='alert'>
					<h2 class='alert-heading' style='text-align:center'><span style='font-family:Microsoft JhengHei;'><b>電費直條圖</b></span></h2>
					<br>
						<ol style='font-size:20px' >
							<span style='font-family:Microsoft JhengHei;'>
								
								<ul>
								<li type=disc>
									因應月份用直條圖清晰呈現該月份各電器所使用的電費、總耗電<br>和總電費
								</li>
								<li type=disc>
									將使用者填入的資料去依照電費的標準算出該月電費<br>
									(使用的度數不同，每度的電費計算方式也不相同)<br>
									(夏月以及非夏月的電費計算方式也不相同)
								</li>
								</ul>
							
							
							</span>
						</ol>
					<hr>
			    </div>
			</div>
</body>
</html>

    ";
    return $main;
}
function plotColumn($month_value=""){
     global $link;
	 $main="";
    //連線資料庫
    for( $month_value=1 ; $month_value<13 ; $month_value++) {
      $sql="select * from `user_info` where user_id='{$_SESSION['user_id']}' AND month='$month_value'" ;
      $result=mysqli_query($link,$sql) or die_content(mysqli_error($link)."查詢資料失敗");
      $num=mysqli_num_rows($result);
      if($num==0) {
        $aircon_ele=0;
        $aircon_time=0;
        $tv_ele=0;
        $tv_time=0;
        $washer_ele=0;
        $washer_time=0;
        $pot_ele=0;
        $pot_time=0;
        $fridge_ele=0;
        $fridge_time=0;
        $dehumid_ele=0;
        $dehumid_time=0;
		if($_SESSION['user_id']=="")
		{
			$main.="<script>alert('未登入,無法使用此功能,請先登入');</script>";
		}
		else{
			$main.="<script>alert('本月未填寫資料,請到用表單填寫資料');</script>";
		}
      }
      else {
        while($row=mysqli_fetch_array($result)) {
        $month=$row['month'];
        $aircon_ele=$row['aircon_ele'];
        $aircon_time=$row['aircon_time'];
        $tv_ele=$row['tv_ele'];
        $tv_time=$row['tv_time'];
        $washer_ele=$row['washer_ele'];
        $washer_time=$row['washer_time'];
        $pot_ele=$row['pot_ele'];
        $pot_time=$row['pot_time'];
        $fridge_ele=$row['fridge_ele'];
        $fridge_time=$row['fridge_time'];
        $dehumid_ele=$row['dehumid_ele'];
        $dehumid_time=$row['dehumid_time'];
        }
      }
    
    //計算度數
    $washer_time=$washer_time*0.67;
    $pot_time=$pot_time*0.2;
    $airconTotal=($aircon_ele/1000)*$aircon_time*30;
    $tvTotal=($tv_ele/1000)*$tv_time*30;
    $washerTotal=($washer_ele/1000)*$washer_time*30;
    $potTotal=($pot_ele/1000)*$pot_time*30;
    $fridgeTotal=($fridge_ele/1000)*$fridge_time*30;
    $dehumidTotal=($dehumid_ele/1000)*$dehumid_time*30; 
    $total[$month_value]=$airconTotal+$tvTotal+$washerTotal+$potTotal+$fridgeTotal+$dehumidTotal;
    //總耗電度數
   }
  
    $main="
    <!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Highchart 測試</title>
   <script src='https://code.highcharts.com/highcharts.js'></script>
  <script src='https://code.highcharts.com/modules/exporting.js'></script>
  <script src='https://code.highcharts.com/modules/export-data.js'></script>
  <div id='container' style='min-width: 310px; height: 400px; margin: 0 auto'></div><br><br>
  <div class='alert alert-info' role='alert'>
					<h2 class='alert-heading' style='text-align:center'><span style='font-family:Microsoft JhengHei;'><b>年度用電表</b></span></h2>
					<br><br>
						<ol style='font-size:20px' >
							<span style='font-family:Microsoft JhengHei;'>
						
								<ul>
								<li type=disc>
									用直條圖呈現每月份的耗電度數，並以一般家庭平均用電度數比較<br>
								</li>
								<li type=disc>
									提供拉選方式進一步放大圖表，方便觀察圖表數據
								</li>
								<li type=disc>
									透過一整年下來的觀察能更清楚了解自己在哪個月份電費較高，並<br>且能知道該月各電器所產生的電費
								</li>
								</ul>
							
							</span>
						</ol>
					<hr>
			    </div>
</head>
<body>

  <script>
    var chart1; // 這是一個全域變數
$(document).ready(function() {//頁面載入後立刻執行，可以替換成需要的條件
      chart1 = new Highcharts.Chart({//chart1就是這個圖表本身，可以在建立完成後操作
         chart: {
        renderTo: 'container',//目標的div
        zoomType: 'xy'
  },
  title: {
    text: '年用電度數表'
  },
  xAxis: [{
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
      'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    crosshair: true
  }],
  yAxis: [{ // Primary yAxis
    labels: {
      format: '{value}度',
      style: {
        color: Highcharts.getOptions().colors[1]
      }
    },
    title: {
      text: '一般家庭平均用電度數',
      style: {
        color: Highcharts.getOptions().colors[1]
      }
    }
  }, { // Secondary yAxis
    title: {
      text: '您的用電度數',
      style: {
        color: Highcharts.getOptions().colors[0]
      }
    },
    labels: {
      format: '{value} 度',
      style: {
        color: Highcharts.getOptions().colors[0]
      }
    },
    opposite: true
  }],
  tooltip: {
    shared: true
  },
  legend: {
    layout: 'vertical',
    align: 'left',
    x: 120,
    verticalAlign: 'top',
    y: 100,
    floating: true,
    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
  },
  series: [{
    name: '您的用電度數',
    type: 'column',
    yAxis: 1,
    data: [{$total[1]}, {$total[2]}, {$total[3]}, {$total[4]}, {$total[5]}, {$total[6]}, {$total[7]}, {$total[8]}, {$total[9]}, {$total[10]}, {$total[11]}, {$total[12]}],
    tooltip: {
      valueSuffix: '度'
    }

  }, {
    name: '一般家庭平均用電度數',
    type: 'spline',
    data: [143.35, 132.35, 117.35, 112.35, 173.55, 358.35, 355.35, 382.35, 328.35, 194.35, 142.35, 146.55],
    tooltip: {
      valueSuffix: '度'
    }
  }]
  });

   });

  </script>
</body>
</html>

    ";
    return $main;
}
function add_user_form($month_value="", $modify=""){
    global $link;
	//die_content($modify);
    $active=array("","");
    if($modify==1) {
    	$active[1]="active";
    	$active[0]="";
    } 
    else if($modify==0){
    	$active[0]="active";
    	$active[1]="";

    }
	else if($modify==3){
    	$active[0]="active";
    	$active[1]="";

    }
    //else $active[0]=$active[1]="";

    $main="
    <div>
		  <!-- Nav tabs -->
		    <ul class='nav nav-tabs' role='tablist'>
			     <li role='presentation' class='$active[0]'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>月用電量填寫</a></li>
			     <li role='presentation' class='$active[1]'><a href='#profile' aria-controls='profile' role='tab' data-toggle='tab'>每月用電總覽</a></li>
    		 </ul>
		  <!-- Tab panes -->
		    <div class='tab-content'>
		        <div role='tabpanel' class='tab-pane $active[1]' id='profile'>";
		            $sql2="select * from `user_info` where month='$month_value' and user_id='{$_SESSION['user_id']}'";
		            $result=mysqli_query($link,$sql2)or die_content(mysqli_error($link)."檢索資料失敗");
		            $num=mysqli_num_rows($result);
		            if($num==0) { 
	                 $aircon_ele="未填寫";
			             $aircon_time="未填寫";
			             $tv_ele="未填寫";
			             $tv_time="未填寫";
			             $washer_ele="未填寫";
			             $washer_time="未填寫";
			             $pot_ele="未填寫";
			             $pot_time="未填寫";
			             $fridge_ele="未填寫";
			             $fridge_time="未填寫";
			             $dehumid_ele="未填寫";
			             $dehumid_time="未填寫";
	             }
		          else{
		              while($data = mysqli_fetch_assoc($result)){
                    foreach($data as $i=>$v){
                       $$i=$v;
                    }
		              }
		          }

             $main.="<form class='form-horizontal' role='form'>
         <fieldset><br>

          <!-- Text input-->
		  <div class='col-sm-2 control-label' style='border-width:3px;border-style:groove;border-color:#FFAC55;padding:10px;border-radius:20px;font-size:24pt;'><b> $month_value &nbsp;&nbsp;月</b></div>
          <div><br><label class='col-sm-2 control-label' for='extinput'></label></div>
		  <div class='form-group'>
              <b>月&nbsp;&nbsp;份：&nbsp;&nbsp;</b>
              <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=1&modify=1'>1月&nbsp;&nbsp;</a></b>
              <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=2&modify=1'>2月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=3&modify=1'>3月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=4&modify=1'>4月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=5&modify=1'>5月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=6&modify=1'>6月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=7&modify=1'>7月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=8&modify=1'>8月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=9&modify=1'>9月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=10&modify=1'>10月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=11&modify=1'>11月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=12&modify=1'>12月&nbsp;&nbsp;</a></b>
          </div>
          
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>冷&nbsp;&nbsp;&nbsp;&nbsp;氣：</b></label><legend></legend></div>
          
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$aircon_ele}&nbsp;&nbsp;W</label>
			<label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$aircon_time}&nbsp;&nbsp;hr</label>
          </div>
		  
          <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>電&nbsp;&nbsp;&nbsp;&nbsp;視：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$tv_ele}&nbsp;&nbsp;W</label>
            <label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$tv_time}&nbsp;&nbsp;hr</label>
          </div>
		  
          <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>洗衣機：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$washer_ele}&nbsp;&nbsp;W</label>
			<label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$washer_time}&nbsp;&nbsp;hr</label>
          </div>
		  
          <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>電&nbsp;&nbsp;&nbsp;&nbsp;鍋：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$pot_ele}&nbsp;&nbsp;W</label>
            <label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$pot_time}&nbsp;&nbsp;hr</label>
          </div>
		  
          <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>冰&nbsp;&nbsp;&nbsp;&nbsp;箱：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$fridge_ele}&nbsp;&nbsp;W</label>
			<label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$fridge_time}&nbsp;&nbsp;hr</label>
          </div>
          
		  <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>除濕機：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$dehumid_ele}&nbsp;&nbsp;W</label>
			<label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$dehumid_time}&nbsp;&nbsp;hr</label>
          </div>

          <!-- Text input-->
		    ";

          if($num>0) {       //如果從資料庫中有找到資料表是可以被修改出現修改鍵
            
            $main.="
            <div class='form-group'>
               <div class='col-sm-offset-2 col-sm-10'>
                  <div class='pull-right'>
                      <form method='get' action='{$_SERVER['PHP_SELF']}'>
                       <input type='hidden' name='op' value='add_user_form'>
                        <input type='hidden' name='modify' value='0'>
                        <input type='hidden' name='month_value' value='$month_value'>
                       <button type='submit' class='btn btn-primary'>modify</button>
                      </form>
                 </div>
              </div>
            </div>";
         }

         $main.="
          <div class='form-group'>
            <div class='col-sm-offset-2 col-sm-10'>
              <div class='pull-right'>
			  <form method='get' action='{$_SERVER['PHP_SELF']}'>
              <input type='hidden' name='op' value='delete_form'>
			  <input type='hidden' name='modify' value='1'>
			  <input type='hidden' name='month_value' value='$month_value'>
              <button type='submit' class='btn btn-primary'>delete</button>
			  </form>
              </div>
            </div>
          </div>
        </fieldset>
        </form>
		<div class=' col-sm-15'>
			 <h2><b>想了解更多的用電分析嗎??</b></h2><br>
			 
			 <a class='btn btn-info' href='{$_SERVER["PHP_SELF"]}?op=chart&month_value=$month_value' role='button' style='font-size:15pt'>查看此月電器使用時數</a>
			 <a class='btn btn-danger' href='{$_SERVER["PHP_SELF"]}?op=chart2&month_value=$month_value' role='button' style='font-size:15pt'>查看此月電器使用電費</a>
			 <a class='btn btn-success' href='{$_SERVER["PHP_SELF"]}?op=chart3' role='button' style='font-size:15pt'>查看年度統整表</a>
       </div>
		</div>";

    $select=array("","","","","","","","","","","","","");
	$selA=array("","","","","","","","","","","","","","","","","","","","","","","","","");
    $selB=array("","","","","","","","","","","","","","","","","","","","","","","","","");
	$selC=array("","","","","","","","","","","","","","","");
	$selD=array("","","","","","","","","","","","","","","");
	$selE=array("","","","","","","","","","","","","","","","","","","","","","","","","");
	$selF=array("","","","","","","","","","","","","","","","","","","","","","","","","");
	
    if($modify==0){
      $select[$month_value]='selected';
      $sql2="select * from `user_info` where month='$month_value' and user_id='{$_SESSION['user_id']}'";
      $result=mysqli_query($link,$sql2)or die_content(mysqli_error($link)."檢索資料失敗");
      while($data = mysqli_fetch_assoc($result)){
         foreach($data as $i=>$v){
          $$i=$v;
         }
       }
	   $selA[$aircon_time]='selected';
	   $selB[$tv_time]='selected';
	   $selC[$washer_time]='selected';
	   $selD[$pot_time]='selected';
	   $selE[$fridge_time]='selected';
	   $selF[$dehumid_time]='selected';
    }
    else {
      $aircon_ele="";
      $aircon_time="";
      $tv_ele="";
      $tv_time="";
      $washer_ele="";
      $washer_time="";
      $pot_ele="";
      $pot_time="";
      $fridge_ele="";
      $fridge_time="";
      $dehumid_ele="";
      $dehumid_time="";
    }
    


    $main.="

		 
		 <div role='tabpanel' class='tab-pane $active[0]' id='home' >
		
         <form class='form-horizontal' role='form' method='post' action='{$_SERVER['PHP_SELF']}'>
         <fieldset><br>

          <!-- Text input-->
         
	  
          <div><label class='col-sm-2 control-label' for='extinput'>月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;份：&nbsp;&nbsp;</label></div>
          <div class='form-group'>
            <select name='month' >
              <option value='1' $select[1] >1月</option>
              <option value='2' $select[2] >2月</option>
              <option value='3' $select[3] >3月</option>
              <option value='4' $select[4] >4月</option>
              <option value='5' $select[5] >5月</option>
              <option value='6' $select[6] >6月</option>
              <option value='7' $select[7] >7月</option>
              <option value='8' $select[8] >8月</option>
              <option value='9' $select[9] >9月</option>
              <option value='10' $select[10] >10月</option>
              <option value='11' $select[11] >11月</option>
              <option value='12' $select[12] >12月</option>  
            </select>
          </div>
          
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput' style='text-align:right;'>冷&nbsp;&nbsp;&nbsp;&nbsp;氣：</label><legend></legend></div>
          
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-4'>
            	<div class='slidecontainer'>
            		<input type='range' name='aircon_ele' id='aircon_ele' min='340' max='7200' width='100%' height='10px' value='$aircon_ele'>
            			瓦特: <span id='demoA'></span>
				</div>
				<script>
					var slider1 = document.getElementById('aircon_ele');
					var output1 = document.getElementById('demoA');	output1.innerHTML = slider1.value;
					slider1.oninput = function() {
  					output1.innerHTML = this.value;
					}
				</script>
			</div>

            
            <label class='col-sm-4 control-label' for='textinput'>每日使用幾小時
            </label>
            	<div class='form-group'>
              <select name='aircon_time'>
              <option value='0' $selA[0]>0</option>
              <option value='1' $selA[1]>1</option>
              <option value='2' $selA[2]>2</option>
              <option value='3' $selA[3]>3</option>
              <option value='4' $selA[4]>4</option>
              <option value='5' $selA[5]>5</option>
              <option value='6' $selA[6]>6</option>
              <option value='7' $selA[7]>7</option>
              <option value='8' $selA[8]>8</option>
              <option value='9' $selA[9]>9</option>
              <option value='10' $selA[10]>10</option>
              <option value='11' $selA[11]>11</option>
              <option value='12' $selA[12]>12</option>
              <option value='13' $selA[13]>13</option>
              <option value='14' $selA[14]>14</option>
              <option value='15' $selA[15]>15</option>
              <option value='16' $selA[16]>16</option>
              <option value='17' $selA[17]>17</option>
              <option value='18' $selA[18]>18</option>
              <option value='19' $selA[19]>19</option>
              <option value='20' $selA[20]>20</option>
              <option value='21' $selA[21]>21</option>
              <option value='22' $selA[22]>22</option>
              <option value='23' $selA[23]>23</option>
              <option value='24' $selA[24]>24</option> 
            </select>
          </div>
          </div>
		  

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>電&nbsp;&nbsp;&nbsp;&nbsp;視：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-4'>
            	<div class='slidecontainer'>
            		<input type='range' name='tv_ele' id='tv_ele' min='35' max='650' width='100%' height='10px' value='$tv_ele'>
            			瓦特: <span id='demoB'></span>
				</div>
				<script>
					var slider2 = document.getElementById('tv_ele');
					var output2 = document.getElementById('demoB');	output2.innerHTML = slider2.value;
					slider2.oninput = function() {
  					output2.innerHTML = this.value;
					}
				</script>
			</div>
            
            
            <label class='col-sm-4 control-label' for='textinput'>每日使用幾小時
            </label>
            	<div class='form-group'>
              <select name='tv_time'>
              <option value='0' $selB[0]>0</option>
              <option value='1' $selB[1]>1</option>
              <option value='2' $selB[2]>2</option>
              <option value='3' $selB[3]>3</option>
              <option value='4' $selB[4]>4</option>
              <option value='5' $selB[5]>5</option>
              <option value='6' $selB[6]>6</option>
              <option value='7' $selB[7]>7</option>
              <option value='8' $selB[8]>8</option>
              <option value='9' $selB[9]>9</option>
              <option value='10' $selB[10]>10</option>
              <option value='11' $selB[11]>11</option>
              <option value='12' $selB[12]>12</option>
              <option value='13' $selB[13]>13</option>
              <option value='14' $selB[14]>14</option>
              <option value='15' $selB[15]>15</option>
              <option value='16' $selB[16]>16</option>
              <option value='17' $selB[17]>17</option>
              <option value='18' $selB[18]>18</option>
              <option value='19' $selB[19]>19</option>
              <option value='20' $selB[20]>20</option>
              <option value='21' $selB[21]>21</option>
              <option value='22' $selB[22]>22</option>
              <option value='23' $selB[23]>23</option>
              <option value='24' $selB[24]>24</option> 
            </select>
          </div>
          </div>
		  

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>洗衣機：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-4'>
            	<div class='slidecontainer'>
            		<input type='range' name='washer_ele' id='washer_ele' min='115' max='690' width='100%' height='10px' value='$washer_ele'>
            			瓦特: <span id='demoC'></span>
				</div>
				<script>
					var slider3 = document.getElementById('washer_ele');
					var output3 = document.getElementById('demoC');	output3.innerHTML = slider3.value;
					slider3.oninput = function() {
  					output3.innerHTML = this.value;
					}
				</script>
			</div>
            
            
            <label class='col-sm-4 control-label' for='textinput'>每週使用幾次
            </label>
            	<div class='form-group'>
              <select name='washer_time'>
              <option value='0' $selC[0]>0</option>
              <option value='1' $selC[1]>1</option>
              <option value='2' $selC[2]>2</option>
              <option value='3' $selC[3]>3</option>
              <option value='4' $selC[4]>4</option>
              <option value='5' $selC[5]>5</option>
              <option value='6' $selC[6]>6</option>
              <option value='7' $selC[7]>7</option>
              <option value='8' $selC[8]>8</option>
              <option value='9' $selC[9]>9</option>
              <option value='10' $selC[10]>10</option>
              <option value='11' $selC[11]>11</option>
              <option value='12' $selC[12]>12</option>
              <option value='13' $selC[13]>13</option>
              <option value='14' $selC[14]>14</option>
            </select>
          </div>
          </div>

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>電&nbsp;&nbsp;&nbsp;&nbsp;鍋：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-4'>
            	<div class='slidecontainer'>
            		<input type='range' name='pot_ele' id='pot_ele' min='1060' max='1750' width='100%' height='10px' value='$pot_ele'>
            			瓦特: <span id='demoD'></span>
				</div>
				<script>
					var slider4 = document.getElementById('pot_ele');
					var output4 = document.getElementById('demoD');	output4.innerHTML = slider4.value;
					slider4.oninput = function() {
  					output4.innerHTML = this.value;
					}
				</script>
			</div>
            
            
            <label class='col-sm-4 control-label' for='textinput'>每週使用幾次
            </label>
            	<div class='form-group'>
              <select name='pot_time'>
              <option value='0' $selD[0]>0</option>
              <option value='1' $selD[1]>1</option>
              <option value='2' $selD[2]>2</option>
              <option value='3' $selD[3]>3</option>
              <option value='4' $selD[4]>4</option>
              <option value='5' $selD[5]>5</option>
              <option value='6' $selD[6]>6</option>
              <option value='7' $selD[7]>7</option>
              <option value='8' $selD[8]>8</option>
              <option value='9' $selD[9]>9</option>
              <option value='10' $selD[10]>10</option>
              <option value='11' $selD[11]>11</option>
              <option value='12' $selD[12]>12</option>
              <option value='13' $selD[13]>13</option>
              <option value='14' $selD[14]>14</option>
            </select>
          </div>
          </div>

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>冰&nbsp;&nbsp;&nbsp;&nbsp;箱：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-4'>
            	<div class='slidecontainer'>
            		<input type='range' name='fridge_ele' id='fridge_ele' min='25' max='120' width='100%' height='10px' value='$fridge_ele'>
            			瓦特: <span id='demoE'></span>
				</div>
				<script>
					var slider5 = document.getElementById('fridge_ele');
					var output5 = document.getElementById('demoE');	output5.innerHTML = slider5.value;
					slider5.oninput = function() {
  					output5.innerHTML = this.value;
					}
				</script>
			</div>
            
            
            <label class='col-sm-4 control-label' for='textinput'>每日使用幾小時
            </label>
            	<div class='form-group'>
              <select name='fridge_time'>
              <option value='0' $selE[0]>0</option>
              <option value='1' $selE[1]>1</option>
              <option value='2' $selE[2]>2</option>
              <option value='3' $selE[3]>3</option>
              <option value='4' $selE[4]>4</option>
              <option value='5' $selE[5]>5</option>
              <option value='6' $selE[6]>6</option>
              <option value='7' $selE[7]>7</option>
              <option value='8' $selE[8]>8</option>
              <option value='9' $selE[9]>9</option>
              <option value='10' $selE[10]>10</option>
              <option value='11' $selE[11]>11</option>
              <option value='12' $selE[12]>12</option>
              <option value='13' $selE[13]>13</option>
              <option value='14' $selE[14]>14</option>
              <option value='15' $selE[15]>15</option>
              <option value='16' $selE[16]>16</option>
              <option value='17' $selE[17]>17</option>
              <option value='18' $selE[18]>18</option>
              <option value='19' $selE[19]>19</option>
              <option value='20' $selE[20]>20</option>
              <option value='21' $selE[21]>21</option>
              <option value='22' $selE[22]>22</option>
              <option value='23' $selE[23]>23</option>
              <option value='24' $selE[24]>24</option> 
            </select>
          </div>
          </div>

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>除濕機：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-4'>
            	<div class='slidecontainer'>
            		<input type='range' name='dehumid_ele' id='dehumid_ele' min='100' max='900' width='100%' height='10px' value='$dehumid_ele'>
            			瓦特: <span id='demoF'></span>
				</div>
				<script>
					var slider6 = document.getElementById('dehumid_ele');
					var output6 = document.getElementById('demoF');	output6.innerHTML = slider6.value;
					slider6.oninput = function() {
  					output6.innerHTML = this.value;
					}
				</script>
			</div> 
            
            
            <label class='col-sm-4 control-label' for='textinput'>每日使用幾小時
            </label>
            	<div class='form-group'>
              <select name='dehumid_time'>
              <option value='0' $selF[0]>0</option>
              <option value='1' $selF[1]>1</option>
              <option value='2' $selF[2]>2</option>
              <option value='3' $selF[3]>3</option>
              <option value='4' $selF[4]>4</option>
              <option value='5' $selF[5]>5</option>
              <option value='6' $selF[6]>6</option>
              <option value='7' $selF[7]>7</option>
              <option value='8' $selF[8]>8</option>
              <option value='9' $selF[9]>9</option>
              <option value='10' $selF[10]>10</option>
              <option value='11' $selF[11]>11</option>
              <option value='12' $selF[12]>12</option>
              <option value='13' $selF[13]>13</option>
              <option value='14' $selF[14]>14</option>
              <option value='15' $selF[15]>15</option>
              <option value='16' $selF[16]>16</option>
              <option value='17' $selF[17]>17</option>
              <option value='18' $selF[18]>18</option>
              <option value='19' $selF[19]>19</option>
              <option value='20' $selF[20]>20</option>
              <option value='21' $selF[21]>21</option>
              <option value='22' $selF[22]>22</option>
              <option value='23' $selF[23]>23</option>
              <option value='24' $selF[24]>24</option> 
            </select>
          </div>
          </div>

          <!-- Text input-->



          <div class='form-group'>
            <div class='col-sm-offset-2 col-sm-10'>
              <div class='pull-right'>
                <input type='hidden' name='op' value='add_userInfo'>
                <input type='hidden' name='modify' value='1'>
				<input type='hidden' name='month_value' value='$month_value'>
                <button type='reset' class='btn btn-default'>Cancel</button>
                <button type='submit' class='btn btn-primary'>Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
      
	 </div>";
	
    return $main;
}

/*function add_user_form($month_value="",$modify=""){
    global $link;
	$active=array("","");
	if($modify==2) $active[1]='active';
	else if($modify==1) $active[0]='active';
	else $active[1]='active';

    $main="
	
    <div>
		  <!-- Nav tabs -->
		  <ul class='nav nav-tabs' role='tablist'>
			<li role='presentation' class='$active[0]'><a href='#profile' aria-controls='profile' role='tab' data-toggle='tab'>月用電量填寫</a></li>
			<li role='presentation' class='$active[1]'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>每月用電總覽</a></li>
			
		  </ul>
		  <!-- Tab panes -->
		 <div class='tab-content'>
		 <div role='tabpanel' class='tab-pane $active[1]' id='home'>";
		 
		 $sql2="select * from `user_info` where month='$month_value' and user_id='{$_SESSION['user_id']}'";
		 $result=mysqli_query($link,$sql2)or die_content(mysql_error($link)."檢索資料失敗");
		 $num=mysqli_num_rows($result);
		 if($num==0)
		 { 
	        $aircon_ele="未填寫";
			$aircon_time="未填寫";
			$tv_ele="未填寫";
			$tv_time="未填寫";
			$washer_ele="未填寫";
			$washer_time="未填寫";
			$pot_ele="未填寫";
			$pot_time="未填寫";
			$fridge_ele="未填寫";
			$fridge_time="未填寫";
			$dehumid_ele="未填寫";
			$dehumid_time="未填寫";
	     }
		 else{
		 while($data = mysqli_fetch_assoc($result)){
             foreach($data as $i=>$v){
                $$i=$v;
             }
		 }
		 }
             $main.="<form class='form-horizontal' role='form'>
         <fieldset><br>

          <!-- Text input-->
         
	  
          <div><br><label class='col-sm-2 control-label' for='extinput'></label></div>
		  <div class='form-group'>
		      <!--<b>$month_value 月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>--!>
              <b>月&nbsp;&nbsp;份：&nbsp;&nbsp;</b>
              <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=1&modify=2'>1月&nbsp;&nbsp;</a></b>
              <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=2'>2月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=3'>3月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=4'>4月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=5'>5月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=6'>6月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=7'>7月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=8'>8月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=9'>9月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=10'>10月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=11'>11月&nbsp;&nbsp;</a></b>
			  <b><a href='{$_SERVER['PHP_SELF']}?op=month_change&month_value=12'>12月&nbsp;&nbsp;</a></b>
          </div>
          
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>冷&nbsp;&nbsp;&nbsp;&nbsp;氣：</b></label><legend></legend></div>
          
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$aircon_ele}&nbsp;&nbsp;W</label>
			<label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$aircon_time}&nbsp;&nbsp;hr</label>
          </div>
		  
          <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>電&nbsp;&nbsp;&nbsp;&nbsp;視：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$tv_ele}&nbsp;&nbsp;W</label>
            <label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$tv_time}&nbsp;&nbsp;hr</label>
          </div>
		  
          <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>洗衣機：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$washer_ele}&nbsp;&nbsp;W</label>
			<label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$washer_time}&nbsp;&nbsp;hr</label>
          </div>
		  
          <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>電&nbsp;&nbsp;&nbsp;&nbsp;鍋：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$pot_ele}&nbsp;&nbsp;W</label>
            <label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$pot_time}&nbsp;&nbsp;hr</label>
          </div>
		  
          <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>冰&nbsp;&nbsp;&nbsp;&nbsp;箱：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$fridge_ele}&nbsp;&nbsp;W</label>
			<label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$fridge_time}&nbsp;&nbsp;hr</label>
          </div>
          
		  <br>
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'><b style='font-size:150%;'>除濕機：</b></label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率:</label>
			<label class='col-sm-3 control-label' for='textinput' style='font-size:150%;'>{$dehumid_ele}&nbsp;&nbsp;W</label>
			<label class='col-sm-2 control-label' for='textinput'>使用時間:</label>
            <label class='col-sm-3 control-label' for='textinput' style='font-size:160%;'>{$dehumid_time}&nbsp;&nbsp;hr</label>
          </div>

          <!-- Text input-->
		  
          ";
		  
		  if($num>0){       //如果從資料庫中有找到資料表是可以被修改出現修改鍵
		  $main.="
          <div class='form-group'>
		  
            <div class='col-sm-offset-2 col-sm-10'>
              <div class='pull-right'>
			  <form method='get' action='{$_SERVER['PHP_SELF']}'>
              <input type='hidden' name='op' value='add_user_form'>
			  <input type='hidden' name='modify' value='1'>
			  <input type='hidden' name='month_value' value='$month_value'>
              <button type='submit' class='btn btn-primary'>modify</button>
			  </form>
              </div>
			</div>
          </div>";
         }  
		$main.="
        </fieldset>
        </form>
		</div>";
		$select=array("","","","","","","","","","","","","");
		if($modify==1){
			$select[$month_value]='selected';
			$sql2="select * from `user_info` where month='$month_value' and user_id='{$_SESSION['user_id']}'";
			$result=mysqli_query($link,$sql2)or die_content(mysql_error($link)."檢索資料失敗");
			while($data = mysqli_fetch_assoc($result)){
				 foreach($data as $i=>$v){
					$$i=$v;
				 }
			 }
		}
		else{
		    $aircon_ele="";
			$aircon_time="";
			$tv_ele="";
			$tv_time="";
			$washer_ele="";
			$washer_time="";
			$pot_ele="";
			$pot_time="";
			$fridge_ele="";
			$fridge_time="";
			$dehumid_ele="";
			$dehumid_time="";
		}
		
		$main.="
		<!----填寫資料開始----!>
		
		 <div role='tabpanel' class='tab-pane $active[0]' id='profile' >
		
         <form class='form-horizontal' role='form' method='post' action='{$_SERVER['PHP_SELF']}'>
         <fieldset><br>

          <!-- Text input-->
	
          <div><label class='col-sm-2  control-label' for='extinput'>月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;份：&nbsp;&nbsp;</label></div>
          <div class='form-group'>
            <select name='month' onchange='TestOnchange()' >
              <option value='1' $select[1]>1月</option>
              <option value='2' $select[2]>2月</option>
              <option value='3' $select[3]>3月</option>
              <option value='4' $select[4]>4月</option>
              <option value='5' $select[5]>5月</option>
              <option value='6' $select[6]>6月</option>
              <option value='7' $select[7]>7月</option>
              <option value='8' $select[8]>8月</option>
              <option value='9' $select[9]>9月</option>
              <option value='10' $select[10]>10月</option>
              <option value='11' $select[11]>11月</option>
              <option value='12' $select[12]>12月</option>  
            </select>
          </div>
          
          <div class='form-group'><label class='col-sm-2 control-label' for='textinput' style='text-align:right;'>冷&nbsp;&nbsp;&nbsp;&nbsp;氣：</label><legend></legend></div>
          
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-3'>
              <input type='text' name='aircon_ele' placeholder='瓦特(W)' class='form-control' MAXLENGTH=4 value='$aircon_ele' >
            </div>
            <label class='col-sm-2 control-label' for='textinput'>使用時間
            </label>
            <div class='col-sm-5'>
              <input type='text' name='aircon_time' placeholder='每週平均使用幾小時' class='form-control' value='$aircon_time' MAXLENGTH=4>
            </div>
          </div>
		  

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>電&nbsp;&nbsp;&nbsp;&nbsp;視：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-3'>
              <input type='text' name='tv_ele' placeholder='瓦特(W)' class='form-control' MAXLENGTH=4>
            </div>
            <label class='col-sm-2 control-label' for='textinput'>使用時間
            </label>
            <div class='col-sm-5'>
              <input type='text' name='tv_time' placeholder='每週平均使用幾小時' class='form-control' MAXLENGTH=4>
            </div>
          </div>

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>洗衣機：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-3'>
              <input type='text' name='washer_ele' placeholder='瓦特(W)' class='form-control' MAXLENGTH=4>
            </div>
            <label class='col-sm-2 control-label' for='textinput'>使用時間
            </label>
            <div class='col-sm-5'>
              <input type='text' name='washer_time' placeholder='每週平均使用幾次' class='form-control' MAXLENGTH=4>
            </div>
          </div>

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>電&nbsp;&nbsp;&nbsp;&nbsp;鍋：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-3'>
              <input type='text' name='pot_ele' placeholder='瓦特(W)' class='form-control' MAXLENGTH=4>
            </div>
            <label class='col-sm-2 control-label' for='textinput'>使用時間
            </label>
            <div class='col-sm-5'>
              <input type='text' name='pot_time' placeholder='每週平均使用幾次' class='form-control' MAXLENGTH=4>
            </div>
          </div>

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>冰&nbsp;&nbsp;&nbsp;&nbsp;箱：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-3'>
              <input type='text' name='fridge_ele' placeholder='瓦特(W)' class='form-control' MAXLENGTH=4>
            </div>
            <label class='col-sm-2 control-label' for='textinput'>使用時間
            </label>
            <div class='col-sm-5'>
              <input type='text' name='fridge_time' placeholder='每週平均使用幾小時' value='168' class='form-control' MAXLENGTH=4>
            </div>
          </div>

          <div class='form-group'><label class='col-sm-2 control-label' for='textinput'>除濕機：</label><legend></legend></div>

          <div class='form-group'>
            <label class='col-sm-2 control-label' for='textinput'>消耗功率</label>
            <div class='col-sm-3'>
              <input type='text' name='dehumid_ele' placeholder='瓦特(W)' class='form-control' MAXLENGTH=4>
            </div>
            <label class='col-sm-2 control-label' for='textinput'>使用時間
            </label>
            <div class='col-sm-5'>
              <input type='text' name='dehumid_time' placeholder='每週平均使用幾小時' class='form-control' MAXLENGTH=4>
            </div>
          </div>

          <!-- Text input-->
		  

          <div class='form-group'>
            <div class='col-sm-offset-2 col-sm-10'>
              <div class='pull-right'>
                <input type='hidden' name='op' value='add_userInfo'>
				<input type='hidden' name='modify' value='2'>
                <button type='submit' class='btn btn-default'>Cancel</button>
                <button type='submit' class='btn btn-primary'>Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
      
	 </div>";
	
    return $main;
}*/

function add_userInfo(){
    global $link;
	global $month_value;
	if($_SESSION['user_id']=="")
	{
		die_content("未登入,無法填寫表單,請先登入,點此<a href='{$_SERVER["PHP_SELF"]}?op=user_login'>登入</a>");
		
	}
	else{
		$sql3="select * from `user_info` where user_id='{$_SESSION['user_id']}' and month='{$_POST['month']}'";
		$result=mysqli_query($link,$sql3)or die_content(mysql_error($link)."檢索資料失敗");
		$num=mysqli_num_rows($result);
		$month_value=$_POST['month'];
		if($num==0){
			$sql="insert into `user_info` (
			`user_id`,`month`, `aircon_ele`, 
			`aircon_time`, `tv_ele`, 
			`tv_time`, `washer_ele`, 
			`washer_time`, `pot_ele`, `pot_time`, `fridge_ele`, 
			`fridge_time`, `dehumid_ele`, `dehumid_time`) 
			values (
			'{$_SESSION['user_id']}',
			'{$_POST['month']}','{$_POST['aircon_ele']}',
			'{$_POST['aircon_time']}','{$_POST['tv_ele']}',
			'{$_POST['tv_time']}','{$_POST['washer_ele']}',
			'{$_POST['washer_time']}','{$_POST['pot_ele']}','{$_POST['pot_time']}',
			'{$_POST['fridge_ele']}','{$_POST['fridge_time']}',
			'{$_POST['dehumid_ele']}','{$_POST['dehumid_time']}')";
			mysqli_query($link,$sql) or die_content("已經設定過此月份資料");
			}
		else{
			
			$sql="UPDATE `user_info` 
			SET `aircon_ele`='{$_POST['aircon_ele']}',
			    `aircon_time`='{$_POST['aircon_time']}',
				`tv_ele`='{$_POST['tv_ele']}',
				`tv_time`='{$_POST['tv_time']}',
				`washer_ele` = '{$_POST['washer_ele']}',
				`washer_time` = '{$_POST['washer_time']}',
				`pot_ele` = '{$_POST['pot_ele']}',
				`pot_time` = '{$_POST['pot_time']}',
				`fridge_ele` = '{$_POST['fridge_ele']}',
				`fridge_time` = '{$_POST['fridge_time']}',
				`dehumid_ele` = '{$_POST['dehumid_ele']}',
				`dehumid_time` = '{$_POST['dehumid_time']}'
				
			WHERE `user_id`='{$_SESSION['user_id']}' and `month`='{$_POST['month']}'";
			mysqli_query($link,$sql) or die_content("已經設定過此月份資料");
			}
			
	}
 
}
function delete_form($month_value=""){
	global $link;
	//die_content($month_value);
	//die_content($_SESSION['user_id']);
    $sql="delete from `user_info` where month='$month_value' and user_id='{$_SESSION['user_id']}'";
	mysqli_query($link,$sql) or die_content(mysqli_error($link)."刪除資料失敗");
}
?>