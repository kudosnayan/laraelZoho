<?php

namespace App\Providers;

use Asciisd\Zoho\Zoho;
use com\zoho\crm\api\dc\EUDataCenter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        Zoho::useEnvironment(EUDataCenter::DEVELOPER());
    }
}
