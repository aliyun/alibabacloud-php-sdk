<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class loadBalancerOperationLocks extends Model
{
    /**
     * @description The configuration of the configuration read-only mode.
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The reason why the configuration read-only mode was enabled. The reason must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The reason must start with a letter.
     *
     * This parameter is valid only if you set the **ModificationProtectionStatus** parameter to **ConsoleProtection**.
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
