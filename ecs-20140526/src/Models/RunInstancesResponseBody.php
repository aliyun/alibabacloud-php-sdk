<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesResponseBody\instanceIdSets;
use AlibabaCloud\Tea\Model;

class RunInstancesResponseBody extends Model
{
    /**
     * @description The IDs of the instances (`InstanceIdSet`).
     *
     * @var instanceIdSets
     */
    public $instanceIdSets;

    /**
     * @description The ID of the order. This parameter is returned only when `InstanceChargeType` is set to PrePaid.
     *
     * @example 123456****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The transaction price.
     *
     * @example 0.165
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'instanceIdSets' => 'InstanceIdSets',
        'orderId'        => 'OrderId',
        'requestId'      => 'RequestId',
        'tradePrice'     => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdSets) {
            $res['InstanceIdSets'] = null !== $this->instanceIdSets ? $this->instanceIdSets->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdSets'])) {
            $model->instanceIdSets = instanceIdSets::fromMap($map['InstanceIdSets']);
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
