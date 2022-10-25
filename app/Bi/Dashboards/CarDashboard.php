<?php

namespace App\Bi\Dashboards;

use LaravelBi\LaravelBi\Dashboard;

class CarDashboard extends Dashboard
{

    public $model  = App\Models\CarModel::class;
    public $uriKey = 'carDashboard';
    public $name   = 'CarDashboard';

    public function filters()
    {
        return [
            
        ];
    }

    public function widgets()
    {
        return [
            
        ];
    }
}
