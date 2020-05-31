<?php

namespace MemoChou1993\Calculator\Tests;

use Illuminate\Foundation\Application;
use MemoChou1993\Calculator\Facades\Calculator;
use MemoChou1993\Calculator\CalculatorServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * @param  Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            CalculatorServiceProvider::class,
        ];
    }

    /**
     * @param  Application  $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'calculator' => Calculator::class,
        ];
    }
}
