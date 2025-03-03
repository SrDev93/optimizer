<?php

namespace Optimizer;

use Illuminate\Support\ServiceProvider;

class OptimizerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/optimizer.php', 'optimizer');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\OptimizerCommand::class,
            ]);
        }
    }
}
