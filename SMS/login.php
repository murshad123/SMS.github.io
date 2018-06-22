<?php
 session_start();
		if(isset( $_SESSION['uid']))
		{
	
		header('location:admin/admindash.php');
			
		}
?>
<html>
<head>
   <title>Admin Login</title>
</head>
<body>
     <h1 align="center">Admin Login</h1>
   <form action="login.php" method="post">
      <table align="center">
	     <tr>
		    <td>Username:</td>
			<td><input type="text" name="uname"required></td>
		 </tr>
		   <tr>
		    <td>Password:</td>
			<td><input type="password" name="pass"required></td>
		 </tr>
		   <tr>
		
			<td colspan="2" align="center"><input type="submit" name="submit" value="submit" required/></td>
		 </tr>
	  </table>
   </form>
</body>
</html>
<?php 
   include('dbcon.php');
   if(isset($_POST['submit']))
   {
	   $username=$_POST['uname'];
	   $password=$_POST['pass'];
	 $qury = "SELECT * FROM `admin` WHERE  username=$username and password =$password";
	 $run=mysqli_query($con,$qury);
	 $row=mysqli_num_rows($run);
	 if($row<1)
	 {
		 ?>
		 <script>
		   alert('usrname or password is not match');
		   window.open("login.php",'_self');
		   
		 </script>
		 <?php
	 }
	 else
	 {
		$data= mysqli_fetch_assoc($run);
		 $id=$data['id'];
		
		
		 $_SESSION['uid']=$id;
		 header('location:admin/admindash.php');
	 }
	   
   }
   

?>