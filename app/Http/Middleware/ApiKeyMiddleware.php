<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Fetch the API key from the .env file
        $apiKey = env('ADMIN_API_KEY');

        // Check if the API key is present and valid
        if (!$apiKey || $request->header('X-Admin-Key') !== $apiKey) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        return $next($request);
    }
}
