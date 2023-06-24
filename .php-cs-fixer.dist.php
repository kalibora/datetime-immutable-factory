<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new Finder())
    ->exclude('vendor')
    ->in(__DIR__)
;

return (new Config())
    ->setRules([
        '@Symfony' => true,
        'phpdoc_to_comment' => false,
        'concat_space' => false,
        'phpdoc_summary' => false,
        'yoda_style' => false,
        'return_type_declaration' => ['space_before' => 'one'],
    ])
    ->setFinder($finder)
    ->setUsingCache(false)
;
