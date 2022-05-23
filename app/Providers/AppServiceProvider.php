<?php

namespace App\Providers;
<<<<<<< HEAD

use App\Models\Kelas;
use App\Models\AksesKelas;
=======
>>>>>>> 58e25b4f1f8cf32d6719408bc0d124cbfeff4750
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
<<<<<<< HEAD
// use App\Models\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\PersonalAccessToken;

=======
>>>>>>> 58e25b4f1f8cf32d6719408bc0d124cbfeff4750

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
        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });

        Blade::if('featured', function ($post) {
            return $post->featured();
        });
        // View::share('AksesKelas', AksesKelas::all());
    }
}
