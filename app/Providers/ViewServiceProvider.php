<?php

namespace App\Providers;

use App\View\Composers\CompanyComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('prueba', 'Este es un mensaja de prueba');


    View::composer(['welcome'], CompanyComposer::class);
    }
}
