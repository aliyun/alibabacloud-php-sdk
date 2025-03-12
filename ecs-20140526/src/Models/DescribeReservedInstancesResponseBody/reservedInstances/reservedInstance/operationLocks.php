<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponseBody\reservedInstances\reservedInstance;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponseBody\reservedInstances\reservedInstance\operationLocks\operationLock;
use AlibabaCloud\Tea\Model;

class operationLocks extends Model
{
    /**
     * @var operationLock[]
     */
    public $operationLock;
    protected $_name = [
        'operationLock' => 'OperationLock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationLock) {
            $res['OperationLock'] = [];
            if (null !== $this->operationLock && \is_array($this->operationLock)) {
                $n = 0;
                foreach ($this->operationLock as $item) {
                    $res['OperationLock'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationLocks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationLock'])) {
            if (!empty($map['OperationLock'])) {
                $model->operationLock = [];
                $n                    = 0;
                foreach ($map['OperationLock'] as $item) {
                    $model->operationLock[$n++] = null !== $item ? operationLock::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
