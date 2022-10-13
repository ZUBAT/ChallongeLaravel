<?php namespace ZUBAT\Challonge;


use Illuminate\Support\ServiceProvider;
use Challonge;

/**
 *
 * Challonge ServiceProvider
 *
 * @category   Laravel Challonge
 * @package    ZUBAT/Challonge
 * @copyright  Copyright (c) 2022 ZUBAT (https://zubat.ru)
 * @author     ZUBAT <admin@zubat.ru>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 */
class ChallongeServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */

    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->bindChallonge();
    }

    /**
     * Bind Challonge class
     * @return void
     */
    protected function bindChallonge()
    {
        // Bind the Challonge class and inject its dependencies

        $this->app->singleton(Challonge::class, function ($app) {
            return new Challonge(env('CHALLONGE_KEY'));
        });


        // $this->app->alias('challonge', Challonge::class);
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'challonge',
        ];
    }
}
