<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies\autoSnapshotPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies\autoSnapshotPolicy\targetTags\targetTag;

class targetTags extends Model
{
    /**
     * @var targetTag[]
     */
    public $targetTag;
    protected $_name = [
        'targetTag' => 'TargetTag',
    ];

    public function validate()
    {
        if (\is_array($this->targetTag)) {
            Model::validateArray($this->targetTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetTag) {
            if (\is_array($this->targetTag)) {
                $res['TargetTag'] = [];
                $n1 = 0;
                foreach ($this->targetTag as $item1) {
                    $res['TargetTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TargetTag'])) {
            if (!empty($map['TargetTag'])) {
                $model->targetTag = [];
                $n1 = 0;
                foreach ($map['TargetTag'] as $item1) {
                    $model->targetTag[$n1] = targetTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
