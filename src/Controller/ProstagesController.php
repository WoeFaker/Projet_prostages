<?php

namespace App\Controller;
use App\Entity\Stage;
use App\Entity\Formation;
use App\Entity\Entreprise;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstagesController extends AbstractController
{
    public function index(): Response
    {
        // Récuperer le repository de la bd
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        // Récuperer les ressources enregistrés en BD
        $stages = $repositoryStage->findAll();
        // Envoyer les ressources recuperées a la vue chargée de les afficher
        
        return $this->render('prostages/index.html.twig', [
            'controller_name' => 'ProstagesController', 'stages'=>$stages
        ]);
    }

    public function entreprises(): Response
    {
        // Récuperer le repository de la bd
        $repositoryEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        // Récuperer les ressources enregistrés en BD
        $entreprises = $repositoryEntreprise->findAll();
        // Envoyer les ressources recuperées a la vue chargée de les afficher

        return $this->render('prostages/entreprises.html.twig', [
            'controller_name' => 'ProstagesController', 'entreprises'=>$entreprises
        ]);
    }

    /**
     * @Route("/entreprise/{id}", name="entreprise")
     */
    public function entreprise($id): Response
    {
        // Récuperer le repository de la bd
        $repositoryEntrepriseU = $this->getDoctrine()->getRepository(Entreprise::class);
        // Récuperer les ressources enregistrés en BD
        $entreprise = $repositoryEntrepriseU->find($id);
        // Envoyer les ressources recuperées a la vue chargée de les afficher
        return $this->render('prostages/entreprise.html.twig', [
            'controller_name' => 'ProstagesController', 'entreprise'=>$entreprise
        ]);
    }

    public function formations(): Response
    {
        // Récuperer le repository de la bd
        $repositoryFormation = $this->getDoctrine()->getRepository(Formation::class);
        // Récuperer les ressources enregistrés en BD
        $formations = $repositoryFormation->findAll();
        // Envoyer les ressources recuperées a la vue chargée de les afficher
        return $this->render('prostages/formations.html.twig', [
            'controller_name' => 'ProstagesController', 'formations'=>$formations
        ]);
    }
    
    /**
     * @Route("/formation/{id}", name="formation")
     */
    public function formation($id): Response
    {
        // Récuperer le repository de la bd
        $repositoryFormationU = $this->getDoctrine()->getRepository(Formation::class);
        // Récuperer les ressources enregistrés en BD
        $formation = $repositoryFormationU->find($id);
        // Envoyer les ressources recuperées a la vue chargée de les afficher
        return $this->render('prostages/formation.html.twig', [
            'controller_name' => 'ProstagesController', 'formation'=>$formation
        ]);
    }

    /**
     * @Route("/stages/{id}", name="stages")
     */
    public function stages($id): Response
    {   
        // Récuperer le repository de la bd
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        // Récuperer les ressources enregistrés en BD
        $stage = $repositoryStage->find($id);
        // Envoyer les ressources recuperées a la vue chargée de les affichée
        return $this->render('prostages/stages.html.twig', [
            'stage' => $stage,
        ]);
    }
}
