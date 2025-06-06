<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
// filepath: app/Providers/RouteServiceProvider.php
// ...existing code...
Route::middleware('api')
    ->prefix('api')
    ->group(base_path('routes/api.php'));
// ...existing code...
    }
}
