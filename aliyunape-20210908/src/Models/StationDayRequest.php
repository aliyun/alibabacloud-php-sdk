<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class StationDayRequest extends Model
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
     * @description 气象预测开始时间
     *
     * @var string
     */
    public $startForecast;

    /**
     * @description 全国站点（入参单一站点）
     *
     * @var string
     */
    public $station;
    protected $_name = [
        'userId'        => 'UserId',
        'orderId'       => 'OrderId',
        'requestId'     => 'RequestId',
        'startForecast' => 'StartForecast',
        'station'       => 'Station',
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
        if (null !== $this->station) {
            $res['Station'] = $this->station;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StationDayRequest
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
        if (isset($map['Station'])) {
            $model->station = $map['Station'];
        }

        return $model;
    }
}
