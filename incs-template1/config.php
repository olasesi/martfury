<?php
date_default_timezone_set('UTC');
session_start();

// if favicon is available, imagename = favicon.png

//Website name without www and .com
$website_name = "https://localhost/ecommerce1";
//first eight characters of website name and end with underscore
$website_name_part ="ecommerc_";
//Website name without www and .com and words spaced
$website_name_with_spaces = "Msp Collections And Fair Beautiful Care";
//Enter a description of your business. Not too short and not too long.
define("PAGE_DESCRIPTION","Wholesale and retail of crayfish, yam, Palm Oil, ogbono, egusi, Red pepper both chili pepper, Cameroon pepper groundnut oil fish  etc.");
//Enter the key words
define("KEY_WORDS","Wholesale, retail, crayfish, Palm, Oil, high quality, pepper, groundnut, fish, ogbono, chili ");

//Enter your main phone number.
$TEL = "";
//Enter your second phone number.
$TEL2 = "";
//Enter your email address.
$EMAIL = "info@mspcollection.com";
//Enter your facebook link. 
$FB_LINK = "";
//Enter your instagram link.
$INSTAGRAM_LINK = " https://instagram.com/preshonestockshop.com.ng?igshid=1gvgy3ey8201tIfy";
//Enter your whatsapp link.
$WHATSAPP_LINK = "";
//Enter your business address.
$ADDRESS = "12 Adetola aguda surulere";
//Enter your  second business address.
$ADDRESS2 ="";
//Text logo ie website name. This is if you dont have a logo
$LOGO_NAME_TEXT = "Msp Collections And Fair Beautiful Care";
//brand color:
$BRAND_COLOR = "Orange";
//price tag color
$BRAND_COLOR_SUB = "black";
//price tag color
$BRAND_PRICE_COLOR = "#3c3c3c";
//Logo isge filenama eg logo.jpg.
$LOGO_IMG_FILENAME = "";
//cover image filename
$CAROUSEL_IMAGE_FILENAME = "2.jpg";		//870px x 431px
//Password
$pass_word = "";
		


///////CAROUSEL PART///////
//$CAROUSEL_DESC1 = "";      //call to action or collect details.
//$CAROUSEL_DESC2 = "";
//$CAROUSEL_DESC3 = "";




define("db_conn_error","<div>
					<h1 id='oops_h1'>Oops!!!</h1>
					<h1>We are sorry</h1>
					<h3>Data could not be fetched at this moment</h3>
					</div>");

//$website_name_part.'admin'------>username
//$website_name_part.'admin'------>database
$connect = mysqli_connect('localhost','root','', 'ecommerce1') or die(db_conn_error);		
$data_select = mysqli_select_db($connect,'ecommerce1') or die(db_conn_error);



define("GEN_WEBSITE","http://localhost/ecommerce1");      //Enter your website name eg www.designsbyblocks.com.ng.
define("SITE_NAME_NO_WWW", $website_name_with_spaces); //Enter the name of your website logo eg designs by blocks.
define("TITLE", $website_name_with_spaces);            //Enter your website title eg welcome to designs by blocks.

$EMAIL_CUSTOM = "sales@".$website_name.".com.ng";	//Your email address


?>