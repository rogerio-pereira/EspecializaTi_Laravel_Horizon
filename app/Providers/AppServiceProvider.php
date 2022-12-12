<?php

namespace App\Providers;

use App\Services\Images\IntervationImage;
use App\Services\Images\WatermarkInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(WatermarkInterface::class, IntervationImage::class);
    }
}
