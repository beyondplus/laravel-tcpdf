<?php

namespace BeyondPlus\CmsLibrary;

use Illuminate\Support\ServiceProvider;
class CMSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

      



        if (is_dir(base_path().'/resources/views/bp-admin')) {
            $this->loadViewsFrom(base_path().'/resources/views/bp-admin', 'bp-admin');
        } else {
            $this->loadViewsFrom(__DIR__.'/views', 'bp-admin');
        }

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/bp-admin'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
    }
}
