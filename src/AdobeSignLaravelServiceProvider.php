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

        $provider = new \KevinEm\OAuth2\Client\AdobeSign($this->app['config']['adobe-sign']);

        $this->app->bind('adobe-sign-laravel', $this->createAdobeSignLaravelClosure($provider));
    }

    /**
     * @param \KevinEm\OAuth2\Client\AdobeSign $provider
     * @return AdobeSign
     */
    protected function createAdobeSignLaravelClosure(\KevinEm\OAuth2\Client\AdobeSign $provider)
    {
        return new AdobeSign($provider);
    }
}