<?php

if(!isset($_SESSION['user_id'])){	

if(isset($_COOKIE['remember_me'])){ 
	
	$cookiesessions = $_COOKIE['remember_me'];

	$decode_cookie = mysqli_query ($connect,"SELECT user_id, firstname, lastname, email FROM users WHERE cookies_session = '".$cookiesessions."'") or die(db_conn_error);
    if (mysqli_num_rows($decode_cookie) == 1) {
	
		


}

}
}
?>