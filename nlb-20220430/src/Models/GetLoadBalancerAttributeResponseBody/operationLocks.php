<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class operationLocks extends Model
{
    /**
     * @description The reason why the NLB instance is locked.
     *
     * @example security
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The type of the lock. Valid values:
     *
     *   **SecurityLocked**: The NLB instance is locked due to security reasons.
     *   **RelatedResourceLocked**: The NLB instance is locked due to other resources associated with the NLB instance.
     *   **FinancialLocked**: The NLB instance is locked due to overdue payments.
     *   **ResidualLocked**: The NLB instance is locked because the associated resources have overdue payments and the resources are released.
     *
     * @example SecurityLocked
     *
     * @var string
     */
    public $lockType;
    protected $_name = [
        'lockReason' => 'LockReason',
        'lockType'   => 'LockType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->lockType) {
            $res['LockType'] = $this->lockType;
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
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['LockType'])) {
            $model->lockType = $map['LockType'];
        }

        return $model;
    }
}
