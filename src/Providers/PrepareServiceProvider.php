<?php

namespace Teefa\Prepare\Providers;
use Illuminate\Support\ServiceProvider;


class PrepareServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([__DIR__."/../../assets"=>base_path()],'prepare');


    }





}
