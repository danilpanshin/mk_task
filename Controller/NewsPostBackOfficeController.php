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

    /*
    *тут стандартный CRUD, при создании новости, если ее статус Published
    *кэшируем ее. При удалении или смене статуса новости с Published
    *инвалидируем кэш по тегу 
    *
    */

}
