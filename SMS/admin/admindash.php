<?php
 session_start();
		if(isset( $_SESSION['uid']))
		{
			echo "";
	
		}
		else
		{
		header('location:../login.php');
			
		}
?>
<?php
   include('header.php');
?>
<html>
<head>
</head>
<body>
  <div class="admintitle" align="center">
     <a href="logout.php" style="float:right;margin-right=30px;color:#fff;font-size:25px;">Logout</a>
      <h1>WELCOME TO ADMIN DASHBORD</h1>
  </div>
  <div class="dashbord">
    <table style="width:50%;" align="center">
	   <tr>
	      <td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
	   </tr>
	   <tr>
	      <td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
	   </tr>
	   <tr>
	      <td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
	   </tr>
	</table>
    
  </div>
</body>
</html>