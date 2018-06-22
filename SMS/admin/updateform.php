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
   include('../dbcon.php');

   $sid=$_GET['sid'];
   $sql="select * from student where id=$sid";
   $run=mysqli_query($con,$sql);
   $data=mysqli_fetch_assoc($run);
   
?>

<html>
<head>
</head>
<body>
<form action="updatedata.php" method="post" enctype="multipart/form-data">
  <table align="center" border="1" style="width:70%; margin-top:40px;">
     <tr>
	   <td>Roll NO:</td>
	   <td><input type="text" name="rollno" value=<?php echo $data['rollno'] ?>  required/></td>
	 </tr>
	 <tr>
	   <td>Full Name:</td>
	   <td><input type="text" name="username" value=<?php echo $data['name'] ?> required/></td>
	 </tr>
	 <tr>
	   <td>City:</td>
	   <td><input type="text" name="city" value=<?php echo $data['city'] ?> required/></td>
	 </tr>
	 <tr>
	   <td>Parents contact No:</td>
	   <td><input type="text" name="pcont" value=<?php echo $data['pcont'] ?> required/></td>
	 </tr>
	 <tr>
	   <td>Standerd:</td>
	   <td><input type="number" name="standerd" value=<?php echo $data['standerd'] ?> required/></td>
	 </tr>
	 <tr>
	   <td>Image:</td>
	   <td><input type="file" name="image"/></td>
	 </tr>
	 <tr>
	 	
	 	<td colspan="2" align="center"><input type="hidden" name="sid" value="<?php echo $data['id']; ?>"><input type="submit" name="submit" value="submit"></td>
	 </tr>
	 
	 
  </table>
</form>
</body>
</html>

