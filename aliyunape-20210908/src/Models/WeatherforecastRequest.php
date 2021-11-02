<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class WeatherforecastRequest extends Model
{
    /**
     * @description 纬度，范围为（15°N~59.95°N）
     *
     * @var string
     */
    public $lat;

    /**
     * @description 经度，范围为（70°E~139.96°E）
     *
     * @var string
     */
    public $lon;

    /**
     * @description 用户中心--我的订单--订单请求--实例名称：aliyunape_meteor12_public_cn-0ju2d2hh90b
     *
     * @var string
     */
    public $orderId;

    /**
     * @description yyyymmdd080000或yyyymmdd200000
     *
     * @var string
     */
    public $startForecast;
    protected $_name = [
        'lat'           => 'Lat',
        'lon'           => 'Lon',
        'orderId'       => 'OrderId',
        'startForecast' => 'StartForecast',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lat) {
            $res['Lat'] = $this->lat;
        }
        if (null !== $this->lon) {
            $res['Lon'] = $this->lon;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->startForecast) {
            $res['StartForecast'] = $this->startForecast;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WeatherforecastRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lat'])) {
            $model->lat = $map['Lat'];
        }
        if (isset($map['Lon'])) {
            $model->lon = $map['Lon'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['StartForecast'])) {
            $model->startForecast = $map['StartForecast'];
        }

        return $model;
    }
}
