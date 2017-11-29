<?php

$servername = "21645.m.tld.pl";
$username = "admin45_70";
$password = "7Mm7BzJ96K";
$dbname = "baza45_70";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getPodstawa($days, $hours) {
 global $conn;
$sql = "SELECT Value FROM calc_podstawa WHERE Days = '$days' AND Hours = '$hours'";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
        return $row["Value"];
    }

$conn->close();		
} 

function getSLA($SLA, $podstawa){
	global $conn;
$sql = "SELECT Value FROM calc_SLA WHERE SLA = '$SLA'";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
        return $row["Value"] * $podstawa;
    }

$conn->close();	

	
}

function getRozwoj($devHours, $podstawa) {
	global $conn;
$sql = "SELECT Value1, Value2 FROM calc_devHours WHERE Hours = '$devHours'";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
        return $row["Value1"] + $row["Value2"] * $podstawa;
    }

$conn->close();		
		
}

function getUserSupport($users, $podstawa) {
	global $conn;
$sql = "SELECT Value FROM calc_users WHERE Users = '$users'";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
        return $row["Value"] * $podstawa;
    }

$conn->close();		
		
}

function get3dparty($Tparty, $podstawa) {
	global $conn;
$sql = "SELECT Value FROM calc_3dparty WHERE 3dparty = '$Tparty'";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
        return $row["Value"] * $podstawa;
    }

$conn->close();		
		
}

function getPubSupport ($pubSupport, $podstawa) {
	global $conn;
$sql = "SELECT Value FROM calc_pubSupport WHERE PublicationSupport = '$pubSupport'";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
        return $row["Value"] * $podstawa;
    }

$conn->close();		
		
}	

function getDuration ($duration) {
	global $conn;
$sql = "SELECT Value FROM calc_duration WHERE Duration = '$duration'";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()) {
        return 1 + $row["Value"] ;
    }

$conn->close();		
		
}	

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


function saveQueryToDB ($days, $hours, $SLA, $devHours, $users, $Tparty, $pubSupport, $duration, $sum, $clientIP, $cookie) {
	global $conn;
	
$sql = "INSERT INTO calc_data (Days, Hours, SLA, DevHours, Users, 3dparty, PubSupport, Duration, Sum, ClientIP, CookieCount, Date)
VALUES ($days, '$hours', '$SLA', '$devHours', '$users', '$Tparty', '$pubSupport', '$duration', '$sum', '$clientIP', '$cookie', NOW())";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " .sql. "<br>" . $conn->error;
}

$conn->close();		
		
}



?>