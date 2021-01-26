<?php

namespace RServices;

use Illuminate\Support\ServiceProvider;

class MindeeReceiptsClientServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mindee-receipts-client', function ($app) {
            return new \RServices\MindeeReceiptsClient(config('services.mindee.api_key'));
        });
    }

}
