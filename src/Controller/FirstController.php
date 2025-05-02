<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FirstController extends AbstractController
{
    #[Route('/first', name: 'first')]
    public function index(): Response
    {

        return $this->render('first/index.html.twig',[
            'name'=> 'bilel',
            'firstname' => 'hammemi']);
    }

    #[route('/sayHello', name: 'say.hello')]
    public function sayHello(): Response{
        $x=rand(0,5);
        echo $x;
        if($x==1){
        return $this->forward('App\Controller\FirstController::index');}
        return $this->render('first/sayHello.html.twig',[]);
    }
    }
