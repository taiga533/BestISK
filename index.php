<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>BestISK.com</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.9/select2-bootstrap.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.css"/>
   <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
   <script type="text/javascript" src="js\bootstrap.min.js"></script>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
   <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
   <link rel="manifest" href="favicon/manifest.json">
   <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
   <meta name="theme-color" content="#ffffff">
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 </head>
 <body>
  <nav class="navbar navbar-inverse" id="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <form class="navbar-form navbar-left">
        <div class="form-group">
          <select class="itemName" style="width: 300px" id="itemselect">
          </select>
          <button type="button" class="btn btn-default" id="search">検索</button>
        </div>
      </form>
      </div>
      </ul>
    </div>
    </div>
  </nav>
 <h1 style="margin-top:0px">BestISK.com</h1>
 <div class="row">
   <div class="col-xs-12 col-md-4">
     <select class="regionName" style="width: 300px" id="regionselect">
     </select>
     <div id="tree">
       <ul>
         <li id="1396">アパレル</li>
         <li id="24">インプラントとブースター</li>
         <li id="150">スキル</li>
         <li id="2203">ストラクチャ改良品</li>
         <li id="2202">ストラクチャ設備</li>
         <li id="19">トレード品</li>
         <li id="157">ドローン</li>
         <li id="1922">パイロットのサービス</li>
         <li id="2">ブループリント</li>
         <li id="1849">化学反応</li>
         <li id="4">艦船</li>
         <li id="1954">艦船のSKIN</li>
         <li id="9">艦船装備</li>
         <li id="955">艦船調整用パーツ</li>
         <li id="477">建造物</li>
         <li id="475">生産と研究</li>
         <li id="11">弾薬</li>
         <li id="1659">特別版資産</li>
         <li id="1320">惑星開発施設</li>
       </ul>
     </div>
   </div>
   <div class="col-xs-12 col-md-8" id="order">
     <ul class="nav nav-tabs">
       <li class="active"><a href="#tab1" data-toggle="tab">マーケットデータ</a></li>
       <li><a href="#tab2" data-toggle="tab">マーケットグラフ</a></li>
     </ul>
     <div id="myTabContent" class="tab-content">
       <div class="tab-pane fade in active" id="tab1">
         <div class="container"  style="margin-top:25px;">
           <div class="jumbotron">
             <h1>BestISKへようこそ</h1>
             <p>
               EveCrestApiを利用し、他のマーケット閲覧サイトよりも正確で最新の情報を閲覧できます。</br>
               また、過去30日間のマーケットデータをグラフとして表示する機能を備えています。</br>
               <font color=#ff0000>商品を検索する際は必ずリージョンを選択してください！</font></br>
               ご意見、ご要望がありましたらゲーム内キャラ"Toas Lizafamily"まで！</br>
               ※全ての意見を反映することはできませんので、ご了承ください。<br>
             </p>
           </div>
         </div>
         <h2>更新履歴</h2>
         <h4><span class="label label-primary">変更</span>2016/12/22:リージョン選択欄で商都があるリージョンを上位に表示させるように変更</h4>
       </div>
       <div class="tab-pane fade" id="tab2">
         <canvas id="myChart"></canvas>
       </div>
     </div>
     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     <!-- gamilas -->
     <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-5680618634335633"
          data-ad-slot="3343789500"
          data-ad-format="auto"></ins>
     <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
     </script>
   </div>
 </body>
