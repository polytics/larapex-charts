<?php


namespace Polytics\LarapexCharts;


use Polytics\LarapexCharts\Contracts\MustAddComplexData;
use Polytics\LarapexCharts\Traits\ComplexChartDataAggregator;

class HeatMapChart extends LarapexChart implements MustAddComplexData
{
    use ComplexChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'heatmap';
    }

    public function addHeat(string $name, array $data) :HeatMapChart
    {
        return $this->addData($name, $data);
    }
}