<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup;

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
        if (\is_array($this->snapshotGroup)) {
            Model::validateArray($this->snapshotGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snapshotGroup) {
            if (\is_array($this->snapshotGroup)) {
                $res['SnapshotGroup'] = [];
                $n1                   = 0;
                foreach ($this->snapshotGroup as $item1) {
                    $res['SnapshotGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SnapshotGroup'])) {
            if (!empty($map['SnapshotGroup'])) {
                $model->snapshotGroup = [];
                $n1                   = 0;
                foreach ($map['SnapshotGroup'] as $item1) {
                    $model->snapshotGroup[$n1++] = snapshotGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
