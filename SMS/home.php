<!DOCTYPE HTML>

<html lang="en_US">
   <title> Student Managment System  </title>
<head>
	<meta charset="utf-8">
</head>
<body bgcolor="khaki">
  <h1 align="right" style="margin-right:20px;"><a href="login.php">Login Admin</a></h1>
  <h2 align="center">Welcome to Student Managment System</h2>
    <form action="home.php" method="post">
	   <table align="center" border="1">
	     <tr> 
		   <td align="center" colspan="2">Student Information</td>
		 </tr>
		 <tr>
		 <td>chosse Standred</td>
		 <td>
		 <select name="std" required="required">
		     <option value="1">1st</option>
			 <option value="2">2nd</option>
			 <option value="3">3rd</option>
			 <option value="4">4th</option>
			 <option value="5">5th</option>
			 <option value="6">6th</option>
			 <option value="7">7th</option>
			 <option value="8">8th</option>
		 
		 </select>
		 </td></tr>
		  <tr>
		     <td>RollNO</td>
		    <td><input type="text" name="rollno" required/></td>
		</tr>
		 <tr>
		  <td align="center" colspan="2"><input type="submit" name="submit" value="Show Info"></td>
		  </tr>
		 
	   </table>
	</form>
</body>
</html>


<?php
 if(isset($_POST['submit']))
 {
 	$b=$_POST['std'];
    $w=$_POST['rollno'];

    include('dbcon.php');
    include('function.php');
    showdetails($b,$w);
	
}
?>



