<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array 2</title>
</head>
<body>

<h3>Listing the largest cities</h3>
<?php
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
$list = count($cities);

for ($i=0; $i < $list ; $i++) { 
	echo $cities[$i];
	if ($i == 9) {
		echo ".";
	}
	else
		echo ", ";
}

?>
<h3>Sorting cities and print in unordered list</h3>

<?php
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
sort($cities);
$list = count($cities);

echo "<ul>";
for ($i=0; $i < $list ; $i++) { 
	
	echo "<li>" . $cities[$i] . "</li>";
	
}
echo "</ul>"

?>

<h3>Adding cities and print in an unordered list</h3>

<?php
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London", "Los Angeles", "Calcutta", "Osaka", "Beijing");
sort($cities);
$list = count($cities);

echo "<ul>";
for ($i=0; $i < $list ; $i++) { 
	
	echo "<li>" . $cities[$i] . "</li>";
	
}
echo "</ul>"

?>

</body>
</html>