<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponseBody\images;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponseBody\images\image\diskDeviceMappings;
use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The architecture of the image. Example: **x86_64**.
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The time when the image was created. The time follows the ISO 8601 standard.
     *
     * @example 2017-12-08T12:10:03Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The mappings between the disk and the snapshot in the image.
     *
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

    /**
     * @description The ID of the image.
     *
     * @example centos_6_08_64_20G_alibase_2017****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example Ubuntu_16.04
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The source of the image. Valid values:
     *
     *   system: Alibaba Cloud public images
     *   self: your custom images
     *   others: shared images from other Alibaba Cloud accounts, or community images published by other Alibaba Cloud accounts
     *
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The size of the image. Unit: GiB.
     *
     * @example 40
     *
     * @var string
     */
    public $imageSize;

    /**
     * @description The operating system type of the image. Valid values:
     *
     *   Linux
     *   Windows
     *
     * @example centos
     *
     * @var string
     */
    public $platform;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the snapshot.
     *
     * @example mock-clone_snapshot_id
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return image
     */
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
