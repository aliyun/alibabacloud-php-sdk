<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceChargeTypeResponseBody\feeOfInstances;
use AlibabaCloud\Tea\Model;

class ModifyInstanceChargeTypeResponseBody extends Model
{
    /**
     * @var feeOfInstances[]
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
            $res['FeeOfInstances'] = [];
            if (null !== $this->feeOfInstances && \is_array($this->feeOfInstances)) {
                $n = 0;
                foreach ($this->feeOfInstances as $item) {
                    $res['FeeOfInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['FeeOfInstances'])) {
                $model->feeOfInstances = [];
                $n                     = 0;
                foreach ($map['FeeOfInstances'] as $item) {
                    $model->feeOfInstances[$n++] = null !== $item ? feeOfInstances::fromMap($item) : $item;
                }
            }
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
