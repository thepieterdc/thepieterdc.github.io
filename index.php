<?php
$start = microtime(true);
$theme = (date("H") < 6 || date("H") > 21) ? "darkly":"flatly";
?>
<!doctype html>
<head>
  <title>Pieter De Clercq</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.<?=$theme?>.min.css"/>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12" style="text-align:center"><h1>Pieter De Clercq</h1></div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Languages</h3>
        </div>
        <div class="panel-body">
          TODO
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Photostream</h3>
        </div>
        <div class="panel-body">
          TODO
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Contact information</h3>
        </div>
        <div class="panel-body">
          TODO
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
