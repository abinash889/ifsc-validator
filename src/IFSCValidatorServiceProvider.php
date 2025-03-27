<?php

namespace Abinash\IFSCValidator;


use Illuminate\Support\ServiceProvider;

class IFSCValidatorServiceProvider extends ServiceProvider
{
    public function register()
    {
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
    }
}
