<?php

namespace App\Providers;

use App;

use Illuminate\Support\ServiceProvider;

class NameEnvServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind ('nameEnv', function() {
            return new \App\Test\NameEnvIndicate();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
