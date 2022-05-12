<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$title = "Adam time";

#$time = new DateTime('2011-11-17 00:00');
#$time->add(new DateInterval('PT' . $interval_in_minutes . 'M'));


$timeSymbol="🧠初";
/*
swithc(TIME NOW())
if isBetween(00:00, 01:29, now)
 $timeSymbol="🧠"
case :
$timeSymbol="🧠" 01:30->03:00
$timeSymbol="🦋" 01:30->03:00
$timeSymbol="🌷" 03:00->04:30
$timeSymbol="🌲" 04:30->06:00
$timeSymbol="🌵" 06:00->07:30
$timeSymbol="🍞" 07:30->09:00
$timeSymbol="🥫" 09:00->10:30
$timeSymbol="⚓" 10:30->12:00
$timeSymbol="⏳" 12:00->13:30
$timeSymbol="🥐" 13:30->15:00
$timeSymbol="⭐" 15:00->16:30
$timeSymbol="☁️" 16:30->18:00
$timeSymbol="☂️" 18:00->19:30
$timeSymbol="🪁" 19:30->21:00
$timeSymbol="👓" 21:00->22:30
$timeSymbol="🎈" 22:30->00:00


$sunset = "6:26 pm";
$date1 = DateTime::createFromFormat('h:i a', $current_time);
$date2 = DateTime::createFromFormat('h:i a', $sunrise);
$date3 = DateTime::createFromFormat('h:i a', $sunset);
*/
$page = "
<!DOCTYPE html>
<html>
<meta charset='UTF-8'>
<head>
<title>$timeSymbol</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
</head>
<body>
<h1 style='font-size: 200px; text-align:center'>$timeSymbol</h1>
</body>
</html>";
echo $page;