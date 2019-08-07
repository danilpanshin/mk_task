<?php

namespace App\Repository;

use App\Entity\Post;

class PostRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Post::class);
    }
}
