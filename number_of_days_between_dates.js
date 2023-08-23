var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
var firstDate = new Date(1931,07,13);
var secondDate = new Date(2018,04,13);

var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));
