<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EventFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $event1 = new Event();
            $event1->setTitle('Salon Terre naturelle et environnement Chapit\'O');
            $event1->setUrl('https://cdn.pixabay.com/photo/2014/05/21/14/53/pier-349672__340.jpg');
            $event1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
         Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum 
         ultrices diam. Maecenas ligula massa, varius a, semper congue, ');
            $event1->setEventlink('https://www.salon-terre-naturelle-orleans.fr/');
            $manager->persist($event1);
        }

        $manager->flush();
    }
}