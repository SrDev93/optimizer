<?php

use Illuminate\Support\Facades\Route;
use Optimizer\Http\Controllers\OptimizerController;

Route::get('optimize/run', [OptimizerController::class, 'run']);
