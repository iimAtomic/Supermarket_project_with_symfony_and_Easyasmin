<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
Use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController {

    #[route('/','HomeController' , methods:['GET'])]
    public function index(ProductRepository $repo): Response
    {
        $map = array_map(function ($e) {
            return [
                'id' => $e ->getId(),
                'nom' => $e->getNom(),
                'description'=> $e->getDescription(),
                'prix'=> $e->getPrix(),
                'quantite' => $e->getQuantite(),
                'image'=> $e->getImage(),
                'category'=> $e->getCategory()
            ];
        }, $repo->findAll());

        return $this->render('Home/index.html.twig', [
            'entries' => $map
        ]);
    }
}






