<?php

use Slim\Http\Request;
use Slim\Http\Response;
use \RedBeanPHP\R as R;
// Routes
/*
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
*/
$app->get('/api/', function (Request $request, Response $response, array $args) {
    echo "API";
});

$app->get('/api/wines', function (Request $request, Response $response, array $args) {
    $wine =R::findAll('wine') ;
    return json_encode($wine,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
});

$app->get('/api/wines/search/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    // ? prépare la requet et à la fin il va nettoyer
    $wines = R::find('wine', 'name Like ?',["%$name%"]);
    //var_dump($wines);
    return json_encode($wine,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
});

$app->get('/api/wines/10', function (Request $request, Response $response, array $args) {
    echo "API";
});

$app->post('/api/wines', function (Request $request, Response $response, array $args) {
    echo "API";
});

$app->put('/api/wines/10', function (Request $request, Response $response, array $args) {
    echo "API";
});

$app->delete('/api/wines/10', function (Request $request, Response $response, array $args) {
    echo "API";
});