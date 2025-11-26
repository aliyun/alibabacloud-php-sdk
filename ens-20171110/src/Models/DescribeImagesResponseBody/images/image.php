<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponseBody\images;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponseBody\images\image\diskDeviceMappings;

class image extends Model
{
    /**
     * @var string
     */
    public $architecture;

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
    public $platform;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'architecture' => 'Architecture',
        'creationTime' => 'CreationTime',
        'diskDeviceMappings' => 'DiskDeviceMappings',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'imageSize' => 'ImageSize',
        'platform' => 'Platform',
        'regionId' => 'RegionId',
        'snapshotId' => 'SnapshotId',
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

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
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
