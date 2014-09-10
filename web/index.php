<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Oz\Project\Application(array(
    'config.root' => __DIR__ . '/../config'
));

$app->get(
    '/hello/{name}',
    function ($name) use ($app) {
        return 'Hello ' . $app->escape($name);
    }
);

$app->run();