<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateImageRequest extends Model
{
    /**
     * @var string
     */
    public $description;

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
    public $imageResourceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string[]
     */
    public $snapshotIds;
    protected $_name = [
        'description'       => 'Description',
        'desktopId'         => 'DesktopId',
        'imageName'         => 'ImageName',
        'imageResourceType' => 'ImageResourceType',
        'regionId'          => 'RegionId',
        'snapshotId'        => 'SnapshotId',
        'snapshotIds'       => 'SnapshotIds',
    ];

    public function validate()
    {
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('regionId', $this->regionId, true);
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
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
