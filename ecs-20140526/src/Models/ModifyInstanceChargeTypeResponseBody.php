<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceChargeTypeResponseBody\feeOfInstances;
use AlibabaCloud\Tea\Model;

class ModifyInstanceChargeTypeResponseBody extends Model
{
    /**
     * @description Details about the charges for the order.
     *
     * @var feeOfInstances
     */
    public $feeOfInstances;

    /**
     * @description The ID of the order.
     *
     * @example 20413515388****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example B61C08E5-403A-46A2-96C1-F7B1216DB10C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'feeOfInstances' => 'FeeOfInstances',
        'orderId'        => 'OrderId',
        'requestId'      => 'RequestId',
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
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
