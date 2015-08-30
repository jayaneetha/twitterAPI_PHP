<?php
echo $url = "http://brightron.net/index.html";
$ch = curl_init();
echo " init";
curl_setopt($ch,CURLOPT_URL, $url);
echo " setopt";
$result = curl_exec($ch);
echo ' exec ';
echo $result;
curl_close($ch);
echo 'close';
?>