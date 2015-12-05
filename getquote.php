<?php
$opts = array(
  'http'=>array(
    'method'=>"GET"
  )
);

$context = stream_context_create($opts);

$fp = fopen('http://quotes.stormconsultancy.co.uk/random.json', 'r', false, $context);
if($fp)
fpassthru($fp);
fclose($fp);
exit;
