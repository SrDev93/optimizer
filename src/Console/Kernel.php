<?php

namespace Optimizer\Console;

use Illuminate\Console\Command;

class Kernel extends \Illuminate\Console\Kernel
{
    protected $commands = [
        \Optimizer\Console\OptimizerCommand::class,
    ];
}
