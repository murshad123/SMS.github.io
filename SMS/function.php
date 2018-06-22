<?php
 function showdetails($b,$w)
{
	include('dbcon.php');
	$sq="SELECT * FROM student WHERE rollno=$w AND Standerd=$b";
	$run=mysqli_query($con,$sq);
	$result=mysqli_num_rows($run);
	echo "$result";

	 if($result>0)
	  {
	 	$data=mysqli_fetch_assoc($run);
	 	?>
	 	<table border="1" style="width: 50%; margin-top:20px;" align="center">
	 		<tr>
	 			<th colspan="3">Student Details</th>
	 			
	 		</tr>
	 		<tr>
	 			<th>Roll NO</th>
	 			<td><?php echo $data['rollno']; ?></td>
	 		</tr>
	 		<tr>
	 			<th>Name</th>
	 			<td><?php echo $data['name']; ?></td>
	 		</tr>
	 		<tr>
	 			<th>City</th>
	 			<td><?php echo $data['city']; ?></td>
	 		</tr>
	 		<tr>
	 			<th>Parents Contact Number</th>
	 			<td><?php echo $data['pcont']; ?></td>
	 		</tr>
	 		<tr>
	 			<th>Standerd</th>
	 			<td><?php echo $data['standerd']; ?></td>
	 		</tr>
	 	</table>
      <?php
	 }
	 else
	 {
	 	?>
	 	<script>
	 	alert("NO DATA FOUND");
	 	</script>
	 	<?php
	 }
   }
 ?>
















