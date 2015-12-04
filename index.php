<?php
$start = microtime(true);
$theme = (date("H") < 6 || date("H") >= 21) ? "darkly":"flatly";
$iconColor = ($theme == "darkly") ? "#ffffff":"#2c3e50";
?>
<!doctype html>
<head>
  <title>Pieter De Clercq</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.<?=$theme?>.min.css"/>
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css"/>
  <link rel="stylesheet" href="assets/css/famfamfam.flags.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <style type="text/css">
  .zeropadding{padding:0}
  .zeromargin{margin:0}
  .iconColor{color:<?=$iconColor?>}
  </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12" style="text-align:center"><h1>Pieter De Clercq</h1></div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Languages</h3>
        </div>
        <div class="panel-body zeropadding">
          <table class="table table-bordered table-responsive zeromargin">
            <tbody>
              <tr>
                <th>Web</th>
                <td>
                  <div class="col-md-1"><h2 class="devicon-bootstrap-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-css3-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-html5-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-javascript-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-jquery-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-mysql-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-nodejs-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-php-plain iconColor"></h2></div>
                </td>
              </tr>
              <tr>
                <th>Prg</th>
                <td>
                  <div class="col-md-1"><h2 class="devicon-android-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-c-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-java-plain iconColor"></h2></div>
                </td>
              </tr>
              <tr>
                <th>Tools</th>
                <td>
                  <div class="col-md-1"><h2 class="devicon-apache-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-atom-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-bitbucket-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-bower-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-chrome-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-gimp-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-git-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-github-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-inkscape-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-jetbrains-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-linux-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-nginx-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-nodewebkit-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-phpstorm-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-ssh-plain iconColor"></h2></div>
                  <div class="col-md-1"><h2 class="devicon-ubuntu-plain iconColor"></h2></div>
                </td>
              </tr>
              <tr>
                <th>Spoken</th>
                <td>
                  <div class="col-md-3" style="text-align:center"><img src="assets/img/flags/nl.png" /></div>
                  <div class="col-md-3" style="text-align:center"><img src="assets/img/flags/uk.png" /></div>
                  <div class="col-md-3" style="text-align:center"><img src="assets/img/flags/fr.png" /></div>
                  <div class="col-md-3" style="text-align:center"><img src="assets/img/flags/de.png" /></div>
                </td>
              </tr>
            </tbody>
          </table>
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
