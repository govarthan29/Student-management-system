<?php
$db=mysqli_connect("localhost","root","","etf");
if(isset($_POST['seByID']))
{
    $sql1="select * from s_details where SID=".$_POST['box1'];
	$result=mysqli_query($db1,$sql1);
	echo "<table border=1><tr><th>SID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Nearest City</th><th>Course</th><th>Guardian</th><th>Subject_1</th><th>Subject_2</th><th>Subject_3</th><th>Subject_4</th><th>Subject_5</th><th>Subject_6</th></tr>";

	while($res=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$res['SID']."</td><td>".$res['FirstName']."</td><td>".$res['LastName']."</td><td>".$res['Eamil']."</td><td>".$res['NearestCity']."</td><td>".$res['Course']."</td><td>".$res['Guardian']."</td><td>".$res['Subject_1']."</td><td>".$res['Subject_2']."</td><td>".$res['Subject_3']."</td><td>".$res['Subject_4']."</td><td>".$res['Subject_5']."</td><td>".$res['Subject_6']."</td></tr>";
	}
	echo "</table>";

}
else if(isset($_POST['seByFiName']))
{
    $sql1="select * from s_details where FirstName like '".$_POST['box2']."'";
	$result=mysqli_query($db1,$sql1);
	echo "<table border=1><tr><th>SID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Nearest City</th><th>Course</th><th>Guardian</th><th>Subject_1</th><th>Subject_2</th><th>Subject_3</th><th>Subject_4</th><th>Subject_5</th><th>Subject_6</th></tr>";

	while($res=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$res['SID']."</td><td>".$res['FirstName']."</td><td>".$res['LastName']."</td><td>".$res['Eamil']."</td><td>".$res['NearestCity']."</td><td>".$res['Course']."</td><td>".$res['Guardian']."</td><td>".$res['Subject_1']."</td><td>".$res['Subject_2']."</td><td>".$res['Subject_3']."</td><td>".$res['Subject_4']."</td><td>".$res['Subject_5']."</td><td>".$res['Subject_6']."</td></tr>";
	}
	echo "</table>";

}
else if(isset($_POST['seByLaName']))
{
    $sql1="select * from s_details where LastName like '".$_POST['box3']."'";
	$result=mysqli_query($db1,$sql1);
	echo "<table border=1><tr><th>SID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Nearest City</th><th>Course</th><th>Guardian</th><th>Subject_1</th><th>Subject_2</th><th>Subject_3</th><th>Subject_4</th><th>Subject_5</th><th>Subject_6</th></tr>";

	while($res=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$res['SID']."</td><td>".$res['FirstName']."</td><td>".$res['LastName']."</td><td>".$res['Eamil']."</td><td>".$res['NearestCity']."</td><td>".$res['Course']."</td><td>".$res['Guardian']."</td><td>".$res['Subject_1']."</td><td>".$res['Subject_2']."</td><td>".$res['Subject_3']."</td><td>".$res['Subject_4']."</td><td>".$res['Subject_5']."</td><td>".$res['Subject_6']."</td></tr>";
	}
	echo "</table>";

}
else if(isset($_POST['seByemail']))
{
    $sql1="select * from s_details where LastName like '".$_POST['box4']."'";
	$result=mysqli_query($db1,$sql1);
	echo "<table border=1><tr><th>SID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Nearest City</th><th>Course</th><th>Guardian</th><th>Subject_1</th><th>Subject_2</th><th>Subject_3</th><th>Subject_4</th><th>Subject_5</th><th>Subject_6</th></tr>";

	while($res=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$res['SID']."</td><td>".$res['FirstName']."</td><td>".$res['LastName']."</td><td>".$res['Eamil']."</td><td>".$res['NearestCity']."</td><td>".$res['Course']."</td><td>".$res['Guardian']."</td><td>".$res['Subject_1']."</td><td>".$res['Subject_2']."</td><td>".$res['Subject_3']."</td><td>".$res['Subject_4']."</td><td>".$res['Subject_5']."</td><td>".$res['Subject_6']."</td></tr>";
	}
	echo "</table>";

}
else if(isset($_POST['seByCity']))
{
    $sql1="select * from s_details where NearestCity '".$_POST['box5']."'";
	$result=mysqli_query($db1,$sql1);
	echo "<table border=1><tr><th>SID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Nearest City</th><th>Course</th><th>Guardian</th><th>Subject_1</th><th>Subject_2</th><th>Subject_3</th><th>Subject_4</th><th>Subject_5</th><th>Subject_6</th></tr>";

	while($res=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$res['SID']."</td><td>".$res['FirstName']."</td><td>".$res['LastName']."</td><td>".$res['Eamil']."</td><td>".$res['NearestCity']."</td><td>".$res['Course']."</td><td>".$res['Guardian']."</td><td>".$res['Subject_1']."</td><td>".$res['Subject_2']."</td><td>".$res['Subject_3']."</td><td>".$res['Subject_4']."</td><td>".$res['Subject_5']."</td><td>".$res['Subject_6']."</td></tr>";
	}
	echo "</table>";

}
else if(isset($_POST['seByCourse']))
{
    $sql1="select * from s_details where Course like '".$_POST['box1']."'";
	$result=mysqli_query($db1,$sql1);
	echo "<table border=1><tr><th>SID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Nearest City</th><th>Course</th><th>Guardian</th><th>Subject_1</th><th>Subject_2</th><th>Subject_3</th><th>Subject_4</th><th>Subject_5</th><th>Subject_6</th></tr>";

	while($res=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$res['SID']."</td><td>".$res['FirstName']."</td><td>".$res['LastName']."</td><td>".$res['Eamil']."</td><td>".$res['NearestCity']."</td><td>".$res['Course']."</td><td>".$res['Guardian']."</td><td>".$res['Subject_1']."</td><td>".$res['Subject_2']."</td><td>".$res['Subject_3']."</td><td>".$res['Subject_4']."</td><td>".$res['Subject_5']."</td><td>".$res['Subject_6']."</td></tr>";
	}
	echo "</table>";

}
else if(isset($_POST['seByGuardian']))
{
    $sql1="select * from s_details where Guardian like '".$_POST['box1']."'";
	$result=mysqli_query($db1,$sql1);
	echo "<table border=1><tr><th>SID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Nearest City</th><th>Course</th><th>Guardian</th><th>Subject_1</th><th>Subject_2</th><th>Subject_3</th><th>Subject_4</th><th>Subject_5</th><th>Subject_6</th></tr>";

	while($res=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$res['SID']."</td><td>".$res['FirstName']."</td><td>".$res['LastName']."</td><td>".$res['Eamil']."</td><td>".$res['NearestCity']."</td><td>".$res['Course']."</td><td>".$res['Guardian']."</td><td>".$res['Subject_1']."</td><td>".$res['Subject_2']."</td><td>".$res['Subject_3']."</td><td>".$res['Subject_4']."</td><td>".$res['Subject_5']."</td><td>".$res['Subject_6']."</td></tr>";
	}
	echo "</table>";

}
mysqli_close($db);
?>