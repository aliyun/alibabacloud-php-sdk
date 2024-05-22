<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ResetDiskRequest extends Model
{
    /**
     * @description The ID of the disk that you want to roll back.
     *
     * This parameter is required.
     * @example d-bp199lyny9b3****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The ID of the snapshot that you want to use to roll back the disk.
     *
     * This parameter is required.
     * @example sp-bp199lyny9b3****
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
     * @return ResetDiskRequest
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
