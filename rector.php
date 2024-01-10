<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Php80\Rector\FunctionLike\MixedTypeRector;
use Rector\Php81\Rector\Property\ReadOnlyPropertyRector;
use Rector\Php80\Rector\Switch_\ChangeSwitchToMatchRector;
use Rector\Php73\Rector\FuncCall\StringifyStrNeedlesRector;
use Rector\DeadCode\Rector\If_\RemoveAlwaysTrueIfConditionRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnNeverTypeRector;
use Rector\Php81\Rector\FuncCall\NullToStrictStringFuncCallArgRector;
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\CodeQuality\Rector\ClassMethod\OptionalParametersAfterRequiredRector;
use Rector\CodeQuality\Rector\ClassMethod\LocallyCalledStaticMethodToNonStaticRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/Classes',
        __DIR__ . '/unitTests',
    ]);

    // register a single rule
    // $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);

    // skip sets of rules
    $rectorConfig->skip([
        // Only suitable for plain and simple switch statements
        ChangeSwitchToMatchRector::class,
        // Unsure if this rector gets it always right in this project
        MixedTypeRector::class,
        // Replace null with '' in function calls - more pain than gain
        NullToStrictStringFuncCallArgRector::class,
        // Re-arranges function parameters but does not update the function call
        OptionalParametersAfterRequiredRector::class,
        // Be careful with those in manually executed code
        RemoveAlwaysTrueIfConditionRector::class,
        // Type hinting is not used anyway
        ReturnNeverTypeRector::class,
        ReadOnlyPropertyRector::class,
        // No longer required in PHP 8
        StringifyStrNeedlesRector::class,
    ]);

    // define sets of rules
    $rectorConfig->sets([
        // SetList::CODE_QUALITY,
        // SetList::DEAD_CODE,
        // SetList::CODING_STYLE,
        LevelSetList::UP_TO_PHP_82
    ]);
};
