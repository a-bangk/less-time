<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$title = "Adam time";
$interval_in_minutes = 90;

$time = new DateTime('2011-11-17 00:00');
$time->add(new DateInterval('PT' . $interval_in_minutes . 'M'));

🧠 00:00->01:30
🦋 01:30->03:00
🌷 03:00->04:30
🌲 04:30->06:00
🌵 06:00->07:30
🍞 07:30->09:00
🥫 09:00->10:30
⚓ 10:30->12:00
⏳ 12:00->13:30
🥐 13:30->15:00
⭐ 15:00->16:30
☁️ 16:30->18:00
☂️ 18:00->19:30
🪁 19:30->21:00
👓 21:00->22:30
🎈 22:30->00:00


$sunset = "6:26 pm";
$date1 = DateTime::createFromFormat('h:i a', $current_time);
$date2 = DateTime::createFromFormat('h:i a', $sunrise);
$date3 = DateTime::createFromFormat('h:i a', $sunset);

$content = "<h1></h1>";
$page = "
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>$title</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
</head>
<body>
$content
</body>
</html>";
echo $page;