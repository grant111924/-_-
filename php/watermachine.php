<?php
header('Access-Control-Allow-Origin:*');
include ('cn2db.php');
$conn = cn2db();

		$queryWater = "SELECT `Latitude`,`Longitude`,`Place`,`Location`,`Tel`,`MachineNum`,`OpenTime` FROM `watermachine`";
		$resultWater = mysqli_query($conn, $queryWater);
		$returnWater=[];
		while ($row = mysqli_fetch_assoc($resultWater)) {
				$returnWater[]=$row;
		}
		$water = json_encode($returnWater);
			echo '{"water":'.$water.'}';
?>