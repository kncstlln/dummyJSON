<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);	

$options = [
	'json' => [
		"firstName" => "Kane",
		"maidenName" => "what",
		"lastName" => "Castillano",
		"age" => "20",
		"gender" => "Male",
        'email' => "castillano.kaneerryl@auf.edu.ph",
        "phone" => "09429903020",
        "bloodGroup" => "B+"
    ]
];
$response = $client->put("users/1", $options);
$code = $response->getStatusCode();
$body = $response->getBody();
var_dump (json_decode($body))

?>
