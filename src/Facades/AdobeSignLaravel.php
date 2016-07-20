<?php


namespace KevinEm\AdobeSignLaravel\Facades;


use Illuminate\Support\Facades\Facade;

class AdobeSignLaravel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'adobe-sign-laravel';
    }
}