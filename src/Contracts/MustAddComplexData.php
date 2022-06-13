<?php


namespace Polytics\LarapexCharts\Contracts;


interface MustAddComplexData
{
    public function addData(string $name, array $data);
}