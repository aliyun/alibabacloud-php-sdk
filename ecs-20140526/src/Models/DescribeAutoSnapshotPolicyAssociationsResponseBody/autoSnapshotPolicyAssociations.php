<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyAssociationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyAssociationsResponseBody\autoSnapshotPolicyAssociations\autoSnapshotPolicyAssociation;

class autoSnapshotPolicyAssociations extends Model
{
    /**
     * @var autoSnapshotPolicyAssociation[]
     */
    public $autoSnapshotPolicyAssociation;
    protected $_name = [
        'autoSnapshotPolicyAssociation' => 'AutoSnapshotPolicyAssociation',
    ];

    public function validate()
    {
        if (\is_array($this->autoSnapshotPolicyAssociation)) {
            Model::validateArray($this->autoSnapshotPolicyAssociation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyAssociation) {
            if (\is_array($this->autoSnapshotPolicyAssociation)) {
                $res['AutoSnapshotPolicyAssociation'] = [];
                $n1 = 0;
                foreach ($this->autoSnapshotPolicyAssociation as $item1) {
                    $res['AutoSnapshotPolicyAssociation'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoSnapshotPolicyAssociation'])) {
            if (!empty($map['AutoSnapshotPolicyAssociation'])) {
                $model->autoSnapshotPolicyAssociation = [];
                $n1 = 0;
                foreach ($map['AutoSnapshotPolicyAssociation'] as $item1) {
                    $model->autoSnapshotPolicyAssociation[$n1] = autoSnapshotPolicyAssociation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
