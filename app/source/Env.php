<?php declare(strict_types=1);

defined('ROOT_PATH') or define('ROOT_PATH', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

(new \Phalcon\Loader())->registerNamespaces([
    'MarkdownBlogger\Source' => ROOT_PATH . 'source/',
])->register();