<?php

namespace Modules\Blume;

use Illuminate\Support\ServiceProvider;

class BlumeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'blume');
        $this->mergeConfigFrom(__DIR__ . '/../config/blume.php', 'blume');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
