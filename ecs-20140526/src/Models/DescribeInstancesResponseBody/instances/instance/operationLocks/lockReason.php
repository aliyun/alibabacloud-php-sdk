<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\operationLocks;

use AlibabaCloud\Tea\Model;

class lockReason extends Model
{
    /**
     * @description The message returned when the instance was locked.
     *
     * @example The specified instance is locked due to financial reason.
     *
     * @var string
     */
    public $lockMsg;

    /**
     * @description The reason why the instance was locked. Valid values:
     *
     *   financial: The instance was locked due to overdue payments.
     *   security: The instance was locked due to security reasons.
     *   recycling: The preemptible instance was locked and pending release.
     *   dedicatedhostfinancial: The instance was locked due to overdue payments for the dedicated host.
     *   refunded: The instance was locked because a refund was made for the instance.
     *
     * @example Recycling
     *
     * @var string
     */
    public $lockReason;
    protected $_name = [
        'lockMsg'    => 'LockMsg',
        'lockReason' => 'LockReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lockMsg) {
            $res['LockMsg'] = $this->lockMsg;
        }
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
        if (isset($map['LockMsg'])) {
            $model->lockMsg = $map['LockMsg'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }

        return $model;
    }
}
