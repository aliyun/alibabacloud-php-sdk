<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteRCSnapshotRequest extends Model
{
    /**
     * @description Specifies whether to forcefully delete the snapshot that is used to create cloud disks. Valid values:
     *
     *   **true**: forcefully deletes the snapshot After the snapshot is forcefully deleted, the cloud disks created from the snapshot cannot be re-initialized.
     *   **false**(default): does not forcefully delete the snapshot.
     *
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The snapshot ID.
     *
     * This parameter is required.
     * @example rcds-7mbefjzkqccvdev****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'force'      => 'Force',
        'regionId'   => 'RegionId',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
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
     * @return DeleteRCSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
