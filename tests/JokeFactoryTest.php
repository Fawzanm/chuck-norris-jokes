<?php

namespace Fawzanm\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Fawzanm\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{

    /** @test */
    public function it_returns_a_random_joke(){
        
        $chuckNorrisJokes = [
            'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
            'When Chuck Norris was in middle school, his English teacher assigned an essay: "What is courage?" He received an A+ for turning in a blank page with only his name at the top.',
            'Chuck Norris can kill two stones with one bird.',
            'Chuck Norris knows Victoria\'s secret.'
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);

    }
}