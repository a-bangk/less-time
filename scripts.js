
document.addEventListener("DOMContentLoaded", function () {
    let currentAdamTime = setCurrentAdamTime()
    setHtmlIdContent("currentAdamTime", '', currentAdamTime)
    setHtmlIdContent("currentAdamTimeTitle", '', currentAdamTime)
    setHtmlIdContent("indexTitle", " Start of Adam Time", currentAdamTime)
    setHtmlIdContent("aboutTitle", " About Adam Time", currentAdamTime)
    setInterval(updateValues,60 * 1000);
});

function updateValues() {
    let currentAdamTime = setCurrentAdamTime()
    setHtmlIdContent("currentAdamTime", currentAdamTime);
    setHtmlIdContent("currentAdamTimeTitle", currentAdamTime)
    setHtmlIdContent("indextTitle", " Start of Adam Time", currentAdamTime);
    setHtmlIdContent("aboutTitle", " About Adam Time", currentAdamTime);
}

function setHtmlIdContent(id, text, content) {
    document.getElementById(id).innerHTML = content + text
}

function getMinutesSinceMidnight(d = new Date()) {
    let e = new Date();
    millis = d - e.setHours(0, 0, 0, 0);
    let minutes = Math.floor(millis / 60000);
    console.log(millis)
    return minutes
}

function setCurrentAdamTime() {
    timeInMinutes = getMinutesSinceMidnight()
    switch (true) {
        case timeInMinutes >= 0 && timeInMinutes < 29:
            timeSymbol = "🥐一"; break;
        case timeInMinutes >= 30 && timeInMinutes < 59:
            timeSymbol = "🥐二"; break;
        case timeInMinutes >= 60 && timeInMinutes < 89:
            timeSymbol = "🥐三"; break;
        case timeInMinutes >= 90 && timeInMinutes < 119:
            timeSymbol = "🦋一"; break;
        case timeInMinutes >= 120 && timeInMinutes < 149:
            timeSymbol = "🦋二"; break;
        case timeInMinutes >= 150 && timeInMinutes < 179:
            timeSymbol = "🦋三"; break;
        case timeInMinutes >= 180 && timeInMinutes < 209:
            timeSymbol = "🌷一"; break;
        case timeInMinutes >= 210 && timeInMinutes < 239:
            timeSymbol = "🌷二"; break;
        case timeInMinutes >= 240 && timeInMinutes < 269:
            timeSymbol = "🌷三"; break;
        case timeInMinutes >= 270 && timeInMinutes < 299:
            timeSymbol = "☂️一"; break;
        case timeInMinutes >= 300 && timeInMinutes < 329:
            timeSymbol = "☂️二"; break;
        case timeInMinutes >= 330 && timeInMinutes < 359:
            timeSymbol = "☂️三"; break;
        case timeInMinutes >= 360 && timeInMinutes < 389:
            timeSymbol = "🌵一"; break;
        case timeInMinutes >= 390 && timeInMinutes < 419:
            timeSymbol = "🌵二"; break;
        case timeInMinutes >= 420 && timeInMinutes < 449:
            timeSymbol = "🌵三"; break;
        case timeInMinutes >= 450 && timeInMinutes < 479:
            timeSymbol = "🎈一"; break;
        case timeInMinutes >= 480 && timeInMinutes < 509:
            timeSymbol = "🎈二"; break;
        case timeInMinutes >= 510 && timeInMinutes < 539:
            timeSymbol = "🎈三"; break;
        case timeInMinutes >= 540 && timeInMinutes < 569:
            timeSymbol = "👓一"; break;
        case timeInMinutes >= 570 && timeInMinutes < 599:
            timeSymbol = "👓二"; break;
        case timeInMinutes >= 600 && timeInMinutes < 629:
            timeSymbol = "👓三"; break;
        case timeInMinutes >= 630 && timeInMinutes < 659:
            timeSymbol = "⚓一"; break;
        case timeInMinutes >= 660 && timeInMinutes < 689:
            timeSymbol = "⚓二"; break;
        case timeInMinutes >= 690 && timeInMinutes < 719:
            timeSymbol = "⚓三"; break;
        case timeInMinutes >= 720 && timeInMinutes < 749:
            timeSymbol = "🦚一"; break;
        case timeInMinutes >= 750 && timeInMinutes < 779:
            timeSymbol = "🦚二"; break;
        case timeInMinutes >= 780 && timeInMinutes < 809:
            timeSymbol = "🦚三"; break;
        case timeInMinutes >= 810 && timeInMinutes < 839:
            timeSymbol = "❤一"; break;
        case timeInMinutes >= 840 && timeInMinutes < 869:
            timeSymbol = "❤二"; break;
        case timeInMinutes >= 870 && timeInMinutes < 899:
            timeSymbol = "❤三"; break;
        case timeInMinutes >= 900 && timeInMinutes < 929:
            timeSymbol = "⭐一"; break;
        case timeInMinutes >= 930 && timeInMinutes < 959:
            timeSymbol = "⭐二"; break;
        case timeInMinutes >= 960 && timeInMinutes < 989:
            timeSymbol = "⭐三"; break;
        case timeInMinutes >= 990 && timeInMinutes < 1019:
            timeSymbol = "☁️一"; break;
        case timeInMinutes >= 1020 && timeInMinutes < 1049:
            timeSymbol = "☁️二"; break;
        case timeInMinutes >= 1050 && timeInMinutes < 1079:
            timeSymbol = "☁️三"; break;
        case timeInMinutes >= 1080 && timeInMinutes < 1109:
            timeSymbol = "🌲一"; break;
        case timeInMinutes >= 1110 && timeInMinutes < 1139:
            timeSymbol = "🌲二"; break;
        case timeInMinutes >= 1140 && timeInMinutes < 1169:
            timeSymbol = "🌲三"; break;
        case timeInMinutes >= 1170 && timeInMinutes < 1199:
            timeSymbol = "🪁一"; break;
        case timeInMinutes >= 1200 && timeInMinutes < 1229:
            timeSymbol = "🪁二"; break;
        case timeInMinutes >= 1230 && timeInMinutes < 1259:
            timeSymbol = "🪁三"; break;
        case timeInMinutes >= 1260 && timeInMinutes < 1289:
            timeSymbol = "🥫一"; break;
        case timeInMinutes >= 1290 && timeInMinutes < 1319:
            timeSymbol = "🥫二"; break;
        case timeInMinutes >= 1320 && timeInMinutes < 1359:
            timeSymbol = "🥫三"; break;
        case timeInMinutes >= 1360 && timeInMinutes < 1379:
            timeSymbol = "🫧一"; break;
        case timeInMinutes >= 1380 && timeInMinutes < 1409:
            timeSymbol = "🫧二"; break;
        case timeInMinutes >= 1410 && timeInMinutes < 1440:
            timeSymbol = "🫧三"; break;
        default: timeSymbol = "ERROR";
    }
    return timeSymbol
}