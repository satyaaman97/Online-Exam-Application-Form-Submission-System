<?php
session_start();
?>
<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="exam_application"; 
$tbl_name="login_teacher"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form 
$un=$_POST['usn'];
$pwd=$_POST['password'];
$_SESSION["username"] = $_POST['usn'];
// To protect MySQL injection (more detail about MySQL injection)
$un = stripslashes($un);
$pwd = stripslashes($pwd);
$un = mysql_real_escape_string($un);
$pwd = mysql_real_escape_string($pwd);
$sql="SELECT * FROM $tbl_name WHERE username='$un' and password='$pwd' ";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
header("location:http://localhost/WP Final/Dashboard/dashboard/faculty1.php");
}
else {
header("location:http://localhost/WP Final/web 1/login_teacher1.html");
}
?>
