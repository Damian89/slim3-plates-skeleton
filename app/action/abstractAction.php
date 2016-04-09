<?php

namespace App\Action;

abstract class abstractAction
{

    public $db;
    public $view;

    public function __construct($container)
    {
        $this->db   = $container->get('db');
        $this->view = $container->get('view');
    }

}
