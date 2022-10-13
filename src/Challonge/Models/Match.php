<?php

namespace ZUBAT\Challonge\Models;

use ZUBAT\Challonge\Model;
use ZUBAT\Challonge\Helpers\Guzzle;

class Match extends Model
{
    /**
     * Update/submit the score(s) for a match.
     *
     * @param  array  $params
     * @return Match
     */
    public function update($params = [])
    {
        $response = Guzzle::put("tournaments/{$this->tournament_slug}/matches/{$this->id}", $params);
        return $this->updateModel($response->match);
    }
}
