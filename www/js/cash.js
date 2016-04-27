// JavaScript Document
function initCash(){
	var c = document.getElementById("cash_emailcollection_form_8800").childNodes;
	c[1].placeholder = "Please Enter Your Email Address..";
}

function initCashDownloads(){

	var f = document.getElementById("mainspc");
	var d = f.getElementsByClassName("description");
	var h = f.getElementsByClassName("download");
	
	if(h[0] != undefined){
		var href = h[0].getAttribute("href");
		if(href == '?cash_request_type=asset&cash_action=claim&id=11481&element_id=8806'){
			if(d[0] != undefined){
				d[0].innerHTML = "<div class='download-instructions'><span class='header'>To Get your copy of <i>Eternity: The Movie</i>, follow these steps:</span><p>- Click on the link above</p><p>- Select 'Save File' and click OK</p><p>- This is the super HD version of the film and is an 8GB file, so it could take 3 hours to download (depending on your connection speed). Once the download is complete, double click on the .mp4 file to open the movie in your default media player </p><p>- Sit back and enjoy the 80s all over again</p></div>";
			}
		}
		else{
			if(d[0] != undefined){
				d[0].innerHTML = "<div class='download-instructions'><span class='header'>To Get your copy of <i>Eternity: The Soundtrack</i>, follow these steps:</span><p>- Click on the link above</p><p>- Select 'Save File' and click OK</p><p>- Once the download is complete unzip the file by right-clicking and selecting extract all (on a PC) or double-clicking on the file and dragging the files into another window (on a Mac) </p><p>- Enjoy the smooth R&amp;B sounds of <i>Eternity</i></p></div>";
			}	
		}
	}

	
}