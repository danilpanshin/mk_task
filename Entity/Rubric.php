<?php

namespace App\Entity;

class Rubric 
{
    private $id;
    private $title;

    /**
     * @ORM\ManyToMany(targetEntity="Post", mappedBy="rubrics")
     */
    private $posts;
   
}