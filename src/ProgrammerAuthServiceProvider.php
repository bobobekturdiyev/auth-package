<?php

namespace Programmeruz\AuthPackage;

use Illuminate\Support\ServiceProvider;

class ProgrammerAuthServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'authpackage');
    }

    public function register()
    {
        // Bindings
    }

}
