<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

class HomeController
{
    public function __construct(
        protected App $app
    ) {}

    public function index(Request $request, Response $response): Response
    {
        $response->getBody()->write(json_encode(['Olá, mundo!']));

        return $response->withHeader('Content-Type', 'application/json');
    }
}
