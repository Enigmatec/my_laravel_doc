<?php

namespace App\Providers;

use App\Services\Role;
use App\Payment\Paystack;
use App\Payment\FlutterWave;
use Illuminate\Http\Request;
use App\Contracts\PaymentChoice;
use Illuminate\Support\Facades\View;
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
        $this->app->bind(Role::class, function($app){
            return new Role(config('app.user_name'), $app->make(User::class));
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['pages.post.index', 'pages.comment.index'], function($view){
            $view->with('name', 'Adeola');
        });
    }
}
