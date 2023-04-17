<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RenewReservedInstancesResponseBody\reservedInstanceIdSets;
use AlibabaCloud\Tea\Model;

class RenewReservedInstancesResponseBody extends Model
{
    /**
     * @description The ID of the order.
     *
     * @example 2023912123****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 8C314443-AF0D-4766-9562-C83B7F1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IDs the reserved instances.
     *
     * @var reservedInstanceIdSets
     */
    public $reservedInstanceIdSets;
    protected $_name = [
        'orderId'                => 'OrderId',
        'requestId'              => 'RequestId',
        'reservedInstanceIdSets' => 'ReservedInstanceIdSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reservedInstanceIdSets) {
            $res['ReservedInstanceIdSets'] = null !== $this->reservedInstanceIdSets ? $this->reservedInstanceIdSets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewReservedInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReservedInstanceIdSets'])) {
            $model->reservedInstanceIdSets = reservedInstanceIdSets::fromMap($map['ReservedInstanceIdSets']);
        }

        return $model;
    }
}
