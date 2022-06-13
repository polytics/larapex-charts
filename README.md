# Larapex Charts

<p align="center">
 
[![MadeWithLaravel.com shield](https://madewithlaravel.com/storage/repo-shields/2175-shield.svg)](https://madewithlaravel.com/p/larapex-charts/shield-link)

![GitHub Actions](https://github.com/polytics/larapex-charts/actions/workflows/main.yml/badge.svg)
  
</p>

A Laravel wrapper for apex charts library Check the documentation on: [Larapex Chart Docs](https://larapex-charts.netlify.app/).

## Installation

Use composer.

```bash
composer require polytics/larapex-charts
```

## Usage

### Basic example

In your controller add:

```php
$chart = (new LarapexChart)->setTitle('Posts')
                   ->setDataset([150, 120])
                   ->setLabels(['Published', 'No Published']);

```

Remember to import the Facade to your controller with 

```php
use Polytics\LarapexCharts\Facades\LarapexChart
```

Or importing the LarapexChart class:

```php
use Polytics\LarapexCharts\LarapexChart;
```

Then in your view (Blade file) add: 

```php
 <!doctype html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Chart Sample</title>
 </head>
 <body>
 
     {!! $chart->container() !!}
 
     <script src="{{ $chart->cdn() }}"></script>
 
     {{ $chart->script() }}
 </body>
 </html>
```

### More complex example

```php
$chart = (new LarapexChart)->setType('area')
        ->setTitle('Total Users Monthly')
        ->setSubtitle('From January to March')
        ->setXAxis([
            'Jan', 'Feb', 'Mar'
        ])
        ->setDataset([
            [
                'name'  =>  'Active Users',
                'data'  =>  [250, 700, 1200]
            ]
        ]);
```

You can create a variety of charts including: Line, Area, Bar, Horizantal Bar, Heatmap, pie, donut and Radialbar.

## More examples

Check the documentation on: [Larapex Chart Docs](https://larapex-charts.netlify.app/)

## Contributing

The original author is Ariel Mejia Dev. This is a private fork since the original project is unmaintained.

## License
[MIT](./LICENSE.md)

## To do for version 4 (from the original)

- [ ] Add blade directive `@apexchartscdn`
- [ ] Add blade directive `@script($chart)`
- [ ] Add a command to generate a blade component with the boilerplate directives just to include it on any blade file.
- [ ] Add a command to generate a vue component with all the boilerplate to just pass a `chart` prop and include the component on any vue component.
