<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$title = "Adam time";

#$time = new DateTime('2011-11-17 00:00');
#$time->add(new DateInterval('PT' . $interval_in_minutes . 'M'));

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
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🦋初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🦋中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🦋終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🌷初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🌷中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🌷終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🌲初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🌲中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🌲終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🌵初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🌵中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🌵終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🍞初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🍞中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🍞終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<29:
        $timeSymbol="🥫初"; break;
    case $time_in_minutes >= 30 and $time_in_minutes<59:
        $timeSymbol="🥫中"; break;
    case $time_in_minutes >= 60 and $time_in_minutes<89:
        $timeSymbol="🥫終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="⚓初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="⚓中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="⚓終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="⏳初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="⏳中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="⏳終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🥐初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🥐中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🥐終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="⭐初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="⭐中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="⭐終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="☁️初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="☁️中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="☁️終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<29:
        $timeSymbol="☂️初"; break;
    case $time_in_minutes >= 30 and $time_in_minutes<59:
        $timeSymbol="☂️中"; break;
    case $time_in_minutes >= 60 and $time_in_minutes<89:
        $timeSymbol="☂️終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🪁初"; break;
     case $time_in_minutes >= 0 and $time_in_minutes<89:
         $timeSymbol="🪁中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🪁終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="👓初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="👓中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="👓終"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🎈初"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
        $timeSymbol="🎈中"; break;
    case $time_in_minutes >= 0 and $time_in_minutes<89:
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
<p style='font-size: 70px;'>🧠 ->🦋 ->🌷 ->🌲 ->🌵 ->🍞 ->🥫 ->⚓ ->⏳ ->🥐 ->⭐ ->☁️ ->☂️ ->🪁 ->👓 ->🎈</p>
</body>
</html>";
echo $page;