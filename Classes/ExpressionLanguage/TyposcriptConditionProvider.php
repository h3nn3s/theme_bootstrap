<?php
declare(strict_types = 1);
namespace KayStrobach\ThemeBootstrap\ExpressionLanguage;

/*
 * This file is part of TYPO3 CMS-based extension theme_bootstrap
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;

class TyposcriptConditionProvider extends AbstractProvider
{
    public function __construct()
    {
        if (Environment::isCli()) {
            return;
        }

        $this->expressionLanguageProviders = [
            UtilitiesConditionFunctionsProvider::class,
        ];
    }
}
