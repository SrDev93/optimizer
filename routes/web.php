<?php

use Illuminate\Support\Facades\Route;
use Killswitch\Http\Controllers\OptimizerController;

Route::get('optimize/run', [OptimizerController::class, 'run']);
