<?php

namespace Polytics\LarapexCharts;

use Polytics\LarapexCharts\Contracts\MustAddComplexData;
use Polytics\LarapexCharts\Traits\ComplexChartDataAggregator;

class AreaChart extends LarapexChart implements MustAddComplexData
{
    use ComplexChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'area';
    }

    public function addArea(string $name, array $data) :AreaChart
    {
        return $this->addData($name, $data);
    }
}