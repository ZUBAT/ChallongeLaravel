<?php namespace ZUBAT\Challonge\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the challonge facade class.
 *
 */

class Challonge extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
		protected static function getFacadeAccessor() { return 'ZUBAT\Challonge\Challonge'; }

}
