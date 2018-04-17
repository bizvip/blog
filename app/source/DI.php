<?php declare(strict_types=1);


namespace MarkdownBlogger\Source;


final class DI {
    
    private static $container = null;
    
    public function __construct() {
        self::$container = new \Phalcon\Di();
        $this->initDI();
    }
    
    public static function getPDI(): \Phalcon\Di {
        if (null === self::$container) {
            new self();
        }
        return self::$container;
    }
    
    private function initDI() {
        self::$container->setShared('mongo', function () {
            return new \Phalcon\Db\Adapter\MongoDB\Client('mongodb://127.0.0.1:27017');
        });
    }
    
}