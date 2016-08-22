<?php
header('Access-Control-Allow-Origin:*');
include ('cn2db.php');
$conn = cn2db();

		$queryToilet = "SELECT * FROM `toilet` WHERE `ParentalToilet`= 'v' or `Disabled`= 'v'";
		$resultToilet = mysqli_query($conn, $queryToilet);
		$returnToilet=[];
		while ($row = mysqli_fetch_assoc($resultToilet)) {
				$returnToilet[]=$row;
		}
		$toilet = json_encode($returnToilet);
			echo '{"toilet":'.$toilet.'}';
?>