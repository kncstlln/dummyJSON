<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);	

$options = [
	'json' => [
	'title' => 'Logitech Galaxy Airpods',
        'description' => 'Wowers',
        'category' => 'earphones', 
        'brand' => 'Logitech'
	]
];
$response = $client->put("products/1", $options);
$code = $response->getStatusCode();
$body = $response->getBody();
var_dump (json_decode($body))

?>

