
document.addEventListener("DOMContentLoaded", startTime());

function darkModeBool(){
}

function startTime() {
    updateValues()
    //TODO do some logic so it only runs every 30 minutes
    setInterval(updateValues, 60 * 1000)
}

function updateValues() {
    let currentTime = setCurrentTime()
    document.getElementById("currentTime").innerHTML = currentTime
    document.getElementById("currentTimeTitle").innerHTML = currentTime
}

function getMinutesSinceUtcMidnight(currentEpochTime = new Date().getTime()) {
    let currentTime = new Date()
    let offset = new Date().getTimezoneOffset()*60000
    millis = currentEpochTime - currentTime.setHours(0, 0, 0, 0)+offset
    let minutes = Math.floor(millis / 60000);
    return minutes
}

function setCurrentTime() {
    timeInMinutes = getMinutesSinceUtcMidnight()

    if (timeInMinutes <= 29) {
        timeSymbol = "一🥐"
    }
    else if (timeInMinutes <= 59) {
        timeSymbol = "二🥐"
    }
    else if (timeInMinutes <= 89) {
        timeSymbol = "三🥐"
    }
    else if (timeInMinutes <= 119) {
        timeSymbol = "一🦋"
    }
    else if (timeInMinutes <= 149) {
        timeSymbol = "二🦋"
    }
    else if (timeInMinutes <= 179) {
        timeSymbol = "三🦋"
    }
    else if (timeInMinutes <= 209) {
        timeSymbol = "一🌷"
    }
    else if (timeInMinutes <= 239) {
        timeSymbol = "二🌷"
    }
    else if (timeInMinutes <= 269) {
        timeSymbol = "三🌷"
    }
    else if (timeInMinutes <= 299) {
        timeSymbol = "一☂️"
    }
    else if (timeInMinutes <= 329) {
        timeSymbol = "二☂️"
    }
    else if (timeInMinutes <= 359) {
        timeSymbol = "三☂️"
    }
    else if (timeInMinutes <= 389) {
        timeSymbol = "一🌵"
    }
    else if (timeInMinutes <= 419) {
        timeSymbol = "二🌵"
    }
    else if (timeInMinutes <= 449) {
        timeSymbol = "三🌵"
    }
    else if (timeInMinutes <= 479) {
        timeSymbol = "一🎈"
    }
    else if (timeInMinutes <= 509) {
        timeSymbol = "二🎈"
    }
    else if (timeInMinutes <= 539) {
        timeSymbol = "三🎈"
    }
    else if (timeInMinutes <= 569) {
        timeSymbol = "一👓"
    }
    else if (timeInMinutes <= 599) {
        timeSymbol = "二👓"
    }
    else if (timeInMinutes <= 629) {
        timeSymbol = "三👓"
    }
    else if (timeInMinutes <= 659) {
        timeSymbol = "一⚓"
    }
    else if (timeInMinutes <= 689) {
        timeSymbol = "二⚓"
    }
    else if (timeInMinutes <= 719) {
        timeSymbol = "三⚓"
    }
    else if (timeInMinutes <= 749) {
        timeSymbol = "一🦚"
    }
    else if (timeInMinutes <= 779) {
        timeSymbol = "二🦚"
    }
    else if (timeInMinutes <= 809) {
        timeSymbol = "三🦚"
    }
    else if (timeInMinutes <= 839) {
        timeSymbol = "一🤖"
    }
    else if (timeInMinutes <= 869) {
        timeSymbol = "二🤖"
    }
    else if (timeInMinutes <= 899) {
        timeSymbol = "三🤖"
    }
    else if (timeInMinutes <= 929) {
        timeSymbol = "一⭐"
    }
    else if (timeInMinutes <= 959) {
        timeSymbol = "二⭐"
    }
    else if (timeInMinutes <= 989) {
        timeSymbol = "三⭐"
    }
    else if (timeInMinutes <= 1019) {
        timeSymbol = "一☁️"
    }
    else if (timeInMinutes <= 1049) {
        timeSymbol = "二☁️"
    }
    else if (timeInMinutes <= 1079) {
        timeSymbol = "三☁️"
    }
    else if (timeInMinutes <= 1109) {
        timeSymbol = "一🌲"
    }
    else if (timeInMinutes <= 1139) {
        timeSymbol = "二🌲"
    }
    else if (timeInMinutes <= 1169) {
        timeSymbol = "三🌲"
    }
    else if (timeInMinutes <= 1199) {
        timeSymbol = "一🪁"
    }
    else if (timeInMinutes <= 1229) {
        timeSymbol = "二🪁"
    }
    else if (timeInMinutes <= 1259) {
        timeSymbol = "三🪁"
    }
    else if (timeInMinutes <= 1289) {
        timeSymbol = "一🪑"
    }
    else if (timeInMinutes <= 1319) {
        timeSymbol = "二🪑"
    }
    else if (timeInMinutes <= 1359) {
        timeSymbol = "三🪑"
    }
    else if (timeInMinutes <= 1379) {
        timeSymbol = "一♻"
    }
    else if (timeInMinutes <= 1409) {
        timeSymbol = "二♻"
    }
    else if (timeInMinutes <= 1440) {
        timeSymbol = "三♻"
    }
    else { timeSymbol = "A-T"; }
    return timeSymbol
}
