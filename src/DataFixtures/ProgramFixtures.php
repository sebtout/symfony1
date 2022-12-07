<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $walkingDead = new Program();
        $walkingDead->setTitle('Walking dead');
        $walkingDead->setSynopsis('Des zombies envahissent la terre');
        $walkingDead->setCategory($this->getReference('category_Action'));
        $manager->persist($walkingDead);

        $friends = new Program();
        $friends->setTitle('Friends');
        $friends->setSynopsis('Premier épisode de friends');
        $friends->setCategory($this->getReference('category_Animation'));
        $manager->persist($friends);

        $totoInSpace = new Program();
        $totoInSpace->setTitle('Toto dans l\'espace');
        $totoInSpace->setSynopsis('toto visite l\'espace');
        $totoInSpace->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($totoInSpace);

        $indi = new Program();
        $indi->setTitle('indiana jones');
        $indi->setSynopsis('premier episode de indi');
        $indi->setCategory($this->getReference('category_Aventure'));
        $manager->persist($indi);

        $ca = new Program();
        $ca->setTitle('ça');
        $ca->setSynopsis('ça le clown de l\'egout');
        $ca->setCategory($this->getReference('category_Horreur'));
        $manager->persist($ca);
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
