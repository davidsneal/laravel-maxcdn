<?php

namespace Davidsneal\MaxCDN;

use Illuminate\Support\ServiceProvider;

class MaxCDNServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Davidsneal\MaxCDN\MaxCDN', function(){
            return new MaxCDN();
        });
    }
}
