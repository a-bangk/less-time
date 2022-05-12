<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$title = "Adam time";
$interval_in_minutes = 90;

$time = new DateTime('2011-11-17 00:00');
$time->add(new DateInterval('PT' . $interval_in_minutes . 'M'));

$sunset = "6:26 pm";
$date1 = DateTime::createFromFormat('h:i a', $current_time);
$date2 = DateTime::createFromFormat('h:i a', $sunrise);
$date3 = DateTime::createFromFormat('h:i a', $sunset);

$content = "<h1></h1>";
$page = "
<!DOCTYPE html>
<html>
<head>
<title>$title</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
</head>
<body>
$content
</body>
</html>";
echo $page;