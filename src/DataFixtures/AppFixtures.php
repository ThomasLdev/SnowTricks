<?php

namespace App\DataFixtures;

use App\Entity\Trick;
use App\Factory\TrickFactory;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        TrickFactory::new()->createMany(15);
    }
}
