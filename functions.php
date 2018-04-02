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



public function fetchdata()
 {
 $result=mysqli_query($this->dbh,"select * from courses");
 return $result;
 }




public function uniqueCombination($in, $minLength = 1, $max = 2000) {
    $count = count($in);
    $members = pow(2, $count);
    $return = array();
    for($i = 0; $i < $members; $i ++) {
        $b = sprintf("%0" . $count . "b", $i);
        $out = array();
        for($j = 0; $j < $count; $j ++) {
            $b{$j} == '1' and $out[] = $in[$j];
        }

        count($out) >= $minLength && count($out) <= $max and $return[] = $out;
        }
    return $return;
}



public function search ($term,$term2,$term3,$term4){

        //$query = "WITH  Subquery AS  (SELECT * FROM courses WHERE courseId like '%$term%' AND courseId like '%$term2%' GROUP by courseId,section,time), SELECT DISTINCT time FROM courses ";
        //SELECT DISTINCT time FROM courses WHERE courseId like '%$term%' OR courseId like '%$term2%'

/*
SELECT TeamsA.courseId, TeamsB.courseId
FROM courses AS TeamsA, courses As TeamsB
WHERE TeamsA.Team <> TeamsB.Team AND courseId like '%$term%' OR courseId like '%$term2%';

------------------------------------------------------------------------------------------

SELECT * FROM courses WHERE ROW(time) IN 
  ( SELECT DISTINCT time FROM courses
    GROUP BY time WHERE COUNT(*) > 1 AND courseId like '%$term%' OR courseId like '%$term2%' )


    SELECT d.courseId, d.section, d.time, DEF
FROM courses d
INNER JOIN (
    SELECT courseId, section, time 
    FROM data
    GROUP BY courseId, section, time
    HAVING COUNT(distinct DEF) > 1
) dup
    ON dup.courseId = d.courseId AND dup.section = d.section AND dup.time = d.time
;

*/

        //$query= "SELECT * FROM courses GROUP BY time  HAVING COUNT( time)=1 ";
        //$query="SELECT * from courses where  time  IN (select  time from courses WHERE time='10')";
			


			$query= "SELECT *  FROM courses WHERE courseId like '%$term%' OR courseId like '%$term2%' OR courseId like '%$term3%' OR courseId like '%$term4%' ";

       // $query= "SELECT  section, time ,GROUP_CONCAT(courseId) , count(*) from courses group by time having count(time) > 1" ;
        

                $result = mysqli_query($this->dbh,$query);
                return $result;


                
             } 


public function conflicted (){

        
      // $query= "SELECT * from courses where time  NOT in (select distinct time from courses group by time )";
      // $query1= "SELECT * from courses where day  NOT in (select distinct day from courses group by time)";

        
        //$query= "SELECT * FROM courses WHERE day NOT IN (SELECT day FROM courses GROUP BY day  HAVING COUNT( day)=1 )";
        
        //$query= "SELECT * FROM courses WHERE time NOT IN (SELECT time FROM courses GROUP BY time  HAVING COUNT( time)=1 )";
        

        $query="SELECT * FROM courses WHERE time  IN (SELECT time FROM courses GROUP BY time HAVING COUNT(time) > 1) AND day IN (SELECT day FROM courses GROUP BY day HAVING COUNT(day) > 1) Order by time ";

        /*$query="SELECT u1.courseId, u2.courseId
				FROM courses u1
				JOIN courses u2
				WHERE  u1.time != u2.time
				and u1.day!=u2.day
				";

		*/

       

                $result = mysqli_query($this->dbh,$query);
                return $result;


                
             } 

public function ins($inst){

		$query= "SELECT *  FROM courses WHERE Instructor like '%$inst%'";
		$result = mysqli_query($this->dbh,$query);
                return $result;


}             

public function day($dy){

		$query= "SELECT *  FROM courses WHERE day like '%$dy%'";
		$result = mysqli_query($this->dbh,$query);
                return $result;


}   




}
?>