<?php
/**
 * Laravel PHPolyglot Package
 *
 * @author: Sergey <Gino Pane> Karavay
 */

namespace GinoPane\LaravelPhpolyglot;

use GinoPane\PHPolyglot\PHPolyglot;
use Illuminate\Support\ServiceProvider;

class LaravelPhpolyglotProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            dirname(__FILE__, 3).'/phpolyglot/config.php' => config_path('phpolyglot.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PHPolyglot::class, function ($app) {
            return new PHPolyglot($app['config']['phpolyglot'], []);
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
