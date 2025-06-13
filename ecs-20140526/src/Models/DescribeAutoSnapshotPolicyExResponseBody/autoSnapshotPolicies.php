<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies\autoSnapshotPolicy;

class autoSnapshotPolicies extends Model
{
    /**
     * @var autoSnapshotPolicy[]
     */
    public $autoSnapshotPolicy;
    protected $_name = [
        'autoSnapshotPolicy' => 'AutoSnapshotPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->autoSnapshotPolicy)) {
            Model::validateArray($this->autoSnapshotPolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicy) {
            if (\is_array($this->autoSnapshotPolicy)) {
                $res['AutoSnapshotPolicy'] = [];
                $n1 = 0;
                foreach ($this->autoSnapshotPolicy as $item1) {
                    $res['AutoSnapshotPolicy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoSnapshotPolicy'])) {
            if (!empty($map['AutoSnapshotPolicy'])) {
                $model->autoSnapshotPolicy = [];
                $n1 = 0;
                foreach ($map['AutoSnapshotPolicy'] as $item1) {
                    $model->autoSnapshotPolicy[$n1] = autoSnapshotPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
