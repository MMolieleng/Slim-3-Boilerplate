<?php



$app->get('/', function($request, $response){

  return 'New Home';
});

$app->get('/home', function($request, $response){

  return 'New Home, is new home';
});
?>
