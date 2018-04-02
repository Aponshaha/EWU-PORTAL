


<?php
include_once("functions.php");
$conf=new DB_con();

?>

<head>
  <title>Conflict  PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>


 <body>			
			
	<div class="container">		
                   
<table width="100%"  class="table table-bordered bg-primary">
  <tr>
 <thead class="thead-dark">
    
    <th width="13%" scope="col">TIME</th>
    <th width="11%" scope="col">Section</th>
    <th width="11%" scope="col" style="background-color:#eb2123;">COURSES</th>
    <th width="11%" scope="col">Day</th>
    <th width="13%" scope="col">Room Number</th>
    <th width="13%" scope="col">Instructor</th>
   </tr>
</thead>
  <?php
  $sql=$conf->conflicted();
  //$sql2=$search->ins($ins);
  //$rowcount2=mysqli_num_rows($sql2);
  $rowcount=mysqli_num_rows($sql);
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>
  <tr>
    
    <td><?php echo $row['time'];?></td>
    <td><?php echo $row['section'];?></td>
    <td style="background-color:#eb2123;"><?php echo $row['courseId'];?></td>
    <td><?php echo $row['day'];?></td>
    <td><?php echo $row['room'];?></td>
    <td><?php echo $row['Instructor'];?></td>
    
  </tr>
  <?php $cnt=$cnt+1;} ?>


</table>
           </div>        
    </body>        
    	 		
 				
 		




 
  
