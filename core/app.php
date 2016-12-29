<?php
require __DIR__ . '/vendor/autoload.php';
require_once ('libs/functions.php');
require_once ('configs/mainConfig.php');
require_once ('libs/viewClass.php');

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$view  = new View();
$route = new \Slim\App(new \Slim\Container(['settings' => ['displayErrorDetails' => true]]));

$mw = function (Request $request, Response $response, $next) use($view,$ctrl) {
    $view->basePath = $request->getUri()->getBasePath();
    $view->host = $request->getUri()->getHost();
    $view->path =urldecode($request->getUri()->getPath());
    parse_str($request->getUri()->getQuery(), $view->query);
    $response = $next($request, $response);
    return $response;
};

$route->get('[/{params:.*}]', function () use ($view) {
    return $view->render('router');
})->add($mw);

$route->run();