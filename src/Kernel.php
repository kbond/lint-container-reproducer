<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel implements SomeInterface
{
    use MicroKernelTrait;

    protected function build(ContainerBuilder $container)
    {
        $container->registerForAutoconfiguration(SomeInterface::class)
            ->addTag('some.tag')
        ;
    }
}
