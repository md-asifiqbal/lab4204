
<form action="" method="get">
	<input placeholder="Enter data" type="text" name="input">
	<input type="submit" value="Submit" name="submit">
</form>


<?php

if(isset($_GET['submit'])){
	$input=$_GET['input'];
	$sign=substr($input, -1);
    $dat=rtrim($input,$sign);
    $data=explode(" ", $dat);
     $data=array_filter($data, 'strlen');
    if(count($data)%2 !=0){

    	echo "Input must be pair number<br>";
    }else{
    	if ($sign == '%' || $sign == '/' || $sign == '*' || $sign == '+' || $sign == '-'){

    		echo 'Input ='.$_GET['input'].'<br>';

		 echo 'Output ='.result($data,$sign);


	}else{
		echo "Last character must be an operators";
	}
    }
}

function result($data,$sign){
	  
	$output=[];
	for($i=0;$i<count($data);$i=$i+2){
		$res=calculate_string(intval($data[$i]).$sign.intval($data[$i+1]));
		array_push($output,$res);
	}
	return implode(" ",$output);
}

function calculate_string( $mathString )    {
    $mathString = trim($mathString);
    $mathString = preg_replace ('[^0-9\+-\*\/\(\) ]', '', $mathString);
    $compute = create_function("", "return (" . $mathString . ");" );
    return 0 + $compute();
}
?>
