<?php

declare(strict_types=1);

namespace Blutz\Html\Controller;

use Laminas\Diactoros\Response;
use League\Plates\Engine;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class GerdController
{
    public function index(ServerRequestInterface $request): ResponseInterface
    {
        // Create new Plates instance
        $templates = new Engine('src/templates');

        // Render a template
        $html = $templates->render(
            'gerd',
            [
                'name' => 'Gertrud',
                'name2' => 'Gerd',
            ]
        );

        $response = new Response();
        $response->getBody()->write($html);
        return $response;
    }
}
