<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\operationLocks;

use AlibabaCloud\Tea\Model;

class lockReason extends Model
{
    /**
     * @description The reason why the instance was locked. Valid values:
     *
     * - refunded: The instance was locked because a refund was made for the instance.
     * @example financial
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
