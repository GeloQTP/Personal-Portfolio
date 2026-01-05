 function displayTime(){
    let dateTime = new Date();
    let hrs = dateTime.getHours();
    let minutes = dateTime.getMinutes();
    let seconds = dateTime.getSeconds();
    let session = document.getElementById('session');

    if(hrs > 12){
        session.innerHTML="PM";
    }

    document.getElementById('hours').innerHTML = hrs;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;
}

setInterval(displayTime,10);