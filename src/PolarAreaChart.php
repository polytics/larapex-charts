<?php

namespace Polytics\LarapexCharts;


use Polytics\LarapexCharts\Contracts\MustAddSimpleData;
use Polytics\LarapexCharts\Traits\SimpleChartDataAggregator;

class PolarAreaChart extends LarapexChart implements MustAddSimpleData
{
    use SimpleChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'polarArea';
    }

    public function addPolarAreas(array $data) :PolarAreaChart
    {
        $this->addData($data);
        return $this;
    }
}