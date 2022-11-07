<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\RunInstancesResponseBody\instanceIds;
use AlibabaCloud\Tea\Model;

class RunInstancesResponseBody extends Model
{
    /**
     * @var instanceIds
     */
    public $instanceIds;

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
        'instanceIds' => 'InstanceIds',
        'orderId'     => 'OrderId',
        'requestId'   => 'RequestId',
        'tradePrice'  => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
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
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
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
