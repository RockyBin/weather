<?php
// +----------------------------------------------------------------------
// | 流星飞雨加油！
// +----------------------------------------------------------------------

/**
 * @Name
 * @Description
 * @Auther 流星飞雨
 * @Date 2023/9/19 22:40
 */

require_once __DIR__ . './vendor/autoload.php';

use RockyBin\Weather\Weather;

$city = Weather::getWeather();

echo $city;