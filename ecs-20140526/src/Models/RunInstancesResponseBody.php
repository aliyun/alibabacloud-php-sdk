<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesResponseBody\instanceIdSets;
use AlibabaCloud\Tea\Model;

class RunInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceIdSets
     */
    public $instanceIdSets;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'requestId'      => 'RequestId',
        'instanceIdSets' => 'InstanceIdSets',
        'orderId'        => 'OrderId',
        'tradePrice'     => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceIdSets) {
            $res['InstanceIdSets'] = null !== $this->instanceIdSets ? $this->instanceIdSets->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceIdSets'])) {
            $model->instanceIdSets = instanceIdSets::fromMap($map['InstanceIdSets']);
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
