<?php

namespace App\Controller;

use App\Entity\CardsHome;
use App\Repository\CardsHomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController {

    
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $manager, CardsHomeRepository $repoEntity): Response
    {

        $repoEntity = $manager->getRepository(CardsHome::class);
        $bdd = $repoEntity->findAll();

        return $this->render('home/index.html.twig', [
            'cards' => $bdd
        ]);
    }

    #[Route('/', name: 'app_home')]
    public function components(EntityManagerInterface $manager, CardsHomeRepository $repoEntity): Response
    {

        $repoEntity = $manager->getRepository(CardsHome::class);
        $bdd = $repoEntity->findAll();

        return $this->render('home/index.html.twig', [
            'cards' => $bdd
        ]);
    }
}

