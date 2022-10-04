<?php

namespace Clevpro\Paypal;

use Illuminate\Support\ServiceProvider;

class PaypalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
          __DIR__.'/config/paypal.php' => config_path('paypal.php'),
      ]);

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views','paypal');

    }//end boot method

    public function register()
    {
    }//end register method

}
