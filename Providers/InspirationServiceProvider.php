<?php
namespace Fhsinchy\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $basePath = dirname(__DIR__);

        $this->loadRoutesFrom($basePath . '/routes/web.php');
        $this->loadViewsFrom($basePath . '/views', 'inspire');
    }
}
