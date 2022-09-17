<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
$options = [
	‘json’ => [
		‘key’ => ‘value’
	]
];
$response = $client->post("https://dummyjson.com/", $options);
$code = $response->getStatusCode();
$body = $response->getBody();
$product= json_decode($body);
#var_dump(json_decode($body));

?>
<html>
