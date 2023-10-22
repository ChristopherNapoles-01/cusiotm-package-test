<?php
namespace CustomPackage\test;

use CustomPackage\Greetings;

class Test
{
    public function test_greetings()
    {
        $greetings = new Greetings();

        $greetings->greeetings();
    }
}