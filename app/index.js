"use restrict"
//use data.json file for data integretion
//json and ajax request section
var xhttp = new XMLHttpRequest();
xhttp.open("GET","app/data.json",true);
function readmore() {

xhttp.onreadystatechange = function () {
	if(this.status == 200 && this.readyState == 4)  {
		var data = JSON.parse(xhttp.responseText);
		var readmore_about_me = data.data_1[1].path.url;


//front end version started
	if($("btn-java").click(function(){
		$("#btn-java").hide().load("about_me.txt");
	}) 

		


	
	/*if($("show_less").click()){
		$("#btn-java").show();
	}*/

//front end version ended
	}

};
xhttp.send(); //request to server for that data

//ending the json and ajax integretion section

}


//learn addClass() removeClass() and toggleClass()
//css()
$("button").click(function (){
	$("#div1").load("demo_txt.txt",function(responseTxt,statusTxt,xhr){
		if(statusTxt == "success") {
			alert("External content loaded successfully");
		}
		if(statusTxt == "error") {
			alert("Error: "+xhr.status+": "+xhr.statusText);
		}

	});

});