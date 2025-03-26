<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $snapshotId;
    protected $_name = [
        'regionId' => 'RegionId',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
        if (\is_array($this->snapshotId)) {
            Model::validateArray($this->snapshotId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->snapshotId) {
            if (\is_array($this->snapshotId)) {
                $res['SnapshotId'] = [];
                $n1 = 0;
                foreach ($this->snapshotId as $item1) {
                    $res['SnapshotId'][$n1++] = $item1;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SnapshotId'])) {
            if (!empty($map['SnapshotId'])) {
                $model->snapshotId = [];
                $n1 = 0;
                foreach ($map['SnapshotId'] as $item1) {
                    $model->snapshotId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
