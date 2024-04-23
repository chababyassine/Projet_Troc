<?php

namespace App\DataFixtures;

use App\Entity\CardsHome;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i < 16; $i++) { 

            $card = new CardsHome();
            $card->setImageUrl('https://picsum.photos/id/5' . $i . '/200/300');
            $card->setNameArticle('Nom de l\'article ' . $i . ' à troquer');
            $card->setCity('Ville ' . $i . ' de France');
            $card->setInfo('Lorem ' . $i . ' ipsum, dolor sit amet consectetur adipisicing elit.');
            $manager->persist($card);

        }

        $manager->flush();
    }
}
