<?php

namespace App\DataFixtures;

use App\Entity\Annonce;
use Cassandra\Date;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $annonce = new Annonce();
        $annonce->setTitre('Lorem ipsum dolor sit amet.');
        $annonce->setContenu('Lorem ipsum dolor sit amet. composer require --dev orm-fixtures ');
        $annonce->setPrix(10.4);
        $annonce->setCodePostal(63000);
        $annonce->setDateDeCreation(date_create('now'));

        $manager->persist($annonce);
        $manager->flush();
    }
}
