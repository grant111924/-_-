<?php
header('Access-Control-Allow-Origin:*');
include ('cn2db.php');
$conn = cn2db();

		$queryFeeding = "SELECT `Latitude`,`Longitude`,`BreName`,`Address`,`Tel`,`OpenTime`,`AdvTag`,`Remind` FROM `feeding`";
		$resultFeeding = mysqli_query($conn, $queryFeeding);
		$returnFeeding=[];
		while ($row = mysqli_fetch_assoc($resultFeeding)) {
				$returnFeeding[]=$row;
		}
		$feeding = json_encode($returnFeeding);
			echo '{"feeding":'.$feeding.'}';
?>