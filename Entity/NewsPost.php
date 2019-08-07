<?php

namespace App\Entity;

use App\Entity\NewsPostInterface;

class NewsPost implements NewsPostInterface
{
    private $id;
    private $title;
    private $statusId;
    private $text;
    private $publishDate;

    /**
     * @ORM\ManyToMany(targetEntity="Rubric", inversedBy="posts")
     */
    private $rubrics;
}