<?php

namespace App\Bi\Dashboards;

use LaravelBi\LaravelBi\Dashboard;

class ProductDashboard extends Dashboard
{

    public $model  = App\Models\ProductModel::class;
    public $uriKey = 'productDashboard';
    public $name   = 'ProductDashboard';

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
