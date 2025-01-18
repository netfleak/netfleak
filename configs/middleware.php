<?php

declare(strict_types=1);

use Quagga\Quagga\Application;
use App\Http\Middleware\AssetsMiddleware;
use App\Http\Middleware\SessionMiddleware;

return function (Application $app) {
    $app->add(SessionMiddleware::class);
    $app->add(AssetsMiddleware::class);
};
