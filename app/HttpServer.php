<?php declare(strict_types=1);

use Swoole\Http\Server;

final class HttpServer {
    
    public static $httpServer = NULL;
    
    public function __construct() {
        self::$httpServer = new Server('0.0.0.0', 9002);
        self::$httpServer->set([
            'reactor_num'     => 4,
            'worker_num'      => 4,
            'max_conn'        => 55555,
            'daemonize'       => FALSE,
            'http_parse_post' => FALSE,
        ]);
        self::$httpServer->on('Request', [$this, 'onRequest']);
        self::$httpServer->on('WorkerStart', [$this, 'onWorkerStart']);
        self::$httpServer->on('WorkerStop', [$this, 'onWorkerStop']);
        self::$httpServer->start();
    }
    
    public function onRequest($request, $response) {
        print_r($response);
    }
    
    public function onWorkerStart() {
    }
    
    public function onWorkerStop() {
    }
}
