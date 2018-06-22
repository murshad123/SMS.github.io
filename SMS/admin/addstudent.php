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
   include('titlehead.php');
   
?>
<html>
<head>
</head>
<body>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
  <table align="center" border="1" style="width:70%; margin-top:40px;">
     <tr>
	   <td>Roll NO:</td>
	   <td><input type="text" name="rollno" placeholder="Enter Roll Number" required/></td>
	 </tr>
	 <tr>
	   <td>Full Name:</td>
	   <td><input type="text" name="username" placeholder="Enter Full Name" required/></td>
	 </tr>
	 <tr>
	   <td>City:</td>
	   <td><input type="text" name="city" placeholder="Enter city" required/></td>
	 </tr>
	 <tr>
	   <td>Parents contact No:</td>
	   <td><input type="text" name="pcont" placeholder="Enter Parents Contact No" required/></td>
	 </tr>
	 <tr>
	   <td>Standerd:</td>
	   <td><input type="number" name="standerd" placeholder="Enter Standerd" required/></td>
	 </tr>
	 <tr>
	   <td>Image:</td>
	   <td><input type="file" name="image"/></td>
	 </tr>
	 <tr>
	   <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
	 </tr>
	 
	 
  </table>
</form>
</body>
</html>
 <?php
 if(isset($_POST['submit']))
 {
	 include('../dbcon.php');
	 $rollno=$_POST['rollno'];
	 $username=$_POST['username'];
	 $city=$_POST['city'];
	 $pcont=$_POST['pcont'];
	 $standerd=$_POST['standerd'];
	

	




	 $query="INSERT INTO `student`( `rollno`, `name`, `city`, `pcont`, `standerd`) VALUES ('$rollno','$username','$city', '$pcont','$standerd')";
	 
	 
	 $run=mysqli_query($con,$query);
    if($run==true)
	 {
	     ?>
		 <html>
		 <head>
		 </head>
		 <body>
		   <script>
		      alert("Data inserted succesfully");
		 </script>
		 </body>
		 </html>
		 <?php
		 
	  }
	 
 }
 
 
 
 ?>