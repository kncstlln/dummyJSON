<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);
$response = $client->get('products/search');
$code = $response->getStatusCode();
$body = $response->getBody();
#var_dump(json_decode($body));
$product= json_decode($body)->products;

?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
    <body>
          <form action="products1.php" method="get">
          <div class="input-group justify-content-center align-items-center h-100">
          <div class="form-outline">
            <input id="input" value="" name="input" type="search" id="input" class="query" />
          </div>
            <button id="search" type="submit" name="search" onclick="myFunction()"class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>
          </div>
          </form>
    </body>
    <script>
      function myFunction() {
      document.getElementById("search");
      }
      const myButton = document.getElementById("search");
    </script>