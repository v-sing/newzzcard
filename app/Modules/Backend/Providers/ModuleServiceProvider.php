<?php

namespace App\Modules\Backend\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('Backend', 'Resources/Lang', 'app'), 'Backend');
        $this->loadViewsFrom(module_path('Backend', 'Resources/Views', 'app'), 'Backend');
        $this->loadMigrationsFrom(module_path('Backend', 'Database/Migrations', 'app'), 'Backend');
        $this->loadConfigsFrom(module_path('Backend', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('Backend', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
