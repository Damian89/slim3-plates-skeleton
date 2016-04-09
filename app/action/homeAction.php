<?php

namespace App\Action;

use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

class homeAction extends abstractAction
{

    public function index(Request $request, Response $response, $args)
    {
        echo 'Hello!';
    }

}
