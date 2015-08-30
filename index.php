<?php
require './TwitterAPIExchange.php';

require 'setting.php';

error_reporting(E_ALL);

$twitter = new TwitterAPIExchange($settings);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield = '?q=#nerd&count=30';
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
header('Content-Type: application/json');
echo $response;