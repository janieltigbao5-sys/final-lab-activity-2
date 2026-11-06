<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
>>>>>>> 90623c25677d999ba27fd6a1b20bbf7d0ade509d
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
<<<<<<< HEAD
=======
    /**
     * Register any application services.
     */
>>>>>>> 90623c25677d999ba27fd6a1b20bbf7d0ade509d
    public function register(): void
    {
        //
    }

<<<<<<< HEAD
    public function boot(): void
    {
        DB::listen(function ($query) {
            logger($query->sql . ' | ' . $query->time . 'ms');
        });
    }
}
=======
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
>>>>>>> 90623c25677d999ba27fd6a1b20bbf7d0ade509d
