<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'  =>\Faker\Provider\Lorem::sentence($nbWords = 6, $variableNbWords = true),
        'body' =>\Faker\Provider\Lorem::paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
