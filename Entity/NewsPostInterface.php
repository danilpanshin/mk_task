<?php

namespace App\Entity;

interface NewsPostInterface 
{
    const STATUS_ID_PUBLISHED = 1;
    const STATUS_ID_DRAFT = 2;
    const STATUS_ID_READY_TO_PUBLISH = 3;
}