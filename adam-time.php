<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$title = "Adam-Time";

$date_time_obj = new DateTime("now",new DateTimeZone('UTC'));
$hour= $date_time_obj->format('H');
$minute = $date_time_obj->format('i');
$time_in_minutes= $hour*60+$minute;
switch ($time_in_minutes){
    case $time_in_minutes >= 0 and $time_in_minutes<29:
        $timeSymbol="🧠初"; break;
    case $time_in_minutes >= 30 and $time_in_minutes<59:
        $timeSymbol="🧠中"; break;
    case $time_in_minutes >= 60 and $time_in_minutes<89:
        $timeSymbol="🧠終"; break;
    case $time_in_minutes >= 90 and $time_in_minutes<119:
        $timeSymbol="🦋初"; break;
    case $time_in_minutes >= 120 and $time_in_minutes<149:
        $timeSymbol="🦋中"; break;
    case $time_in_minutes >= 150 and $time_in_minutes<179:
        $timeSymbol="🦋終"; break;
    case $time_in_minutes >= 180 and $time_in_minutes<209:
        $timeSymbol="🌷初"; break;
    case $time_in_minutes >= 210 and $time_in_minutes<239:
        $timeSymbol="🌷中"; break;
    case $time_in_minutes >= 240 and $time_in_minutes<269:
        $timeSymbol="🌷終"; break;
    case $time_in_minutes >= 270 and $time_in_minutes<299:
        $timeSymbol="🌲初"; break;
    case $time_in_minutes >= 300 and $time_in_minutes<329:
        $timeSymbol="🌲中"; break;
    case $time_in_minutes >= 330 and $time_in_minutes<359:
        $timeSymbol="🌲終"; break;
    case $time_in_minutes >= 360 and $time_in_minutes<389:
        $timeSymbol="🌵初"; break;
    case $time_in_minutes >= 390 and $time_in_minutes<419:
        $timeSymbol="🌵中"; break;
    case $time_in_minutes >= 420 and $time_in_minutes<449:
        $timeSymbol="🌵終"; break;
    case $time_in_minutes >= 450 and $time_in_minutes<479:
        $timeSymbol="🍞初"; break;
    case $time_in_minutes >= 480 and $time_in_minutes<509:
        $timeSymbol="🍞中"; break;
    case $time_in_minutes >= 510 and $time_in_minutes<539:
        $timeSymbol="🍞終"; break;
    case $time_in_minutes >= 540 and $time_in_minutes<569:
        $timeSymbol="🥫初"; break;
    case $time_in_minutes >= 570 and $time_in_minutes<599:
        $timeSymbol="🥫中"; break;
    case $time_in_minutes >= 600 and $time_in_minutes<629:
        $timeSymbol="🥫終"; break;
    case $time_in_minutes >= 630 and $time_in_minutes<656:
        $timeSymbol="⚓初"; break;
    case $time_in_minutes >= 660 and $time_in_minutes<689:
        $timeSymbol="⚓中"; break;
    case $time_in_minutes >= 690 and $time_in_minutes<719:
        $timeSymbol="⚓終"; break;
    case $time_in_minutes >= 720 and $time_in_minutes<749:
        $timeSymbol="⏳初"; break;
    case $time_in_minutes >= 750 and $time_in_minutes<779:
        $timeSymbol="⏳中"; break;
    case $time_in_minutes >= 780 and $time_in_minutes<809:
        $timeSymbol="⏳終"; break;
    case $time_in_minutes >= 810 and $time_in_minutes<839:
        $timeSymbol="🥐初"; break;
    case $time_in_minutes >= 840 and $time_in_minutes<869:
        $timeSymbol="🥐中"; break;
    case $time_in_minutes >= 870 and $time_in_minutes<899:
        $timeSymbol="🥐終"; break;
    case $time_in_minutes >= 900 and $time_in_minutes<929:
        $timeSymbol="⭐初"; break;
    case $time_in_minutes >= 930 and $time_in_minutes<959:
        $timeSymbol="⭐中"; break;
    case $time_in_minutes >= 960 and $time_in_minutes<989:
        $timeSymbol="⭐終"; break;
    case $time_in_minutes >= 990 and $time_in_minutes<1019:
        $timeSymbol="☁️初"; break;
    case $time_in_minutes >= 1020 and $time_in_minutes<1049:
        $timeSymbol="☁️中"; break;
    case $time_in_minutes >= 1050 and $time_in_minutes<1079:
        $timeSymbol="☁️終"; break;
    case $time_in_minutes >= 1080 and $time_in_minutes<1109:
        $timeSymbol="☂️初"; break;
    case $time_in_minutes >= 1110 and $time_in_minutes<1139:
        $timeSymbol="☂️中"; break;
    case $time_in_minutes >= 1140 and $time_in_minutes<1169:
        $timeSymbol="☂️終"; break;
    case $time_in_minutes >= 1170 and $time_in_minutes<1199:
        $timeSymbol="🪁初"; break;
     case $time_in_minutes >= 1200 and $time_in_minutes<1229:
         $timeSymbol="🪁中"; break;
    case $time_in_minutes >= 1230 and $time_in_minutes<1259:
        $timeSymbol="🪁終"; break;
    case $time_in_minutes >= 1260 and $time_in_minutes<1289:
        $timeSymbol="👓初"; break;
    case $time_in_minutes >= 1290 and $time_in_minutes<1319:
        $timeSymbol="👓中"; break;
    case $time_in_minutes >= 1320 and $time_in_minutes<1359:
        $timeSymbol="👓終"; break;
    case $time_in_minutes >= 1360 and $time_in_minutes<1379:
        $timeSymbol="🎈初"; break;
    case $time_in_minutes >= 1380 and $time_in_minutes<1409:
        $timeSymbol="🎈中"; break;
    case $time_in_minutes >= 1410 and $time_in_minutes<1440:
        $timeSymbol="🎈終"; break;
}


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
<p style='font-size: 40px; text-align:center'>🧠 ➳🦋 ➳🌷 ➳🌲 ➳🌵 ➳🍞 ➳🥫 ➳⚓ ➳⏳ ➳🥐 ➳⭐ ➳☁️ ➳☂️ ➳🪁 ➳👓 ➳🎈</p>
</body>
</html>";
echo $page;
