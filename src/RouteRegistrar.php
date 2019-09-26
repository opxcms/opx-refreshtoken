<?php

namespace Modules\Opx\RefreshToken;

use Core\Foundation\Module\RouteRegistrar as BaseRouteRegistrar;
use Illuminate\Support\Facades\Route;

class RouteRegistrar extends BaseRouteRegistrar
{
    public function registerPublicRoutes($profile): void
    {
        Route::get('api/token', 'Modules\Opx\RefreshToken\Controllers\RefreshTokenApiController@getNewToken')
            ->middleware('web');
    }
}