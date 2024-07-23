<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Define a constant for the home path.
     */
    public const HOME = 'redirects';

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        // Register application services here
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Bootstrap application services here
    }
}
