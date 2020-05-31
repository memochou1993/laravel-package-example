<?php

namespace MemoChou1993\Calculator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static int add(int $a, int $b)
 *
 * @see \MemoChou1993\Calculator\Calculator
 */
class Calculator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'calculator';
    }
}
