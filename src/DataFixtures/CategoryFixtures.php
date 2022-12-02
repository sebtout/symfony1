<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    // public function load(ObjectManager $manager)
    // {
    //     $category = new Category();
    //     $category->setName('Action');
    //     $manager->persist($category);
    //     $manager->flush();
    // }
    const CATEGORIES = [
        'Action',
        'Aventure',
        'Animation',
        'Fantastique',
        'Horreur',
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $key => $categoryNames) {
            $category = new Category();
            $category->setName($categoryNames);

            $manager->persist($category);
        }
        $manager->flush();
    }
}
