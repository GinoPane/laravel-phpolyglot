<?php
/**
 * Laravel PHPolyglot Package
 *
 * @author: Sergey <Gino Pane> Karavay
 */

namespace GinoPane\LaravelPhpolyglot;

use GinoPane\PHPolyglot\PHPolyglot;
use Illuminate\Support\Facades\Facade;

class LaravelPhpolyglotFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PHPolyglot::class;
    }
}