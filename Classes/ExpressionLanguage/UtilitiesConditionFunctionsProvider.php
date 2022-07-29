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

use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class UtilitiesConditionFunctionsProvider implements ExpressionFunctionProviderInterface
{

    /**
     * @return ExpressionFunction[] An array of Function instances
     */
    public function getFunctions()
    {
        return [
            $this->getExtensionLoadedFunction(),
        ];
    }

    /**
     * @return ExpressionFunction
     */
    protected function getExtensionLoadedFunction()
    {

        return new ExpressionFunction('isExtensionLoaded', function () {
            // Not implemented, we only use the evaluator
        }, function ($arguments, $extKey) {
            return ExtensionManagementUtility::isLoaded($extKey);
        });
    }
}
