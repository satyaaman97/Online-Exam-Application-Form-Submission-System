function validator()
{
var dom=document.getElementById("usn1");
var pos=dom.value.search(/\d*/i);
if(pos==0 || pos>0)
{
	alert("Type the correct username");
	usn1.focus();
	usn1.select();
	return false;

}
else
{
	return true;
}
}