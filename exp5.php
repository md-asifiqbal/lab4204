

<form action="" method="post" id="form">
	<input placeholder="Enter data" type="number" name="input" id="input">
	<input type="submit" value="Submit" name="submit" id="submit" >
</form>


<?php

if(isset($_POST['submit'])){
	$input=$_POST['input'];
echo "<br>Factorial using For Loop ".$input.'! ='. FactorialForLoop($input);

echo "<br>Factorial using While Loop ".$input.'! ='. FactorialWhileLoop($input);

if(FactorialForLoop($input)==FactorialWhileLoop($input))
echo "<br> Result obtain from each case is same";
else
echo "<br> Result obtain from each case is not same";


}

function FactorialForLoop($number){
	$factorial = 1;
	for ($i = 1; $i <= $number; $i++){
	$factorial = $factorial * $i;
	}
	return $factorial;
}
function FactorialWhileLoop($number){
	$factorial = 1;
	$i = 1;
	while($i <= $number){
		$factorial = $factorial * $i;
		$i++;
	}
	
	return $factorial;
}

?>
