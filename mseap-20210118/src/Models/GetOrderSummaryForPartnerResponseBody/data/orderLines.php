<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models\GetOrderSummaryForPartnerResponseBody\data;

use AlibabaCloud\Tea\Model;

class orderLines extends Model
{
    /**
     * @example ob4twsebrj1734
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 11350044
     *
     * @var string
     */
    public $orderLineId;

    /**
     * @example UPGRADE
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'orderLineId' => 'OrderLineId',
        'orderType' => 'OrderType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderLineId) {
            $res['OrderLineId'] = $this->orderLineId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderLines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderLineId'])) {
            $model->orderLineId = $map['OrderLineId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
