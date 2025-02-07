<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;

class CreateLoadBalancerResponseBody extends Model
{
    /**
     * @var string
     */
    public $loadbalancerId;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loadbalancerId' => 'LoadbalancerId',
        'orderId'        => 'OrderId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadbalancerId) {
            $res['LoadbalancerId'] = $this->loadbalancerId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['LoadbalancerId'])) {
            $model->loadbalancerId = $map['LoadbalancerId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
