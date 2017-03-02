function validator()
{
var dom=document.getElementById("usn1")
var pos=dom.value.search(/^1BM\d{2}[A-Z]{2}\d{3}$/i);
if(pos==0)
{
	return true;
}
else
{
	alert("Type the correct usn");
	usn1.focus();
	usn1.select();
	return false;
}
}
function f2()
{
alert("hello");
}