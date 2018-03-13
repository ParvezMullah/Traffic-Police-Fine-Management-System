<?php
include 'Adminheader.php';
?>

<?php

	if(isset($_SESSION['uid']) && $_SESSION['uid'] == "")
		{
			header("Location:Login.php");
		}
?>
<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
	.mar
	{
		margin-left:170px;
		margin-right:80px;
	}
	#contents
				{
					width:1100px;
					margin-left:225px;
					padding:10px;
				}	
	</style>
</head>
<body>
<div class="mar">
	<hr>
	<marquee>Welcome To Mumbai Traffic Police !!! <i>Follow The Traffic Rules, Stay Safe</i> </marquee>
	<hr>
</div>


<div id="contents">
	<img src="Home.jpg" width="950">
</div>

</body>
</html>
<?php
include 'footer.php';
?>