<?php

namespace SlimADR\DependencyInjection;

use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

class TwigDefinition extends AbstractContainerDefinition
{
    public function getSettingsKey()
    {
        return 'settings.twig';
    }

    public function __invoke()
    {
        return [
            Twig::class => function (Container $container) {
                $settings = $this->getSettings($container);

                $twig = new Twig($settings['path'], $settings['settings']);

                $twig->addExtension(new TwigExtension(
                    $container->get('router'),
                    $container->get('request')->getUri()
                ));

                return $twig;
            }
        ];
    }
}
