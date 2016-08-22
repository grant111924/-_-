<?php
function cn2db() {
	$dbServer = 'ap-cdbr-azure-southeast-b.cloudapp.net';
	$dbUserName = 'b1ce30a479b13d';
	$dbPassword = '0080d976';
	$dbDatabase = 'grant';
	$mysqli = mysqli_connect($dbServer, $dbUserName, $dbPassword, $dbDatabase);
	mysqli_set_charset($mysqli, 'utf8');
	return $mysqli;
}
?>