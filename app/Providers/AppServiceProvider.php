<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @block void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @block void
     */
    public function boot()
    {
        if (!app()->runningInConsole()) {
            if (request()->getHost() !== 'localhost' && request()->getHost() !== '127.0.0.1') {
                URL::forceScheme('https');
            }
        }
    }
}
