<?php
header('Content-type: application/json');
define ('DB_USER', "hoge");
define ('DB_PASSWORD', "hoge");
define ('DSN', "mysql:host=hoge;dbname=hoge;charset=utf8");
$dbh = new PDO(DSN,DB_USER,DB_PASSWORD,array(PDO::ATTR_EMULATE_PREPARES => false));
$stmt = $dbh->prepare("SELECT regions.id, regions.name  FROM regions");
$stmt->execute();
$json = [];
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     $json[] = ['id'=>$row['id'], 'text'=>$row['name']];
}
echo json_encode($json);
?>
