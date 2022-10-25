<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelBi\LaravelBi\Support\BiRequest;

class HomeController extends Controller
{
    // public function __construct()
    // {   
    //     return $this->middleware('auth');
    // }

    public function index(){
        return view('home');
    }

    public function getIndex(BiRequest $request)
    {
        return redirect(route('bidashboard', ['dashboard' => $this->dashboardResolver->first()->uriKey]));
    }

    public function getDashboard(BiRequest $request)
    {
        return view('bi::index')
            ->with('serverData', $this->getServerData());
    }

    protected function getServerData()
    {
        return [
            'base' => Config::get('bi.path', 'bi')
        ];
    }
}
