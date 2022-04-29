<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MaintenanceServiceProvider extends ServiceProvider
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
		Blade::directive('live', function() {
            return '<?php if(!\App\Helpers\MaintenanceHelper::isDown(request())): ?>';
        });
		
		Blade::directive('endlive', function() {
            return '<?php endif; ?>';
        });
    }
}
