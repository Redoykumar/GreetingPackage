<?php
namespace Redoy\GreetingPackage;

use Illuminate\Support\ServiceProvider;

class GreetingPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the GreetingService class
        $this->app->singleton(GreetingService::class, function () {
            return new GreetingService();
        });
    }

    public function boot()
    {
        // Optionally, we could publish config, views, etc.
    }
}
