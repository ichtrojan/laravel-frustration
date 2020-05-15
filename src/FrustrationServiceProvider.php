<?php

namespace Ichtrojan\Frustration;

use Illuminate\Support\ServiceProvider;

class FrustrationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../publishable/config/frustration.php", 'frustration');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
        $kernel->pushMiddleware('Ichtrojan\Frustration\Http\Middleware\Frustrate');

        if ($this->app->runningInConsole()) {
            $this->publishConfigs();
        }
    }

    protected function publishConfigs()
    {
        $this->publishes([
            __DIR__ . "/../publishable/config/frustration.php" => config_path('frustration.php'),
        ], 'frustration');
    }
}
