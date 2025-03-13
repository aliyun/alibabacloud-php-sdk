<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest\diskDeviceMapping;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest\features;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateImageRequest extends Model
{
    /**
     * @description The system architecture of the system disk. If you specify a data disk snapshot to create the system disk of the custom image, use Architecture to specify the system architecture of the system disk. Valid values:
     *
     *   i386
     *   x86_64
     *   arm64
     *
     * Default value: x86_64.
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The boot mode of the image. Valid values:
     *
     *   BIOS: Basic Input/Output System (BIOS)
     *   UEFI: Unified Extensible Firmware Interface (UEFI)
     *   UEFI-Preferred: BIOS and UEFI
     *
     * >  For information about the UEFI-Preferred boot mode, see [Best practices for ECS instance boot modes](https://help.aliyun.com/document_detail/2244655.html).
     * @example BIOS
     *
     * @var string
     */
    public $bootMode;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The value of **ClientToken** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The image description. The description must be 2 to 256 characters in length and cannot start with [http:// or https://.](http://https://。)
     *
     * @example ImageTestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The mode in which to check the custom image. If you do not specify this parameter, the image is not checked. Only the standard check mode is supported.
     *
     * >  This parameter is supported for most Linux and Windows operating system versions. For information about image check items and operating system limits for image check, see [Overview of image check](https://help.aliyun.com/document_detail/439819.html) and [Operating system limits for image check](https://help.aliyun.com/document_detail/475800.html).
     * @example Standard
     *
     * @var string
     */
    public $detectionStrategy;

    /**
     * @description The information about the custom image. To create a custom image from multiple snapshots, specify the parameters in this parameter list.
     *
     * @var diskDeviceMapping[]
     */
    public $diskDeviceMapping;

    /**
     * @description The attributes of the custom image.
     *
     * @var features
     */
    public $features;

    /**
     * @description The name of the image family. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with acs: or aliyun. The name cannot contain http:// or https://. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The name of the custom image. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with http:// or https://. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example TestCentOS
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The image version.
     *
     * >  If you specify an ECS instance that runs an Alibaba Cloud Marketplace image or a custom image derived from an Alibaba Cloud Marketplace image by using `InstanceId`, you must leave this parameter empty or set this parameter to the `ImageVersion` value of the image run by the specified ECS instance.
     * @example 2017011017
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description The ID of the ECS instance from which to create the custom image. To create a custom image from an ECS instance, you must specify this parameter.
     *
     * @example i-bp1g6zv0ce8oghu7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The operating system distribution for the system disk in the custom image. If you specify a data disk snapshot to create the system disk of the custom image, use Platform to specify the operating system distribution for the system disk. Valid values:
     *
     *   Aliyun
     *   Anolis
     *   CentOS
     *   Ubuntu
     *   CoreOS
     *   SUSE
     *   Debian
     *   OpenSUSE
     *   FreeBSD
     *   RedHat
     *   Kylin
     *   UOS
     *   Fedora
     *   Fedora CoreOS
     *   CentOS Stream
     *   AlmaLinux
     *   Rocky Linux
     *   Gentoo
     *   Customized Linux
     *   Others Linux
     *   Windows Server 2022
     *   Windows Server 2019
     *   Windows Server 2016
     *   Windows Server 2012
     *   Windows Server 2008
     *   Windows Server 2003
     *
     * Default value: Others Linux.
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @description The region ID of the custom image that you want to create. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent list of regions.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the custom image. If you leave this parameter empty, the image is assigned to the default resource group.
     *
     * >  If you call the CreateImage operation as a Resource Access Management (RAM) user who does not have permissions on the default resource group and leave `ResourceGroupId` empty, the `Forbidden: User not authorized to operate on the specified resource` error message is returned. You must specify the ID of a resource group on which the RAM user has permissions or grant the RAM user permissions on the default resource group, and then call the CreateImage operation again.
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the snapshot from which to create the custom image.
     *
     * >  To create a custom image from only a system disk snapshot of an ECS instance, you can specify this parameter or `DiskDeviceMapping.SnapshotId`. To create a custom image from multiple snapshots, you can specify only `DiskDeviceMapping.SnapshotId`.
     * @example s-bp17441ohwkdca0****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'architecture'         => 'Architecture',
        'bootMode'             => 'BootMode',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'detectionStrategy'    => 'DetectionStrategy',
        'diskDeviceMapping'    => 'DiskDeviceMapping',
        'features'             => 'Features',
        'imageFamily'          => 'ImageFamily',
        'imageName'            => 'ImageName',
        'imageVersion'         => 'ImageVersion',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'platform'             => 'Platform',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'snapshotId'           => 'SnapshotId',
        'tag'                  => 'Tag',
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
        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detectionStrategy) {
            $res['DetectionStrategy'] = $this->detectionStrategy;
        }
        if (null !== $this->diskDeviceMapping) {
            $res['DiskDeviceMapping'] = [];
            if (null !== $this->diskDeviceMapping && \is_array($this->diskDeviceMapping)) {
                $n = 0;
                foreach ($this->diskDeviceMapping as $item) {
                    $res['DiskDeviceMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->features) {
            $res['Features'] = null !== $this->features ? $this->features->toMap() : null;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['BootMode'])) {
            $model->bootMode = $map['BootMode'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DetectionStrategy'])) {
            $model->detectionStrategy = $map['DetectionStrategy'];
        }
        if (isset($map['DiskDeviceMapping'])) {
            if (!empty($map['DiskDeviceMapping'])) {
                $model->diskDeviceMapping = [];
                $n                        = 0;
                foreach ($map['DiskDeviceMapping'] as $item) {
                    $model->diskDeviceMapping[$n++] = null !== $item ? diskDeviceMapping::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Features'])) {
            $model->features = features::fromMap($map['Features']);
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
