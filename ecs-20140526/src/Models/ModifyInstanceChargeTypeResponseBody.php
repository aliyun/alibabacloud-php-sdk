<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceChargeTypeResponseBody\feeOfInstances;

class ModifyInstanceChargeTypeResponseBody extends Model
{
    /**
     * @var feeOfInstances
     */
    public $feeOfInstances;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'feeOfInstances' => 'FeeOfInstances',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->feeOfInstances) {
            $this->feeOfInstances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feeOfInstances) {
            $res['FeeOfInstances'] = null !== $this->feeOfInstances ? $this->feeOfInstances->toArray($noStream) : $this->feeOfInstances;
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
        if (isset($map['FeeOfInstances'])) {
            $model->feeOfInstances = feeOfInstances::fromMap($map['FeeOfInstances']);
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
