<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Php80\Rector\Switch_\ChangeSwitchToMatchRector;
use Rector\DeadCode\Rector\If_\RemoveAlwaysTrueIfConditionRector;
use Rector\Php81\Rector\FuncCall\NullToStrictStringFuncCallArgRector;
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/Classes',
        __DIR__ . '/unitTests',
    ]);

    // register a single rule
    // $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);

    // skip sets of rules
    $rectorConfig->skip([
        ChangeSwitchToMatchRector::class,
        RemoveAlwaysTrueIfConditionRector::class,
        NullToStrictStringFuncCallArgRector::class,
    ]);

    // define sets of rules
    $rectorConfig->sets([
        // SetList::CODE_QUALITY,
        // SetList::DEAD_CODE,
        // SetList::CODING_STYLE,
        LevelSetList::UP_TO_PHP_82
    ]);
};
