<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);	

$options = [
	'json' => [
		"title" => "Samsung Galaxy S23",
		"brand" => "Samsung",
		"category" => "Smartphones",
		"description" => "All new 2023 Flagship phone of Samsung Technologies",
		"price" => "999"
	]
];
$response = $client->post("products/add", $options);
$code = $response->getStatusCode();
$body = $response->getBody();
var_dump (json_decode($body))


?>
<html>
