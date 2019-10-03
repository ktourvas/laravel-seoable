<?php

namespace ktourvas\LaravelSeoable;

use Illuminate\Support\ServiceProvider;

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

//        $this->publishes([
//            __DIR__.'/../config/laravel-seoable.php' => config_path('laravel-seoable.php'),
//        ]);

    }

}