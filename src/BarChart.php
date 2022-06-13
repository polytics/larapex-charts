<?php

namespace Polytics\LarapexCharts;

use Polytics\LarapexCharts\Contracts\MustAddComplexData;
use Polytics\LarapexCharts\Traits\ComplexChartDataAggregator;

class BarChart extends LarapexChart implements MustAddComplexData
{
    use ComplexChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'bar';
    }

    public function addBar(string $name, array $data) :BarChart
    {
        return $this->addData($name, $data);
    }
}