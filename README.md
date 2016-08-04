# Adobe Sign for Laravel 5

https://acrobat.adobe.com/us/en/sign.html

[![Latest Stable Version](https://poser.pugx.org/kevinem/adobe-sign-laravel/v/stable?format=flat-square)](https://packagist.org/packages/kevinem/adobe-sign-laravel)
[![License](https://poser.pugx.org/kevinem/adobe-sign-laravel/license?format=flat-square)](https://packagist.org/packages/kevinem/adobe-sign-laravel)
[![Build Status](https://travis-ci.org/kevinem/adobe-sign-laravel.svg?branch=master)](https://travis-ci.org/kevinem/adobe-sign-laravel)

## Installation

To install, use composer:

```
composer require kevinem/adobe-sign-laravel
```

## Documentation

https://secure.na1.echosign.com/public/docs/restapi/v5

## Configuration

After installing the package, register the `KevinEm\AdobeSignLaravel\AdobeSignLaravelServiceProvider`
in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    KevinEm\AdobeSignLaravel\AdobeSignLaravelServiceProvider::class,
],

```
Also, you can add the `AdobeSignLaravel` facade to the `aliases` array in your `config/app.php` configuration file:

```php
'aliases' => [
    // Other facades...
    
    'AdobeSign' => KevinEm\AdobeSignLaravel\Facades\AdobeSignLaravel::class,
],
```

Publish the config using the following command:

```php
$ php artisan vendor:publish
```

## Example Usage

```php
$clients = PlacesScoutLaravel::clients()->lists();

$rankingReports = PlacesScoutLaravel::rankingReports()->lists();

$run = PlacesScoutLaravel::rankingReports()->getRun('7Qs0xGHWuE', '53mM466');
```

## License 

The MIT License (MIT)
Copyright (c) 2016 Kevin Em

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
documentation files (the "Software"), to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of
the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
IN THE SOFTWARE.
