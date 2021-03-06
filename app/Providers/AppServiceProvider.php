<?php

namespace App\Providers;

use App\Mixins\StrMixins;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        // #1
//        Str::macro('partNumber', function($part){
//           return "AB-".substr($part, 0, 3)."-".substr($part, 3);
//        });

        Str::mixin(new StrMixins());

        ResponseFactory::macro('errorJson', function ($msg = "Default error message"){
            return [
                'message' => $msg,
                'error_code'=> 123
            ];
        });
    }
}
