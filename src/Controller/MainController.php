<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    public function custom(?string $name): Response
    {
        return $this->render('home/custom.html.twig', [
            'name' => $name
        ]);
    }
}
