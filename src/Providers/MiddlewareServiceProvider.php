<?php

namespace Teefa\Prepare\Providers;

use app\Http\Middleware\ApiLanguage;
use app\Http\Middleware\AutoCheckPermission;
use app\Http\Middleware\UpdateUserLastActiveAt;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class MiddlewareServiceProvider extends ServiceProvider
{
    public function boot(Kernel $kernel): void
    {

        $kernel
            ->pushMiddleware(ApiLanguage::class)
            ->pushMiddleware(AutoCheckPermission::class)
            ->pushMiddleware(UpdateUserLastActiveAt::class);

    }
    public function register()
    {

    }
}
