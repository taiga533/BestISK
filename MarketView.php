<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<?php
   define('MAIN_URL','https://crest-tq.eveonline.com/market/');
   define('SELL_URL','/orders/sell/?type=https://crest-tq.eveonline.com/inventory/types/');
   define('BUY_URL','/orders/buy/?type=https://crest-tq.eveonline.com/inventory/types/');
   $apiheader = array(
   );
   $markoption = array('http' => array(
     'method' => 'GET',
     'header' => implode("\r\n", $apiheader)
   ));
   $marketsell = file_get_contents(MAIN_URL.$_GET['regid'].SELL_URL.$_GET['typeid']."/", false, stream_context_create($markoption));
   $marketbuy = file_get_contents(MAIN_URL.$_GET['regid'].BUY_URL.$_GET['typeid']."/", false, stream_context_create($markoption));
   //tokenはjsonファイルでくるのでデコード
   $marksell = json_decode($marketsell, true);
   $markbuy = json_decode($marketbuy, true);
   //print_r($marksell);
   //売り注文
   $ItemName = $_GET['name'];
   echo "<img src='https://imageserver.eveonline.com/Type/".$_GET['typeid']."_64.png'></img><h1>".$ItemName."の注文</h1>";
?>
   <h2>売り注文</h2>
   <!--<button type="button" id="favbtn" class="btn btn-primary" data-toggle="button" autocomplete="off">
     <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
     マーケットデータをお気に入りに登録
   </button>-->
   <table id="grid-basic" class="table table-condensed table-hover table-striped">
     <thead>
       <tr>
         <th data-column-id="Ivolume" data-type="numeric">数量</th>
         <th data-column-id="Iprice" data-type="numeric">単価</th>
         <th data-column-id="Iminvolume" data-type="numeric">最小購入数</th>
         <th data-column-id="Iduration" data-type="numeric">販売期間(日)</th>
         <th data-column-id="Ilocation" >販売場所</th>
         <th data-column-id="Iissued" data-type="string">更新日</th>
       </tr>
     </thead>
   <tbody>
<?php
for($is = 0; $is < $marksell['totalCount']; $is++)
{
  echo "<tr>";
  //数量
  echo "<td>".$marksell['items'][$is]['volume']."</td>";
  //単価
  echo "<td>".$marksell['items'][$is]['price']."</td>";
  //最小購入数
  echo "<td>".$marksell['items'][$is]['minVolume']."</td>";
  //販売期間
  echo "<td>".$marksell['items'][$is]['duration']."</td>";
  //販売場所
  echo "<td>".$marksell['items'][$is]['location']['name']."</td>";
  //更新日
  echo "<td>".$marksell['items'][$is]['issued']."</td>";
  echo "</tr>";
}
?>
</tbody>
</table>

<h2>買い注文</h2>
<table id="grid-basic2" class="table table-condensed table-hover table-striped">
  <thead>
    <tr>
      <th data-column-id="Ivolume" data-type="numeric">数量</th>
      <th data-column-id="Iprice" data-type="numeric">単価</th>
      <th data-column-id="Iminvolume" data-type="numeric">最小購入数</th>
      <th data-column-id="Iduration" data-type="numeric">販売期間(日)</th>
      <th data-column-id="Ilocation" >販売場所</th>
      <th data-column-id="Iissued" data-type="string">更新日</th>
    </tr>
  </thead>
<tbody>
<?php
for($is = 0; $is < $markbuy['totalCount']; $is++)
{
  echo "<tr>";
  //数量;
  echo "<td>".$markbuy['items'][$is]['volume']."</td>";
  //単価
  echo "<td>".$markbuy['items'][$is]['price']."</td>";
  //最小購入数
  echo "<td>".$markbuy['items'][$is]['minVolume']."</td>";
  //販売期間
  echo "<td>".$markbuy['items'][$is]['duration']."</td>";
  //販売場所
  echo "<td>".$markbuy['items'][$is]['location']['name']."</td>";
  //更新日
  echo "<td>".$markbuy['items'][$is]['issued']."</td>";
  echo "</tr>";
}
?>
</tbody>
</table>
<body>
</html>
