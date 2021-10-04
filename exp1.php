
<form action="" method="post" id="form">
	<input placeholder="Enter data" type="text" name="input" id="input">
	<input type="submit" value="Submit" name="submit" id="submit" style="display:none;">
</form>


<?php

if(isset($_POST['submit'])){
	$input=$_POST['input'];
	echo calculate_string($input);
}

function calculate_string( $mathString )    {
    $mathString = trim($mathString);
    $mathString = preg_replace ('[^0-9\+-\*\/\(\) ]', '', $mathString);
    $compute = create_function("", "return (" . $mathString . ");" );
    return 0 + $compute();
}
?>

<script type="text/javascript">

window.addEventListener('keydown', function(e) {
  if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
    if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
      e.preventDefault();
      return false;
    }
  }

}, true);

    document.getElementById('input').addEventListener('keypress', function(event) {
        if (event.keyCode == 61) {
            document.getElementById("submit").click();
        }
    });

</script>
