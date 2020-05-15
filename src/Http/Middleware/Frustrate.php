<?php

namespace Ichtrojan\Frustration\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Frustrate
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (in_array(str_replace('/', '', request()->getRequestUri()), config('frustration.routes'))) {
            $routes = config('frustration.redirect');
            $route = $routes[array_rand($routes)];
            return redirect($route);
        }

        return $next($request);
    }
}