<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ResetSnapshotRequest extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example cn-hzngahou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-2zeipxmnhej803x7****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'regionId'   => 'RegionId',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
