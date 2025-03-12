<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup;
use AlibabaCloud\Tea\Model;

class snapshotGroups extends Model
{
    /**
     * @var snapshotGroup[]
     */
    public $snapshotGroup;
    protected $_name = [
        'snapshotGroup' => 'SnapshotGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotGroup) {
            $res['SnapshotGroup'] = [];
            if (null !== $this->snapshotGroup && \is_array($this->snapshotGroup)) {
                $n = 0;
                foreach ($this->snapshotGroup as $item) {
                    $res['SnapshotGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotGroup'])) {
            if (!empty($map['SnapshotGroup'])) {
                $model->snapshotGroup = [];
                $n                    = 0;
                foreach ($map['SnapshotGroup'] as $item) {
                    $model->snapshotGroup[$n++] = null !== $item ? snapshotGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
