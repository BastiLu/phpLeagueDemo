<?php

declare(strict_types=1);

use Blutz\Html\Controller\CalculatorController;
use Blutz\Html\Controller\GerdController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

include 'vendor/autoload.php';


$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals();

$router = new League\Route\Router;

// map a route
$router->map('GET', '/', function (ServerRequestInterface $request): ResponseInterface {
    $response = new Laminas\Diactoros\Response;
    $response->getBody()->write('<h1>Hello, World!</h1>');
    return $response;
});

$router->map('GET', '/controller', [new GerdController(), 'index']);

$router->map('GET', '/rechner', [new CalculatorController(), 'index']);

$response = $router->dispatch($request);

// send the response to the browser
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);