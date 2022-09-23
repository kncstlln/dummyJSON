<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);	
$options = [
	'json' => [
		"username" => "atuny0",
        "password" => "9uQFF1Lh"
	]
];
$response = $client->post("auth/login", $options);
$code = $response->getStatusCode();
$body = $response->getBody();
$user = json_decode($body);
#var_dump(json_decode($body));



?>
<html>
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <head>
    <body>
        <form id="form" action="" method="post">
        <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
              <input type="text" name="username" class="form-control form-control-lg" />
              <label class="form-label" for="username">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" class="form-control form-control-lg" />
              <label class="form-label" for="password">Password</label>
            </div>

            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <br>
            <br>
            </form>
            <?php
            if(isset($_POST['username']) || isset($_POST['password'])){
             $username = $_POST["username"];
             $password = $_POST["password"];
            if ($username =='atuny0' AND $password=='9uQFF1Lh') {
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'."Token: ". $user->token . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'.'</div>';
            } else {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">'."Please input valid credential" .'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'. '</div>';
            } 
        }
            ?>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

