<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use LaravelBi\LaravelBi\DashboardResolver;

class Controller extends BaseController
{
    protected $dashboardResolver;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(DashboardResolver $dashboardResolver)
    {
        $this->dashboardResolver = $dashboardResolver;
    }
}
