<?php
include_once("functions.php");

$fetchdata=new DB_con();
 
 ?>
<html lang="en">

 <head>
  <title>INDEX PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<body>

<div align="center" style="margin-bottom:100px;">
<button type="button" class="btn btn-primary"><a href="combo.php" class="button" style="color:#fff;text-align:center;">ALL CONFLICTED COURSES</a></button>
</div>

<div>

<!-- Search form -->
<section id="search">
<form action="search.php" method="GET"  required>
		<div align="center">
		<h1>Search For Courses</h1>
		<h3>4 Courses Maximum</h3>
		</div>
		<div class="md-form active-pink active-pink-2 mb-3">
		    <input class="form-control1" type="text" placeholder="Search" aria-label="Search" name="term" required>
		</div>
		<!-- Search form -->
		<div class="md-form active-purple active-purple-2 mb-3">
		    <input class="form-control1" type="text" placeholder="Search" aria-label="Search" name="term2" >
		</div>
		<!-- Search form -->
		<div class="md-form active-cyan active-cyan-2 mb-3">
		    <input class="form-control1" type="text" placeholder="Search" aria-label="Search" name="term3" >
		</div>

		<!-- Search form -->
		<div class="md-form active-pink-2 mb-3">
		    <input class="form-control1" type="text" placeholder="Search" aria-label="Search" name="term4" >
		</div>
         <div align="center" style="margin-top:5px;">
         	<input type="submit" value="Search" name="submit" class="btn btn-primary " />
         </div>	
</form>
</div>	







<form action="instructor.php" method="GET"  > 
 <div class="row " style="margin:100px;"> 
  <div class="col-lg-offset-3 col-lg-6 ">
    <div class="input-group" >
      
      <input type="text" name="inst" class="form-control" placeholder="Search for Instrctor..." required>
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Go!</button>
      </span>
    </div>
  </div>
 </div>
</form>




<form action="day.php" method="GET"  > 
	<div class="row " style="margin:100px;"> 
  <div class="col-lg-offset-3 col-lg-6 ">
    <div class="input-group">
      <input type="text" name="dy" class="form-control" placeholder="Search for Day..." required>
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Go!</button>
      </span>
    </div>
  </div>
 </div>

</form>
</section>
</body>
</html>