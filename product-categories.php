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
$products = json_decode($body);
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

    <div id="intro" class="p-5 text-center bg-light">
      <h1 class="mb-3 h2">Categories</h1>
    </div>
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="my-5">
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-4">
          <!--Section: Content-->
          <section>
            <!-- Post -->
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
              </div>
              <?php foreach($products as $product){  ?>
              <div class="col-md-8 mb-4">
                <h5><?php echo $product->category?></h5>
                <?php echo $product->title?>

                <button type="button" class="btn btn-primary">Open</button>
              </div>
            </div>
          </section>
          <?php }?>
              </body>
            </html>
