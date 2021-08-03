<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateImageRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $imageResourceType;

    /**
     * @var string[]
     */
    public $snapshotIds;
    protected $_name = [
        'regionId'          => 'RegionId',
        'desktopId'         => 'DesktopId',
        'imageName'         => 'ImageName',
        'description'       => 'Description',
        'snapshotId'        => 'SnapshotId',
        'imageResourceType' => 'ImageResourceType',
        'snapshotIds'       => 'SnapshotIds',
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
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->imageResourceType) {
            $res['ImageResourceType'] = $this->imageResourceType;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['ImageResourceType'])) {
            $model->imageResourceType = $map['ImageResourceType'];
        }
        if (isset($map['SnapshotIds'])) {
            if (!empty($map['SnapshotIds'])) {
                $model->snapshotIds = $map['SnapshotIds'];
            }
        }

        return $model;
    }
}
