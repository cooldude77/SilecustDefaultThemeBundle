<?php

namespace Silecust\DefaultThemeBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SilecustDefaultThemeBundle extends AbstractBundle
{

    public function getPath(): string
    {
        return __DIR__;

    }

}