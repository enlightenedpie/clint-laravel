<?php

namespace App\Http\Middleware;

use Closure;

class JSONMiddleware
{
    const DATA_METHODS = [
        'POST', 'PUT', 'PATCH'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (in_array($request->getMethod(), self::DATA_METHODS)) {
            $request->merge(json_decode($request->getContent(),true));
        }

        return $next($request);
    }
}
