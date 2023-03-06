<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Navigation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $navigation = [
            [
                'url' => 'slug',
                'name' => 'Услуги'
            ],[
                'url' => 'shop',
                'name' => 'Каталог'
            ],[
                'url' => '3d-panel',
                'name' => '3D-панели'
            ],[
                'url' => 'delivery',
                'name' => 'Доставка'
            ],[
                'url' => 'contact',
                'name' => 'Контакты'
            ],
        ];
        View::share('navigation',$navigation);
    }
}
