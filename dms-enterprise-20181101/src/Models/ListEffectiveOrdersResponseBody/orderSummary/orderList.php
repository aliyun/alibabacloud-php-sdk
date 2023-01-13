<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListEffectiveOrdersResponseBody\orderSummary;

use AlibabaCloud\Tea\Model;

class orderList extends Model
{
    /**
     * @description The UID of the user who placed the order.
     *
     * @example 2698420314****
     *
     * @var string
     */
    public $buyerId;

    /**
     * @description The time when the instance expires.
     *
     * @example 2022-11-24 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum number of database instances that you can use DMS to manage.
     *
     * @example 7
     *
     * @var string
     */
    public $insNum;

    /**
     * @description The ID of the instance for the purchased service.
     *
     * @example rm-bp1xd1v866****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the order.
     *
     * @example 2190037****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The time when the instance is started.
     *
     * @example 2022-10-24 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'buyerId'    => 'BuyerId',
        'endTime'    => 'EndTime',
        'insNum'     => 'InsNum',
        'instanceId' => 'InstanceId',
        'orderId'    => 'OrderId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->insNum) {
            $res['InsNum'] = $this->insNum;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InsNum'])) {
            $model->insNum = $map['InsNum'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
