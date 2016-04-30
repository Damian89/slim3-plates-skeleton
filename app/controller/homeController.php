<?php

namespace App\Controller;

use Slim\Http\Request as Request;
use Slim\Http\Response as Response;
use League\Plates\Engine as Renderer;

class homeController
{

    private $view;

    public function __construct(Renderer $view)
    {
        $this->view = $view;
    }

    public function index(Request $request, Response $response, $args)
    {
        echo 'Hello! You are running on ' . phpversion();
    }

}
