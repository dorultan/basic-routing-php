<?php

include_once './request/Request.php';
include_once './routes/Router.php';
$router = new Router(new Request);

$router->get('/', function() {
  return <<<HTML
  <h1>Hello world</h1>
HTML;
});


$router->get('/about', function($request) {
  return <<<HTML
  <h1>About</h1>
HTML;
});

$router->get('/home', function($request) {
  return <<<HTML
  <h1>Home</h1>
HTML;
});

$router->post('/data', function($request) {

  return json_encode($request->getBody());
});
