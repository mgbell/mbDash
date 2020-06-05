/* CLOCK */

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('currentTimeText').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

/* DATE */
var dateObj = new Date();
var month = dateObj.getUTCMonth() + 1; //months from 1-12
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();
var day = dateObj.getDay();

newdate = day + "/" + month + "/" + year;

document.getElementById('currentDate').innerHTML = newdate;

if (day == 0) {
  document.getElementById('currentDay').innerHTML = "Sunday";
} else if (day == 1) {
  document.getElementById('currentDay').innerHTML = "Monday";
} else if (day == 2) {
  document.getElementById('currentDay').innerHTML = "Tuesday";
}else if (day == 3) {
  document.getElementById('currentDay').innerHTML = "Wednesday";
}else if (day == 4) {
  document.getElementById('currentDay').innerHTML = "Thursday";
}else if (day == 5) {
  document.getElementById('currentDay').innerHTML = "Friday";
}else if (day == 6) {
  document.getElementById('currentDay').innerHTML = "Saturday";
}

/* SPOTIFY */

function get_spotify() {
	$.ajax({
		type: 'POST',
		url: './res/last.fm.php',
		data: { request: 'true' },
		success: function(reply) {
			$('.now-playing').html("<p>" + reply + "</p>");
		}
	});
}

/* hell yeah */
function letsDoIt() {
	startTime();
	get_spotify();
}