<?php 

$myfile = fopen("input.txt", "r") or die("Unable to open file!");
$input= fgets($myfile);
$data=explode(" ", $input);
$data=array_filter($data, 'strlen');

$outputfile = fopen("output.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";

$i=1;
foreach (array_chunk($data,2) as $key=>$value) {
  $txt = 'Case-'.$i++;
  $txt.=': '.result($value)."\n";
	fwrite($outputfile, $txt);
}

echo 'Output file is ready.<br>';
$new = fopen("output.txt", "r") or die("Unable to open file!");
echo fread($new,filesize("output.txt"));
fclose($new);





function result($data){

	$signs=array('+','-','*','/');
	  
	$output=[];
	foreach($signs as $sign){
		for($i=0;$i<count($data);$i=$i+2){
			$res=calculate_string(intval($data[$i]).$sign.intval($data[$i+1]));
			array_push($output,$res);
		}	
	}
	
	return implode(" ",$output);
}

function calculate_string( $mathString )    {
    $mathString = trim($mathString);
    $mathString = preg_replace ('[^0-9\+-\*\/\(\) ]', '', $mathString);
    $compute = create_function("", "return (" . $mathString . ");" );
    return 0 + $compute();
}



fclose($myfile);
fclose($outputfile);

?>