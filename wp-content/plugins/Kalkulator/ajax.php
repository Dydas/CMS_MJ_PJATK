<?php
include('/wp-load.php');
include(dirname( __FILE__ ) .'/sqlConnection.php');

if($_POST['action'] == 'call_this') {
	
	if (!isset($_COOKIE['count']))
    {
        $cookie = 1;
        setcookie("count", $cookie);
    }
    else
    {
        $cookie = ++$_COOKIE['count'];
        setcookie("count", $cookie);
    }


$days = $_POST['l1'] ;
$hours = $_POST['l2'] ;
$SLA = $_POST['l3'] ;
$devHours = $_POST['l4'] ;
$users = $_POST['l5'] ;
$Tparty = $_POST['l6'] ;
$pubSupport = $_POST['l7'] ;
$duration = $_POST['l8'] ;
$clientIP = getRealIpAddr();

$podstawa = getPodstawa($days, $hours);

$sum = ($podstawa + 
		getSLA($SLA, $podstawa) + 
		getRozwoj($devHours, $podstawa) +  
		getUserSupport($users, $podstawa) +
		get3dparty($Tparty, $podstawa) +
		getPubSupport ($pubSupport, $podstawa) )*
		getDuration ($duration). " zł";
		
echo $sum;		
saveQueryToDB ($days, $hours, $SLA, $devHours, $users, $Tparty, $pubSupport, $duration, $sum, $clientIP, $cookie);
}


?>