<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        $services = [
            [
                'title' => 'Carrossorie',
                'image' => 'carrossorie.webp',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            ],
            [
                'title' => 'Occasion',
                'image' => 'occasioncar.webp',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            ],
            [
                'title' => 'Entretien',
                'image' => 'maintenance.webp',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            ]

        ];


        return $this->render('service/index.html.twig', [
            'services' => $services,
        ]);
    }
}
