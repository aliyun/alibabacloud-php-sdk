<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksRequest;

use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $diskId;
    protected $_name = [
        'snapshotId' => 'SnapshotId',
        'diskId'     => 'DiskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
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
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        return $model;
    }
}
