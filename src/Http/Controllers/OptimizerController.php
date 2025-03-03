<?php

namespace Optimizer\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class OptimizerController extends Controller
{
    public function run(Request $request)
    {
        Artisan::call('optimizer:run');
        return 'Optimizer run successfully';
    }
}
