<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyAssociationsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyAssociationsResponseBody\autoSnapshotPolicyAssociations\autoSnapshotPolicyAssociation;
use AlibabaCloud\Tea\Model;

class autoSnapshotPolicyAssociations extends Model
{
    /**
     * @var autoSnapshotPolicyAssociation[]
     */
    public $autoSnapshotPolicyAssociation;
    protected $_name = [
        'autoSnapshotPolicyAssociation' => 'AutoSnapshotPolicyAssociation',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyAssociation) {
            $res['AutoSnapshotPolicyAssociation'] = [];
            if (null !== $this->autoSnapshotPolicyAssociation && \is_array($this->autoSnapshotPolicyAssociation)) {
                $n = 0;
                foreach ($this->autoSnapshotPolicyAssociation as $item) {
                    $res['AutoSnapshotPolicyAssociation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoSnapshotPolicyAssociations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyAssociation'])) {
            if (!empty($map['AutoSnapshotPolicyAssociation'])) {
                $model->autoSnapshotPolicyAssociation = [];
                $n = 0;
                foreach ($map['AutoSnapshotPolicyAssociation'] as $item) {
                    $model->autoSnapshotPolicyAssociation[$n++] = null !== $item ? autoSnapshotPolicyAssociation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
