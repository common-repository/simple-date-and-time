<?php  

require_once("../../../wp-load.php");

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//Define Varriables
$time = sanitize_text_field($_GET['time']);
$date = sanitize_text_field($_GET['date']);
$timezone = sanitize_text_field($_GET['timezone']);

//SET TIMEZONE
date_default_timezone_set($timezone);


//IF DATE IS SHOWN
if($date == 'yes')
{
    echo date('D, d M Y');
}

if ($date == 'yes' && $time == 'yes')
{
    echo ' - ';
    
}

//IF TIME IS SHOWN
if($time == 'yes')
{
    echo date('g:i A');
}
?>