<?php

namespace Blog\PostBundle\DependencyInjection;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Acl\Exception\Exception;

class DescriptionStrategy
{
    public function descriptionStrategy($description)
    {
        if(strlen($description) > 5)
        {
            throw new Exception("This description has more than 5 char");
        }
    }
}