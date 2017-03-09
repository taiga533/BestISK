<?php
header('Content-type: application/json');
define ('DB_USER', "hoge");
define ('DB_PASSWORD', "hoge");
define ('DB_DATABASE', "hoge");
define ('DB_HOST', "hoge");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$mysqli->set_charset("utf8");
$sql = "SELECT regions.id, regions.name  FROM regions";
$result = $mysqli->query($sql);
$json = [];
while($row = $result->fetch_assoc()){
     $json[] = ['id'=>$row['id'], 'text'=>$row['name']];
}
echo json_encode($json);
?>
