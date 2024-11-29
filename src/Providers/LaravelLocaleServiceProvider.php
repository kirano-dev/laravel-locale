<?php

namespace KiranoDev\LaravelLocale\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelLocaleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/locale.php');
    }
}