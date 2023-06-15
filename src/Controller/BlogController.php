<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'Ines ',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('blog/home.html.twig');
    }

    /**
     * @Route("/blog/1", name="blog_show")
     */
    public function show()
    {
       return $this->render('blog/show.html.twig');
    }

    /**
     * @Route("/blog/new", name="new_blog")
     */
    public function new()
    {
       return $this->render('blog/new.html.twig');
    }
}
