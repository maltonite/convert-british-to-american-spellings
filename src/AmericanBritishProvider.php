<?php

namespace Maltonite\AmericanBritish;

use Illuminate\Support\ServiceProvider;

class AmericanBritishProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/config/shortCodes.php' => base_path('config/shortCodes.php'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
