<?php

namespace Digiti\GoogleTagmanager;

use Illuminate\Support\ServiceProvider;

class GoogleTagmanagerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        /**
         * Register Commands
         */
        $this->commands([
            //...
        ]);
    }

    public function register()
    {

    }
}
