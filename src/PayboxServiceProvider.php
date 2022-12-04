<?php
namespace Tripsome\Paybox;

use Illuminate\Support\ServiceProvider;

class PayboxServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadConfiguration();

        $this->app->singleton('paybox', function () {
            return new PayboxService(config('paybox'));
        });
    }

    protected function loadConfiguration()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/paybox.php', 'paybox'
        );

        $this->publishes([
            __DIR__.'/../config/paybox.php' => config_path('paybox.php'),
        ], 'paybox-config');
    }
}
