<?php
function __autoload($class_name) {
    include $class_name . '.php';
	
}
function abc(){
echo "tets";
}

$obj  = new MyClass1();
$obj2 = new MyClass2(); 




mysql_connect("localhost","root","");
mysql_select_db("abhitest");
//$sql = mysql_query("Select * from test_table group by name having count(*)>1");
//$sql = mysql_query("select distinct name from test_table");
/*while($rec = mysql_fetch_array($sql)){
echo $rec['name']."<br>";
echo $rec['address'];
}*/
/*$del = mysql_query("DELETE FROM test_table WHERE (id, name) NOT IN 
(
SELECT  id, name FROM
(
SELECT MIN(id) AS id, name FROM test_table GROUP BY name
) X
);");*/



/*$del = mysql_query("DELETE FROM test_table  
where name in(
    SELECT  name 
        FROM (
                select name 
                FROM test_table
                GROUP BY name, salary, address 
                having COUNT(*)>1) temp
                );
");*/

$sql1 = mysql_query("SELECT SUBSTRING(salary,1,3) 
FROM test_table 
WHERE name='abhishek'");
echo "<pre>";print_r(mysql_fetch_row($sql1));
 

 
 $n = 100;
$nc = 7;
$number_of_7 = 0;
for($i=1;$i<=$n;$i++){
                if($i%10==$nc || (int)($i/10)==$nc){
                                if($i%$nc==0 && $i%10==$nc && $i>10){
                                                $number_of_7 += 1;
                                }
                                $number_of_7 += 1;
								              }             
}
 
echo $number_of_7;

echo 7%10;


echo "<br>";
$count=0;
for($k=1;$k<=100;$k++){

if(($k%10==7) || ((int)($k/10)==7)){ 
		if($k%7==0 && $k%10==7 && $k>10){
		 $count=$count+1;
		
		}
		

$count = $count+1;



}
}
echo $count;



echo "<br>";
 $ar=array(10,20,30,40,40,60,65,89,74,36,48); 

     $size=sizeof($ar);

     $val=65;

     function binarySearch($value,$first,$last) {

         if($last<$first)   {

              return -1;

              }

          $mid=intVal(($first+$last)/2);

          global $ar;

          $a=$ar[$mid];

          if($a===$value)  {

              return $mid;

         }

          else {

              if($a>$value) {

               $last=$mid-1;

                  }

         else {

              if($a<$value) {

              $first=$mid+1;

                      }

                  }

         }

       return binarySearch($value,$first,$last);

     }

     foreach ($ar as $a)
	
     echo " ".$a;
	
     $y=binarySearch(intval($val),0,sizeof($ar)-1);

     if($y>=0)  {

     echo "<br>".$val." is present at ".$y." position in the given array";

        }

     else  {

		echo "<br>".$val ." is not prsesnt in the given array ";

     }
	 
	 
	 
	 echo "<br>";
	 $array = array(1,2,3,4,5,6,7,8,9,10);
	 $size = sizeof($array);
	 for($i=0;$i<=$size;$i++){
		if($array[$i]==6){
			echo "yes";
			echo $i;
		}
		
	 }
	 
	 echo "<br>";
	 
	 //$array= array(12,34,23,58,54,63,87);
	 //$array=sort($array1);
	 $array=array(12,23,34,54,58,63,87);
	// echo "<pre>";print_r($array);
	 $value = 23;
	 $size = sizeof($array);
	 $last = $size-1;
	 $first = 0;
	 for($i=0;$i<=$size;$i++){
		
		$mid = (int)(($first+$last)/2);
		//echo "<br>";
		$array[$mid]."<br>";
		if($value===$array[$mid]){
			echo $mid;
			$array[$mid];
			break;
		
		}else if($array[$mid]>$value){
			$last=$mid-1;
		}
		if($array[$mid]<$value){
			$first = $mid+1;
		}
		
	 }
	 //echo $mid;
	 
	 echo "<br>";
	 $arr = array(1,2,10,7,65,63);
	 for($i=0;$i<count($arr);$i++){
		for($j=$i+1;$j<count($arr);$j++){
			if($arr[$i]<$arr[$j]){ 
				$temp = $arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$temp;
			}
		}
	 }
	 echo  "<pre>";print_r($arr);
	 
	 //$sql = mysql_query("SELECT candidate.name FROM candidate INNER JOIN votes ON candidate.candidate_id=votes.candidate_id");
	 //$sql = mysql_query("SELECT candidate.name FROM candidate INNER JOIN votes ON candidate.candidate_id=votes.candidate_id GROUP BY votes.candidate_id having count(votes.candidate_id)>votes.candidate_id");
	 $sql = mysql_query("SELECT * FROM candidate");
	 while($rec = mysql_fetch_array($sql)){
		//echo $rec['name']."<br>";
		$count = mysql_num_rows(mysql_query("SELECT * FROM votes WHERE candidate_id=".$rec['candidate_id'].""));
		if($count>$count1){
			$co=$count;
			$name = $rec['name'];
		}else if($count==$count1){
			$co = $count;
		}	
		$count1 = $count; 
	 }
	 echo $co;
	 echo $name;
	 echo $se;
	 
	//echo strtotime("2010-01-01");
	$s = mysql_fetch_array(mysql_query("SELECT MIN(candidate_id), MAX(candidate_id) from votes"));
	echo "<pre>";print_r($s);
	while($rec=mysql_fetch_array($s)){
		echo $rec['candidate_id'];
	}
	$count=0;
	//echo 17%10;
	for($i=1;$i<=100;$i++){
		if($i%10==7 || (int)($i/10)==7){
			if($i/10==7){
			
			}
			$count = $count+1;
		}
		
		
	}
	echo $count;
?>



