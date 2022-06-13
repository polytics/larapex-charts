<?php


namespace Polytics\LarapexCharts\Traits;


use Polytics\LarapexCharts\LarapexChart;

trait SimpleChartDataAggregator
{
    public function addData(array $data) :self
    {
        $this->dataset = $data;

        $this->dataset = json_encode($this->dataset);

        return $this;
    }
}