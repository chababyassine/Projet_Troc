<?php

namespace App\Controller;

use App\Entity\CardsHome;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/product/{id}', name: 'app_product')]
    public function index(CardsHome $cards): Response
    {
        return $this->render('product/index.html.twig', [
            'card' => $cards, 
        ]);
    }
}
