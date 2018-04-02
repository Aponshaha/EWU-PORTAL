
<!DOCTYPE html>
<html lang="en">
<head>
  <title>INDEX PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
  <!-- Content here -->


<?php
include_once("functions.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$fname=$_POST['C_id']; 
$email=$_POST['sec'];
$contact=$_POST['room'];
$gender=$_POST['day'];
$education=$_POST['time'];
$adrss=$_POST['ins'];
$sql=$insertdata->insert($fname,$email,$contact,$gender,$education,$adrss);
if($sql)
{
echo "<script>alert('Data inserted');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
 ?>


<form name="insert" action="" method="post" class="form-group">
<table width="100%"  border="0">
<tr>
<th width="26%" height="60" scope="row">CourseId :</th>
<td width="74%"><input type="text" name="C_id" value="" class="form-control" required /></td>
</tr>
<tr>
<th height="60" scope="row">Section :</th>
<td><input type="text" name="sec" value="" class="form-control" required /></td>
</tr>
<tr>
<th height="60" scope="row">room:</th>
<td><input type="text" name="room" maxlength="10" value="" class="form-control" required /></td>
</tr>
<tr>
<th height="60" scope="row">Day :</th>
<td>
	
	<div class="form-check">
			<fieldset class="form-group row">
		      
		      <div class="col-sm-10">
		        <div class="form-check">
		          <label class="form-check-label">
		            <input class="form-check-input" type="radio" name="day" id="gridRadios1" value="ST" >
		            ST
		          </label>
		        </div>
		        <div class="form-check">
		          <label class="form-check-label">
		            <input class="form-check-input" type="radio" name="day" id="gridRadios2" value="MW">
		            MW
		          </label>
		        </div>
		        <div class="form-check ">
		          <label class="form-check-label">
		            <input class="form-check-input" type="radio" name="day" id="gridRadios3" value="TR" >
		            TR
		          </label>
		        </div>
		      </div>
		    </fieldset>
	
	</div>
</tr>
<tr>
<th height="60" scope="row">time :</th>
<td>
	<select name="time" class="form-control" method="post">
			
			<option value="8.30" >8.30-10.00</option>
			<option value="10.10" >10.10-11.40</option>
			<option value="11.50" >11.50-1.20</option>
			<option value="1.30" >1.30-3.00</option>
			<option value="3.10" >3.10-4.40</option>

	</select> 
</td>
</tr>
<tr>
<th height="60" scope="row">Instructor :</th>
<td><textarea name="inst" class="form-control">
</textarea></td>
</tr>
<tr>
<th height="60" scope="row">&nbsp;</th>
<td><input type="submit" value="Submit" name="submit" class="btn btn-primary" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>