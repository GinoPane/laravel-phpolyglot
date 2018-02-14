Laravel PHPolyglot
==================

[![Latest Stable Version](https://poser.pugx.org/gino-pane/laravel-phpolyglot/v/stable)](https://packagist.org/packages/gino-pane/laravel-phpolyglot)
[![License](https://poser.pugx.org/gino-pane/laravel-phpolyglot/license)](https://packagist.org/packages/gino-pane/laravel-phpolyglot)
[![Total Downloads](https://poser.pugx.org/gino-pane/laravel-phpolyglot/downloads)](https://packagist.org/packages/gino-pane/laravel-phpolyglot)

Laravel package wrapper for [PHPolyglot](https://github.com/GinoPane/PHPolyglot).

Requirements
------------

* PHP >= 7.1;
* Laravel Framework.

Installation
============

    composer require gino-pane/laravel-phpolyglot
    
As per Laravel 5.5 service provider and facade will be registered automatically when installing. For previous versions please register service provider and facade manually.
After package installation please make sure to publish its configuration (if it was not done automatically by composer command):

    php artisan vendor:publish --provider="GinoPane\LaravelPhpolyglot\LaravelPhpolyglotProvider" --tag=config

or

    composer run-script post-package-install -d ./vendor/gino-pane/laravel-phpolyglot

Usage
=====

Please refer to original [PHPolyglot](https://github.com/GinoPane/PHPolyglot) documentation.

Changelog
=========

To keep track, please refer to [CHANGELOG.md](https://github.com/GinoPane/composer-package-template/blob/master/CHANGELOG.md).

License
=======

Please refer to [LICENSE](https://github.com/GinoPane/composer-package-template/blob/master/LICENSE).
