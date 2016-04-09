<?php

$container = $app->getContainer();


$container['view'] = function ($container)
{
    $settings = $container->get('settings');
    $view     = new League\Plates\Engine($settings['view']['path'], $settings['view']['extension']);
    return $view;
};

$container['db'] = function ($container)
{
    $settings = $container->get('settings');
    return new \MysqliDb($settings['database']);
};
