<?php

namespace App\Controller;

use App\Entity\MyTest;
use App\Repository\MyTestRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyTestController extends AbstractController
{
    #[Route('/test', name: 'get_my_test', methods: 'get')]

    public function index(MyTestRepository $myTestRepository): Response
    {
        $data = $myTestRepository->findAll();
        //dd($data);
        return new JsonResponse(["Lastname " => $data[0]->getLastname()]);
    }

    #[Route('/test', name: 'post_my_test', methods: 'post')]

    public function createProduct(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $myTest = new MyTest();
        $myTest->setName('Keyboard');
        $myTest->setLastname("blabla");

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($myTest);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$myTest->getId());
    }
}
