<?php

$key = urlencode('an_example_api_key');
$start = urlencode('20');
$limit = urlencode('2');

$url = sprintf(
    "https://merchant.wish.com/api/v1/product/multi-get?key=%s&limit=%s&start=%s",
    $key, $limit, $start);

$context = stream_context_create(array(
    'http' => array(
        'method'        => 'GET',
        'ignore_errors' => true,
    ),
));

// Send the request
$response = file_get_contents($url, TRUE, $context);
echo $response;
echo "\n";
?>
