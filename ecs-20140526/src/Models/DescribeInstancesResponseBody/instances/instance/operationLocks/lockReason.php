<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\operationLocks;

use AlibabaCloud\Dara\Model;

class lockReason extends Model
{
    /**
     * @var string
     */
    public $lockMsg;
    /**
     * @var string
     */
    public $lockReason;
    protected $_name = [
        'lockMsg'    => 'LockMsg',
        'lockReason' => 'LockReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
