<?php
require '../vendor/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;

$world = new World();
$lara = new Lara();
$vincent = new Hello\Someone('Vincent');
$mary = new \Demo\Hello\Someone('Mary');
$john = new Demo\Hello\Someone('John');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// 建立 logger
$log = new Logger('WISD');

// 指定 log 檔案路徑
$log->pushHandler(new StreamHandler(__DIR__ . '/../log/my.log', Logger::DEBUG));

// 寫入一筆測試訊息
$log->info('這是 Monolog 的測試訊息！');
