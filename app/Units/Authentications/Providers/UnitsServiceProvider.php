<?php
namespace App\Units\Authentications\Providers;


use Illuminate\Support\ServiceProvider;

class UnitsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}