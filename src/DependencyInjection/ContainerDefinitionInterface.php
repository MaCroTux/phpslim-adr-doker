<?php

namespace SlimADR\DependencyInjection;

interface ContainerDefinitionInterface
{
    /** @return array */
    public function __invoke();

    /** @return string */
    public function getSettingsKey();
}
