# ChallongeLaravel
Package for interfacing with the [Challonge] API with Laravel 5.x

## Installation

`composer require ZUBAT/Challonge-laravel`

add `CHALLONGE_KEY=<your key>` to your .env 

update your config\app.php


Providers
```   	ZUBAT\Challonge\ChallongeServiceProvider::class,```


Facade
```		 'Challonge' => 'ZUBAT\Challonge\Facades\Challonge'```


## Usage

```
			try {
				$comp = Challonge::getTournament($challongeId);
				if((!empty($comp)) && (($comp->state == "complete") || ($comp->state == "underway") || ($comp->state == "group_stages_underway"))){					
					$standings = Challonge::getStandings($challongeId);
					// $standings['progress'] //Progress of group stage
				}
			} catch (Exception $e) {
				Log::warning('Challonge failed to load standings!', ['challonge'=>$challongeId]);
			}

```

## TODO
* Config Settings
* Add support for more than 1 group stage

ZUBAT - [zubat.ru](https://zubat.ru)
Forked from - [interludic.com.au](https://interludic.com.au)

[Challonge]: <http://api.challonge.com/v1>
