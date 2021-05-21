<?php

namespace Tarunsmtgroup\Custompackage;

use Illuminate\Support\ServiceProvider;

class CustompackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    { 
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->app->make('Tarunsmtgroup\Custompackage\CustompackageController');
        $this->loadViewsFrom(__DIR__.'/views', 'custompackage');
    }
}
