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
  
  
?>
<!DOCTYPE>
<html>
  <head>
    <title> View Fine </title>
    <style>
    
  .contents
    {
    width:600px;
    margin-left:400px;
    padding:10px;
    }
    
    </style>
    <!--<link rel="stylesheet" type="text/css" href="boot.css">-->
	<link rel="stylesheet" type="text/css" href="AptiStyle.css">
  </head>

  <body>

    <div class="contents" >
      <div align="center">      <h2 ><u>View Fine</u></h2></div>
      <br>
        
        <?php
          include'class.php';
          viewFine();
          ?>

        
    </div>
  </body>
  
</html>




<?php
  include 'footer.php';
?>