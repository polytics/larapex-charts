<?php namespace Polytics\LarapexCharts\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Polytics\LarapexCharts\LarapexChartsServiceProvider;

class TestCase extends TestbenchTestCase
{
    /**
     * Sets the env data to interact as env file values
     *
     * @param [type] $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connection.testing', [
            'driver'    => 'sqlite',
            'database'  => ':memory:'
        ]);
    }

    // set providers to test the class
    protected function getPackageProviders($app): array
    {
        return [
            LarapexChartsServiceProvider::class,
        ];
    }
}
