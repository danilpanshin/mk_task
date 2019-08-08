<?php

namespace App\Controller;

use App\Entity\NewsPost;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\NewsPostInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class NewsPostWebController {

    private $cache;
    private $repository;

    public function __construct(cacheInterface $cache) 
    {
    /*
    * Получаем объект из слоя кэша, из которого будем получать данные
    * Инициализируем репозиторий, на случай если кэш пуст
    */
    }
    
    /**
     * @param Post $post
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/post/{id}", name="post")
     */
    public function showNewsPostById($newsId) 
    {
    /*
    * Получаем данные из тэгированного кэша  
    */
    }

    /*
    *Пагинация
    */
    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM AcmeMainBundle:Post a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );

        // parameters to template
        return $this->render('post/list.html.twig', ['pagination' => $pagination]);
    }


}
