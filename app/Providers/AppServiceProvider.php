<?php

namespace App\Providers;

use BezhanSalleh\LanguageSwitch\LanguageSwitch;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(LaravelLocalization::getSupportedLanguagesKeys())
                ->flags([
                    'tr' => asset('media/flags/tr.svg'),
                    'en' => asset('media/flags/usa.svg'),
                ])
                ->flagsOnly(true)
                ->circular();
        });
    }
}
