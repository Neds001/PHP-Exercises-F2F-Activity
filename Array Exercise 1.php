<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array 1</title>
</head>
<body>

<h3> Weathers </h3>
<?php 

$weathers = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "rain", "wind");

echo "We've seen all kinds of weather this month. At the <br> beginning of he month, we had " . $weathers [5] . " and " . $weathers[7] . "." . " Then <br>" . "came ". $weathers[1] . " with a few " . $weathers[2] . " and some " . $weathers[0]. ". " . "At least <br>" . "we didn't get any " . $weathers [3] . " and " . $weathers[5] . ".";


?>


</body>
</html>