<?php

use Mascot\Application;
use Mascot\Provider\AssetServiceProvider;
use Mascot\Provider\TwigServiceProvider;
use Mascot\Provider\ServiceControllerServiceProvider;
use Mascot\Provider\HttpFragmentServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

return $app;
