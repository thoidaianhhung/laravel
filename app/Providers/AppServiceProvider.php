<?php

namespace App\Providers;

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
        // Inject interface vao tang services
        $this->app->singleton(
            CustomerRepository::class,
            CustomerRepositoryImpl::class
        );

        // Inject interface vao tang controller
        $this->app->singleton(
            CustomerService::class,
            CustomerServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
