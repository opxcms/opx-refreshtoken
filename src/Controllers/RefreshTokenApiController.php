<?php

namespace Modules\Opx\RefreshToken\Controllers;

use Illuminate\Http\JsonResponse;
use Core\Http\Controllers\Controller;

class RefreshTokenApiController extends Controller
{
    /**
     * Get fresh token.
     *
     * @return  JsonResponse
     */
    public function getNewToken(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['token' => csrf_token()]);
    }
}