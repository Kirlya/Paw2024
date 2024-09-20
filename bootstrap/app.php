<?php

use Illuminate\Routing\Router;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        /*function(Router $router) {
            $router->middleware('web')
            ->group(base_path('routes/web.php'));
           
            $router->middleware('web', 'auth')
            ->prefix('panel')
            ->}group(base_path('routes/panel.php'));
            },*/
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
