/*
Author : Md.Masud karim
E-mail : msmasud578@gmail.com
Description : this code request to youtube-data v3 api and downlaod data to my website and also 
try to show that shit.
*/
var api_key = "AIzaSyBYzmjpQYOb15ueTx3-Y2QcgI8_21Xlhr0";
var xhttp = new XMLHttpRequest();
var video_id = "BqE0V87CM0M";
var channel_id = "UCyQSAi4Xh5ZQKpMPLEUPSrA";

function all_ev(){
/*xhttp.open("GET", "https://www.googleapis.com/youtube/v3/channels?id=" + channel_id + "&key="+ api_key + "&fields=items(snippet(title))&part=snippet",true
	);*/
xhttp.open("GET","https://www.googleapis.com/youtube/v3/channels?id=UCyQSAi4Xh5ZQKpMPLEUPSrA&key=AIzaSyBYzmjpQYOb15ueTx3-Y2QcgI8_21Xlhr0&part=snippet,statistics&fields=items(id,snippet,statistics)",true);

xhttp.onreadystatechange = function () {
	if (this.status == 200 && this.readyState == 4) {
		var myData = JSON.parse(xhttp.responseText);
		//alert(myData.items[0].snippet.title);
		//console.log(myData.items[0].snippet.title);
		document.getElementById("youtube").innerHTML = myData.items[0].snippet.publishedAt+" "+"Congratulation your data download process is completed.. successfully!!";
	}

}
xhttp.send();
var new_req = new XMLHttpRequest();
new_req.open('GET','data.json',true);
new_req.onreadystatechange = function () {
	if(this.status == 200 && this.readyState == 4) {
		var data = JSON.parse(new_req.responseText);
		document.getElementById("demo").innerHTML = data.data_1[0].name+" "+data.data_1[0].species+ "\n "+data.data_1[0].age+" "+data.data_1[0].ct;
		alert(data.data_1[0].ct);

	}

}
new_req.send();
}
var api_key_id = "";