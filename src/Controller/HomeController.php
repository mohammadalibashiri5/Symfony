<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response

    {
        $carouselData = [
            [
                'image' => 'occasion.webp',
                'title' => 'First Slide Label',
                'content' => 'Some representative placeholder content for the first slide.',
            ],
            [
                'image' => 'entretien.webp',
                'title' => 'Second Slide Label',
                'content' => 'Some representative placeholder content for the second slide.',
            ],
            [
                'image' => 'carrossorie.webp',
                'title' => 'Third Slide Label',
                'content' => 'Some representative placeholder content for the third slide.',
            ],
        ];

        return $this->render('base.html.twig', [
            'carouselData' => $carouselData,
        ]);
    }
}
