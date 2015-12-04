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
</div>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
