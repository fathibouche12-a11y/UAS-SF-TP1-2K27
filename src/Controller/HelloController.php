<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HelloController extends AbstractController
{
    #[Route('/hello', name: 'app_hello')]
    public function index(): Response
    {
        return $this->render('hello/index.html.twig', [
            'name' => 'Symfony 7 2eme GI -  UAS',
        ]);
    }

    #[Route('/hello/{nom}', name: 'app_hello_name')]
    public function helloName(string $nom): Response
    {
        return $this->render('hello/index.html.twig', [
            'name' => $nom
        ]);
    }
}
