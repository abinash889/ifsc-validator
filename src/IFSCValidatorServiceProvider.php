<?php

namespace Abinash\IFSCValidator;


use Illuminate\Support\ServiceProvider;

class IFSCValidatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ifsc.php', 'ifsc');

        $this->app->bind('ifsc', function () {
            return new Services\IFSCService();
        });
    }

    public function provides()
    {
        return ['ifsc'];
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/ifsc.php' => config_path('ifsc.php'),
        ], 'config');
    }
}
