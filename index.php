<?php
require __DIR__ . '/vendor/autoload.php';

require 'setting.php';

$twitter = new TwitterAPIExchange($settings);

if (isset($_GET['max_id'])) {
    $getfield = '?q=' . $_GET['q'] . '&count=30&max_id=' . $_GET['max_id'];
}else{
    $getfield = '?q=' . $_GET['q'] . '&count=30';
}

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';

$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
header('Content-Type: application/json');
echo $response;





//$response_array = json_decode($response);
//
//print_r($response_array);
//die();
//echo $response_array->search_metadata->next_results;
//die();
//header('Content-Type: application/json');
//echo json_encode($response_array->search_metadata);
//die();
//
//foreach ($response_array as $response_array_element) {
//    header('Content-Type: application/json');
//    echo json_encode($response_array_element[0]->text);
////    print_r($response_array_element[0]);
//}
