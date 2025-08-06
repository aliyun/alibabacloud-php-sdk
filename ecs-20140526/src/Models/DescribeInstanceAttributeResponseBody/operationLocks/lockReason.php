<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\operationLocks;

use AlibabaCloud\Dara\Model;

class lockReason extends Model
{
    /**
     * @var string
     */
    public $lockReason;
    protected $_name = [
        'lockReason' => 'LockReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }

        return $model;
    }
}
