<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSelfImagesResponseBody\images;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSelfImagesResponseBody\images\image\diskDeviceMappings;

class image extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $computeType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $imageSize;

    /**
     * @var string
     */
    public $imageStorageSize;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'architecture' => 'Architecture',
        'computeType' => 'ComputeType',
        'creationTime' => 'CreationTime',
        'diskDeviceMappings' => 'DiskDeviceMappings',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'imageSize' => 'ImageSize',
        'imageStorageSize' => 'ImageStorageSize',
        'instanceId' => 'InstanceId',
        'osVersion' => 'OsVersion',
        'platform' => 'Platform',
        'regionId' => 'RegionId',
        'snapshotId' => 'SnapshotId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->diskDeviceMappings) {
            $this->diskDeviceMappings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->computeType) {
            $res['ComputeType'] = $this->computeType;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toArray($noStream) : $this->diskDeviceMappings;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }

        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }

        if (null !== $this->imageStorageSize) {
            $res['ImageStorageSize'] = $this->imageStorageSize;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['ComputeType'])) {
            $model->computeType = $map['ComputeType'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DiskDeviceMappings'])) {
            $model->diskDeviceMappings = diskDeviceMappings::fromMap($map['DiskDeviceMappings']);
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }

        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }

        if (isset($map['ImageStorageSize'])) {
            $model->imageStorageSize = $map['ImageStorageSize'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
