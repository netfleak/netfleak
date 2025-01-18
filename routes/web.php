<?php

declare(strict_types=1);

use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Quagga\Quagga\Application;
use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Http\Controllers\StaticFileController;
use Quagga\Quagga\HookManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

return function (Application $app) {
    $app->any('/extensions/{extensionName:/?.+}/assets/{pagePath:/?.+}', StaticFileController::class);
    $app->any('/themes/{themeName:/?.+}/assets/{pagePath:/?.+}', StaticFileController::class);

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });

    $app->any(config('auth.login.path'), [LoginController::class, 'login']);

    $app->any(
        '/',
        HookManager::applyFilters(
            'home_controller',
            [HomeController::class, 'index']
        )
    );
};
