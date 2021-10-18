<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class WeatherforecastRequest extends Model
{
    /**
     * @description UserId
     *
     * @var int
     */
    public $userId;

    /**
     * @description 用户中心--我的订单--订单请求--实例名称：aliyunape_meteor12_public_cn-0ju2d2hh90b
     *
     * @var string
     */
    public $orderId;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description yyyymmdd080000或yyyymmdd200000
     *
     * @var string
     */
    public $startForecast;

    /**
     * @description 经度，范围为（70°E~139.96°E）
     *
     * @var string
     */
    public $lon;

    /**
     * @description 纬度，范围为（15°N~59.95°N）
     *
     * @var string
     */
    public $lat;
    protected $_name = [
        'userId'        => 'UserId',
        'orderId'       => 'OrderId',
        'requestId'     => 'RequestId',
        'startForecast' => 'StartForecast',
        'lon'           => 'Lon',
        'lat'           => 'Lat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startForecast) {
            $res['StartForecast'] = $this->startForecast;
        }
        if (null !== $this->lon) {
            $res['Lon'] = $this->lon;
        }
        if (null !== $this->lat) {
            $res['Lat'] = $this->lat;
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartForecast'])) {
            $model->startForecast = $map['StartForecast'];
        }
        if (isset($map['Lon'])) {
            $model->lon = $map['Lon'];
        }
        if (isset($map['Lat'])) {
            $model->lat = $map['Lat'];
        }

        return $model;
    }
}
