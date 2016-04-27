// JavaScript Document

	var xmlhttp;
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	function validate_form() {
		if(document.getElementById('etm_name').value == ""){
			alert('You must enter your name.');
			return false;
		}
		else if(document.getElementById('etm_email').value == "" ){
			alert('You must enter your your email address');
			return false;
		}	
		document.getElementById('contact_form').style.display="none";		
		document.getElementById('contact_response').style.display="block";		
		var Name = document.getElementById('etm_name').value;
		var Email = document.getElementById('etm_email').value;
		var Phone = document.getElementById('etm_phone').value;
		var Msg = document.getElementById('message').value;
				
		xmlhttp.onreadystatechange=function() {			
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("contact_form").style.display = 'none';
				document.getElementById("contact_response").innerHTML = xmlhttp.responseText;			
			}
		}
		
		xmlhttp.open("POST","ajax/send_mail.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("Name=" + Name + "&Email=" + Email + "&Phone=" + Phone + "&Msg=" + Msg);
		
	}	
