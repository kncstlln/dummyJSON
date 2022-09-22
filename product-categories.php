<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);
$response = $client->get('products/categories');
$code = $response->getStatusCode();
$body = $response->getBody();
#var_dump(json_decode($body));
$categories = json_decode($body);
?>
<html>
    <head>
        <title> IPT Activity </title>
        <link href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"/>
        <link href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"/>
        <link href ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        </head>
        <body>
        <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card text-center" style="width: 18rem;">
      <div class="card-header px-3"><strong> Categories </strong></div>
      <ul class="list-group list-group-light list-group-small">
            <?php foreach($categories as $category){  ?>
              <li class="list-group-item px-3"><?php echo $category?></li>
            <?php }?>
            </ul>
          </div>
        </body>
            </html>
