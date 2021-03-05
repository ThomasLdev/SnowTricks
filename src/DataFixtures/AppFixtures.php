<?php

namespace App\DataFixtures;

use App\Entity\Trick;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $trick = new Trick();
        $trick->setName('mute');
        $trick->setCategory('grab');
        $trick->setDescription('saisie de la carre frontside de la planche entre les deux pieds avec la main avant');
        $trick->setCreatedAt(new DateTime());
        $trick->setUpdatedAt(new DateTime());

        $manager->persist($trick);

        $manager->flush();
    }
}
