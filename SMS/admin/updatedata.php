<?php
include('../dbcon.php');
	 $rollno=$_POST['rollno'];
	 $username=$_POST['username'];
	 $city=$_POST['city'];
	 $pcont=$_POST['pcont'];
	 $standerd=$_POST['standerd'];
	 $id=$_POST['sid'];



	 $query="UPDATE student SET rollno=$rollno,name='$username',city='$city',pcont='$pcont',standerd=$standerd WHERE id=$id";

	 
	

	




	 
	 
	 
	 $run=mysqli_query($con,$query);
    if($run==true)
	 {
	     ?>
		 <html>
		 <head>
		 </head>
		 <body>
		   <script>
		      alert("Data Updated succesfully");
		      window.open('updateform.php?sid=<?php echo "$id"; ?>','_self');
		 </script>
		 </body>
		 </html>
		 <?php
		 
	  }
?>
