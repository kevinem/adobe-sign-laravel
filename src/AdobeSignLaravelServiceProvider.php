<?php


namespace KevinEm\AdobeSignLaravel;


use Illuminate\Support\ServiceProvider;
use KevinEm\AdobeSign\AdobeSign;

class AdobeSignLaravelServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $config = $this->app['path.config'] . '/adobe-sign.php';

        $this->publishes([
            __DIR__ . '/../config/config.php' => $config
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'adobe-sign');

        $this->app->bind('adobe-sign-laravel', $this->createAdobeSignLaravelClosure());
    }

    /**
     * @return \Closure
     */
    protected function createAdobeSignLaravelClosure()
    {
        return function ($app) {
            $provider = new \KevinEm\OAuth2\Client\AdobeSign($app['config']['adobe-sign']);

            return new AdobeSign($provider);
        };
    }
}