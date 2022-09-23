<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);
$response = $client->get('products');
$code = $response->getStatusCode();
$body = $response->getBody();
#var_dump(json_decode($body));
$products= json_decode($body)->products;
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
    <link href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"/>
    <link href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
    <body>
          <form action="products1.php" method="get">
          <div class="input-group justify-content-center align-items-center h-100">
          <div class="form-outline">
            <input id="myInput" value="" name="search" type="search" id="input" class="query" />
          </div>
            <button id="search" type="submit" class="searchBtn btn-primary">
              <i class="fas fa-search"></i>
            </button>
          </div>
          </form>
          <div class="row">
        <div class="col-lg-8 mx-auto" id="product-list">
            <!-- List group-->
            <ul class="list-group shadow">
                <!-- list group item-->
                <li class="list-group-item">
                    <?php foreach($products as $product){  ?>
                    <div class="product">
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                        <h5 class="mt-0 font-weight-bold mb-2"><?php echo $product->id?></h5>
                            <h5 class="mt-0 font-weight-bold mb-2"><?php echo $product->title?></h5>
                            <h6 class="mt-0 font-weight-bold mb-2"><?php echo $product->brand?></h6>
                            <p class="font-italic text-muted mb-0 small"><b><?php echo $product->category?></b></p>
                            <p class="font-italic text-muted mb-0 small"><?php echo $product->description?></p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2"><?php echo $product->price?></h6>
                                <ul class="list-inline small">
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                </ul>
                            </div>
                        </div><img src=<?php echo $product->thumbnail?> alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                    </div> <!-- End -->
                </li> <!-- End -->
                <?php }?>
        </body>
    </body>
  <script>
      /*Let query = document.querySelector('.query');
      Let searchBtn = document.querySelector('.searchBtn');

      function myFunction() {
        Let url ='products1.php?'+query.value;
        window.open(url,'_self');
      }

  </script>

</html>