</html>
<script type="text/javascript">
//グラフデータの読み込み
function loadchart(regid,itemid){
  Chart.defaults.global.elements.line.tension = 0;
  var Volume = [];
  var AvgPrice = [];
  var LowPrice = [];
  var HighPrice = [];
  var Mdate = [];
  var ctx = document.getElementById("myChart").getContext("2d");
  $.ajax({
    url: 'https://crest-tq.eveonline.com/market/'+regid+'/history/?type=https://crest-tq.eveonline.com/inventory/types/'+itemid+'/',
    dataType: 'json',
  }).done(function(resser){
    is = 0
    for(var i=resser["totalCount"]-30;i < resser["totalCount"];i++){
      Volume[is] = resser['items'][i]["volume"];
      AvgPrice[is] = resser['items'][i]["avgPrice"];
      LowPrice[is] = resser['items'][i]["lowPrice"];
      HighPrice[is] = resser['items'][i]["highPrice"];
      Mdate[is] = resser['items'][i]["date"].substr(2,8);
      is = is + 1;
    }
    var complexChartOption = {
      responsive:true,
      scales:{
        yAxes:[
          {
            id:"Yprice",
            type:"linear",
            position:"left"
          },
          {
            id:"Yvolume",
            type:"linear",
            position:"right"
          }
        ]
      }
    };

    var Cdata = {
       labels:Mdate,
       datasets: [
         {
           type:'line',
           label:"平均価格",
           data:AvgPrice,
           fill:false,
           borderColor:"rgba(96,169,23, 0.2)",
           backgroundColor:"rgba(96,169,23,1)",
           yAxisID:"Yprice"
         },
         {
           type:'line',
           label:"最低価格",
           data:LowPrice,
           fill:false,
           borderColor:"rgba(240,163,10, 0.2)",
           backgroundColor:"rgba(240,163,10,1)",
           yAxisID:"Yprice"
         },
         {
           type:'line',
           label:"最高価格",
           data:HighPrice,
           fill:false,
           borderColor:"rgba(255, 99, 132, 0.2)",
           backgroundColor:"rgba(255,99,132,1)",
           yAxisID:"Yprice"
         },
         {
           type:'bar',
           label:"取引量",
           data:Volume,
           borderColor:"rgba(54,164,235,0.8)",
           backgroundColor:"rgba(54,164,235,0.5)",
           yAxisID:"Yvolume"
         }
       ]
     };
     myCharta = new Chart(ctx,{
       type:'bar',
       data:Cdata,
       options: complexChartOption
     });
   });
};
function tables(regid,typeid,name){
  $("#test").html(
    '<img src=https://imageserver.eveonline.com/Type/'+typeid+'_64.png>'+
    '<h2>'+name+'の注文</h2>'+
    '<table id="example" class="table table-condensed table-hover table-striped">'+
    '<thead>'+
    '<tr>'+
    '<th>数量</th>'+
    '<th>単価</th>'+
    '<th>最小購入数</th>'+
    '<th>販売期間(日)</th>'+
    '<th>販売場所</th>'+
    '<th>更新日</th>'+
    '</tr></thead>'+
    '</table>'
  );
  $('#example').DataTable({
    "ajax":{
      url:'https://crest-tq.eveonline.com/market/'+regid+'/orders/sell/?type=https://crest-tq.eveonline.com/inventory/types/'+typeid+'/',
      dataSrc:'items',
      cache: true,
    },
    columns:[
      {data: 'volume'},
      {data: 'price'},
      {data: 'minVolume'},
      {data: 'duration_str'},
      {data: 'location.name'},
      {data: 'issued'}
    ]
  });
  if(typeof myCharta == "object"){
    myCharta.destroy();
  };
  loadchart(regid,typeid);
};
//検索ボタンを押した際のデータ
$("#search").click(function(){
  var selectVal = $("#itemselect option:selected").val();
  var selectReg = $("#regionselect option:selected").val();
  var selectId = $("#itemselect option:selected").text();
  if(typeof selectReg == "undefined")
  {
    alert("リージョン名を選択してください！");
  }
  else{
    $("#tab1").load("MarketView.php?typeid="+selectVal+"&name="+selectId+"&regid="+selectReg,
      function(){
        if(typeof myCharta == "object"){
          myCharta.destroy();
        };
        loadchart(selectReg,selectVal);
        $("#grid-basic").DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Japanese.json"
          },
          "order": [[ 1, "asc" ]]
        });
        $("#grid-basic2").DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Japanese.json"
          },
          "order": [[ 1, "desc" ]]
        });
      });
    };
});
//アイテム名のサジェスト
$('.itemName').select2({
  language: "ja",
  placeholder: 'アイテム名を入力',
  allowClear: true,
  ajax: {
    url: 'ItemRead.php',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results: data
      };
    },
    cache: true
  }
});
//リージョン名のサジェスト
$('.regionName').select2({
  language: "ja",
  placeholder: 'リージョン名を選択',
  ajax: {
    url: 'RegionRead.php',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results: data
      };
    },
    cache: true
  }
});
//アイテムツリー
$('#tree').jstree({
  "core" : {
    'check_callback' : true,
    'themes' : {
      'icons' : false,
      'responsive' : true
    },
  }
});
//ツリークリック時の動作
$('#tree').on('select_node.jstree', function(event, data) {
  var selectNode = data.node.id; // 選択ノード取得
  var selectReg = $("#regionselect option:selected").val();
  var nodeVal = $('#tree').jstree().get_text(selectNode);
  if(selectNode <= 100000){
  $.ajax({
    url: 'GroupRead.php',
    dataType: 'json',
    type: 'get',
    data: {'q': selectNode}
  }).done(function(resser){
    if($('#tree').jstree().is_leaf(data.node.id)){
    for(var i in resser){
      $('#tree').jstree("create_node", selectNode, resser[i],'last',function(){
        $('#tree').jstree("open_node", selectNode);
      });
    }}
  })}
   else{
     if(typeof selectReg == "undefined")
     {
       alert("リージョン名を選択してください！");
     }
     else{
       selectNode = selectNode - 100000;
       $("#tab1").load("MarketView.php?typeid="+selectNode+"&name="+nodeVal+"&regid="+selectReg,function(){
         if(typeof myCharta == "object"){
           myCharta.destroy();
         };
         loadchart(selectReg,selectNode);
         $("#grid-basic").DataTable({
           "language": {
             "url": "//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Japanese.json"
           },
           "order": [[ 1, "asc" ]]
         });
         $("#grid-basic2").DataTable({
           "language": {
             "url": "//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Japanese.json"
           },
           "order": [[ 1, "desc" ]]
         });
       });
     };
   };
});
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88262747-2', 'auto');
  ga('send', 'pageview');
</script>
