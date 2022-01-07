<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Entreprise;
use App\Entity\Formation;
use App\Entity\Stage;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //Création d'un générateur de données Faker 
        $faker = \Faker\Factory::create('fr_FR');

        $tableau = array("","","","","");
        
        $nomGenereE = array("Kcorp","Ankama","Facebook","Amazon","JVC");
        for ($i = 0; $i < 5; $i++ ){
            $entreprise = new Entreprise();
            $entreprise->setActivite($faker->realText($maxNbChars = 50, $indexSize = 2));        
            $entreprise->setAdresse($faker->address());
            $entreprise->setNom($nomGenereE[$i]);
            $entreprise->setURLsite("www." . $nomGenereE[$i] . ".com");
            $manager->persist($entreprise);
            $tableau[$i] = $entreprise;
        }
        
        $nomGenereFL = array("BTS SYSTEME RESEAU","BTS UBER EAT","BTS MUSIQUE","BTS HESS","BTS ELECTRONIQUE");
        $nomGenereFC = array("BTS-SR","BTS-UE","BTS-M","BTS-H","BTS-ELEC");
        for ($i = 0; $i < 5; $i++ ){
            $formation = new Formation();
            $formation->setNomLong($nomGenereFL[$i]);
            $formation->setNomCourt($nomGenereFC[$i]);
            $manager->persist($formation);
        }

        $titreGenereS = array("Stage de jeux video","Stage de farm dofus","Stage de gestion de données","Stages de colis","Stages de moderation");
        for ($i = 0; $i < 5; $i++ ){
            $stage = new Stage();
            $stage->setEntreprise($tableau[$i]);  
            $stage->setDescMissions($faker->realText($maxNbChars = 200, $indexSize = 2));
            $stage->setTitre($titreGenereS[$i]);
            $stage->setEmailContact("stage".$i. "@.com");
            $manager->persist($stage);
        }

        $entreprise1 = new Entreprise();
        $entreprise1->setActivite("Création de jeux videos");
        $entreprise1->setAdresse("145 rue yves le coz Paris 78000");
        $entreprise1->setNom("Blizzard");
        $entreprise1->setUrlSite("https://www.blizzard.com/fr-fr/");
        $manager->persist($entreprise1);

        $entreprise2 = new Entreprise();
        $entreprise2->setActivite("Création de jeux videos");
        $entreprise2->setAdresse("677 rue Kradounet Nice 06000");
        $entreprise2->setNom("Epic Games");
        $entreprise2->setUrlSite("https://www.epicgames.com/store/fr/");
        $manager->persist($entreprise2);

        $entreprise3 = new Entreprise();
        $entreprise3->setActivite($faker->realText($maxNbChars =50, $indexSize = 2));
        $entreprise3->setAdresse("17 AV DE L EUROPE BOIS-COLOMBES 92270");
        $entreprise3->setNom("IBM");
        $entreprise3->setUrlSite("https://www.ibm.com/fr-fr");
        $manager->persist($entreprise3);

        $formation1 = new Formation();
        $formation1->setNomLong("Licence informatique");
        $formation1->setNomCourt("LI");
        $manager->persist($formation1);

        $formation2 = new Formation();
        $formation2->setNomLong("DUT Informatique");
        $formation2->setNomCourt("DUT info");
        $manager->persist($formation2);

        $formation3 = new Formation();
        $formation3->setNomLong("Licence mathématique");
        $formation3->setNomCourt("LM");
        $manager->persist($formation3);

        $stage1 = new Stage();
        $stage1->setTitre("stage de java");
        $stage1->setDescMissions("vous allez devoir coder un jeu en java en utilisant des ressources fournies pasr l'entreprise.");
        $stage1->setEmailContact("blizzardstage@gmail.com");
        $stage1->setEntreprise($entreprise1);
        $manager->persist($stage1);

        $stage2 = new Stage();
        $stage2->setTitre("stage de c++");
        $stage2->setDescMissions("vous allez effectuer un programme dans une equipe projet visant a gerer l'aspect communication du jeu the escapist.");
        $stage2->setEmailContact("epicgamesstage@gmail.com");
        $stage2->setEntreprise($entreprise2);
        $manager->persist($stage2);

        $stage3 = new Stage();
        $stage3->setTitre("stage de php");
        $stage3->setDescMissions("vous allez faire un stage de php visant a developper une application pour gerer les annuaire de notre entreprise");
        $stage3->setEmailContact("ibmstage@gmail.com");
        $stage3->setEntreprise($entreprise3);
        $manager->persist($stage3);


        $manager->flush();
    }
}
