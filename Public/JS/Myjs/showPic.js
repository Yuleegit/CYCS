function showPic(whichpic){
	var source=whichpic.getAttribute("href");
	var change=document.getElementById("loding");
	change.setAttribute("src",source);
	var text=whichpic.getAttribute("title");
	var description=document.getElementById("description");
	description.firstChild.nodeValue=text;
}