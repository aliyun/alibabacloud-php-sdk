<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeAIAgentOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $capacityPack;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $hasOrder;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderName;

    /**
     * @var string
     */
    public $orderNum;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'agentVersion' => 'AgentVersion',
        'capacityPack' => 'CapacityPack',
        'expireTime' => 'ExpireTime',
        'hasOrder' => 'HasOrder',
        'orderId' => 'OrderId',
        'orderName' => 'OrderName',
        'orderNum' => 'OrderNum',
        'orderStatus' => 'OrderStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->capacityPack) {
            $res['CapacityPack'] = $this->capacityPack;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->hasOrder) {
            $res['HasOrder'] = $this->hasOrder;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->orderName) {
            $res['OrderName'] = $this->orderName;
        }

        if (null !== $this->orderNum) {
            $res['OrderNum'] = $this->orderNum;
        }

        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['CapacityPack'])) {
            $model->capacityPack = $map['CapacityPack'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['HasOrder'])) {
            $model->hasOrder = $map['HasOrder'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrderName'])) {
            $model->orderName = $map['OrderName'];
        }

        if (isset($map['OrderNum'])) {
            $model->orderNum = $map['OrderNum'];
        }

        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
