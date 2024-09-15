<?php

return [
    'middlewares' => [
        'api_lang' => \App\Http\Middleware\ApiLanguage::class,
        'user_permission' => \App\Http\Middleware\AutoCheckPermission::class,
        'user_active' => \App\Http\Middleware\UpdateUserLastActiveAt::class,
    ],
];
