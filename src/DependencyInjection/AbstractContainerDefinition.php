<?php

namespace SlimADR\DependencyInjection;

use DI\Container;

abstract class AbstractContainerDefinition implements ContainerDefinitionInterface
{
    /**
     * @param Container $container
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    protected function getSettings(Container $container)
    {
        return $container->get($this->getSettingsKey());
    }
}
