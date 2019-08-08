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
     * @Route("api/post/{id}", name="post")
     */
    public function showNewsPostById($newsId) 
    {
    /*
    * Получаем данные из тэгированного кэша  
    */
    }

    public function showLastNews()
    {
        /*
        *получаем json список последних новостей
        */
    }


}
