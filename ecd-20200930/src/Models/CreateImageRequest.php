<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateImageRequest extends Model
{
    /**
     * @description Specifies whether to clear private data of users. If you set AutoCleanUserdata to `true`, the custom image clears the data directories, excluding the `Administrator` and `Public` directories, in the `C:\Users` directory.
     *
     * @example false
     *
     * @var bool
     */
    public $autoCleanUserdata;

    /**
     * @description The description of the custom image. The description must be 2 to 256 characters in length. It cannot start with `http://` or `https://`.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the cloud computer.
     *
     * @example ecd-7w78ozhjcwa3u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The disk data that is contained in the custom image.
     *
     * - ALL: contain data from system disks and user disks. [default]
     * @example ALL
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The name of the image. The name must be 2 to 128 characters in length. The name must start with a letter but cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description This parameter is not publicly available.
     *
     * @example To be hidden.
     *
     * @var string
     */
    public $imageResourceType;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-2zefuwk8l6ytcgd3bf4o
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The IDs of the snapshots.
     *
     * @var string[]
     */
    public $snapshotIds;
    protected $_name = [
        'autoCleanUserdata' => 'AutoCleanUserdata',
        'description'       => 'Description',
        'desktopId'         => 'DesktopId',
        'diskType'          => 'DiskType',
        'imageName'         => 'ImageName',
        'imageResourceType' => 'ImageResourceType',
        'regionId'          => 'RegionId',
        'snapshotId'        => 'SnapshotId',
        'snapshotIds'       => 'SnapshotIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCleanUserdata) {
            $res['AutoCleanUserdata'] = $this->autoCleanUserdata;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageResourceType) {
            $res['ImageResourceType'] = $this->imageResourceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotIds) {
            $res['SnapshotIds'] = $this->snapshotIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCleanUserdata'])) {
            $model->autoCleanUserdata = $map['AutoCleanUserdata'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageResourceType'])) {
            $model->imageResourceType = $map['ImageResourceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotIds'])) {
            if (!empty($map['SnapshotIds'])) {
                $model->snapshotIds = $map['SnapshotIds'];
            }
        }

        return $model;
    }
}
