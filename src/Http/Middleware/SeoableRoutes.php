<?php

namespace tgp\LaravelSeoable\Http\Middleware;

use Closure;
use tgp\LaravelSeoable\Entities\SeoableRoute;

class SeoableRoutes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        view()->share([
            'SeoableRoute' => SeoableRoute::where('route', \Route::currentRouteName())->first()
        ]);

        return $next($request);

    }
}
