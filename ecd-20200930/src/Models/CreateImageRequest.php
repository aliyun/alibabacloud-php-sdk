<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateImageRequest extends Model
{
    /**
     * @var bool
     */
    public $autoCleanUserdata;

    /**
     * @var string[]
     */
    public $dataSnapshotIds;

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
    public $diskType;

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
        'autoCleanUserdata' => 'AutoCleanUserdata',
        'dataSnapshotIds' => 'DataSnapshotIds',
        'description' => 'Description',
        'desktopId' => 'DesktopId',
        'diskType' => 'DiskType',
        'imageName' => 'ImageName',
        'imageResourceType' => 'ImageResourceType',
        'regionId' => 'RegionId',
        'snapshotId' => 'SnapshotId',
        'snapshotIds' => 'SnapshotIds',
    ];

    public function validate()
    {
        if (\is_array($this->dataSnapshotIds)) {
            Model::validateArray($this->dataSnapshotIds);
        }
        if (\is_array($this->snapshotIds)) {
            Model::validateArray($this->snapshotIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCleanUserdata) {
            $res['AutoCleanUserdata'] = $this->autoCleanUserdata;
        }

        if (null !== $this->dataSnapshotIds) {
            if (\is_array($this->dataSnapshotIds)) {
                $res['DataSnapshotIds'] = [];
                $n1 = 0;
                foreach ($this->dataSnapshotIds as $item1) {
                    $res['DataSnapshotIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->snapshotIds)) {
                $res['SnapshotIds'] = [];
                $n1 = 0;
                foreach ($this->snapshotIds as $item1) {
                    $res['SnapshotIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['AutoCleanUserdata'])) {
            $model->autoCleanUserdata = $map['AutoCleanUserdata'];
        }

        if (isset($map['DataSnapshotIds'])) {
            if (!empty($map['DataSnapshotIds'])) {
                $model->dataSnapshotIds = [];
                $n1 = 0;
                foreach ($map['DataSnapshotIds'] as $item1) {
                    $model->dataSnapshotIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->snapshotIds = [];
                $n1 = 0;
                foreach ($map['SnapshotIds'] as $item1) {
                    $model->snapshotIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
