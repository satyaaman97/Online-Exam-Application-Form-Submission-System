function f1()
{
	var dom=document.getElementById("usn1");
var dom1=document.getElementById("1").checked;
var dom2=document.getElementById("2").checked;
var dom3=document.getElementById("3").checked;
var dom4=document.getElementById("4").checked;
var dom5=document.getElementById("5").checked;
var dom6=document.getElementById("6").checked;
var dom7=document.getElementById("7").checked;
var dom8=document.getElementById("8").checked;
if(dom1!="checked"||dom2!="checked"||dom3!="checked"||dom4!="checked"||dom5!="checked"||dom6!="checked"||dom7!="checked"||dom8!="checked")
{
	alert("select all");
	dom.focus();
	dom.select();
	return false;
	
}
else
{
	return true;
}
}