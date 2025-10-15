<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

// 顯示現在時間
echo "現在時間是：" . Carbon::now() . "\n";

// 加七天
echo "七天後是：" . Carbon::now()->addDays(7) . "\n";

// 顯示格式化日期
echo "格式化日期：" . Carbon::now()->format('Y-m-d H:i:s') . "\n";