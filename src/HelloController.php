<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HelloController extends AbstractController {

    function hello() {

        $title = "utilisateurs";
        $users = ["Mickey", "Leo", "Donnie", "Raph"];
        return $this->render('hello.html.twig', 
            ['title' => $title, 'array' => $users]);
    }
}