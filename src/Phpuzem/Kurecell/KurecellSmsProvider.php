<?php

namespace Phpuzem\Kurecell;

use Illuminate\Support\ServiceProvider;
use Phpuzem\Kurecell\KurecellClass as MainClass;

class KurecellSmsProvider extends ServiceProvider {


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('kurecell.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['kurecell'] = $this->app->share(function ()
        {
            return new MainClass;
        });
        $this->app->alias('kurecell', 'Phpuzem\Kurecell\KurecellClass');
    }


}
