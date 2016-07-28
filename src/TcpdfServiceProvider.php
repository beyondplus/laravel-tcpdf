<?php

namespace BeyondPlus\TCPDF;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
class TcpdfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        // if (is_dir(base_path().'/resources/views/bp-admin')) {
        //     $this->loadViewsFrom(base_path().'/resources/views/bp-admin', 'bp-admin');
        // } else {
        //     $this->loadViewsFrom(__DIR__.'/views', 'bp-admin');
        // }
        //
        // $this->publishes([
        //     __DIR__.'/views' => base_path('resources/views/bp-admin'),
        // ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
     public function register()
      {
            App::bind('MMTCPDF', function()
          {
              return new \BeyondPlus\TCPDF\MMTCPDF;
          });
          // $this->registerHtmlBuilder();
          // // App::bind('someclass', function()
          // // {
          // //     return new \App\Classes\Someclass;
          // // });
          // $this->app->alias('TCPDF', 'BeyondPlus\Tcpdf\TCPDF');
      }


      // protected function registerHtmlBuilder()
      // {
      //     $this->app->singleton('tcpdf', function ($app) {
      //         return new TCPDF();
      //     });
      // }

      // public function provides()
      // {
      //     return ['TCPDF', 'BeyondPlus\Tcpdf\TCPDF'];
      // }
    // public function register()
    // {
    //     $this->app->bind('Requirement', function($app){
    //         return new \App\Classes\Requirement();
    //     });
    // //    include __DIR__.'/TCPDF_FONTS.php';
    // }
}
