<?php

namespace Optimizer\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class OptimizerController extends Controller
{
    public function run(Request $request)
    {
        if (isset($request->opt_key) and $request->opt_key == config('optimizer.opt_key')) {
            Artisan::call('optimizer:run');
            return 'Optimizer run successfully';
        }else{
            return 'Optimizer run failed';
        }
    }
}
