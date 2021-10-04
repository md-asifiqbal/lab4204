

<form action="" method="post" id="form">
	<input placeholder="Enter data" type="text" name="input" id="input">
	<input type="submit" value="Submit" name="submit" id="submit" >
</form>


<?php

if(isset($_POST['submit'])){
	 $input=$_POST['input'];
	 $data=explode(" ", $input);
     $data=array_filter($data, 'strlen');
     $len=count($data);
     $sum=0;
     $i=0;
     do {
     	$sum+=$data[$i];
     	$i++;
     } while ($i<$len);

     echo "<br>Sum = ".$sum;
     echo "<br> Average = ".$sum/$len;


     echo "<br>Sum = ".sumation($data,$len);
     echo "<br> Average = ".average(sumation($data,$len),$len);



}

function sumation($data,$len){
	$sum=0;
     $i=0;
     do {
     	$sum+=$data[$i];
     	$i++;
     } while ($i<$len);
     
	return $sum;
}
function average($number,$len){
		return $number/$len;
}

?>
