<?php

declare(strict_types=1);

namespace Blutz\Html\Controller;

use Laminas\Diactoros\ResponseFactory;
use League\Plates\Engine;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PageController
{
    public function indexAction(ServerRequestInterface $request): ResponseInterface
    {
        $templates = new Engine('src/templates');
        $html = $templates->render(
            'index',
            [
                'name' => 'Home',
            ]
        );

        $response = (new ResponseFactory())->createResponse();
        $response->getBody()->write($html);

        return $response;
    }
}