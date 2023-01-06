<?php
	require('DevuelveActores.php');
	$actores =new DevuelveActores();
	$array_actores=$actores->get_actores();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
<?php
	foreach($array_actores as $elemento){
		echo "<table><tr><td>";
		echo $elemento['actor_id']."</td><td>";
		echo $elemento['first_name']."</td><td>";
		echo $elemento['last_name']."</td><td>";
		echo $elemento['last_update']."</td></tr></table>";
		echo "<br>";
		echo "<br>";
	}
?>
</body>
</html>