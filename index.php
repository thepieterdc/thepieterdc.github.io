<?php
$theme = (date("H") < 6 || date("H") >= 22) ? "darkly":"flatly";
$iconColor = ($theme == "darkly") ? "#ffffff":"#2c3e50";

function days_till_birthday() {
  $birthdayThisYear = new DateTime(date('Y') . '-' . '08-21' .' 00:00:00');
  $today = new DateTime('midnight today');

  if ($birthdayThisYear < $today) {
      $birthdayThisYear->modify("+1 Year");
  }

  $diff = $birthdayThisYear->diff($today);

  return $diff->days;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pieter De Clercq</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index,follow" />
  <meta name="keywords" content="Pieter,De,Clercq,php,javascript,js,ajax,mysql,html,css,node,linux,npm,java,android,web" />
  <meta name="description" content="Pieter De Clercq - Universiteit Gent" />
  <meta name="author" content="Pieter De Clercq" />
  <link rel="author" href="https://plus.google.com/108970652148502129257/posts"/>
	<link rel="stylesheet" href="assets/css/bootstrap.<?=$theme?>.min.css" />
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <style type="text/css">
  .zeropadding{padding:0}
  .zeromargin{margin:0}
  .iconColor{color:<?=$iconColor?>;cursor:pointer;margin-top:10px}
  a{text-decoration:none !important}
  </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12" style="text-align:center"><h1>Pieter De Clercq</h1></div>
  </div>
    <div class="row">
      <div class="col-md-7">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Languages</h3>
          </div>
          <div class="panel-body zeropadding">
            <table class="table table-bordered table-responsive zeromargin">
              <tbody>
                <tr>
                  <th>Web</th>
                  <td style="padding-left:0px">
                    <div class="col-md-1"><h1 class="devicon-bootstrap-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-css3-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-html5-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-javascript-plain iconColor noAnimate"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-jquery-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-mysql-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-nodejs-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-php-plain iconColor noAnimate"></h1></div>
                  </td>
                </tr>
                <tr>
                  <th>Programming</th>
                  <td style="padding-left:0px">
                    <div class="col-md-1"><h1 class="devicon-android-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-c-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-java-plain iconColor"></h1></div>
                  </td>
                </tr>
                <tr>
                  <th>Tools</th>
                  <td style="padding-left:0px">
                    <div class="col-md-1"><h1 class="devicon-apache-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-atom-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-bitbucket-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-bower-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-chrome-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-gimp-plain iconColor noAnimate"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-git-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-github-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-inkscape-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-jetbrains-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-linux-plain iconColor noAnimate"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-nginx-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-nodewebkit-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-phpstorm-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-ssh-plain iconColor"></h1></div>
                    <div class="col-md-1"><h1 class="devicon-ubuntu-plain iconColor"></h1></div>
                  </td>
                </tr>
                <tr>
                  <th>Spoken</th>
                  <td style="padding-left:0px">
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
      <div class="col-md-5">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Information</h3>
          </div>
          <div class="panel-body zeropadding">
            <table class="table table-bordered table-responsive zeromargin">
              <tbody>
                <tr>
                  <th style="text-align:center;vertical-align:middle"><i class="fa fa-2x fa-birthday-cake"></i></th>
                  <td><h4>August 21, 1997 &mdash;
                    <?php
                    $days_till_birthday = days_till_birthday();
                    if($days_till_birthday == 0) {
                      echo "yay!";
                    } elseif($days_till_birthday < 5) {
                      echo "time to buy presents!";
                    } elseif($days_till_birthday > 360) {
                      echo "a few days ago";
                    } else {
                      echo "that's another ".$days_till_birthday." days :(";
                    }
                    ?></h4></a></td>
                </tr>
                <tr>
                  <th style="text-align:center;vertical-align:middle"><i class="fa fa-2x fa-university"></i></th>
                  <td><h4>Universiteit Gent &mdash; Bachelor of Science(IT)</h4></td>
                </tr>
                <tr>
                  <th style="text-align:center;vertical-align:middle"><i class="fa fa-2x fa-envelope"></i></th>
                  <td><h4><a href="mailto:pieterdeclercq@outlook.com">pieterdeclercq@outlook.com</a></h4></td>
                </tr>
                <tr>
                  <th style="text-align:center;vertical-align:middle"><i class="fa fa-2x fa-facebook"></i></th>
                  <td><h4><a href="https://www.facebook.com/pieterdc97">pieterdc97</a></h4></td>
                </tr>
                <tr>
                  <th style="text-align:center;vertical-align:middle"><i class="fa fa-2x fa-twitter"></i></th>
                  <td><h4><a href="https://twitter.com/thepieterdc">@thepieterdc</a></h4></td>
                </tr>
                <tr>
                  <th style="text-align:center;vertical-align:middle"><i class="fa fa-2x fa-github"></i></th>
                  <td><h4><a href="https://github.com/thepieterdc">thepieterdc</a> &mdash; <a href="https://github.ugent.be/piedcler">piedcler (UGent)</a></h4></td>
                </tr>
                <tr>
                  <th style="text-align:center;vertical-align:middle"><i class="fa fa-2x fa-stack-overflow"></i></th>
                  <td><h4><a href="http://stackoverflow.com/users/3499277/thepieterdc">thepieterdc</a></h4></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $(".iconColor").hover(function() {
    var $this = $(this);
    if(!$this.hasClass('noAnimate')) {
      var classes = $this.attr('class').split(' ');
      $.each(classes, function(i,e) {
        if(e.substring(0,7) == 'devicon') {
          $this.removeClass(e).addClass(e+"-wordmark");
        }
      });
    }
  }, function() {
    var $this = $(this);
    var classes = $this.attr('class').split(' ');
    $.each(classes, function(i,e) {
      if(e.substring(0,7) == 'devicon') {
        var className = e.split('-wordmark');
        $this.removeClass(e).addClass(className[0]);
      }
    });
  });
});
</script>
</body>
</html>
