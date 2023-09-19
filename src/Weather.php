<?php
// +----------------------------------------------------------------------
// | 流星飞雨加油！
// +----------------------------------------------------------------------

/**
 * @Name
 * @Description
 * @Auther 流星飞雨
 * @Date 2023/9/19 22:26
 */
namespace RockyBin\Weather;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Weather {

    const KEY = 'd20f414e81cb35b8d1ec18ed2c49ca18';

    public static function getWeather($city='110101'){
        $url = 'https://restapi.amap.com/v3/weather/weatherInfo';

        $param = [
            'query' => [
                'key' => self::KEY,
                'city'=> $city,
            ]
        ];

        try{
            $res = (new Client())->get($url, $param);
            $data = $res->getBody()->getContents();
            return $data;
        }catch (RequestException $e){
            echo $e->getMessage();exit;
        }
    }
}

