<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\operationLocks\lockReason;

class operationLocks extends Model
{
    /**
     * @var lockReason[]
     */
    public $lockReason;
    protected $_name = [
        'lockReason' => 'LockReason',
    ];

    public function validate()
    {
        if (\is_array($this->lockReason)) {
            Model::validateArray($this->lockReason);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lockReason) {
            if (\is_array($this->lockReason)) {
                $res['LockReason'] = [];
                $n1 = 0;
                foreach ($this->lockReason as $item1) {
                    $res['LockReason'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['LockReason'])) {
                $model->lockReason = [];
                $n1 = 0;
                foreach ($map['LockReason'] as $item1) {
                    $model->lockReason[$n1] = lockReason::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
