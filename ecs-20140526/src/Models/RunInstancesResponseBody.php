<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesResponseBody\instanceIdSets;

class RunInstancesResponseBody extends Model
{
    /**
     * @var instanceIdSets
     */
    public $instanceIdSets;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'instanceIdSets' => 'InstanceIdSets',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (null !== $this->instanceIdSets) {
            $this->instanceIdSets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIdSets) {
            $res['InstanceIdSets'] = null !== $this->instanceIdSets ? $this->instanceIdSets->toArray($noStream) : $this->instanceIdSets;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
