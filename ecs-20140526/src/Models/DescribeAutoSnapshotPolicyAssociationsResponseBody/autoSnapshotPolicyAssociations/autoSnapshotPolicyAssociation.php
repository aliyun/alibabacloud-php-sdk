<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyAssociationsResponseBody\autoSnapshotPolicyAssociations;

use AlibabaCloud\Dara\Model;

class autoSnapshotPolicyAssociation extends Model
{
    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var string
     */
    public $diskId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'diskId' => 'DiskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
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
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        return $model;
    }
}
