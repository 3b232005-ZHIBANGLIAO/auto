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

// 寫入 Monolog 測試訊息
$log->info('這是 Monolog 的測試訊息！');

use Carbon\Carbon;

echo "<pre>";


echo "1. 現在時間：" . Carbon::now() . "\n";


echo "2. 今天日期：" . Carbon::today() . "\n";


echo "3. 明天：" . Carbon::tomorrow() . "\n";


echo "4. 昨天：" . Carbon::yesterday() . "\n";


echo "5. 七天後：" . Carbon::now()->addDays(7) . "\n";


echo "6. 一個月前：" . Carbon::now()->subMonth() . "\n";


echo "7. 自訂日期：" . Carbon::create(2025, 1, 1) . "\n";


echo "8. 格式化時間：" . Carbon::now()->format('Y-m-d H:i:s') . "\n";


echo "9. 今天星期：" . Carbon::now()->dayOfWeek . "\n";

echo "10. 相對時間：" . Carbon::now()->subHours(1)->diffForHumans() . "\n";

echo "</pre>";
