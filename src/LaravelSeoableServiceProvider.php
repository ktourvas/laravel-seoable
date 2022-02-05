<?php

namespace tgp\LaravelSeoable;

use Illuminate\Support\ServiceProvider;
use tgp\LaravelSeoable\Http\Middleware\SeoableRoutes;

class LaravelSeoableServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['router']->aliasMiddleware('seoable', SeoableRoutes::class);
    }

}