<?php
namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;

class AppHelpers
{
    public function __construct(private ContainerBagInterface $param){}
    public function getBodyId(string $page): string
    {
        return $this->param->get($page);
    }
}