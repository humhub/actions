<?php

$finder = (new PhpCsFixer\Finder())
    ->exclude([
        'messages/',
        'views/',
        'phpcsfixer-config/',
    ])
    ->in(dirname(__DIR__));

return (new PhpCsFixer\Config())
    ->setRules([
        '@PER-CS' => true,
        'phpdoc_scalar' => true,
        'cast_spaces' => false,
        'single_line_empty_body' => false,
    ])
    ->setFinder($finder);
