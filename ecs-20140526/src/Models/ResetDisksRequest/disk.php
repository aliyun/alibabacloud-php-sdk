<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksRequest;

use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @description The IDs of the disks that you want to roll back. You can specify up to 10 disk IDs.
     *
     * @example d-j6cf7l0ewidb78lq****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The IDs of the disk snapshots that are contained in the instance snapshot. You can specify up to 10 disk snapshot IDs.
     *
     * @example s-j6cdofbycydvg7ey****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'diskId'     => 'DiskId',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
