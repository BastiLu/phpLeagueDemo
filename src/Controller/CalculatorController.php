<?php

declare(strict_types=1);

namespace Blutz\Html\Controller;

use Laminas\Diactoros\Response;
use League\Plates\Engine;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CalculatorController
{
    public function index(ServerRequestInterface $request): ResponseInterface
    {
        // Create new Plates instance
        $templates = new Engine('src/templates');

        $queryParams = $request->getQueryParams();
        $numberOne = (int) ($queryParams['num1'] ?? 0);
        $numberTwo = (int) ($queryParams['num2'] ?? 0);

        var_dump($queryParams);

        // Render a template
        $html = $templates->render(
            'form',
            [
                'result' => $this->getResult($numberOne, $numberTwo),
            ]
        );

        $response = new Response();
        $response->getBody()->write($html);
        return $response;
    }

    protected function getResult(int $numberOne, int $numberTwo): int
    {
        return $numberOne + $numberTwo;
    }
}
