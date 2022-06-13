<?php

namespace Polytics\LarapexCharts\Facades;

use Polytics\LarapexChart\LarapexChart;

class LarapexChart extends Facade
{

    protected static function getFacadeAccessor()
    {
        return LarapexChart::class;
    }

}
