

<form action="" method="post" id="form">
	<input placeholder="Enter data" type="text" name="input" id="input">
	<input type="submit" value="Submit" name="submit" id="submit" >
</form>


<?php

if(isset($_POST['submit'])){
	$input=$_POST['input'];

if (strrev($input) == $input){
	echo $input." is Palindrome";
	}
	else {
	echo $input." is not a Palindrome";
	}
}
?>
