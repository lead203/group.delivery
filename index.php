<?php
require_once("news.php");


//this block for target
$utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ' ';
$ad_name= isset($_GET['ad_name']) ? $_GET['ad_name'] : ' ';


if ((new Handler())->runHandler()) {
  
require 'post/index.php';

}

else{

require 'main.php';

}
?>		
		        

