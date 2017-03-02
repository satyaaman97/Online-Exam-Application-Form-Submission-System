<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CHEMISTRY CYCLE</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">


<script src="js/lumino.glyphs.js"></script>
<script type="text/javascript">
//<![CDATA[
function calculate()
{
var dom1=document.getElementById("1");
var dom2=document.getElementById("2");
var dom3=document.getElementById("3");
var dom4=document.getElementById("4");
var dom5=document.getElementById("5");
var dom6=document.getElementById("6");
var dom7=document.getElementById("7");
var dom8=document.getElementById("8");
var sum=25;
var sum1=25;
var dom9=document.getElementById("9");
//dom9.value=sum;
if(!dom1.checked)
{
sum1-=4;
}
if(!dom2.checked)
{
sum1-=4;
}
if(!dom3.checked)
{
sum1-=4;
}
if(!dom4.checked)
{
sum1-=4;
}
if(!dom5.checked)
{
sum1-=5;
}
if(!dom6.checked)
{
sum1-=2;
}
if(!dom7.checked)
{
sum1-=1;
}
if(!dom8.checked)
{
sum1-=1;
}
dom9.value=sum1;
if(dom9.value==0)
{
alert("You have not selected any course for enrollment");

}
}
//]]>
</script>



</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://localhost/WP Final/Dashboard/dashboard/Course_registration.php"><span>BMSCE</span>-ADMIN</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><?php echo "USER: ".$_SESSION["username"]?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!--<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>-->
							<li><a href="http://localhost/WP Final/index.html"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div>
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	
		<br/>
		<br/>
		<ul class="nav menu">
			<!--<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>-->
		

			<li class="active"><a href="Course_registration.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Course Registration</a></li>
			<!--<li><a href="faculty.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Faculty News</a></li>-->

			<li class="parent ">
				
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
		
		</ul>

	</div>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="Course_registration.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div>
		
		<div class="panel-body">
						<div class="col-md-6">
						
						<form role="form" action="http://localhost/WP Final/web 1/third.php" method="post">
							
						</div>	
								
							
                        <p>
							
							<div class="col-md-6">
							<label>
							<!--USN:<input type="text" name="usn" size="10" />-->
							<?php echo "WELCOME <span style='color:red;'>".$_SESSION["username"]."</span> FILL UP YOUR EXAMINATION FORM"?>
					
							<br/><br/>
								<div class="form-group">
									<label>Subjects</label>
									<div class="checkbox">
										<label>
										<input type="checkbox" value="Engineering Mathematics-I" name="sub1" id="1" checked="checked">	Engineering Mathematics-I
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="Basics of Electrical Engineering" name="sub2" id="2" checked="checked">  Basics of Electrical Engineering
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="Engineering Mechanics" name="sub3" id="3" checked="checked"> Engineering Mechanics
										</label>
									</div>
									
									<div class="checkbox">
										<label>
											<input type="checkbox" value="Elements of Engineering Drawing" name="sub4" id="4" checked="checked"> Elements of Engineering Drawing
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="Engineering Chemistry" name="sub5" id="5" checked="checked"> Engineering Chemistry
										</label>
									</div>
										<div class="checkbox">
										<label>
											<input type="checkbox" value="Constitution of India and Professional Ethics" name="sub6" id="6" checked="checked"> Constitution of India and Professional Ethics
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="Environmental Studies" name="sub7" id="7" checked="checked"> Environmental Studies
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="CO-LAB-II" name="sub8" id="8" checked="checked"> CO-LAB-II
										</label>
									</div>
								</div>
						</p>
								
								
						<p><br/><br/>
						        
							<label>
							TOTAL-CREDITS:<input type="text" name="tc" size="2" id="9" onclick="this.blur();" onmouseover="calculate();"/>
							</label>
							<br/><br/>	
								<button type="submit" class="btn btn-primary">Submit Button</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
						</p>
		</div>
