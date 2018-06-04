
// DATE AND TIME
var qd = document.querySelector('.date__time .date');
var qt = document.querySelector('.date__time .time');
var now = new Date();
var d = now.toDateString()
var t = now.getHours() + ':'+now.getMinutes();

qd.innerHTML = d;
// qt.innerHTML = t;

//END DATE AND TIME