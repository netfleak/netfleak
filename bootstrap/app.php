<?php

$app = new \Quagga\Quagga\Foundation\Application(
    !empty($_ENV['APP_BASE_PATH']) ? $_ENV['APP_BASE_PATH'] : dirname(__DIR__)
);

$app->singleton(
    \Quagga\Contracts\Http\Kernel::class,
    \App\Http\Kernel::class
);

$app->singleton(
    \Quagga\Contracts\Debug\ExceptionHandler::class,
    \App\Exceptions\Handler::class
);


return $app;

