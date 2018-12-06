<?php

namespace ReplyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ReplyBundle extends Bundle
{
     public function getParent()
    {
        return 'FOSUserBundle';
    }
}
