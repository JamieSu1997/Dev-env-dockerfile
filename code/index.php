<?php

include_once("setup.php");
include_once("function.php");
//-------------------設定區-----------------------//

@$op=$_REQUEST['op'];
$month_value=empty($_REQUEST['month_value'])?'1':intval($_REQUEST['month_value']);
$modify=empty($_REQUEST['modify'])?'0':intval($_REQUEST['modify']);


//---------------流程控制區----------------------//
switch($op){
    //----------註冊--------//
	case "register":
	$content=register();
    break;
	
	case "register_user":
	$content=register_user();
    break;
    //---------登入 登出---------//
	case "user_login":
	$content=log_in_home();
    break;
	
	case "user_logout":
	$_SESSION['user_id']="";
	$content=bootstrap(user_list());
    break;
	
	case "user_startlog":
	$content=user_login();
	$content=bootstrap(user_list_login());
    break;
	
	case "chart":
    $content=bootstrap(chart($month_value));
    break; 

	case "chart2":
    $content=bootstrap(chart2($month_value));
    break; 
	
	case "chart3":
    $content=bootstrap(chart3($month_value));
    break;
	
	case "add_user_form":
    $content=bootstrap(add_user_form($month_value,$modify));
    break; 
	
	case "add_userInfo":
    add_userInfo();
    $content=bootstrap(add_user_form($month_value,$modify));
    break; 
	
	case "delete_form":
    delete_form($month_value);
	$content=bootstrap(add_user_form($month_value,$modify));
    break;
	
	case "search_main":
    $content=bootstrap(search_main());
    break;
	
	case "search_sec":
	$_SESSION['room']=1;
    $content=bootstrap(search_sec());
    break;
	
	case "search_sec2":
    $content=bootstrap(search_sec());
    break;
	
	case "search_final":
    $content=bootstrap(search_final());
    break;
	
	case "tv_list":
    $content=bootstrap(tv_list());
    break;
	case "acondition_list":
    $content=bootstrap(acondition_list());
    break;
	case "pot_list":
    $content=bootstrap(pot_list());
    break;
	case "dehum_list":
    $content=bootstrap(dehum_list());
    break;
	case "fridge_list":
    $content=bootstrap(fridge_list());
    break;
	case "washing_list":
    $content=bootstrap(washing_list());
    break;
	case "month_change":
    $content=bootstrap(add_user_form($month_value,$modify));
    break;
	
    case "home":
    $content=bootstrap(user_list());
    break;
	
	case "user_list_login":
    $content=bootstrap(user_list_login());
    break;
	
	
    default:
	
	if($_SESSION['user_id']!=""){
    $content=bootstrap(user_list_login());
	}
	else{
	$content=bootstrap(user_list());
	}
}

//------------------輸出區----------------------//
echo $content;
//----------------------函數區-------------------------//

?>