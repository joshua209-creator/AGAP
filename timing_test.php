<?php
$start = microtime(true);
require __DIR__."/vendor/autoload.php";
$app = require_once __DIR__."/bootstrap/app.php";
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$afterBoot = microtime(true);
\DB::select("SELECT 1");
$afterQuery = microtime(true);
echo "Boot: " . round($afterBoot - $start, 2) . "s\n";
echo "Query: " . round($afterQuery - $afterBoot, 2) . "s\n";
