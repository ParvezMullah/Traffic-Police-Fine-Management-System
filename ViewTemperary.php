<?php
	include 'Adminheader.php';
	session_start();
	if($_SESSION['uid'] == "")
		{
			header("Location:Login.php");
		}
?>

<?php

	if($_SESSION['uid'] == "")
		{
			header("Location:Login.php");
		}
	
	if(isset($_POST['Delete']))
	{
		$Challan_Number=$_POST['Challan_Number'];
		if(empty($Challan_Number))
		{
			echo"Select Challan Number."."<br>";
		}
		else
		{
			include 'conn.php';
			$query =  "Delete from tblfine where Challan_Number='$Challan_Number'";
			// echo $License_Number;
			if(mysqli_query($conn,$query))
			{
				echo "Data Deleted Successfully. ",mysqli_error($conn)."<br>";
				
			}
			else
			{
				echo "Data cannot be  deleted. ",(mysqli_error($conn)."<br>");
			}
			mysqli_close($conn);	
		}

	}
	
	
?>
<!DOCTYPE>
<html>
	<head>
	 	<title> View Temporary </title>
		<link rel="stylesheet" type="text/css" href="AptiStyle.css">
		<style>
		
	.contents
		{
		width:600px;
		margin-left:300px;
		padding:10px;
		}
		
		</style>
		<!--<link rel="stylesheet" type="text/css" href="boot.css">-->
	</head>

	<body>

		<div class="contents" >
			<div align="center">			<h2 ><u>View Temporary</u></h2></div>
			<br>
				 <?php
         		 include'class.php';
          		 viewTemperary()
          		 ?>
				

				
		</div>
	</body>
	
</html>




<?php
	include 'footer.php';
?>