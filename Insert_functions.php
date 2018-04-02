<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'ewuCourse');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}
public function insert($fname,$email,$contact,$gender,$education,$adrss)
{
$ret=mysqli_query($this->dbh,"insert into courses(courseid,section,time,day,room,instructor) values('$fname','$email','$contact','$gender','$education','$adrss')");
return $ret;
}
}
?>