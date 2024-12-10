<?php
namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\State;
use App\Models\District;
use App\Models\LocalGovernment;
use App\Models\Proof;
use App\Models\Purpose;
use Yajra\DataTables\Html\Builder;
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
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        Builder::useVite();
        View::composer('*', function ($view) {
            $view->with('getStateName', function ($stateId) {
                $state = State::find($stateId);
                return $state ? $state->name : '';
            });
            $view->with('getDistrictName', function ($districtId) {
                $district = District::find($districtId);
                return $district ? $district->name : '';
            });
            $view->with('getLocalName', function ($localId) {
                $local = LocalGovernment::find($localId);
                return $local ? $local->name : '';
            });
            $view->with('getProofName', function ($proofId) {
                $proof = Proof::find($proofId);
                return $proof ? $proof->title : '';
            });
            $view->with('getPurposeName', function ($purposeId) {
                $purpose = Purpose::find($purposeId);
                return $purpose ? $purpose->title : '';
            });
        });
    }
}









