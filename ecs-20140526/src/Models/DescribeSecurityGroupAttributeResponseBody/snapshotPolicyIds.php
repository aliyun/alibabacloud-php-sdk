<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class snapshotPolicyIds extends Model
{
    /**
     * @var string[]
     */
    public $snapshotPolicyId;
    protected $_name = [
        'snapshotPolicyId' => 'SnapshotPolicyId',
    ];

    public function validate()
    {
        if (\is_array($this->snapshotPolicyId)) {
            Model::validateArray($this->snapshotPolicyId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snapshotPolicyId) {
            if (\is_array($this->snapshotPolicyId)) {
                $res['SnapshotPolicyId'] = [];
                $n1 = 0;
                foreach ($this->snapshotPolicyId as $item1) {
                    $res['SnapshotPolicyId'][$n1] = $item1;
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
        if (isset($map['SnapshotPolicyId'])) {
            if (!empty($map['SnapshotPolicyId'])) {
                $model->snapshotPolicyId = [];
                $n1 = 0;
                foreach ($map['SnapshotPolicyId'] as $item1) {
                    $model->snapshotPolicyId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
