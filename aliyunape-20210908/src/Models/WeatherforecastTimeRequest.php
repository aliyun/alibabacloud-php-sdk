<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class WeatherforecastTimeRequest extends Model
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
     * @description 经度，范围为（70°E~139.96°E）
     *
     * @var string
     */
    public $lon;

    /**
     * @description 20210809090000
     *
     * @var string
     */
    public $curHour;

    /**
     * @description 纬度，范围为（15°N~59.95°N
     *
     * @var string
     */
    public $lat;
    protected $_name = [
        'userId'    => 'UserId',
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
        'lon'       => 'Lon',
        'curHour'   => 'CurHour',
        'lat'       => 'Lat',
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
        if (null !== $this->lon) {
            $res['Lon'] = $this->lon;
        }
        if (null !== $this->curHour) {
            $res['CurHour'] = $this->curHour;
        }
        if (null !== $this->lat) {
            $res['Lat'] = $this->lat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WeatherforecastTimeRequest
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
        if (isset($map['Lon'])) {
            $model->lon = $map['Lon'];
        }
        if (isset($map['CurHour'])) {
            $model->curHour = $map['CurHour'];
        }
        if (isset($map['Lat'])) {
            $model->lat = $map['Lat'];
        }

        return $model;
    }
}
