<?php

namespace Tests\Entity;

use App\Entity\Dinosaur;
use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{
    public function testItReturnsFullSpecificationOfDinosaur()
    {
        $dinosaur = new Dinosaur();

        $this->assertSame(
            'The Unknown non-carnivorous dinosaur is 0 meters long.',
            $dinosaur->getSpecification()
        );
    }

    public function testReturnsFullSpecificationForTyrannosaurus()
    {
        $dinosaur = new Dinosaur('Tyranosaurus', true);

        $dinosaur->setLength(12);

        $this->assertSame(
            'The Tyranosaurus carnivorous dinosaur is 12 meters long.',
            $dinosaur->getSpecification()
        );
    }
}