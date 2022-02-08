<?php 
require_once ('../incs-template1/config.php');







if(!isset ($_SESSION['userid'])){
	header("Location:".$website_name);
	exit();
}


mysqli_query($connect,"UPDATE users SET cookies_session = '' WHERE user_id = '".$_SESSION['userid']."' ") or die(db_conn_error);	
session_destroy();
setcookie("remember_me", "", time() - 31104000);		//I think i made the cookie session time to be a month
	
header("Location:".$website_name);
exit();
?>