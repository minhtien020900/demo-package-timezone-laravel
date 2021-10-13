<?php

namespace DemoPackage\MinhTien\Timezone\Provider;

use Illuminate\Support\ServiceProvider;

class DemoTimezonesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'timezones');
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/timezones'),
        ]);
    }
}
