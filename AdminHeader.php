
<html>
<body>

<style type="text/css">
#divMenu
{
	background-image:url('img1.jpg');
	width:1100px;
	margin-left:150px;
	padding:10px;
}
a
{
	text-decoration:none;
	color:white;
	font-weight:bold;
}
.button:hover
{
background-color:#F26D2B;
transform:scale(1.3,1.3);
box-shadow: 0 5px 15px rgba(255, 255, 255, .4);	
}

.dropbutton {
    background-color: #4F4B4B;
    color: white;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

.SolvedExamplesMenu {
    position: relative;
    display: inline-block;
}

.SolvedExamplesMenu-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.SolvedExamplesMenu-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.SolvedExamplesMenu-content a:hover {background-color: #f1f1f1}

.SolvedExamplesMenu:hover .SolvedExamplesMenu-content {
    display: block;
	z-index:10;
}
</style>
<br/>
<div style="background-color:#28B291;margin-left:150px;width:1100px;color:white;padding:10px">
<font face="sans-serif" size="6px" style="margin-left:300px">Welcome to Mumbai Traffic Police</font>
</div>
<br/>

<div id="divMenu">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="dropbutton" href="Home.php">Home</a>

<div class="SolvedExamplesMenu">
  <button class="dropbutton">License Info</button>
  <div class="SolvedExamplesMenu-content">
    <a href="ViewLicense.php">View License</a>
    <a href="AddLicense.php">Add License</a>
    <a href="UpdateLicense.php">Update License</a>
    <a href="DeleteLicense.php">Delete License</a>
  </div>
</div>

<div class="SolvedExamplesMenu">
  <button class="dropbutton">Fine Info</button>
  <div class="SolvedExamplesMenu-content">
    <a href="ViewFine.php">View Fine</a>
    <a href="AddFine.php">Add Fine</a>
    <a href="UpdateFine.php">Update Fine</a>
    <a href="DeleteFine.php">Delete Fine</a>
  </div>
</div>


<div class="SolvedExamplesMenu">
  <button class="dropbutton">Temporary Info</button>
  <div class="SolvedExamplesMenu-content">
    <a href="ViewTemperary.php">View Temporary</a>
    <a href="AddTemperary.php">Add Temporary</a>
    <a href="UpdateTemperary.php">Update Temporary</a>
    <a href="DeleteTemperary.php">Delete Temporary</a>
  </div>
</div>

<div class="SolvedExamplesMenu">
  <button class="dropbutton">Search Info</button>
  <div class="SolvedExamplesMenu-content">
    <a href="SearchFineByDate.php">Search Fine By Date</a>
    <a href="SearchTemperaryByDate.php">Search Temporary By Date</a>
  </div>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;<a class="dropbutton" href="Logout.php" >Logout</a>
<br/>
</div>
</body>
</html>