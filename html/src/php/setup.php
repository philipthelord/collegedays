<?
	//Set error reporting
	//error_reporting(E_ALL);
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);


    //Includes
	include_once('/var/www/html/src/php/httpstatus.php');
	include_once('/var/www/html/src/php/connection.php');
	include_once('/var/www/html/src/php/CDTools.php');
	require_once('/var/www/html/src/php/CDConsts.php');
	require_once('/var/www/html/api/user/obj/User.php');
	
	//Set default timezone
	date_default_timezone_set('America/Los_Angeles');
	
?>