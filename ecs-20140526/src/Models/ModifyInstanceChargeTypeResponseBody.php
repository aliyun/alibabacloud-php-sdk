<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceChargeTypeResponseBody\feeOfInstances;
use AlibabaCloud\Tea\Model;

class ModifyInstanceChargeTypeResponseBody extends Model
{
    /**
     * @var feeOfInstances
     */
    public $feeOfInstances;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'feeOfInstances' => 'FeeOfInstances',
        'requestId'      => 'RequestId',
        'orderId'        => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feeOfInstances) {
            $res['FeeOfInstances'] = null !== $this->feeOfInstances ? $this->feeOfInstances->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceChargeTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeeOfInstances'])) {
            $model->feeOfInstances = feeOfInstances::fromMap($map['FeeOfInstances']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
