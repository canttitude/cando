<?php

namespace Canttitude\Cando\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Canttitude\Cando\Cando
 */
class Cando extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Canttitude\Cando\Cando::class;
    }
}
