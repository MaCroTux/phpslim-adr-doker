<?php

namespace SlimADR;

use DI\Bridge\Slim\App;
use DI\ContainerBuilder;
use SlimADR\DependencyInjection\ContainerDefinitionInterface;
use SlimADR\DependencyInjection\DashboardResponderDefinition;
use SlimADR\DependencyInjection\TwigDefinition;

class SlimADRApp extends App
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions(__DIR__ . '/../app/config.php');

        foreach ($this->getContainerDefinitions() as $definition) {
            $builder->addDefinitions($definition());
        }
    }

    /**
     * @return ContainerDefinitionInterface[]
     */
    protected function getContainerDefinitions()
    {
        return [
            new TwigDefinition(),
        ];
    }
}
