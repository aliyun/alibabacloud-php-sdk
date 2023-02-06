<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest\diskDeviceMapping;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateImageRequest extends Model
{
    /**
     * @description The system architecture of the system disk. If you specify a data disk snapshot to create the system disk of the custom image, you must use the Architecture parameter to specify the system architecture of the system disk. Valid values:
     *
     *   i386
     *   x86\_64
     *   arm64
     *
     * Default value: x86\_64.
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The boot mode of the custom image. Valid values:
     *
     *   BIOS
     *   UEFI
     *
     * > You must be aware of the boot modes supported by the specified image. When you use this parameter to change the boot mode of the image, specify a boot mode supported by the image to ensure that instances that use this image can start as expected.
     * @example BIOS
     *
     * @var string
     */
    public $bootMode;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The **ClientToken** value can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example ImageTestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The mode in which to check the source image. If you do not specify this parameter, the source image is not checked. Only Linux images can be checked. Set the value to Standard, which indicates standard check mode.
     *
     * The following items are checked in standard check mode:
     *
     *   Virtio: whether the virtio driver is installed.
     *   Fstab: whether mounting configurations in the fstab file are correct.
     *   Grub: whether GRand Unified Bootloader (GRUB) configurations are correct.
     *   SystemImage: whether the image is valid. Do not import images that are in the ISO format or empty.
     *   CloudInit: whether cloud-init is installed.
     *   NVMe: whether the NVMe driver is installed.
     *   Selinux: whether SElinux is enabled.
     *   OnlineResizeFS: whether the root partition can be automatically resized.
     *   Dhcp: whether Dynamic Host Configuration Protocol (DHCP) is enabled for network interface controllers (NICs).
     *   RtcTimeMode: the RTC time mode.
     *   Platform: the platform. Example: Linux or Windows.
     *   OSVersion: the operating system version. Example: Centos 7.9.
     *   Architecture: the architecture. Example: ARM or x86\_64.
     *   BootMode: the boot mode. Example: UEFI or Legacy.
     *   KernelVersion: the kernel version.
     *   CloudAssistant: whether the Cloud Assistant client is installed.
     *   SecurityCenterAgent: whether the Security Center agent is installed.
     *
     * @example Standard
     *
     * @var string
     */
    public $detectionStrategy;

    /**
     * @description Details about the custom images.
     *
     * @var diskDeviceMapping[]
     */
    public $diskDeviceMapping;

    /**
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @example TestCentOS
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The version of the custom image.
     *
     * > If you specify an instance by setting `InstanceId` and the instance uses an Alibaba Cloud Marketplace image or a custom image derived from an Alibaba Cloud Marketplace image, this parameter must be left empty or set to the value of the ImageVersion parameter of the instance.
     * @example 2017011017
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description The ID of the instance.
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
     * @description The distribution of the operating system for the system disk in the custom image. If you specify a data disk snapshot to create the system disk of the custom image, you must use the Platform parameter to specify the distribution of the operating system for the system disk. Valid values:
     *
     *   CentOS
     *   Ubuntu
     *   SUSE
     *   OpenSUSE
     *   RedHat
     *   Debian
     *   CoreOS
     *   Aliyun
     *   Windows Server 2012
     *   Windows 7
     *   Customized Linux
     *   Others Linux
     *
     * Default value: Others Linux.
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @description The ID of the region in which to create the custom image. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the custom image. If you do not specify this parameter, the image is assigned to the default resource group.
     *
     * > If you call the CopyImage operation as a Resource Access Management (RAM) user who is not authorized to manage the default resource group and do not specify the `ResourceGroupId` parameter, the `Forbbiden: User not authorized to operate on the specified resource` error message is returned. You must specify the ID of a resource group that the RAM user is authorized to manage or authorize the RAM user to manage the default resource group before you call the CreateImage operation again.
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
     * @description The ID of the snapshot that is used to create the custom image.
     *
     * @example s-bp17441ohwkdca0****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The tags of the custom image.
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
