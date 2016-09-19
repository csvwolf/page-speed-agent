<?php
  header('Content-type: application/json');
  header('Access-Control-Allow-Origin: *');
  
  $strategy = $_GET['strategy'];
  $url = $_GET['url'];
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed?locale=zh_CN&url=' . $url . '&strategy=' . $strategy);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $out = curl_exec($ch);

  curl_close($ch);
?>
