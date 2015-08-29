<?php
require __DIR__ . '/vendor/autoload.php';

require 'setting.php';

$twitter = new TwitterAPIExchange($settings);


if (isset($_GET['max_id'])) {
    $getfield = '?q=#' . $_GET['q'] . '&count=30&max_id=' . $_GET['max_id'];
} else {
    $getfield = '?q=#' . $_GET['q'] . '&count=30';
}
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
header('Content-Type: application/json');
echo $response;