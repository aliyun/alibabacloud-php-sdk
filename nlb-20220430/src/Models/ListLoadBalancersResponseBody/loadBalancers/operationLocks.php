<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Tea\Model;

class operationLocks extends Model
{
    /**
     * @description The reason why the NLB instance is locked.
     *
     * @example Service exception
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The type of lock. Valid values:
     *
     *   **SecurityLocked**: The NLB instance is locked due to security reasons.
     *   **RelatedResourceLocked**: The NLB instance is locked due to association issues.
     *   **FinancialLocked**: The NLB instance is locked due to overdue payments.
     *   **ResidualLocked**: The NLB instance is locked because the payments of the associated resources are overdue and the resources are released.
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
