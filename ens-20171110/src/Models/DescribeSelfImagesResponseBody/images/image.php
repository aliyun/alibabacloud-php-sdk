<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSelfImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The image architecture. Valid values:
     *
     *   i386
     *   x86\_64
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description Computing type. ens_vm/ens: x86 computing. bare_metal: x86 bare machine or x86 bare metal. arm_vm: ARM computing. arm_bare_metal: ARM bare machine or ARM bare metal. pcfarm: heterogeneous computing.
     *
     * @example ens_vm
     *
     * @var string
     */
    public $computeType;

    /**
     * @description The image creation time. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-12-08T12:10:03Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the image.
     *
     * @example centos_6_08_64_20G_a****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example centos_6_08_64_20G_a****
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The source of the image. Valid values:
     *
     *   **system**: public images
     *   **self**: your custom images
     *
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The size of the image. Unit: GiB.
     *
     * @example 20
     *
     * @var string
     */
    public $imageSize;

    /**
     * @description The instance ID.
     *
     * @example i-5iqczfxps7csjrxeca****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operating system version.
     *
     * @example 7.2
     *
     * @var string
     */
    public $osVersion;

    /**
     * @description The platform.
     *
     *   centos
     *   ubuntu
     *   alios
     *   debian
     *   rhel
     *   windows
     *
     * @example centos
     *
     * @var string
     */
    public $platform;

    /**
     * @description The ID of the snapshot.
     *
     * @example sp-5yt3bdedxzdz6t6uuw****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The state of the image.
     *
     *   Creating.
     *   Packing.
     *   Uploading.
     *   Pack_failed.
     *   Upload_failed.
     *   Available: Only images in the Available state can be used and operated.
     *   Unavailable.
     *   Copying.
     *
     * @example Creating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'architecture'    => 'Architecture',
        'computeType'     => 'ComputeType',
        'creationTime'    => 'CreationTime',
        'imageId'         => 'ImageId',
        'imageName'       => 'ImageName',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'imageSize'       => 'ImageSize',
        'instanceId'      => 'InstanceId',
        'osVersion'       => 'OsVersion',
        'platform'        => 'Platform',
        'snapshotId'      => 'SnapshotId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ComputeType'])) {
            $model->computeType = $map['ComputeType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
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
