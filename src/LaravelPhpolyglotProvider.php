<?php
/**
 * Laravel PHPolyglot Package
 *
 * @author: Sergey <Gino Pane> Karavay
 */

namespace App\Providers;

use GinoPane\PHPolyglot\PHPolyglot;
use Illuminate\Support\ServiceProvider;

class LaravelPhpolyglotProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            dirname(__FILE__, 2).'/vendor/gino-pane/phpolyglot/config.php' => config_path('phpolyglot.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PHPolyglot::class, function ($app) {
            return new PHPolyglot();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [PHPolyglot::class];
    }
}