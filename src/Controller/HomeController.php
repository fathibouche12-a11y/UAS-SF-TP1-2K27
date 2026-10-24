<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'message' => 'Bienvenu Symfony 7',
        ]);
    }
    #[Route('/home/{name}', name: 'app_hello')]
    public function hello(string  $name): Response
    {
        return $this->render('home/hello.html.twig', [
            'name' => ucfirst($name),
        ]);
    }
    #[Route('/addition/{a}/{b}', name: 'app_addition')]
    public function addition(int  $a, int $b): Response
    {
        $result=$a+$b;
        return $this->render('home/addition.html.twig', [
            'a' =>$a,
            'b' =>$b,
            'result' =>$result,
        ]);
    }
}
