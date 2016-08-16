window.addEventListener("load",function(){
	setInterval(ajax,300);
	var BTN = document.getElementById("Send_BTN");
	BTN.addEventListener("click",function(){
		var Message = document.getElementById("To_Send_Message");
		if(Message.value.trim() != ""){
			send(Message.value);
			Message.value = "";
		}
	});
});

function ajax(){
	var XMLHttp = new XMLHttpRequest();
	XMLHttp.onreadystatechange = function(){
		if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
				document.getElementById("Message_Dysplay").innerHTML = XMLHttp.responseText;
		}
	}
	XMLHttp.open("POST","php/chat.php",true);
	XMLHttp.send();
}

function send(Message){
	var XMLHttp = new XMLHttpRequest();
	XMLHttp.open("POST","php/send.php",true);
	XMLHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	XMLHttp.send("Message="+Message);
}