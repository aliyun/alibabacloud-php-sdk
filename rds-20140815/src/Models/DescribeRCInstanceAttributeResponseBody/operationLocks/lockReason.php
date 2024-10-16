<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\operationLocks;

use AlibabaCloud\Tea\Model;

class lockReason extends Model
{
    /**
     * @description The reason why the instance is locked. Valid values:
     *
     *   **financial**: The instance is locked due to overdue payments.
     *   **security**: The instance is locked for security purposes.
     *   **recycling**: The instance is locked because the instance is a preemptible instance and pending to be released.
     *   **dedicatedhostfinancial**: The instance is locked due to overdue payments for the dedicated host.
     *   **refunded**: The instance is locked because a refund was made for the instance.
     *
     * @example None
     *
     * @var string
     */
    public $lockReason;
    protected $_name = [
        'lockReason' => 'LockReason',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lockReason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }

        return $model;
    }
}
