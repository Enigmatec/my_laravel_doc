<?php

namespace App\Providers;

use App\Payment\Paystack;
use App\Payment\FlutterWave;
use App\Contracts\PaymentChoice;
use Illuminate\Support\ServiceProvider;

class PaymentPlatformProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PaymentChoice::class, function($app){
            if(request()->get('platform') == 'flutterwave'){
                return new FlutterWave(config('app.flutter_wave_api_key'));
            }
            return new Paystack(config('app.paystack_api_key'));
         });
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
