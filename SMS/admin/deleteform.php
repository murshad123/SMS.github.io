<?php
include('../dbcon.php');

    $id=$_REQUEST['sid'];
	 
	 $query="DELETE FROM student WHERE id=$id";
	 $run=mysqli_query($con,$query);
    if($run==true)
	 {
	     ?>
		 <html>
		 <head>
		 </head>
		 <body>
		   <script>
		      alert("Data Deleted succesfully");
		      window.open('deletestudent.php','_self');

		 </script>
		 </body>
		 </html>
		 <?php
		 
	  }
?>
