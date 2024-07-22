<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Tea\Model;

class loadBalancerOperationLocks extends Model
{
    /**
     * @description The reason why the ALB instance is locked. This parameter is valid only if **LoadBalancerBussinessStatus** is set to **Abnormal**.
     *
     * @example Test LockReason
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The lock type. Valid values:
     *
     *   **SecurityLocked**: The ALB instance is locked due to security risks.
     *   **RelatedResourceLocked**: The ALB instance is locked due to other resources associated with the ALB instance.
     *   **FinancialLocked**: The ALB instance is locked due to overdue payments.
     *   **ResidualLocked**: The ALB instance is locked because the associated resources have overdue payments and the resources are released.
     *
     * @example FinancialLocked
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
     * @return loadBalancerOperationLocks
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
