<?php

$container['homeController'] = function ($container)
{
    $view = $container->get('view');
    return new App\Controller\homeController($view);
};
