<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class operationLocks extends Model
{
    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $lockType;
    protected $_name = [
        'lockReason' => 'LockReason',
        'lockType' => 'LockType',
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

        if (null !== $this->lockType) {
            $res['LockType'] = $this->lockType;
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

        if (isset($map['LockType'])) {
            $model->lockType = $map['LockType'];
        }

        return $model;
    }
}
