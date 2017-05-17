<?php
header('Content-type: application/json');
define ('DB_USER', "hoge");
define ('DB_PASSWORD', "hoge");
define ('DSN', "mysql:host=hoge;dbname=hoge;charset=utf8");
$dbh = new PDO(DSN,DB_USER,DB_PASSWORD,array(PDO::ATTR_EMULATE_PREPARES => false));
$stmt = $dbh->prepare("SELECT marketgroups.marketGroupID,
				marketgroups.marketGroupName  FROM marketgroups
		WHERE parentGroupID LIKE ?");
$stmt->bindParam(1, $_GET['q']);
$stmt->execute();
$json = [];
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
     $json[] = ['id'=>$row['marketGroupID'], 'text'=>$row['marketGroupName']];
}
echo json_encode($json);
?>
