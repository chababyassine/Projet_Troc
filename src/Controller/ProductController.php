<?php

namespace App\Controller;

use App\Entity\CardsHome;
use App\Form\AdFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('/product/update/{id}', name: 'product_update')]
    public function update(Request $request, CardsHome $cards, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(AdFormType::class, $cards);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($cards);
            $manager->flush();

            return $this->redirectToRoute('app_product', [
                'id' => $cards->getId()
            ]);
        }

        return $this->render('product/update.html.twig', [
            'form' => $form, 
        ]);
    }
}
