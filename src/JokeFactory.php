<?php

namespace Fawzanm\ChuckNorrisJokes;

class JokeFactory
{

    protected $jokes = [

        'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
        'When Chuck Norris was in middle school, his English teacher assigned an essay: "What is courage?" He received an A+ for turning in a blank page with only his name at the top.',
        'Chuck Norris can kill two stones with one bird.',
        'Chuck Norris knows Victoria\'s secret.'
    ];

    public function __construct(array $jokes = null)
    {
        if($jokes)
            $this->jokes = $jokes;
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }


}