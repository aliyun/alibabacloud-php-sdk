<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @description The description of the snapshot. The description can be up to 128 characters in length.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-gx2x1dhsmucyy****"
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the snapshot. The name must be 2 to 128 characters in length.\
     * The name cannot start with auto because snapshots whose names start with auto are recognized as automatic snapshots.
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The type of the disk for which to create a snapshot. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * @example system
     *
     * @var string
     */
    public $sourceDiskType;
    protected $_name = [
        'description'    => 'Description',
        'desktopId'      => 'DesktopId',
        'regionId'       => 'RegionId',
        'snapshotName'   => 'SnapshotName',
        'sourceDiskType' => 'SourceDiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }

        return $model;
    }
}
